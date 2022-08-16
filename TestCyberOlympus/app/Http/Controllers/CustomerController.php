<?php

namespace App\Http\Controllers;
use App\Models\customer as model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = User::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCustomer">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCustomer">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('customers.index');
    }

    public function store(Request $request)
    {
        $user = New User;
        $user->id = $request->Customer_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        $cus = New Customer;
        $cus->referral_id = $request->Customer_id;
        $cus->address = $request->address;
        $cus->save();

        // User::updateOrCreate(['id' => $request->Customer_id],
        //         ['name' => $request->name, 'phone' => $request->phone]);
        // Customer::updateOrCreate(['referral_id' => $request->Customer_id],
        //         ['address' => $request->address]);
        return response()->json(['success'=>'Customer saved successfully!']);
    }

    public function edit($id)
    {
        $Customer = Customer::find($id);
        return response()->json($Customer);
    }


    public function destroy($id)
    {
        Customer::find($id)->delete();

        return response()->json(['success'=>'Customer deleted!']);
    }
}
