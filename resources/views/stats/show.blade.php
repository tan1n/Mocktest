@extends('layouts.user')

@section('content')
    <div class="card">
        <div class="card-header">
            Total Marks: {{$result}}
        </div>
        <div class="card-body">
            <table class="table table-responsive-lg table-bordered">
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
                                <span style="color: red;">Wrong</span>
                            @else
                                <span style="color: forestgreen">Right</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
