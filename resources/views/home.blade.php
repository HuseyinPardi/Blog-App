@extends('layouts.app')


@section('title')
HomePage
@endsection

@section('content')
    <div class="pages">
        <img src="{{asset('my_imgs/authed-home-img.jpg')}}" alt="home-image" class="home-img">
        <br>
        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy.
         Just click “Edit Text” or double click me to add your own content and make changes to the font.</p>
    </div>
    <br>
    <div class="break-bar">
        <div class="break-bar-item">
            <h2>Would like to join us?</h2>
        </div>
        <div class="break-bar-item">
            <p>Hope you undestand how to work this company.</p>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="pages2">
            <div>
                <img src="{{asset('my_imgs/comment1-img.jpg')}}" alt="healthy-img" class="home-img">
            </div>
            <br>
            <div>
                <img src="{{asset('my_imgs/user-svgrepo-com.svg')}}" alt="user" class="login-img">
                <br>
                <br>
                <h3 style="padding-left: 5px">Eat healthy food and stay healthy</h3>
                <br>
                <p style="padding-left: 5px">Create a blog post subtitle that summarizes your post in a few short, punchy 
                    sentences and entices your audience to continue reading</p>   <br>
            </div>
        </div>
        <br>
        <br>
        <div class="pages2">
            <div>
                <img src="{{asset('my_imgs/sport.jpg')}}" alt="sport-img" class="home-img">
            </div>
            <br>
            <div>
                <img src="{{asset('my_imgs/user-svgrepo-com.svg')}}" alt="user" class="login-img">
                <br>
                <br>
                <h3 style="padding-left: 5px">Do sports and stay fit.</h3>
                <br>
                <p style="padding-left: 5px">Create a blog post subtitle that summarizes your post in a few short, punchy 
                    sentences and entices your audience to continue reading</p>   <br>
            </div>
        </div>
    </div>



@endsection