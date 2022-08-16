<?php

namespace App\Http\Controllers;
use App\Models\customer as model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\order_detail;
use App\Models\orders;
use App\Models\product;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class TopDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top_product()
    {

            $data_detail = order_detail::with('product:id,product_name')
                ->select('product_id', DB::raw('sum(qty) as total'))
                ->groupBy('product_id')
                ->limit(10)
                ->orderBy('total', 'desc')
                ->get();


        return $data_detail;
        return view('customers.index', compact('data_detail'));
    }

    public function top_customer()
    {

            $data_customer = orders::with('user:id,first_name')
                ->select('customer_id', DB::raw('sum(payment_total) as total'))
                ->groupBy('customer_id')
                ->limit(10)
                ->orderBy('total', 'desc')
                ->get();


        return $data_customer;
        return view('customers.index', compact('data_customer'));
    }

    public function top_agents()
    {

            $data_agent = orders::with('agents:id,store_name')
                ->select('agent_id', DB::raw('count(customer_id) as total'))
                ->groupBy('agent_id')
                ->limit(10)
                ->orderBy('total', 'desc')
                ->get();


        return $data_agent;
        return view('customers.index', compact('data_customer'));
    }

}
