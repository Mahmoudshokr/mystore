<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Products::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::pluck('name','id')->all();
        return view('admin.product.create',compact('categories'));
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
        $user=Auth::user();
        $input=$request->all();
        if ($file=$request->file('photo_id')){
            $name=time().$file->getClientOriginalName();
            $size=$file->getClientSize();
            $file->move('images',$name);
//            ,'products_id'=>$request->products_id
            $photo=Photo::create(['size'=>$size,'path'=>$name]);
            $input['photo_id']=$photo->id;
        }
        $user->Product()->create($input);
        return redirect('admin/product');
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
        $product=Products::findOrFail($id);
        $categories=Category::pluck('name','id')->all();
        return view('admin/product/edit',compact('product','categories'));
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
        $user=Auth::user();
        $input=$request->all();
        if ($file=$request->file('photo_id')){
            $name=time().$file->getClientOriginalName();
            $size=$file->getClientSize();
            $file->move('images',$name);
            $photo=Photo::create(['path'=>$name,'size'=>$size]);
            $input['photo_id']=$photo->id;
        }
        $user->product()->where('id',$id)->first()->update($input);

        return redirect('admin/product');
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
        $product=Products::findOrfail($id);
        if ($product->photo_id){
            unlink(public_path().'/images/'.$product->photo->path);
        }
        $product->delete();
        return redirect('admin/product');
    }
}
