@extends('admin.auth.index')

@section('title')
Admin Login
@endsection


@section('content')
    <div class="outer-auth">
        <div class="inner-auth">
            @if (session()->has("success"))                
                <div class="alert alert-success">
                    {{session()->get("success")}}
                </div>                
            @endif
            @if (session()->has("error"))                
                <div class="alert alert-success">
                    {{session()->get("error")}}
                </div>                
            @endif
             <div class="header-container">
                <h1>Admin Giriş Formu</h1>
                <img src="{{asset("my_imgs/blog-svgrepo-com (1).svg")}}" alt="login" class="login-img">
             </div>
            <form action="{{route("admin.login.index")}}" method="POST">
                 @csrf
                <h5>Email</h5>
                <input type="text" class="form-control" name="email" placeholder="E-mail">
                @if ($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
                <br>
                <h5>Şifre</h5>
                <input type="password" class="form-control" name="password" placeholder="Şifre">
                  @if ($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
                <br>
                <button class="btn btn-success">Giriş Yap</button>
            </form>
            <br>
            <a href="{{route('admin.register.index')}}" class="auth-tag">Hesabım Yok?</a>
        </div>
    </div>
@endsection