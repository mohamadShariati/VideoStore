
@extends('auth-layout')

@section('content')
<body class="sing-up-page">
    <!--======= log_in_page =======-->
    <div id="log-in" class="site-form log-in-form">
    
        <div id="log-in-head">
          <h1>ثبت نام</h1>
          <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
      </div>
      
      <div class="form-output">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group label-floating">
                <label class="control-label">نام</label>
                <input name="name" class="form-control" placeholder="" type="text" value="{{old('name')}}">
            </div>
              <div class="form-group label-floating">
                  <label class="control-label">ایمیل</label>
                  <input name="email" class="form-control" placeholder="" type="email" value="{{old('email')}}">
              </div>
              <div class="form-group label-floating">
                  <label class="control-label">رمز عبور</label>
                  <input name="password" class="form-control" placeholder="" type="password">
              </div>
              
              <div class="form-group label-floating">
                  <label class="control-label">تأیید رمز عبور</label>
                  <input name="password_confirmation" class="form-control" placeholder="" type="password">
              </div>

              {{-- <div class="form-group label-floating is-select">
                  <label class="control-label">جنسیت</label>
                  <select class="selectpicker form-control">
                      <option value="MA">مرد</option>
                      <option value="FE">زن</option>
                  </select>
              </div> --}}
              
              <div class="remember">
                  <div class="checkbox">
                      <label>
                          <input name="optionsCheckboxes" type="checkbox">
                          <a href="#">شرایط و ضوابط</a> سایت را قبول میکنم
                      </label>
                  </div>
              </div>
              
            {{-- <a href="01-home.html" class="btn btn-lg btn-primary full-width">ثبت نام</a> --}}
            <button type="submit" class="btn btn-lg btn-primary full-width">
                ثبت نام
            </button>

            <div class="or"></div>

              <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>ورود با فیس بوک</a>

              <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>ورود با توییتر</a>


              <p>شما یک حساب کاربری دارید؟ <a href="07-log_in_page.html"> ورود!</a> </p>
          </form>
      </div>
    </div>
    <!--======= // log_in_page =======-->
  </body>  
@endsection