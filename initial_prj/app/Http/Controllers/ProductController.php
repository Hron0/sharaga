<?php

namespace App\Http\Controllers;

use App\Models\Guitars;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Guitars::query()->find($id);

        if (!$product) {
            abort(404);
        }

        return view('product.product', ['product' => $product]);
    }
}
