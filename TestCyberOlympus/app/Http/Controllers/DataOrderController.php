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

class DataOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data_order = orders::with('detail_orders')->limit(10)->get();
        return $data_order;
        return view('order.index', compact('data_detail'));
    }



}
