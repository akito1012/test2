<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Models\Product_Season;
use App\Http\Requests\RegisterRequest;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);

        return view('index', compact('products'));
    }

    public function register()
    {
        return view('register');
    }

    public function create(RegisterRequest $request)
    {
        $products = $request->all();
        Products::create($products);
        $season_id = $request->only('season');
        $product_id = $request->only('id');
        Product_Season::create($season_id, $product_id);

        return redirect('index');
    }
}
