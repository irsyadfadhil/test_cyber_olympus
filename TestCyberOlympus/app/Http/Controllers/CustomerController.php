<?php

namespace App\Http\Controllers;
use App\Models\customer as model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

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
            $data = User::where('account_type',4)->orderBy('first_name')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $show = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="show" class="show btn btn-success btn-sm showCustomer">show</a>';
                        $edt = $show.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCustomer">Edit</a>';
                        $del = $edt.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCustomer">Delete</a>';
                        return $del;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('customers.index');
    }

    public function store(Request $request)
    {
        $data_user = $request->Customer_id;
        $cek_user = User::where('id', $data_user)->count();
        // return $cek_user ;
        if ($cek_user > 0 ) {
            $user = User::where('id', $request->Customer_id)->first();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->save();

            $cus = Customer::where('referral_id', $user->id)->first();
            $cus->address = $request->address;
            $cus->save();

        } else {

            $user = New User;
            $user->id = $request->Customer_id;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = bcrypt('cyberadmin');
            $user->account_type = '4';
            $user->account_role = 'customer';
            $user->save();

            $cus = New Customer;
            $cus->referral_id = $request->Customer_id;
            $cus->address = $request->address;
            $cus->save();
        }

        return response()->json(['success'=>'Customer saved successfully!']);
    }

    public function update(Request $request, $id)
    {


        return response()->json(['success'=>'Customer saved updated!']);
    }

    public function edit($id)
    {
        // $User = User::find($id);
        $User = DB::table('users')
        ->where('users.id',$id)
        ->join('customers', 'customers.id', '=', 'users.id')
        ->select(
            'users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.phone',
            'customers.address',
        )
        ->first();
        return response()->json($User);
    }


    public function destroy($id)
    {
        $data_user = User::where('id', $id)->first();
        User::find($id)->delete();
        customer::where('referral_id',$data_user->id)->delete();

        return response()->json(['success'=>'Customer deleted!']);
    }
}
