@extends('layouts.test')


@section('content')


<style>
    .questions ol li
    {
        margin: 25px 25px 25px 0px;
        float:left;
        list-style-position: inside;
    }
</style>

<div class="container mb-2">
    <div class="row">
        <h3>Mocktest ID: {{$test_id}}</h3>
    </div>
</div>

<div class="container questions">
    <form action="{{route('submit')}}" method="post">
    @csrf
    <input type='hidden' name='test_id' value={{$test_id}}>
    @php $i=1; @endphp
    @foreach($questions as $question)
            <div class='row'>
                <p><span>Question No:{{$i++}} | <b> {{$question->question}} </b></span></p>
            </div>
            <div class='row'> 
                <ol>
                    <li>{{$question->opt_1}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->opt_1}}"></li>
                    <li>{{$question->opt_2}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->opt_2}}"></li>
                    <li>{{$question->opt_3}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->opt_3}}"></li>
                    <li>{{$question->correct_ans}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->correct_ans}}"></li>
                </ol>
            </div>
    @endforeach
        <div class='row mb-5'>
            <button type='submit' class='btn btn-success btn-block'>Finish</button>
        </div>
    </form>
</div>

@endsection