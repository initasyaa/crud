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
        $types = Type::all();

        return view('Admin.Product.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'alternative_id' => 'nullable|exists:alternative_products,id',
            'code' => 'required|integer',
            'product_name' => 'required',
            'brand_name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'type_id' => 'required|exists:types,id',
            'halal_certificate_number' => 'nullable|string',
            'bpom_certificate_number' => 'nullable|string',
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
        $data['halal_certificate_number'] = $request->halal;
        $data['bpom_certificate_number'] = $request->bpom;

        ProductBoikot::create($data);

        return redirect()->route('product.list');
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
        $types = Type::all();

        return view('Admin.Product.edit', compact('data', 'types'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'alternative_id' => 'nullable|exists:alternative_products,id',
            'code' => 'required|integer',
            'product_name' => 'required',
            'brand_name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'type_id' => 'required|exists:types,id',
            'halal_certificate_number' => 'nullable|string',
            'bpom_certificate_number' => 'nullable|string',
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
            'halal_certificate_number' => $request->halal,
            'bpom_certificate_number' => $request->bpom,
        ];
    
        $product = ProductBoikot::find($id);
        $product->update($data);

        return redirect()->route('product.list');
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

        return redirect()->route('product.list');
    }
}
