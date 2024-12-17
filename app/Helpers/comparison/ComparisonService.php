<?php

namespace App\Helpers\Comparison;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

/**
 * Class ComparisonService
 * Manages comparison operations like adding, updating, removing, and listing items using cookies.
 */
class ComparisonService
{
    protected $Comparison;

    /**
     * Initialize the comparison list from cookies or as an empty array.
     */
    public function __construct()
    {
        $this->Comparison = isset($_COOKIE['Comparison'])
            ? json_decode($_COOKIE['Comparison'], true)
            : [];
    }

    /**
     * Add an item to the comparison list.
     */
    public function put($obj)
    {
        if ($obj !== null) {
            // Add the new item to the comparison list
            $this->Comparison[] = $obj instanceof Product ? $obj->id : $obj;

            // Save updated list in the cookie
            $this->updateCookie();
        }
    }

    /**
     * Retrieve all products in the comparison list.
     */
    public function all()
    {
        return collect($this->Comparison)->map(function ($id) {
            return Product::find($id); // Find product by ID
        })->filter(); // Remove null values (e.g., if product not found)
    }

    /**
     * Remove an item from the comparison list.
     */
    public function remove($id)
    {
        // Filter out the item with the given ID
        $this->Comparison = collect($this->Comparison)->filter(function ($comparison) use ($id) {
            return $id != $comparison; // Use != instead of !== for type flexibility
        })->values(); // Reset keys after filtering

        // Update the cookie
        $this->updateCookie();
        return 'ok';
    }

    /**
     * Update the comparison data in the cookie.
     */
    protected function updateCookie()
    {
        setcookie('Comparison', json_encode($this->Comparison), time() + 3600, '/');
    }
}
