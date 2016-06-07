@extends('admin.loginlayout')

@section('content')
    <div>   
      <div class="login_wrapper">
        <div class="animate form login_form">
            @include('admin.partials.errors')
          <section class="login_content">
            <form action="{{ url('/webpanel/login') }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <h1>Login Form</h1>
              <div>               
                <input type="Email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" autofocus/>
              </div>
              <div>
                 <input type="password" name="password" class="form-control" placeholder="Password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Sign in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
@endsection