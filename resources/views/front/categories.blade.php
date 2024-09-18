@extends('layouts.app')


@section('content')
    <div class="image-grid">
        <div class="image-item">
            <div class="image-wrapper">
                <img src="{{asset('my_imgs/taylor-kiser-EvoIiaIVRzU-unsplash.jpg')}}" alt="Resim 1">
            </div>
            <br>
            <a href="#" class="auth-tag">Beslenme ve Diyet</a>
        </div>
        <div class="image-item">
            <div class="image-wrapper">
                <img src="{{asset('my_imgs/fitness..jpg')}}" alt="Resim 2">
            </div>
            <br>
            <a href="#" class="auth-tag">Fitness ve Egzersiz</a>
        </div>
        <div class="image-item">
            <div class="image-wrapper">
                <img src="{{asset('my_imgs/mentality.jpg')}}" alt="Resim 3">
            </div>
            <br>
            <a href="#" class="auth-tag">Mental Sağlık</a>
        </div>
        <div class="image-item">
            <div class="image-wrapper">
                <img src="{{asset('my_imgs/sleep.jpg')}}" alt="Resim 4">
            </div>
            <br>
            <a href="#" class="auth-tag">Uyku Düzeni</a>
        </div>
        <div class="image-item">
            <div class="image-wrapper">
                <img src="{{asset('my_imgs/motivation.jpg')}}" alt="Resim 5">
            </div>
            <br>
            <a href="#" class="auth-tag">Motivasyon</a>
        </div>
        <div class="image-item">
            <div class="image-wrapper">
                <img src="{{asset('my_imgs/alternative-healthy.jpg')}}" alt="Resim 6">
            </div>
            <br>
            <a href="#" class="auth-tag">Alternatif Tıp</a>
        </div>
    </div>
@endsection