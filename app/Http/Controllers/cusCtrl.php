<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Brands;
use App\Category;
use App\Products;
use App\Stocks;
use App\Users;
use DB;

class cusCtrl extends Controller
{
    public function store(Request $request)
    {
   
      $Products = new Products;
      $Products -> pname = $request -> name;
      $Products -> bid = $request -> brand;
      $Products -> des = $request -> des;
      $Products -> qty = $request -> qty;
      $Products -> rate = $request -> price;
      $Products->save();


      // $products = new Products([
      //   'pname' => $request->get('name'),
      //   'bid' => $request->get('brand'),
      //   'des' => $request->get('des'),
      //   'rate' => $request->get('price')
      // ]);

      // $products->save();

      return response()->json('successfully added');
    }
    public function lastid(){
      $id = DB::table('products')->orderBy('id', 'desc')->first();
      return response()->json($id);
  }
    public function index()
    {
      $products = DB::table('products')->get();
      return response()->json($products);
    }

    public function edit($id)
    {
      $post = Products::find($id);
      return response()->json($post);
    }

    public function update($id, Request $request)
    {
      $post = Products::find($id);

      $post->update($request->all());

      return response()->json('successfully updated');
    }

    public function delete($id)
    {
      $post = Products::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
}
