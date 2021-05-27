@extends('layouts.pwa.tab')
@section('pageTitle')
    Home
@endsection
@section('content')

<div class="header-large-title">
    <h1 class="title">Xin chào {{ Auth::user()->name }}</h1>
</div>
<div class="listview-title mt-2">Môn học</div>
<ul class="listview image-listview flush transparent">
    <li>
        <a href="{{ route('subject.lesson.list', ['subjectId' => \App\Models\Subject::SUBJECT_ID_1]) }}" class="item">
            <div class="icon-box bg-primary">
                <ion-icon name="book-outline"></ion-icon>
            </div>
            <div class="in">
                Tiếng Việt
            </div>
        </a>
    </li>
    <li>
        <a href="{{ route('subject.lesson.list', ['subjectId' => \App\Models\Subject::SUBJECT_ID_2]) }}" class="item">
            <div class="icon-box bg-primary">
                <ion-icon name="calculator-outline"></ion-icon>
            </div>
            <div class="in">
                Toán
            </div>
        </a>
    </li>
    <li>
        <a href="{{ route('subject.lesson.list', ['subjectId' => \App\Models\Subject::SUBJECT_ID_3]) }}" class="item">
            <div class="icon-box bg-primary">
                <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            </div>
            <div class="in">
                Tiếng Anh
            </div>
        </a>
    </li>
    <li>
        <a href="{{ route('subject.lesson.list', ['subjectId' => \App\Models\Subject::SUBJECT_ID_4]) }}" class="item">
            <div class="icon-box bg-primary">
                <ion-icon name="flask-outline"></ion-icon>
            </div>
            <div class="in">
                Khoa Học
            </div>
        </a>
    </li>
    <li>
        <a href="{{ route('subject.lesson.list', ['subjectId' => \App\Models\Subject::SUBJECT_ID_5]) }}" class="item">
            <div class="icon-box bg-primary">
                <ion-icon name="code-working-outline"></ion-icon>
            </div>
            <div class="in">
                Tin Học
            </div>
        </a>
    </li>
</ul>

<div class="listview-title mt-2">Tiện ích</div>
<ul class="listview image-listview flush transparent mb-1">
    <li>
        <a href="component-notification.html" class="item">
            <div class="icon-box bg-danger">
                <ion-icon name="calculator"></ion-icon>
            </div>
            <div class="in">
                Máy tính
            </div>
        </a>
    </li>
    <li>
        <a href="component-toast.html" class="item">
            <div class="icon-box bg-danger">
                <ion-icon name="book"></ion-icon>
            </div>
            <div class="in">
                Từ điển
            </div>
        </a>
    </li>
    <li>
        <a href="component-dialog.html" class="item">
            <div class="icon-box bg-danger">
                <ion-icon name="calendar"></ion-icon>
            </div>
            <div class="in">
                Thời khóa biểu
            </div>
        </a>
    </li>
</ul>

<div class="listview-title mt-2">Kho trò chơi</div>
<ul class="listview image-listview flush transparent">
    <li>
        <a href="component-action-sheet.html" class="item">
            <div class="icon-box bg-success">
                <ion-icon name="browsers-outline"></ion-icon>
            </div>
            <div class="in">
                2048
            </div>
        </a>
    </li>
    <li>
        <a href="component-add-to-home.html" class="item">
            <div class="icon-box bg-success">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="in">
                Tetris
            </div>
        </a>
    </li>
</ul>
{{-- conti learn  --}}

<div class="section mt-3 mb-3">
    <div class="card">
        <img src="https://i.ytimg.com/vi/QV10yluVb6Q/maxresdefault.jpg" class="card-img-top" alt="image">
        <div class="card-body">
            <h6 class="card-subtitle">Tiếp tục học</h6>
            <h5 class="card-title">Toán 5: Bài 9 Hỗn số</h5>
            <p class="card-text">
                Mô tả sơ sơ
            </p>
            <a href="app-components.html" class="btn btn-primary">
                <ion-icon name="cube-outline"></ion-icon>
                Vào học
            </a>
        </div>
    </div>
</div>
@endsection
