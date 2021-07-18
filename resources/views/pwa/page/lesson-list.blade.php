@extends('layouts.pwa.page')
@section('pageTitle')
    Lesson List
@endsection
@section('content')

<div class="section full mt-1 mb-2">
    <div class="section-title">Môn học: </div>
    <ul class="listview link-listview mb-2">

        <li class="multi-level">
            <a href="#" class="item">Link List</a>
            <!-- sub menu -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
            </div>
            <ul class="listview link-listview">
                <li>
                    <a href="#" class="item">
                        Item 1
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        Item 2
                        <span class="badge badge-primary">52</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="item">
                        Item 3
                        <span class="text-muted">Edit</span>
                    </a>
                </li>
            </ul>
            <!-- * sub menu-->
        </li>
    </ul>
</div>

@endsection
