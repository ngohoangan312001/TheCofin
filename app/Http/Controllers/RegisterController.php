<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Customer;
use App\Admin;
use App\User;
use Session;

class RegisterController extends Controller
{
    public function getRegisterUser(){
        return view('user.pages.register');
    }

    public function getInformationUser(){
        $idCust = Session::get('logined');
        $cust = Customer::where('id', $idCust)->first();
        return view('user.pages.informationUser', compact('cust'));
    }

    public function postRegisterUser(Request $res){
        $this->validate($res,
        [
            'custemail'=>'bail|required|email|unique:customers,cust_email',
            'password'=>'bail|required|min:6|max:50',
            're_password'=>'bail|required|same:password',
            'custname'=>'bail|required',
            'custtel'=>'bail|required',
            'custaddress'=>'bail|required'
        ],
        [
            'password.required'=>'Vui lòng nhập mật khẩu',
            're_password.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'custname.required'=>'Vui lòng nhập họ tên',
            'custemail.required'=>'Vui lòng nhập email',
            'custemail.email'=>'Không đúng định dạng email',
            'custemail.unique'=>'Email đã có người sử dụng',
            'custtel.required'=>'Vui lòng nhập số điện thoại liên hệ',
            'custaddress.required'=>'Vui lòng nhập địa chỉ giao hàng'
        ]);

        $cust = new Customer;
        $cust->cust_name = $res->custname;
        $cust->cust_tel = $res->custtel;
        $cust->cust_email = $res->custemail;
        $cust->cust_add = $res->custaddress;
        $cust->cust_pass = bcrypt($res->password);
        $cust->save();

        $newCust = Customer::all()->last();

        $user = new User();
        $user->username = $res->custname;
        $user->password = bcrypt($res->password);
        $user->email = $res->custemail;
        $user->role = 4;
        $user->cust_id = $newCust->id;
        $user->save();


        return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
    }
}