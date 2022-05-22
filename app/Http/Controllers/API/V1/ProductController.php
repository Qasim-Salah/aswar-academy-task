<?php

namespace App\Http\Controllers\API\V1;

use App\Constants\ErrorCodes;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product as ProductModel;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{

    protected $product;

    public function __construct(ProductModel $grade)
    {
        $this->product = $grade;
    }

    public function index()
    {
        $product = $this->product->latest()->get();

        return ResponseBuilder::success(['Product' => ProductResource::collection($product)]);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:products,name',
            'price' => 'required|numeric|min:1|max:10000',
        ]);

        if ($validator->fails()) {
            return ResponseBuilder::error($validator->errors()->first(), 422, ErrorCodes::VALIDATION);
        }

        ProductModel::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return ResponseBuilder::success(null, 'Added successfully');

    }


}
