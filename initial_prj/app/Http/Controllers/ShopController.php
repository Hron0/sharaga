<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitars;

class ShopController extends Controller
{
    public function initialPage(Request $request)
    {
        $products = Guitars::query();
        $filteredProducts = $products->get();

        $counts = [
            Guitars::where('available', true)->count(),
            Guitars::where('available', false)->count(),
            Guitars::max('price'),
        ];

        return view('shop', compact('filteredProducts', 'counts'));
    }

    public function filteredPage(Request $request)
    {

        $products = Guitars::query();
        $counts = [
            Guitars::where('available', true)->count(),
            Guitars::where('available', false)->count(),
            Guitars::max('price'),
        ];

        if ($request->has('min_price') && $request->has('max_price')) {
            $products->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        /*         if ($request->has('price')) {
            $products->where('price', '<=', $request->price);
        }
                if ($request->has('in_stock')) {
            $products->where('available', $request->available);
        } */

        $filteredProducts = $products->get();


        return view('shop', compact('filteredProducts', 'counts'));
    }
}
