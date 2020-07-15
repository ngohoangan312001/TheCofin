@extends('user.index')
@section('css')
    
@endsection

@section('content')
<br>
<br>
<style>
    

body {
    font-family: 'Lato', sans-serif;
    line-height: 1.42857143;
    font-size: 14px;

      background-color: rgba(172, 172, 172, 0.164);
}
.product-info{
  background-color: white;
  padding: 10px;
}
.product-name{
  border-bottom: 3px orange solid;
  
}
.product-img{
    padding: 0px;
}
.sp{
 background-color:white;
  padding: 0px;
  padding-bottom: 10px;
  margin: 5px;
  padding-left: 0px;
}
.sp_name:hover{
  color: orange !important;
  transition: 0.4s;
}
.id_color{
  color: orange;
}
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
}

/* Style the buttons inside the tab */
.tablinks {
  background-color: inherit;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  color: black;
  font: bold;
}
/* Create an active/current tablink class */

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-radius: 0px 0px 10px 10px;
  border-top: none;
  background-color: #ffffff;
}
.tablinks{
    border-radius: 0px;
}
</style>
{{-- Alert comment --}}
    <section class="comment">
        <div class="container-fluid p-0 text-center">
            @if (session()->has('addtocart_success'))
                <div class="alert alert-info mb-0 text-uppercase">{{session()->get('addtocart_success')}}</div>
            @else
                
            @endif
            @if (session()->has('comment_success'))
                <div class="alert alert-info mb-0 text-uppercase">{{session()->get('comment_success')}}</div>
            @else
                
            @endif

            @if (session()->has('comment_fail'))
                <div class="alert alert-danger mb-0 text-uppercase">{{session()->get('comment_fail')}}</div>
            @else
                
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{$error}}<br>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

<div id="product">
<div class="product-info">
    <div class="container">
        <div class="row">
            <!--image-->
            <div class="col-sm-6 product-img" >
                <div class="product-img">
                <img src="{{ url('images/'.$product->product_image) }}" alt="" width="100%" height="100%">
            </div>
            </div>
            <div class="col-sm-6 product-detail" >
                <!--description-->
               <h1 class="product-name"><strong>{{$product->product_title}}</strong></h1>


          <h6>{{$product->product_description}}</h6>  <br> <br>
                <h4 class="id_color">{{$product->product_price}}</h4> <br>

                <form action="{{route('giohang',$product->id)}}" method="post">
                <div class="quantity" hidden>
                                    <label class="label-qty float-left">Số lượng: </label>
                                    <div class="control-qty">
                                        <button type="button" class="ml-3 btn-number qtyminus" data-type="minus" data-field="qty" disabled="disabled">-</button>
                                        <input class="input-qty ml-3" type="text" value="1" min="1" max="100" id="qty1" name="qty">
                                        <button type="button" class="ml-3 btn-number qtyplus" data-type="minus" data-field="qty">+</button>
                                    </div>
                                </div>
                    {{ csrf_field() }}
                    <div class="clearfix">
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->product_title}}">
                        <input type="hidden" name="price" value="{{$product->product_price}}">
                        <input type="hidden" name="image" value="{{$product->product_image}}">
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm vào giỏ hàng    
                        </button>
                    </div>
                    </form>

            </div>
        </div>
    </div>
</div>
<div class="tab ">
    <div class=" navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link tablinks" onclick="openTab(event, 'commentlist')"><h3>DANH SÁCH BÌNH LUẬN</h3></a></li>
            <li class="nav-item"><a class="nav-link tablinks" onclick="openTab(event, 'newcomment')"><h3>THÊM BÌNH LUẬN</h3></a></li>
        </ul>
    </div>

    <div id="commentlist" class="tabcontent">
            <div class="media p-3">
                <img src="{{ url('images/'.$product->product_image) }}" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                @if(count($comments) > 0)
                    @foreach($comments as $comment)
                        <h4>{{$comment->user_cment}}<small><i>Posted on {{$comment->cment_date}}</i></small></h4>
                        <p>{{$comment->cment_content}}</p>
                        @if($comment->reply_cment)
                        <div class="text-pink"><b>The Cofin:</b></div>
                        <div class="reply-cment">{{$comment->reply_cment}}</div>
                        @endif
                    @endforeach
                </div>
                @else
                <div class="media-body">
                    Hiện tại chưa có bình luận về sản phẩm này
                </div>
                @endif
            </div>
    </div>

      <div id="newcomment" class="tabcontent">
        <div class="container-fluid">
            <form action="{{route('binhluansanpham')}}" method="post">
                {{csrf_field()}}
            <input type="hidden" name="idProduct" value="{{$product->id}}">
            <label>Tiêu đề của nhận xét: </label>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Nhập tiêu đề nhận xét (không bắt buộc)" name="comment_title" id="comment_title">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Nội dung bình luận" name="comment_content" id="comment_content" required></textarea>
              </div>
              <button class="btn btn-info" type="submit">Gửi nhận xét</button>
            </form>
        </div>
    </div>
  </div>
  
  
</div>
<!--end product-info-->
<br>
<!--thanh h2 -->
<h2 style="text-align: center;"><strong style="width:30%; border-bottom: 3px solid orange;">CÓ THỂ BẠN THÍCH</strong></h2>

<!-- thoong tin tung san pham-->


<script>
    function openTab(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
<!--end product-new-->
</body>
@endsection