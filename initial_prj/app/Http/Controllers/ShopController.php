<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitars;

class ShopController extends Controller
{
    public function showPage()
    {
        return view('shop');
    }

    public function filteredPage(Request $request)
    {
        $test = null;

        $products = Guitars::query();
        $filteredProducts = $products->get();

        $counts = [
            Guitars::where('available', true)->count(),
            Guitars::where('available', false)->count(),
            Guitars::max('price'),
        ];


        if (isset($test)) {
            if ($request->has('price')) {
                $products->where('price', '<=', $request->price);
            }
            if ($request->has('available')) {
                $products->where('available', $request->available);
            }

            $filteredProducts = $products->get();
            $counts = [
                $products->where('available', true)->count(),
                $products->where('available', false)->count(),
            ];

            return view('shop', compact('filteredProducts'));
        } else {
            return view('shop', compact('filteredProducts', 'counts'));
            /* return var_dump($counts); */
        }
    }
}
