@extends('layouts.pwa.page')
@section('pageTitle')
    Lesson Detail
@endsection
@section('content')

<div class="section full mt-1 mb-2">
    <div class="section-title mb-2"><b>Bài giảng :</b> Demo bài học online </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/yccR3LLAQt8" allowfullscreen></iframe>
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
                            LÀM THẾ NÀO ĐỂ HỌC GIỎI? | CÁCH HỌC NHÀN MÀ HIỆU QUẢ | GrowwithMoth
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
                            Mình đã nhận được rất nhiều câu hỏi về cách mình học cũng như request cho một video về chủ đề này, nên ngày hôm nay chúng mình sẽ cùng nhau nói về chuyện học hành, cũng như cách học hiệu quả mà nhàn nhất có thể nhé. Mình không phải người học giỏi hay xuất chúng gì đâu :))) Mình chỉ có thể nói rằng mình học khá hiệu quả và tiếp thu được những gì mình muốn học thôi. Mình càng không phải người thông minh gì cho cam nữa. Nên chắc chắn là nếu những bí quyết để học giỏi này có thể giúp mình, chúng cũng sẽ có thể giúp bạn học tập hiệu quả mà lại tốn ít thời gian hơn đấy. Chúc các bạn thành công!
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
