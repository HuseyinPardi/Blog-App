@extends('layouts.app')


@section('title')
HomePage
@endsection

@section('content')
    <div class="container">
        <div class="pages">
            <img src="{{asset('my_imgs/sağlıklı_yaşam.jpg')}}" alt="healthy" class="home-img">
            <br>
            <p>A healthy life balances physical, mental, and emotional well-being. 
                Key elements include regular exercise, a nutritious diet, and sufficient sleep. 
                Mindfulness and stress management improve mental health, while social connections 
                offer emotional support. Consistent healthy choices lead to a better quality of life and 
                long-term wellness.</p>
            <a href="{{route('login')}}" style="text-decoration: none; font-size: 1.25rem;">Learn More</a>
            <br>
        </div>
    </div>


@endsection

