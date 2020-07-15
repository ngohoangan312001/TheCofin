<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;
use App\User;
use Session;

class UserController extends Controller
{
    public function getUserIndex(){
        return view('user.pages.homepage');
    }

    public function getInformationUser($id){
        $customer = Customer::find($id);
        $users = User::where('cust_id', $id)->first();
        return view('user.pages.informationUser', ['customer'=>$customer, 'users'=>$users]);
    }

    public function editInformationUser(Request $request){
        $this->validate(
            $request,
            [
                'txtPass' => 'bail|required',
            ],
            [
                'txtPass.required' => 'Chưa nhập mật khẩu'
            ]
        );
        $idCust = $request->idCust;

        User::where('cust_id', $idCust)
            ->update([
                'username' => $request->txtName,
                'password' => bcrypt($request->txtPass)

            ]);
        Customer::where('id', $idCust)
        ->update([
            'cust_name' => $request->txtHoten,
            'cust_tel' => $request->txtTel,
            'cust_email' => $request->txtEmail,
            'cust_add' => $request->txtDiachi,
            'cust_pass' => bcrypt($request->txtPass)
        ]);
        return back();
    }
}
