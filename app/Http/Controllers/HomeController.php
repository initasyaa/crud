<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::get();

        return view('index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' =>'required|email',
            'nama' =>'required',
            'password' =>'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        //name kolom pada tabel di database
        //nama variable yang di deklarasikan di view
        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);

        User::create($data);
        
        return redirect()->route('index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $data = User::find($id);
        
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'email'     =>'required|email',
            'nama'      =>'required',
            'password'  =>'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        
        //name kolom pada tabel di database
        //nama variable yang di deklarasikan di view
        $data['email'] = $request->email;
        $data['name'] = $request->nama;

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        User::whereId($id)->update($data);
        
        return redirect()->route('index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $data = User::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('index');
    }
}