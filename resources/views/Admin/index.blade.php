@extends('layouts.layout')

@section("content")
    <div id="site_title"><a href="index.html"><img src="{{ URL::asset('/theme/img/logo.png') }}" alt=""></a></div>
  <!-- tab panes -->
  <div class="title-header">Thêm Mới</div>
  <form id="add_product_profile" action="{{URL::to('/Admin/Save.html')}}" method="post" enctype="multipart/form-data">
    <table class="table-bordered">
        <colgroup style="width: 160px">
        <colgroup>
        <colgroup style="width: 160px">
        <colgroup>
        <tr>
            <th class="text_upper bold fsize-17">Tên xe</th>
            <td>
                <input class="form-control" type="text" name="car[product_name]" >
            </td>
            <th class="text_upper bold fsize-17">Loại xe</th>
            <td>
                <select class="form-control" name="car[product_type]">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
            </td>
        </tr>
        <tr>
            <th class="text_upper bold fsize-17">Giá</th>
            <td colspan="3">
                <input class="form-control" type="text" name="car[product_price]" >
            </td>
        </tr>
    </table>
    <div>
        <ul id="menu-admin">
            <li id="admin-tab-1" class="cursor-pointer selected"><a>Giới thiệu</a>
          </li>
          <li id="admin-tab-2" class="cursor-pointer"><a>Ngoại thất</a>
          </li>
          <li id="admin-tab-3" class="cursor-pointer"><a>Nội thất</a></li>
          <li id="admin-tab-4" class="cursor-pointer"><a>Vận hành</a></li>
          <li id="admin-tab-5" class="cursor-pointer"><a>An toàn</a></li>
      </ul> 
    </div>
    <div id="prod_wrapper">
        {{ csrf_field()}}
            @foreach ($data_tab as $tab)
                {!! $tab !!}
            @endforeach
    </div>
    <div><input type="submit" value="Lưu"></div>
    </form>
  <!-- END prod wrapper -->
  
  <div style="clear:both"></div>
  <div class="col-md-12">
    <h2>Ảnh hệ thống</h2>
    <div>
        <form name="uploadAttachment" id="uploadAttachment" method="post" enctype="multipart/form-data">
            <input class="form-control" type="file" name="attachment">
            <hr>
            <input class="form-control" type="button" name="addFile" value="Tải ảnh" onclick="AdminController.uploadAttachment(this)">
        </form>
    </div>
    <div>
        <table>
            <tr></tr>
            <tr></tr>
        </table>
    </div>
  </div>

  <div class="one-half">
    <div class="heading_bg">
      <h2>About Us</h2>
    </div>
    <blockquote>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. </blockquote>
    <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"><a class="button " style="font-size: 18px">Find out more</a></p>
    <div class="heading_bg">
      <h2>Video</h2>
    </div>
    <iframe src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="465" height="262" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Contact us today!</h2>
    </div>
    <form action="#" class="TTWForm" method="post">
      <div id="field1-container" class="field f_50">
        <label for="field1">Name</label>
        <input name="name" id="field1" type="text">
      </div>
      <div id="field2-container" class="field f_50">
        <label for="field2">Telephone</label>
        <input name="tel" id="field2" type="text">
      </div>
      <div id="field5-container" class="field f_50">
        <label for="field5">Email</label>
        <input name="email" id="field5" type="email">
      </div>
      <div id="field4-container" class="field f_100">
        <label for="field4">Message</label>
        <textarea rows="5" cols="20" name="message" id="field4"></textarea>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Submit" type="submit">
      </div>
    </form>
  </div>
  <div style="clear:both; height: 40px"></div>
@endsection