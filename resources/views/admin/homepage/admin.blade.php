@extends('admin.index')
@section('css')
    
@endsection

@section('content')
<style>
    .mainicon{
        font-size:120px;
        color: rgb(36, 36, 36);
    }
    .icon-tile{
        background-color: rgb(36, 36, 36);
        font-size:20px;
        margin-bottom: -5px;
    }
    .mainicon:hover{
        color: white;
    }
    .col-md-2{
    border-radius: 10px;
    margin:20px 15px; 
    transition: 0.2s;
    box-shadow: 2px 2px 2px 2px rgba(36, 36, 36, 0.452);
    }
    .col-md-2:hover{
    background-color: rgb(36, 36, 36);
    color: white;
    }
    .col-md-2:hover span{
    background-color: rgb(36, 36, 36);
    }
    .col-md-2:hover a i{
    color: white;
    
    }
    </style>
<div class="container-fluid">
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">Trang Chủ</h1>
            </div>
            
            <div class="col-md-6">
            @if (session()->has('login_success1'))
            <div class="alert alert-info mb-0 text-uppercase">{{session()->get('login_success1')}}</div>
            @else
                
            @endif
        </div>        
     
    </div>
    </div>
</div>
<hr>
    <div class="container">
        @if (session()->has('ql'))
        <div class="row">
            <div class="col-md-2" data-toggle="tooltip" data-placement="bottom" title="ADMIN">
                <center>
                <a class="mainicon" href="{{route('danhsachadmin')}}" ><i class="fas fa-user-tie"></i></a>
            </center>
            </div>
            <div class="col-md-2" data-toggle="tooltip" data-placement="bottom" title="PRODUCT TYPE">
                <center>
                <a class="mainicon" href="{{route('danhsachloaisp')}}"><i class="fas fa-poll"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="PRODUCT">
                <center>
                <a class="mainicon" href="{{route('danhsachsanpham')}}"><i class="fas fa-poll-h"></i></a>
                </center>
            </div>
            <div class="col-md-2" data-toggle="tooltip" data-placement="bottom" title="COMMENT">
                <center>
                <a class="mainicon" href="{{route('danhsachbinhluan')}}"><i class="fas fa-comment-alt"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="NEWS">
                <center>
                <a class="mainicon" href="{{route('danhsachbantin')}}"><i class="fas fa-calendar"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="CUSTOMER">
                <center>
                <a class="mainicon" href="{{route('danhsachkhachhang')}}"><i class="fas fa-id-card"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="ORDER">
                <center>
                <a class="mainicon" href="{{route('danhsachdonhang')}}"><i class="fas fa-shopping-cart"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="FEEDBACK">
                <center>
                <a class="mainicon" href=""><i class="fas fa-mail-bulk"></i></a>
                </center>
            </div>
        </div>
        @endif 

        @if (session()->has('qlsp'))
        <div class="row">
        
            <div class="col-md-2" data-toggle="tooltip" data-placement="bottom" title="PRODUCT TYPE">
                <center>
                <a class="mainicon" href="{{route('danhsachloaisp')}}"><i class="fas fa-poll"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="PRODUCT">
                <center>
                <a class="mainicon" href="{{route('danhsachsanpham')}}"><i class="fas fa-poll-h"></i></a>
                </center>
            </div>
            <div class="col-md-2" data-toggle="tooltip" data-placement="bottom" title="COMMENT">
                <center>
                <a class="mainicon" href="{{route('danhsachbinhluan')}}"><i class="fas fa-comment-alt"></i></a>
                </center>
            </div>
           
        </div>
        @endif

        @if (session()->has('qlcskh'))
        <div class="row">
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="NEWS">
                <center>
                <a class="mainicon" href="{{route('danhsachbantin')}}"><i class="fas fa-calendar"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="CUSTOMER">
                <center>
                <a class="mainicon" href="{{route('danhsachkhachhang')}}"><i class="fas fa-id-card"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="ORDER">
                <center>
                <a class="mainicon" href="{{route('danhsachdonhang')}}"><i class="fas fa-shopping-cart"></i></a>
                </center>
            </div>
            <div class="col-md-2"data-toggle="tooltip" data-placement="bottom" title="FEEDBACK">
                <center>
                <a class="mainicon" href=""><i class="fas fa-mail-bulk"></i></a>
                </center>
            </div>
        </div>
        @endif
    </div>
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
        });
        </script>
    @endsection

