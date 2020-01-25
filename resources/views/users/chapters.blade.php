@extends('layouts.user')

@section('content')

<div class="container">
@foreach($chapters as $chapter)
    <div class="column">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$chapter->name}}  </h3>
                    <div class="text-center md-4">
                        <p  style="text-align: left"></p
                    </div>
                    <div class="float-right md-4">
                        <div class="mytooltip">
                            <i class="fas fa-trophy">1</i>
                            <span class="mytooltiptext">
                                Your Rank
                            </span>
                        </div>
                        <div class="mytooltip">
                            <i class="fas fa-question">{{count($chapter->totalQuestion)}}</i>
                            <span class="mytooltiptext">
                                Total Question
                            </span>
                        </div>
                        <div class="mytooltip">
                            <i class="fas fa-question-circle">{{count($chapter->completedQuestion)}}</i>
                            <span class="mytooltiptext">
                                Question Answered
                            </span>
                        </div>
                    </div>
                    <form action={{route('mocktest',Crypt::encrypt($chapter->id))}} method='post'>
                        @csrf
                        <div class="float-left" style="margin-top:30px"> <button class="btn btn-sm animated-button gibson-three">START TEST</button> </div>
                    </form>
             </div>
        </div>
    </div>
    @endforeach
    {{$chapters->links()}}
</div>
@stop