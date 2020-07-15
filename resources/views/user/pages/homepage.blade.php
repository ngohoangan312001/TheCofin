@extends('user.index')
@section('css')
    <link rel="stylesheet" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\LoginUserForm">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--Imagebox css-->
  <link href="url{{('public/css/imagebox.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  
@endsection
@section('content')
<style>
  .col-sm-4 img{
        width: 100%;
        margin: 0px;
        padding-bottom: 0px;
        
    }
    .sp{
        margin-bottom: 40px;
        padding-bottom: 5px;
        border-radius: 10px;
        background-color: white;
    }
    .sp:hover{
        box-shadow: 2px 2px 2px 2px rgba(59, 59, 59, 0.192);
    }
    .sp img{
        border-radius: 10px 10px 0px 0px;
    }
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
  }
  .imagebox{
    border: 3px solid black;
    cursor: pointer;
    width: 900px;
    display: flex;
    flex-wrap: wrap;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.hinh {
width: 100%;
height: auto;
transition: all ease-in-out ;
}

.khoihinhnho {
width: 260px;
height: 225px;
position: relative;
display: inline-block;
overflow: hidden;
}

.txtinbox {
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.52);
position: absolute;
bottom:50px;
text-align: center;
color: white;
padding:10px;
box-sizing: border-box;
opacity: 0;
}
.khoihinhnho:hover div.txtinbox {
opacity: 1;
transform: translateY(50px);
transition:ease-in-out 0.5s;
}

.khoihinhnho:hover .hinh {
transform: scale(1.5);
transition: all ease-in-out 0.5s;


}
.logo{
  width:300px;
  padding: 0px 70px !important;
}
.nav-link{
  padding: 0px 30px !important;
}
nav{
  background-color: black;
  font-size: 20px;
}
nav a{
  color: white;
}
nav a:hover{
  color: rgb(199, 130, 3);
  transition: 0.4s;
}
body{
  padding-top: 60px;
}
  </style>
        <section class="login_success">
          @if(session()->has('login_success1'))
              <div class="alert alert-info mb-0 text-uppercase">{{session()->get('login_success1')}}</div>
          @else

          @endif
        </section>
        <center>
        <div id="demo" class="carousel slide " data-ride="carousel" >

          <!-- Indicators -->
          <ul class="carousel-indicators" >
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
        
          <!-- The slideshow -->
          <div class="carousel-inner" >
            <div class="carousel-item active">
              <img class="slide-img img-fluid" src="images\slide\slide1.jpg" width="100%"  alt="slide 1">
            </div>
            <div class="carousel-item">
              <img class="slide-img img-fluid" src="images\slide\slide2.jpg"  width="100%"  alt="slide 2">
            </div>
            <div class="carousel-item">
              <img class="slide-img img-fluid" src="images\slide\slide3.jpg"  width="100%"  alt="slide 3">
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        
        </div>  
      </center> 
        <br>
        <br>

        <div>
            <div class="container" style="  background-color: rgba(105, 105, 105, 0.158);padding-bottom: 30px;">
              <h5 style="text-align: center;" ><span style="background: center black;color:white;padding: 10px;">ABOUT THE COFIN</span></h5>
              <br>
              <p>The Cofin was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
              <div >
                <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
                <p>Chef, Coffeeist and Owner: Liam Brown</p>
              </div>
              <img src="https://content.r9cdn.net/rimg/himg/7b/f2/e9/sembo-IE-H86690-128597b1_z.jpg_resizeMode=FitInside_formatSettings=jpeg(quality-90)-672819.jpg?width=1200&height=630&crop=false" style="width:100%">
            </div>
          </div><br>
          <hr style="width: 60% ;">
          <div class="container-fluid">
        <div class=" container" >
            <h2><strong style=" border-bottom: rgba(241, 174, 30, 0.822) 3px solid;">SẢN PHẨM MỚI</strong></h2>
                <br>
                <div class="row" >
                  @foreach($products as $p)
                    <div class="col-sm-4" >
                      <div class="sp">
                        <img class="sanpham" src="{{ url('images/'.$p->product_image) }}" style="background-color: white;" width="100px" alt="">
                        <center>
                        <h3 class="spname">{{$p->product_title}}</h3>
                        <p class="spprice">{{$p->product_price}}</p>
                        <a class="mybtn btn btn-warning" href="{{route('chitietsanphamUser', $p->id)}}">Chi tiết</a>
                      </center>
                    </div>
                  </div>
                  @endforeach
                  
        
              
        </div>
    </div>
   
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h2><strong style=" border-bottom: rgba(241, 174, 30, 0.822) 3px solid;">ATTHECOFIN</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p style="margin-top: 25px; font-size: 13px;" class="text-justify">Kết nối với instagram (chính thức) của chúng tôi tại <span style="color: orange;">@thecofin.vn</span> Khi bạn đăng tải những khoảnh khắc của mình với The Cofin, hãy nhớ <span style="color: orange;">#atthecofin</span> để chúng tôi có thể chia sẻ lại trải nghiệm của bạn với mọi người</p>
        </div>
      </div>
      
    </div>

    <div class="container">

      <div class="row">
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/chaps_1x.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/chaps_1x.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/everycowboy_dribbbleready_shot.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/ithinkican_01.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
      </div> <!--Grid row-->

      <div class="row">
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/m.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/raspberry.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/sketch_1x.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="khoihinhnho">
            <img class="hinh" src="http://hasinhayder.github.io/ImageCaptionHoverAnimation/img/sketch_1x.jpg" alt="">
            <div class="txtinbox">
                <h3>AMAZING CAPTION</h3>
                <p>Whatever It Is - Always Awesome</p>
            </div>
          </div>
        </div>
        </div><!--Grid row-->

  </div>
@endsection