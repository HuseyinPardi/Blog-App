@extends('admin.auth.index')

@section('title')
Admin Register
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
                <h1>Admin Kayıt Formu</h1>
                <img src="{{asset("my_imgs/blog-svgrepo-com (1).svg")}}" alt="register" class="login-img">
             </div>
            <form action="{{route("admin.register.index")}}" method="POST">
                 @csrf
                <h5>İsminiz</h5>
                <input type="text" class="form-control" name="name" placeholder="İsim">
                @if ($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <br>
                <h5>Email</h5>
                <input type="email" class="form-control" name="email" placeholder="Email">
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
                <button class="btn btn-success">Kayıt Ol</button>
            </form>
            <br>
            <a href="{{route('admin.login.index')}}" class="auth-tag">Zaten bir hesabım var</a>
        </div>
    </div>
@endsection