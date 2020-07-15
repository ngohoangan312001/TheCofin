@extends('admin.index')
@section('css')
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <h2>THÊM SẢN PHẨM</h2><br>           
      @if(count($errors) > 0)
      <div class="alert alert-danger">
          @foreach($errors->all() as $err)
          {{$err}}<br>
          @endforeach
      </div>
      @endif

      @if(Session('thongbao'))
      <div class="alert alert-success">
          {{Session('thongbao')}}
      </div>
      @endif
    </div>
</div>
<!-- /#page-content-wrapper -->

  <div class="container-fluid">
      <div class="row">
          
          <div class="col-lg-8" style="padding-bottom:120px">
              <form action="{{route('themsanpham')}}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <div class="form-group">
                      <label>Tên sản phẩm</label>
                      <input class="form-control" name="txtTieuDe" placeholder="Nhập tiêu đề" />
                  </div>
                 
                  <div class="form-group">
                      <label>Thể loại</label>
                      <select class="form-control" id="" name="txtTheLoai">
                        @foreach ($productTypes as $productType)
                          <option value="{{ $productType->id }}">{{$productType->productType_name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Giá</label>
                      <input class="form-control" name="txtGia" placeholder="Nhập giá" />
                  </div>
                  <div class="form-group">
                      <label>Mô tả</label>
                      <textarea class="form-control ckeditor" rows="15" name="txtIntro" id="demo"></textarea>
                  </div>
                  <div class="form-group">
                      <label>Hình ảnh</label>
                      <input type="file" name="fImages">
                  </div>
                  <div class="form-group" hidden>
                      <label>Trạng thái</label>
                      <label class="radio-inline">
                          <input name="rdoStatus" value="1" checked="true" type="radio">Hiện
                      </label>
                  </div>
                  <button type="submit" class="btn btn-info">Thêm sản phẩm</button>
                  <button type="reset" class="btn btn-default">Làm mới</button>
                  </form>
                  </div>
                  </div>
                  </div>
@endsection