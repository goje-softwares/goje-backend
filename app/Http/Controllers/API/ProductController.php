<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StoreProductRequest;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * return a list of products for a user
     *
     * @return mixed
     */
    public function index()
    {
        return auth()->user()->products;
    }

    /**
     * @param Product $product
     * @return void
     */
    public function show(Product $product)
    {
        if ($product->user_id !== auth()->id()) {
            return abort(403);
        };
        return $product;
    }

    public function create()
    {

    }

    public function store(storeProductRequest $product)
    {

    }

    public function edit(Product $product)
    {

    }

    public function update(StoreProductRequest $product)
    {

    }


}
