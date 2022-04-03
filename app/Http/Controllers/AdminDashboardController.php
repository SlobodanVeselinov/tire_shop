<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    public function index(){
        $customers = Customer::count();
        $products = Product::count();
        $sales = Sale::count();
        $pendingOrders = Order::where('is_processed', false)->count();
        $completedOrders = Order::where('is_processed', true)->count();
        $finished_sales = Sale::where('is_paid', true)->count();
        $total_tyres_sold = Sale::sum('quantity');
        return view('admin.dashboard', compact('customers', 'products', 'sales', 'finished_sales', 'pendingOrders', 'completedOrders', 'total_tyres_sold'));
    }
}
