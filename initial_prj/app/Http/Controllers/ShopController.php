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
        $filters = $request->query();
        $products = Guitars::query();
        $counts = [
            Guitars::where('available', true)->count(),
            Guitars::where('available', false)->count(),
            Guitars::min('price'),
            Guitars::max('price'),
        ];


        if ($request->has('min_price') && $request->has('max_price')) {
            if (!$request->input('min_price') == "" && !$request->input('max_price') == "") {
                $products->whereBetween('price', [$request->min_price, $request->max_price]);
            }
        }


        if ($request->has('in_stock')) {
            if ($request->input("in_stock") == 1) {
                $products->where('available', $request->in_stock);
            } elseif ($request->input("in_stock") == 0) {
                $products->where('available', $request->in_stock);
            } elseif ($request->input("in_stock") == 0 && $request->input("in_stock") == 1) {
                return redirect()->back()->withInput(['except' => ["in_stock"]]);
            }
        } else {
            $products->whereNotNull("available");
        }

        $filteredProducts = $products->get();

        if ($filteredProducts->count() === 0) {
            return redirect()->back()->withErrors(['error' => 'No products found for the selected filters.']);
        }

        return view('shop', compact('filteredProducts', 'counts', 'filters'));
    }
}
