<?php

namespace App\Http\Controllers;

use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductModel $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->latest()->paginate(PAGINATION_COUNT);

        return view('page.products.index', ['products' => $products]);

    }



}
