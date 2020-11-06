<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('viewproducts', ['allProducts' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'count' => $request->get('count'),
        ]);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //$products = Product::all();
        //return view('viewproducts', ['allProducts' => $products]);
        $prod = Product::findOrFail($id);
        return view('showproduct', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Product::findOrFail($id);
        return view('editproduct', compact('prod'));
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
        $upd = Product::where('id', '=', $id)->first();
        $upd->update($request->all());
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aux = Product::find($id);
        print_r($id);
        $aux->delete();
        //return redirect('self');
        return redirect('/products');
        // Session::flash('success','The record was deleted');
        // Session::flash();
        //return redirect()->back()->with('success_message', 'any message you want');


        //return redirect('/products');
        //return redirect()->route('products.index ')->with('success', 'Post deleted success');

        // $toDel = Product::find($id);
        // $toDel->delete(); //delete the product
        // return redirect()->route('/products');
        // //return redirect('/products');
    }
}
