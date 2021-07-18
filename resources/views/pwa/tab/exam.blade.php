@extends('layouts.pwa.tab')
@section('pageTitle')
    Exam
@endsection
@section('content')

<div class="header-large-title">
    <h1 class="title">Bài Thi Môn {{ \App\Models\Subject::$subject[request()->id] }}</h1>
</div>
<div class="section full mb-2">
    <div class="section-title">Danh sách bài thi của bạn</div>
    <div class="wide-block p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Điểm số</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $key => $exam)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            @if ($exam->completed_at)
                                <td>{{$exam->score}}/{{$exam->question->count()}}</td>
                                <td><a href="{{ route('exam.result', ['examId' => $exam->id])}}" class="btn-sm btn-primary mr-1 mb-1">Resuilt</a></td>
                            @else
                                <td>{{'Unfinished'}}</td>
                                <td><a href="{{ route('exam.take', ['examId' => $exam->id])}}" class="btn-sm btn-danger mr-1 mb-1">Test</a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- buton create exam --}}
<div class="section full mt-3">
    <div class="section-title">Cấu hình bài thi</div>
        {{-- list action --}}
    <ul class="listview link-listview">
        <li><a href="#" data-toggle="modal" data-target="#ModalForm">Tạo cấu hình bài thi</a></li>
    </ul>
    <ul class="listview link-listview mb-2">
        <li class="multi-level">
            <a href="#" class="item">Danh sách cấu hình
                <span class="badge badge-primary">{{ $examConfigrations->count() }}</span>
            </a>
            <ul class="listview link-listview">
                @foreach ($examConfigrations as $examConfig)
                <li>
                    <a href="#" class="item">
                        {{ $examConfig->name }}
                        <span class="text-muted">Edit</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </li>
    </ul>
</div>
<div class="section full mt-2">
    <div class="section-title">Tạo bài thi</div>
    <div class="wide-block pt-2 pb-2">
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#chooseExamConfig">Create Exam</button>
    </div>
</div>

<!-- Modal Form -->
<div class="modal fade modalbox" id="ModalForm" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tạo cấu hình bài thi</h5>
                <a href="javascript:;" data-dismiss="modal">Close</a>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <div class="section mt-2">
                        <h1>Learn Online</h1>
                        <h4>Fill the form </h4>
                    </div>
                    <div class="section mt-4 mb-5">
                        <form action="{{ route('exam.config.create') }}" method="POST">
                            @csrf
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="name">Tên cấu hình</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Tên cấu hình" name="name" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <label class="label" for="question_category_id">Chủ đề câu hỏi</label>
                                    <select class="form-control custom-select" id="question_category_id" name="question_category_id">
                                      @foreach ($questionCategories as $questionCategory)
                                        <option value="{{ $questionCategory->id }}">{{ $questionCategory->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <label class="label" for="question_degree_id">Độ khó</label>
                                    <select class="form-control custom-select" id="question_degree_id" name="question_degree_id">
                                      @foreach ($questionDegrees as $questionDegree)
                                        <option value="{{ $questionDegree->id }}">{{ $questionDegree->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="quota">Số lượng câu hỏi</label>
                                    <input type="number" class="form-control" id="quota"
                                        placeholder="Số lượng câu hỏi" name="quota" required>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">
                                    Create Exam Config</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Modal Form -->

<!-- Default Action Sheet Inset -->
<div class="modal fade action-sheet inset" id="chooseExamConfig" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Chọn cấu hình bài thi</h5>
            </div>
            <div class="modal-body">
                <ul class="action-button-list">
                    @foreach ($examConfigrations as $examConfig)
                    <li>
                        <form action="{{ Route('exam.create') }}" method="POST">
                            @csrf
                            <input type="number" name="subject_id" value="{{ request()->id }}" hidden>
                            <input type="number" name="exam_config_id" value="{{ $examConfig->id }}" hidden>
                            <button type="submit" class="btn btn-list text-primary">{{ $examConfig->name }}</button>
                        </form>
                    </li>
                    @endforeach
                    <li class="action-divider"></li>
                    <li>
                        <a href="#" class="btn btn-list text-danger" data-dismiss="modal">
                            <span>Close</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- * Default Action Sheet Inset -->
@endsection
