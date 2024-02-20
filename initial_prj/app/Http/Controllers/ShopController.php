<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitars;

class ShopController extends Controller
{
    public function filteredPage(Request $request)
    {
        $filters = $request->query();
        $products = Guitars::query();
        $counts = [
            Guitars::where('available', true)->count(),
            Guitars::where('available', false)->count(),
        ];

        $edge_prices = [
            Guitars::min('price'),
            Guitars::max('price'),
        ];

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        if ($minPrice && $maxPrice) {
            $products->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif ($minPrice) {
            $products->where('price', '>=', $minPrice);
        } elseif ($maxPrice) {
            $products->where('price', '<=', $maxPrice);
        }

        if ($request->has('in_stock')) {
            if ($request->input("in_stock") == 1) {
                $products->where('available', $request->in_stock);
            } elseif ($request->input("in_stock") == 0) {
                $products->where('available', $request->in_stock);
            }
        } else {
            $products->whereNotNull("available");
        }


        $filteredProducts = $products->get();

        if ($filteredProducts->count() === 0) {
            return redirect()->back()->withErrors(['error' => 'No products found for the selected filters.']);
        }
        return view('shop', compact('filteredProducts', 'counts', 'filters', 'edge_prices', 'minPrice', 'maxPrice'));
    }
}

//TODO: Почему-то форма отправляет пустые поля min_price & max_price даже если их не выбераешь,
//      УБИТЬ НАСМЕРТЬ поля min_price & max_price если они пустые
//      Когда клиент делает фильтрация по чему-то кроме цены, у него в фильтре ценников
//      Автоматом будет ставиться Макс и Мин цены среди отфильтрованных итемов.