<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlternativeProduct;
use Illuminate\Support\Facades\Validator;

class AlternativeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AlternativeProduct::get();

        return view('Admin.Alternative.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Alternative.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|integer',
            'product_name' => 'required|string',
            'brand_name' => 'required|string',
            'description' => 'required|string',
            'type_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['code'] = $request->code;
        $data['product_name'] = $request->product_name;
        $data['brand_name'] = $request->brand_name;
        $data['description'] = $request->description;
        $data['type_id'] = $request->type_id;

        AlternativeProduct::create($data);

        return redirect()->route('alternative.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $data = AlternativeProduct::find($id);

        return view('Admin.Alternative.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = AlternativeProduct::find($id);

        return view('Admin.Alternative.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|integer',
            'product_name' => 'required|string',
            'brand_name' => 'required|string',
            'description' => 'required|string',
            'type_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = [
            'code' => $request->code,
            'product_name' => $request->product_name,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'type_id' => $request->type_id,
        ];
    
        $product = AlternativeProduct::find($id);
        $product->update($data);

        return redirect()->route('alternative.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $data = AlternativeProduct::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('alternative.list');
    }
}
