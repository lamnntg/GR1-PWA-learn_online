@extends('layouts.pwa.page')
@section('pageTitle')
    Course Detail
@endsection
@section('content')

<div class="section full mt-1 mb-2">
    <div class="section-title mb-2"><b>Bài giảng :</b> {{ $course->name }} </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{ $course->video_url }}" allowfullscreen></iframe>
        </div>

        <div class="section full mt-4 mb-2">
            <div class="section-title">Description</div>

            <div class="accordion" id="accordionExample3">

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion001">
                            <ion-icon name="help-circle-outline"></ion-icon>
                            About
                        </button>
                    </div>
                    <div id="accordion001" class="accordion-body collapse" data-parent="#accordionExample3">
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                            lacinia
                            ex quis, condimentum erat. Nullam a ipsum lorem.
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#accordion002">
                            <ion-icon name="document-outline"></ion-icon>
                            Detail
                        </button>
                    </div>
                    <div id="accordion002" class="accordion-body collapse" data-parent="#accordionExample3">
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                            lacinia
                            ex quis, condimentum erat. Nullam a ipsum lorem.
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="accordion-header">
                        <button class="btn" type="button" data-toggle="collapse" data-target="#accordion003">
                            <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                            Comment
                        </button>
                    </div>
                    <div id="accordion003" class="accordion-body collapse show" data-parent="#accordionExample3">
                        <div class="accordion-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                            lacinia
                            ex quis, condimentum erat. Nullam a ipsum lorem.
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>

@endsection
