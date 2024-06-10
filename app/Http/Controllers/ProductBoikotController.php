<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductBoikot;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;

class ProductBoikotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProductBoikot::get();

        return view('Admin.Product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'alternative_id' => 'nullable|integer',
            'code' => 'required|integer',
            'product_name' => 'required|string',
            'brand_name' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'type_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['code'] = $request->code;
        $data['product_name'] = $request->product_name;
        $data['brand_name'] = $request->brand_name;
        $data['status'] = $request->status;
        $data['description'] = $request->description;
        $data['type_id'] = $request->type_id;

        ProductBoikot::create($data);

        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $data = ProductBoikot::find($id);

        return view('Admin.Product.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = ProductBoikot::find($id);

        return view('Admin.Product.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'alternative_id' => 'nullable|integer',
            'code' => 'required|integer',
            'product_name' => 'required|string',
            'brand_name' => 'required|string',
            'status' => 'required|string',
            'description' => 'required|string',
            'type_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = [
            'alternative_id' => $request->alternative_id,
            'code' => $request->code,
            'product_name' => $request->product_name,
            'brand_name' => $request->brand_name,
            'status' => $request->status,
            'description' => $request->description,
            'type_id' => $request->type_id,
        ];
    
        $product = ProductBoikot::find($id);
        $product->update($data);

        return redirect()->route('product/list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $data = ProductBoikot::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('product/list');
    }
}
