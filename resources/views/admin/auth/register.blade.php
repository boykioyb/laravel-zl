  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập hệ thống 4edu</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon"  href="{{ asset('4edu/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('4edu/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/css/4edu/register.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/css/4edu/style.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/css/4edu/update.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/plugins/iCheck/flat/blue.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/morris/morris.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/datepicker/datepicker3.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('4edu/plugins/daterangepicker/daterangepicker.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('4edu/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('4edu/css/4edu/mobile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom-admin.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body >
  <div class="contents" style="min-height: 100%">
    <div class="row" style="background: #3c8dbc">
     <div class="container ">
     <div class="col-lg-12">
          <h1 ><b style="font-weight: bold;color: white">4EDU</b> <span style="color: white;font-size: 14px">chất lượng cuộc sống</span></h1>

     </div>
   
    </div>
  </div>
  <div class="container ">

    <div class="row">
     <div class="col-md-6 col-left">
      <h3 class="foredu">
       4Edu giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.
     </h3>
     <img src="{{ asset('4edu/dist/img/gt.png') }}" alt="cộng đồng" title="kết nối cộng đồng">
   </div>
   <div class="col-md-6 col-xs-12 col-sm-12">
    <form method="POST" name="user" enctype="multipart/form-data" action="{{ route('register.post') }}" id="user">
      {{csrf_field()}}
      <h1>Tạo tài khoản mới</h1>
      <p>Miên phí và sẽ luôn như vậy.</p>
      @if(session('msg'))
      <span class="text-danger">
       {{ session('msg') }}
     </span>
     @endif
     <div class="form-group name-last">		
       <input type="hidden" name="id" value="">		
       <input type="text" name="username" class="form-control" placeholder="User Name" value="">	
       @if(asset($errors->first('username')))
       <span class="text-danger">{{$errors->first('username')}}</span>
       @endif
       <input type="text" name="fullname" class="form-control" placeholder="Tên đầy đủ" value="">	
       @if(asset($errors->first('fullname')))
       <span class="text-danger">{{$errors->first('fullname')}}</span>
       @endif
     </div>
     <div class="form-group sdt">					
       <input type="text" name="email" class="form-control" placeholder="Email" value="">	
       @if(asset($errors->first('email')))
       <span class="text-danger">{{$errors->first('email')}}</span>
       @endif	
     </div>
     <div class="form-group sdt">					
       <input type="password" name="password" class="form-control" placeholder="**********" value="">	
       @if(asset($errors->first('password')))
       <span class="text-danger">{{$errors->first('password')}}</span>
       @endif	
     </div>
     <div class="form-group">
       <p>Ngày sinh</p>
       <input type="date" name="birthday" class="input-time" value="">	
       @if(asset($errors->first('birthday')))
       <span class="text-danger">{{$errors->first('birthday')}}</span>
       @endif
       <span id="dv1">						
       </span>						
       <a class="aa" href="#">Tại sao tôi cần cung cấp ngày sinh của mình?</a>
     </div>
     <div class="form-group">
       <fieldset>
        <legend>Giới tính của bạn?</legend>
        <label class="radio-inline"><input type="radio" name="gender" value="2">Nữ</label><label class="radio-inline"><input type="radio" name="gender" value="1">Nam</label>
      </fieldset>
      @if(asset($errors->first('gender')))
      <span class="text-danger">{{$errors->first('gender')}}</span>
      @endif
    </div>
    <div class="form-group">
     <p class="dieuk">Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="#" class="ab">Các điều khoản</a> của chúng tôi và rằng bạn đã đọc <a href="#" class="ab">Chính sách dữ liệu</a> của chúng tôi, bao gồm <a href="#" class="ab">Sử dụng cookie.</a></p>
     <!-- <input type="submit" name="submit" class="btn btn-success btn-lg" id="submitbutton" value="Create"> -->			
     <button type="submit" class="btn btn-success btn-lg" id="submitbutton" >Create</button>	
   </div>
 </form>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<!-- jQuery 2.2.3 -->
<script src="{{ asset('4edu/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{  asset('4edu/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{  asset('4edu/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
