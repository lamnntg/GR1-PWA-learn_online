@extends('layouts.pwa.page')
@section('pageTitle')
    Exam Content
@endsection
@section('content')

<div class="section full mt-1 mb-2">
    <div class="section-title">Bài thi :</div>
    <form action="{{ route('exam.post') }}" method="POST">
        @csrf
        <input type="text" name="exam_id" value="{{ $exam->id }}" hidden>
        @foreach ($exam->question as $count => $question)
        <div class="wide-block pt-2 pb-1">

            <p>Câu {{ $count +1 }} : {{ $question->question }}</p>
            @foreach ($question->examAnswer as $key => $answer)
            <div class="custom-control custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input" id="{{ $key }}{{ $count }}" name="answer_choose_id[]" value="{{ $answer->id }}">
                <label class="custom-control-label  @if($answer->correct_flag == 1) text-danger  @endif" for="{{ $key }}{{ $count }}" >{{ $answer->answer }}</label>
            </div>
            @endforeach
        </div>
        @endforeach

        <div class="wide-block pt-2 pb-2">
            <button type="submit" class="btn btn-primary btn-block">Nộp bài</button>
        </div>
    </form>
</div>

@endsection
