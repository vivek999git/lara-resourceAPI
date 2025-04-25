<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation=$request->validate([
            'name'=>'required',
            'price'=>'required|integer'
        ]);
        $new=Product::create($request->all());
        return $new;
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
  
        try{
            $rs=Product::findorfail($id);
            $flag='Success';
            $msg="Record Found.";
            $data=$rs;
        }
        catch(Exception $e){
            $flag='Error';
            $msg="Opps!Record Not Found.";
            $data='';
        }
        
        return response()->json([
            'flag'=>$flag,
            'msg'=>$msg,
            'data'=>$data
        ],404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $product=Product::findorfail($id); 
            $product->update($request->all());

            $flag='Success';
            $msg="Record Found.";

        }
        catch(Exception $e){

            $flag='Error';
            $msg="Record Not Found.".$e->getMessage();
        }
         
         return response()->json([
            'flag'=>$flag,
            'msg'=>$msg,
         ],401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        try{
            $product=Product::findorfail($id);
            $product::destroy($id);
            $flag='Success';
            $msg="Record Deleted.";
        }
        catch(Exception $e){
            $flag='Error';
            $msg="Record not deleetd.".$e->getMessage();
        }
       return response()->json([
            'flag'=>$flag,
            'msg'=>$msg,
       ],401);
    }
}
