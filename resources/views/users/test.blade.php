@extends('layouts.user')


@section('content')



    <form action="{{route('submit')}}" method="post">
    @csrf
    <input type='hidden' name='test_id' value={{$test_id}}>
    @php $i=1; @endphp
    @foreach($questions as $question)

            <div style="text-align: center; padding: 10px;">
                <h3 class="title">{{$i++}}: {{$question->question}}</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="card  col-md-6 custom_question">
                   <span> {{$question->opt_1}} <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->opt_1}}"> </>
                    </div>
                    <div class="card col-md-6 custom_question">
                   <span> {{$question->opt_2}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->opt_2}}"></span>
                    </div>
                </div>
              
              <div class="row">
                    <div class="card  col-md-6 custom_question">
                    <span>{{$question->opt_3}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->opt_3}}"></span>
                    </div>
                    <div class="card  col-md-6 custom_question">
                   <span> {{$question->correct_ans}}  <input type="radio" name="question[Q{{$question->id}}]"   value="{{$question->correct_ans}}"></span>
                    </div>
                </div>
                
            </div>
       
    @endforeach
        <div class='row mb-5'>
            <button type='submit' class='btn btn-success btn-block'>Finish</button>
        </div>
    </form>


@endsection