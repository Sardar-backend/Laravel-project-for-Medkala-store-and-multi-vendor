@component('admin.master1')

<div class="row">
    <div class="col-lg-12">
        @include('admin.layaut.errors')
    <div class="card ">
              <div class="card-header">
                <h3 class="card-title">ایجاد محصول</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('admin_PRODUCT.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید">
                  </div>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">قیمت</label>
                      <div class="col-sm-10">
                          <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="قیمت را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>

                    <div class="col-sm-10">
                        <textarea name="discription"  class="form-control" placeholder="توضیحات را وارد کنید" id="discription" cols="30" rows="10"></textarea>
                      <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">نقد و بررسی</label>

                      <div class="col-sm-10">
                          <textarea name="Criticism"  class="form-control" placeholder="نقد را وارد کنید" id="discription" cols="30" rows="10"></textarea>
                          <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ستاره ها</label>

                        <div class="col-sm-10">
                            <input type="number" max="5" min="0" name="stars" class="form-control" id="inputEmail3" placeholder="ستاره را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">برند</label>
                    <div class="col-sm-10">
                        <input type="text" name="Brand" class="form-control" id="inputEmail3" placeholder="برند محصول را وارد کنید">
                    </div>
                    </div>
<!--
                  <div class="form-group">
                    <textarea id="my-editor" name="image" class="form-control">{!! old('content', '') !!}</textarea>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                    CKEDITOR.replace('my-editor', options);
                    </script></div> -->

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">طول</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="with" class="form-control" id="inputEmail3" placeholder="طول را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی</label>
                    <div class="col-sm-10">
                    <select  class="form-control" name="categories[]" id="categories" multiple>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach

                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عرض</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="length" class="form-control" id="inputEmail3" placeholder="عرض را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">تعداد محصول</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="count" class="form-control" id="inputEmail3" placeholder="تعداد را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">تخفیف</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" max="100" name="discust" class="form-control" id="inputEmail3" placeholder="تخفیف را وارد کنید">
                    </div>
                  </div>
                  <h6>ویژگی محصول</h6>
                    <hr>
                        <div class="container asa">

                            <div class="row elem" onclick="">
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <label for="inputEmail3" class="col-sm-3 control-label">نوع ویژگی</label>

                            <div class="col-sm-10">
                            <input type="text" min="0" max="100" name="attribute[0][name]" class="form-control" id="inputEmail3" placeholder="تخفیف را وارد کنید">
                            </div>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

                            <label for="inputEmail3" class="col-sm-3 control-label">نام ویژگی</label>

                            <div class="col-sm-10">
                            <input type="text" min="0" max="100" name="attribute[0][value]" class="form-control" id="inputEmail3" placeholder="تخفیف را وارد کنید">

                            </div>
                            </div>

                            <!-- <div style="align-content: end !important;" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <div class="col-sm-10">
                                <button type="button" class="btn btn-danger">حذف</button>
                            </div>
                            </div> -->


                        </div>
                        </div>
                        <div class="container">

                            <button class="btn btn-sm btn-danger mt-5" type="button" onclick="name()" id="add_product_attribute">ویژگی جدید</button>


                    <br><br><br>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">

                          <label class="form-check-label" for="exampleCheck2">گارانتی </label>
                        <select name="garant" id="input" class="form-control col-md-5" required="required">
                            <option   value="بدون گارانتی"  >   بدون گارانتی</option>
                            <option  value="6 ماهه گارانتی">  6 ماهه</option>
                            <option  value="12 ماهه گارانتی">  یک ساله</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  <div class="form-check">
                      <input value="1" name="Chosen" type="checkbox"  id="exampleCheck2" >
                      <label   class="form-check-label" for="exampleCheck2">   منتخب  </label>
                  </div>
                  <div class="form-check">
                      <input value="1" name="Special_sale" type="checkbox"  id="exampleCheck2" >
                      <label   class="form-check-label" for="exampleCheck2">فروش ویژه    </label>
                  </div>

                  </div></div>


                  <div class="form-row align-items-center">
                    <div class="col-md-3">
                        <label for="dayInput" class="sr-only">روز</label>
                        <input type="number" min="0" name="days" class="form-control mb-2" id="dayInput" placeholder="روز">
                    </div>
                    <div class="col-md-3">
                        <label for="hourInput" class="sr-only">ساعت</label>
                        <input type="number" min="0" max="23" name="hours" class="form-control mb-2" id="hourInput" placeholder="ساعت">
                    </div>
                    <div class="col-md-3">
                        <label for="minuteInput" class="sr-only">دقیقه</label>
                        <input type="number" min="0" max="59" name="minutes" class="form-control mb-2" id="minuteInput" placeholder="دقیقه">
                    </div>
                    <div class="col-md-3">
                        <label for="secondInput" class="sr-only">ثانیه</label>
                        <input type="number" min="0" max="59" name="seconds" class="form-control mb-2" id="secondInput" placeholder="ثانیه">
                    </div>
                </div>





                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ایجاد محصول</button>
                  <a href="{{route('admin_PRODUCT.index')}}" class="btn btn-default float-left">لغو<a/>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>
<script>
    // عناصر DOM
    let container = document.querySelector('.asa'); // والد اصلی
    let addButton = document.querySelector('#add_product_attribute'); // دکمه افزودن ویژگی
    let id = 1; // شناسه برای مقادیر name ها

    // رویداد کلیک برای افزودن بخش جدید
    addButton.addEventListener('click', function () {
        let newRow = document.createElement('div');
        newRow.className = "flex items-center space-x-8 mt-2 elem";

        // کد HTML برای بخش جدید
        newRow.innerHTML = `
            <!-- نوع ویژگی -->
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700 mb-2">نوع ویژگی</label>
                <input
                    type="text"
                    name="attribute[${id}][name]"
                    placeholder="نوع را وارد کنید"
                    class="block w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- نام ویژگی -->
            <div class="w-1/2">
                <label class="block text-sm font-medium text-gray-700 mb-2">نام ویژگی</label>
                <input
                    type="text"
                    name="attribute[${id}][value]"
                    placeholder="نام را وارد کنید"
                    class="block w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- دکمه حذف -->
            <div>
                <button
                    type="button"
                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none"
                    onclick="this.parentNode.parentNode.remove()"
                >
                    حذف
                </button>
            </div>
        `;

        // اضافه کردن عنصر جدید به والد
        container.appendChild(newRow);
        id++; // افزایش مقدار شناسه
    });
</script>

@endcomponent
