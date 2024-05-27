<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Models\Category;
use App\Models\Product;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Products = DB::table('products')->limit('12')->get();
        return view('front.index', compact('Products'));
    }

    public function dashboard()
    {
        return view('front.dashboard');
    }

    public function product($slung,$slungs){
        $Products = DB::table('products')->where('slung',$slungs)->get();
        return view('front.product', compact('Products'));
    }

    public function products($slung){
        $Cats = Category::where('slung', $slung)->get();

        foreach($Cats as $category){
            $Products = DB::table('products')->where('category_id',$category->id)->get();
            $title = $category->title;
        }
        return view('front.products', compact('Products','title','Cats'));
    }

    public function addToCart(Request $request){
        $ProductId = $request->product_id;
        $quantity = $request->quantity;
        $Product = Product::find($ProductId);
        Cart::add($Product->id, $Product->title, $quantity, $Product->price, $Product->id);
        return Redirect::back();
    }

    public function remove($rowId){
        Cart::remove($rowId);
        return Redirect::back();
    }

    public function clearCart(){
        Cart::destroy();
        return Redirect::back();
    }

    public function shopping(){
        $CartContents = Cart::content();
        $title = "Shopping Cart";

        return view('front.shopping-cart', compact('CartContents','title'));
    }
}
