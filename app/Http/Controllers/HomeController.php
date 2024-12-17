<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Helpers\CalculatorClassFacade\CalculatorClassFacade;
use App\Helpers\Cart\Cart;
use App\Helpers\Cart\CartService;
use App\Helpers\Comparison\Comparison;
use App\Helpers\TrendingContent;
use App\Models\blog;
use App\Models\Product;
use App\Notifications\notificationCode;
use App\Models\activecode;
use App\Models\address;
use App\Models\blogcategory;
use App\Models\comment;
use App\Models\contact;
use App\Models\permission;
use App\Models\Product as ModelsProduct;
use App\Models\productcategory;
use App\Models\Tag;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOTools;

use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
        /**
     * Display the homepage with SEO settings and products.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Set SEO data for the main page
        $this->seo()->setTitle('صفحه اصلی')
            ->setDescription('به صفحه اصلی خوش آمدید')
            ->opengraph()->setTitle('صفحه اصلی')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);

        // Caching the results of the categories query for better performance
        $categories = Cache::remember('product_categories', 60, function () {
            return productcategory::all()->where('parent', 0);
        });

        // Caching the blogs query for better performance, limiting to the latest 3
        $blogs = Cache::remember('latest_blogs', 60, function () {
            return blog::orderBy('failed_at')->limit(3)->get();
        });

        // Caching the "amazing" products query, filtering by "chosen" and discount > 15
        $amazing = Cache::remember('amazing_products', 60, function () {
            return Product::whereChosen(1)->where('discust', '>', 15)->get();
        });

        // Caching the most viewed products query, limiting to the top 4 most viewed
        $count_view = Cache::remember('most_viewed_products', 60, function () {
            return Product::orderBy('count_view')->limit(4)->get();
        });

        // Caching the chosen products query, limiting to the first 4
        $pro = Cache::remember('chosen_products', 60, function () {
            return Product::where('Chosen', 1)->limit(4)->get();
        });

        // Caching the special sale products query, limiting to 2 items
        $special_sale = Cache::remember('special_sale_products', 60, function () {
            return Product::where('Special_sale', 1)->limit(2)->get();
        });

        // Caching the discounted products query, limiting to the top 4 with discount > 20
        $discounted = Cache::remember('discounted_products', 60, function () {
            return Product::where('discust', '>', 20)->limit(4)->get();
        });


        // Return the homepage view with the fetched data
        return view('public.index',
        compact('pro', 'categories', 'blogs', 'discounted', 'count_view', 'special_sale' , 'amazing')
    );
    }

    /**
     * Show the About Us page with relevant SEO data.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        // Set SEO data for the About Us page
        $this->seo()->setTitle('درباره ما')
            ->setDescription('درباره ما بیشتر بدانید')
            ->opengraph()->setTitle('درباره ما')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);

        // Return the About Us view
        return view('public.about');
    }

    /**
     * Show the blog list with SEO settings.
     *
     * @return \Illuminate\View\View
     */
    public function blog_list()
    {
        // Set SEO data for the Blog List page
        $this->seo()->setTitle('آرشیو مقالات')
            ->setDescription('آرشیو مقالات مشاهده کنید')
            ->opengraph()->setTitle('آرشیو مقالات')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);

    // Cache most visited blogs for 10 minutes
    $mostVisitedBlogs = Cache::remember('mostVisitedBlogs', 600, function () {
        return blog::orderBy('count_view', 'desc')->limit(6)->get();
    });

    // Cache top liked blogs for 10 minutes
    $topLikedBlogs = Cache::remember('topLikedBlogs', 600, function () {
        return blog::withCount('likedByUsers')
            ->orderBy('liked_by_users_count', 'desc')
            ->limit(3)
            ->get();
    });

    // Cache the most liked and most viewed blog for 10 minutes
    $topLikedAndViewedBlog = Cache::remember('topLikedAndViewedBlog', 600, function () {
        return blog::withCount('likedByUsers')
            ->orderBy('liked_by_users_count', 'desc')
            ->orderByDesc('count_view')
            ->first();
    });

    // Paginate blogs, no caching applied as it changes frequently
    $paginatedBlogs = blog::orderBy('failed_at', 'desc')->paginate(10);

    // Retrieve favorite blogs for the authenticated user if logged in
    $userFavoriteBlogs = auth()->check()
        ? auth()->user()->favorite_blog()->get()
        : [];

    // Cache blog categories for 1 hour
    $blogCategories = Cache::remember('blogCategories', 3600, function () {
        return blogcategory::all();
    });





    // Return the blog view with all the data
    return view('public.blog', compact(
        'paginatedBlogs',
        'blogCategories',
        'mostVisitedBlogs',
        'userFavoriteBlogs',
        'topLikedBlogs',
        'topLikedAndViewedBlog'
    ));


    }

    /**
     * Display the Contact Us page with the necessary SEO data.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        // Log in a specific user (for demonstration purposes)
        Auth::loginUsingId(1);

        // Set SEO data for the Contact Us page
        $this->seo()->setTitle('تماس با ما')
            ->setDescription('پیشنهادات ، انتقادات و پیام های دیگر به ما بفرستید')
            ->opengraph()->setTitle('تماس با ما')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);

        // Return the Contact Us view
        return view('public.contact');
    }


     /**
     * Display a product page along with its details and comments.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function product(int $id)
    {
        // Find the product by its ID

        $product = Product::findOrFail($id);
        // Set SEO data based on the product's name and description
        $this->seo()->setTitle($product->name)
            ->setDescription($product->discription)
            ->opengraph()->setTitle($product->name)
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);



        // Increment the product's view count by 1
        $product->increment('count_view');


        // Get the product's category and associated products
        // $category = $product->category()->get()->first();
        // $category = $category->products()->get();

        // Get approved comments for the product (root comments)
        $comments = $product->comment()->where('status', 'LIKE', true)
            ->where('parent_id', 'LIKE', 0)
            ->get();


        // Fetch related blogs based on the current blog's categories (not cached to ensure accuracy)
        $relatedproduct = Cache::remember("related_product_{$product->id}", 600, function () use ($product) {
        $categoryIds = $product->category->pluck('id');

        return Product::with('category')
            ->whereHas('category', function ($query) use ($categoryIds) {
                $query->whereIn('productcategory.id', $categoryIds);
            })
            ->where('id', '!=', $product->id)
            ->distinct()
            ->get();
        });

        // Return the product page view with the product details, comments, and category
        return view('public.single-product'
        , compact(
        'product','comments' , 'relatedproduct'
        // 'comments', 'category'
        )
    );
    }



    /**
     * Handle the submission of the contact form.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact_post(Request $request)
    {
        // Validate the input data from the contact form
        $data = $request->validate([
            'name' => ['required','string'],
            'email' => ['required','email'],
            'content' => ['required','string']
        ], [
            'name.required' => 'لطفاً نام خود را وارد کنید.',
            'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
            'email.email' => 'ایمیل وارد شده صحیح نیست.',
            'content.required' => 'لطفاً محتوای پیام خود را وارد کنید.'
        ]);

        // Create a new contact entry in the database
        $con = contact::create($data);

        // Show success alert to the user
        Alert::success('ارسال موفیت آمیز بود', 'پیغام شما ارسال شد');

        // Redirect the user back to the previous page
        return back();
    }

    /**
     * Display the FAQ page.
     *
     * @return \Illuminate\View\View
     */
    public function faq()
    {
        // Set SEO data for the FAQ page
        $this->seo()->setTitle('سوالات متداول')
            ->setDescription('پاسخ سوالات خود را اینجا بیابید')
            ->opengraph()->setTitle('سوالات متداول')
            ->addImage(asset('img/logo.png'), [
                'height' => 200,
                'width' => 200,
            ]);

        // Return the FAQ view
        return view('public.faq');
    }

    /**
     * Display a single blog post along with its comments.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function blog_single(int $id)
    {
    // Cache the blog post or fetch from the database if not cached
    $blog = Cache::remember("blog_{$id}", 600, function () use ($id) {
        return blog::findOrFail($id);
    });

    // Set SEO metadata for the blog post
    $this->seo()->setTitle($blog->title)
        ->setDescription(Str::limit(strip_tags($blog->content), 150)) // Limit description to 150 characters
        ->opengraph()->setTitle($blog->title)
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);

    // Increment the blog's view count (not cached to ensure accuracy)
    $blog->increment('count_view');

    // Cache the approved comments (root comments) for the blog post
    $comments = Cache::remember("blog_{$id}_comments", 600, function () use ($blog) {
        return $blog->comment()
            ->where('status', true)
            ->where('parent_id', 0)
            ->get();
    });

    $NewestBlogs = Cache::remember('NewestBlogs', 600, function () {
        return blog::orderBy('count_view', 'desc')->limit(6)->get();
    });

    // Fetch related blogs based on the current blog's categories (not cached to ensure accuracy)
    $relatedBlogs = Cache::remember("related_blogs_{$blog->id}", 600, function () use ($blog) {
        $categoryIds = $blog->category->pluck('id');

        return Blog::with('category')
            ->whereHas('category', function ($query) use ($categoryIds) {
                $query->whereIn('blogcategorys.id', $categoryIds);
            })
            ->where('id', '!=', $blog->id)
            ->distinct()
            ->get();
    });
    $tags = Cache::remember('blogCategories', 600, function () use ($blog) {
        return $blog->tags()->get();
    });

    // Get approved comments for the blog (root comments)
    $comments = $blog->comment()->where('status', 'LIKE', true)
    ->where('parent_id', 'LIKE', 0)
    ->get();


    // Return the view with the blog data and comments

        return view('public.blog(single)', compact('comments','tags','relatedBlogs','NewestBlogs','blog', 'comments'));
    }



/**
 * Marks a selected address as the primary address for the user.
 */
public function selectadresses(int $id) {
    // Retrieve the address by its ID and user ID
    $address = address::where('id', $id)
        ->where('user_id', auth()->user()->id())
        ->first();

        // If the address exists, mark it as primary
        if ($address) {
            $address->selectAsPrimary();
            Auth::user()->orders()->wherestatus('unpaid')->update(['address_id'=>$address->id]);
    }

    // Redirect back to the previous page
    return redirect()->back();
}

/**
 * Handles the form submission for updating user information.
 */
public function edit_user_post(Request $request, int $id) {
    // Find the user by ID
    $user = User::find($id);

    // Validate the incoming request data
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'phonenumber' => ['required', 'max:13'],
        'meli_code' => ['required', 'max:10'],
        'image' => ['required'],
        'cart_number' => ['required', 'max:255'],
        'home_number' => ['required', 'max:11'],
        'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'birthday' => ['required'],
    ], [
        // Custom error messages for validation
        'name.required' => 'لطفاً نام خود را وارد کنید.',
        'name.string' => 'نام باید یک رشته متنی باشد.',
        'name.max' => 'نام نباید بیش از ۲۵۵ کاراکتر باشد.',
        'phonenumber.required' => 'لطفاً شماره تلفن خود را وارد کنید.',
        'phonenumber.max' => 'شماره تلفن نباید بیش از 13 کاراکتر باشد.',
        'meli_code.required' => 'لطفاً کد ملی خود را وارد کنید.',
        'meli_code.max' => 'کد ملی نباید بیش از 10 کاراکتر باشد.',
        'image.required' => 'لطفاً تصویر خود را بارگذاری کنید.',
        'cart_number.required' => 'لطفاً شماره کارت بانکی خود را وارد کنید.',
        'cart_number.max' => 'شماره کارت نباید بیش از 12 کاراکتر باشد.',
        'home_number.required' => 'لطفاً شماره منزل خود را وارد کنید.',
        'home_number.max' => 'شماره منزل نباید بیش از 11 کاراکتر باشد.',
        'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
        'email.email' => 'لطفاً یک آدرس ایمیل معتبر وارد کنید.',
        'email.max' => 'ایمیل نباید بیش از ۲۵۵ کاراکتر باشد.',
        'email.unique' => 'این ایمیل قبلاً ثبت شده است.',
        'birthday.required' => 'لطفاً تاریخ تولد خود را وارد کنید.',
    ]);

    // Store the uploaded image and get the file path
    $f = Storage::disk('public')->putFile('ProfilePhoto', request()->file('image'));
    $data['image'] = $f;

    // Update the user with the validated data
    $user->update($data);

    // Show a success alert after the update
    Alert::success('عملیات موفق آمیز بود', 'اطلاعات کاربری شما با موفق ویرایش شد');

    // Redirect to the personal information page
    return redirect()->route('personal');
}


/**
 * Handles the submission of a new comment.
 */
public function craete_comment(Request $request) {

    if ($request->commenttable_type==='App\Models\Product') {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
    }
    // Validate the incoming request data for comment creation
    $data = $request->validate([
        'parent_id' => 'max:255',  // Optional parent comment ID
        'user_id' => 'nullable',   // User ID must be provided
        'email' => 'nullable',   // User ID must be provided
        'username' => 'nullable',   // User ID must be provided
        'commenttable_id' => 'required',  // ID of the table being commented on
        'commenttable_type' => 'required', // Type of the table being commented on
        'content' => 'required',   // Comment content must be provided
        'subject' => 'nullable',
        'hosting' => 'nullable',
    ]);

    // Create a new comment in the database
    comment::create($data);

    // Show a success alert to the user
    Alert::success('نظر شما ارسال شد', 'دیدگاه شما پس از تائید نمایش داده خواهد شد');

    // Redirect back to the previous page
    return back();
}


/**
 * Handles the "like" action for a product by the authenticated user.
 * Adds the product to the user's list of favorites.
 */
public function like_post (Request $request) {
    // Find the product by its ID from the request
    $p = Product::find($request->product_id);

    // Attach the product to the authenticated user's favorites
    $request->user()->favorite()->attach($p);

    // Redirect back to the previous page
    return back();
}

/**
 * Handles the "dislike" action for a product by the authenticated user.
 * Removes the product from the user's list of favorites.
 */
public function dislike_post (Request $request) {
    // Find the product by its ID from the request
    $product = Product::find($request->product_id);

    // Detach the product from the authenticated user's favorites
    $request->user()->favorite()->detach($product);

    // Redirect back to the previous page
    return back();
}

/**
 * Allows the user to download a specific file (e.g., a resume).
 * Provides the file for download with appropriate headers.
 */
public function download() {
    // Define the file path for the resume
    $filePath = storage_path('app\files\MyResume-314[www.cvbuilder.me].pdf');

    // Return the file as a downloadable response with the specified headers
    return response()->download($filePath, 'MyResume', [
        'Content-Type' => 'application/pdf',  // Set the content type of the file
        'Cache-Control' => 'no-cache',        // Prevent caching of the file
    ]);
}

/**
 * Displays a list of blog posts for a specific category.
 * Sets up SEO and OpenGraph tags for the category page.
 */
public function blog_category(string $category) {
    // Set SEO and OpenGraph meta tags for the category page
    $this->seo()->setTitle('مقالات ' . $category)
        ->setDescription($category . ' مقالات دسته بندی')
        ->opengraph()->setTitle($category . ' مقالات')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);

    // Retrieve the blog posts for the specified category, ordered by creation date
    $blogs = blogcategory::where('name', $category)
        ->first()
        ->blogs()
        ->orderBy('failed_at') // Assuming `failed_at` is the correct date column
        ->paginate(4);

    // Return the view for the blog category page with the list of blogs and additional data
    return view('blog', compact('blogs'));
}


public function rules(){
        // Set SEO data for the rules page
        $this->seo()->setTitle('شرایط و قوانین ')
        ->setDescription('  شرایط و قوانین را اینجا بیابید')
        ->opengraph()->setTitle('شرایط و قوانین')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);

    // Return the rules view
    return view('public.rules');
}


}
