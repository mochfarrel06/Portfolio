@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container-section">
        <div class="row">
            <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                <img class="img_home" src="{{ asset('image/home.png') }}" />
            </div>

            <div class="col-sm-12 col-md-6 home-container-text">
                <div class="d-flex flex-column home_text">
                    <h5 class="home_subtitle">Front End Developer, 1</h5>
                    <h1 class="home_title">Hello, I'm <span>Moch Farrel</span></h1>
                    <p class="home_description">I am a Full Stack Developer, I like website programming languages ​​such as
                        PHP, JavaScript, HTML, CSS, Bootstrap, Tailwind, React JS, VUE, Laravel, MySQL.</p>
                </div>

                <div class="home_button">
                    <button class="btn btn-primary70">Download CV</button>

                    <div class="d-flex home_icon">
                        <a href="#"><i class="iconoir-github"></i></a>
                        <a href="#"><i class="iconoir-facebook"></i></a>
                        <a href="#"><i class="iconoir-instagram"></i></a>
                        <a href="#"><i class="iconoir-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
