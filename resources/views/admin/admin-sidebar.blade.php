<style>
  body {
    font-family: "Lato", sans-serif;
  }
  ul li a{
    color:black;
    font-weight: 400;
  }
  ul li a:hover{
    color:grey;

  }
  </style>
<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
    <div class="sidebar-heading">
          {{Auth::user()->username}}
    </div>
   
      <ul class="navbar-nav ">
      @if(Session::has('ql'))
        <li class="nav-item list-group-item  bg-light">
          <a class="nav-link dropdown-toggle" href="#"  data-toggle="collapse" data-target="#admin">
            <i class="fas fa-user-tie"></i> ADMIN
          </a>
          <div class="collapse" id="admin" >
            <a class="nav-link" href="{{route('danhsachadmin')}}"><i class="fas fa-id-card"></i> DANH SÁCH ADMIN</a>
            <a class="nav-link" href="{{route('themadmin')}}"><i class="fas fa-user-plus"></i> THÊM ADMIN</a>
          </div> 
        </li>
        <li class="nav-item dropdown list-group-item list-group-item-action bg-light">
          <a class="nav-link dropdown-toggle" href="#"  data-toggle="collapse" data-target="#productT">
            <i class="fas fa-poll"></i> PRODUCT TYPE
          </a>
          <div class="collapse" id="productT" >
            <a class="nav-link" href="{{route('danhsachloaisp')}}"><i class="	fas fa-clipboard-list"></i> DANH SÁCH LOẠI SP</a>
            <a class="nav-link" href="{{route('themloaisp')}}"><i class="fas fa-plus-circle"></i> THÊM LOẠI SP</a>
          </div>
        </li>
        <li class="nav-item dropdown list-group-item list-group-item-action bg-light">
          <a class="nav-link dropdown-toggle" href="#"  data-toggle="collapse" data-target="#product">
            <i class="fas fa-poll-h"></i> PRODUCT
          </a>
          <div class="collapse" id="product" >
            <a class="nav-link" href="{{route('danhsachsanpham')}}"><i class="fas fa-clipboard-list"></i> DANH SÁCH SP</a>
            <a class="nav-link" href="{{route('themsanpham')}}"><i class="fas fa-plus-circle"></i> THÊM SP</a>
          </div>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachbinhluan')}}" >
            <i class="fas fa-comment-alt"></i> COMMENT
          </a>
        </li>
        <li class="nav-item dropdown list-group-item list-group-item-action bg-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="collapse" data-target="#new">
            <i class="fas fa-calendar"></i> NEW
          </a>
          <div class="collapse" id="new" >
            <a class="nav-link" href="{{route('danhsachbantin')}}"><i class="fas fa-calendar-alt"></i> DANH SÁCH TIN TỨC</a>
            <a class="nav-link" href="{{route('thembantin')}}"><i class="fas fa-calendar-plus"></i> THÊM TIN TỨC</a>
          </div>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachkhachhang')}}" >
            <i class="fas fa-id-card"></i> CUSTOMER
          </a>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachdonhang')}}" >
            <i class="fas fa-shopping-cart"></i> ORDER
          </a>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachphanhoi')}}" >
            <i class="fas fa-mail-bulk"></i> FEEDBACK
          </a>
        </li>
        {{-- @dd(Session::get('ql')); --}}
        @elseif (Session::has('qlsp'))
        <li class="nav-item dropdown list-group-item list-group-item-action bg-light">
          <a class="nav-link dropdown-toggle" href="#"  data-toggle="collapse" data-target="#productT">
            PRODUCT TYPE
          </a>
          <div class="collapse" id="productT" >
            <a class="nav-link" href="{{route('danhsachloaisp')}}"><i class="	fas fa-clipboard-list"></i> DANH SÁCH LOẠI SP</a>
            <a class="nav-link" href="{{route('themloaisp')}}"><i class="fas fa-plus-circle"></i> THÊM LOẠI SP</a>
          </div>
        </li>
        <li class="nav-item dropdown list-group-item list-group-item-action bg-light">
          <a class="nav-link dropdown-toggle" href="#"  data-toggle="collapse" data-target="#product">
            PRODUCT
          </a>
          <div class="collapse" id="product" >
            <a class="nav-link" href="{{route('danhsachsanpham')}}"><i class="fas fa-clipboard-list"></i> DANH SÁCH SP</a>
            <a class="nav-link" href="{{route('themsanpham')}}"><i class="fas fa-plus-circle"></i> THÊM SP</a>
          </div>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachbinhluan')}}" >
            COMMENT
          </a>
        </li>
        {{-- @dd(Session::get('qlsp')); --}}
        @else
        <li class="nav-item dropdown list-group-item list-group-item-action bg-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="collapse" data-target="#new">
            NEW
          </a>
          <div class="collapse" id="new" >
            <a class="nav-link" href="{{route('danhsachbantin')}}"><i class="fas fa-calendar-alt"></i> DANH SÁCH TIN TỨC</a>
            <a class="nav-link" href="{{route('thembantin')}}"><i class="fas fa-calendar-plus"></i> THÊM TIN TỨC</a>
          </div>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachkhachhang')}}" >
            CUSTOMER
          </a>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachdonhang')}}" >
            ORDER
          </a>
        </li>
        <li class="nav-item  list-group-item list-group-item-action bg-light">
          <a class="nav-link " href="{{route('danhsachphanhoi')}}" >
            FEEDBACK
          </a>
        </li>
        @endif
      </ul>
    </div>

  </div>
  <!-- /#sidebar-wrapper -->