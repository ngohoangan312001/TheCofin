
@extends('user.index')
@section('css')
    
@endsection

@section('content')
<style>
    body{
        background-color: white
    }
    .register{
        padding: 10px;
        box-shadow: -2px -2px 2px 2px rgba(116, 116, 116, 0.445);
        border-radius: 10px;
    }
</style>
<br>
<br>

<div class="container mx-auto d-block" name="SignupUserForm">
<div class="row">
    <div class="col-sm-6">
        <h3>Tạo tài khoản</h3>
    <hr>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}
            @endforeach
        </div>
    @endif
    @if(Session::has('thanhcong'))
        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
    @endif
  <form action="{{route('dangkyPostUser')}}" method="post">
      {{csrf_field()}}
      
      <label for="email">Email</label>
        <input type="email" id="custemail" name="custemail" placeholder="Nhập mail của bạn" required class="form-control">
      <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" placeholder="Mật khẩu của bạn" required class="form-control">
      <label for="password">Nhập lại mật khẩu</label>
        <input type="password" id="re_password" name="re_password" placeholder="Nhập lại mật khẩu" required class="form-control">
      <label for="name">Họ tên</label>
        <input type="text" id="fullname" name="custname" placeholder="Họ tên của bạn" required class="form-control">
      <label for="name">Số điện thoại</label>
        <input type="text" id="telephone" name="custtel" placeholder="Nhập số điện thoại" required class="form-control">
      <label for="name">Địa chỉ</label>
        <input type="text" id="address" name="custaddress" placeholder="Nhập địa chỉ của bạn" required class="form-control">

    <!--<label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>-->
    <div class="text-center">
    <button type="submit" class="btn btn-primary"><i class="fa fa-user"> Đăng Ký</i></button>
    </div>
  </form>
    </div>
</div>
</div>

  <br>
<br>
  @endsection 