<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;

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
        $Category = Category::where('slung', $slung)->get();

        foreach($Category as $category){
            $Products = DB::table('products')->where('category_id',$category->id)->get();
            $title = $category->title;
        }
        return view('front.products', compact('Products','title'));
    }

    public function addCart(Request $request){
        $Product = Product::find($id);
        Cart::add('293ad', $product->name, 1, $product->price, 1);
    }
}
