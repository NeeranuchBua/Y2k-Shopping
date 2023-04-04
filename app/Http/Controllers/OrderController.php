<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OrderController extends Controller
{
    public function get_customer_name($menu_name) {
        $customers = DB::table('customers')
        ->join('orders', 'customers.id', '=', 'orders.customer_id') ->join('order_items', 'order_items.order_id', '=', 'orders.order_id') ->join('menus', 'order_items.menu_id', '=', 'menus.menu_id') ->where('menus.name', $menu_name)
        ->select('customers.name')
        ->get();
        return $customers;
    }
    public function get_products(Request $reuqest){
        $user = $reuqest->user();
        $discounts = DB::select("SELECT c.*, (1-d.percentage/100)*c.price as price , d.percentage FROM cloths as c JOIN discounts as d ON d.cloth_id = c.cloth_id");
        $products = DB::table('cloths')->get();
        if($discounts != null){
            return view('productpage', compact('products','discounts'));
        }
        return view('productpage', compact('products,discounts'));
    }
    public function get_carts(Request $request){
        $products = DB::table('cloths')->get();
        return view('pages.cartpagesummary', compact('products'));
    }
    public function get_summarys(Request $request){
        $products = DB::table('cloths')->get();
        return view('pages.summarypage', compact('products'));
    }
}
