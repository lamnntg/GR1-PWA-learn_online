@extends('layouts.pwa.tab')
@section('pageTitle')
    Courses
@endsection
@section('content')
<div class="header-large-title">
    <h1 class="title">Các Khóa Học</h1>
</div>
@foreach ($courses as $course)

<div class="section full mb-3">
    <div class="section-title">{{ \App\Models\Subject::$subject[$course->subject_id] }}</div>

    <div class="carousel-single owl-carousel owl-theme">
        <div class="item">
            <img src="{{ $course->img_url }}" alt="alt" class="imaged w-100">
            <div class="card-body">
                <h6 class="card-subtitle"></h6>
                <h5 class="card-title">{{ $course->description }}</h5>
                <p class="card-text">
                    Khóa Học : {{  $course->name }}
                </p>
                <a href="app-components.html" class="btn btn-primary">
                    <ion-icon name="cube-outline"></ion-icon>
                    Đăng kí ngay
                </a>
            </div>
        </div>

    </div>
</div>
@endforeach

@endsection
