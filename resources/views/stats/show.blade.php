@extends('layouts.user')

@section('content')

@include('users.path')

<div class="container">
    <div class="row">
        <div>
            <p>Total Marks: {{$result}} </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Chapter</th>
                            <th>Question</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($stats as $stat)
                            <tr class="tr-shadow">
                                <td>{{$stat->chapter->name}}</td>
                                <td>{{$stat->question->question}}</td>
                                <td>{{$stat->question->correct_ans}}</td>
                                <td>
                                    @if($stat->mark==0)
                                        Wrong
                                    @else
                                        Right
                                    @endif
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop