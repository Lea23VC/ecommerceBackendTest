<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Log;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            "name" => "string",
            "category" => "int",
            "products_by_price_order" => [Rule::in(["desc", "asc"])],
            'products_by_name_order' => [Rule::in(["desc", "asc"])],
            'products_by_discount_order' => [Rule::in(["desc", "asc"])],

        ]);

        if ($validator->fails()) {
            return $this->sendError("Validation Error", $validator->errors());
        }
        Log::debug($validator->validated());


        $items_per_page = $request->input("items_per_page");
        return ProductResource::collection(Product::filter(($validator->validated()))->paginate($items_per_page));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return $this->sendResponse(new ProductResource(Product::find($id)), "Product retrieved successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
