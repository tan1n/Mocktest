@extends('layouts.user')

@section('content')
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">{{$total_test}}</h2>
                        <span class="desc">Total test's taken</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">{{$highest_mark}}</h2>
                        <span class="desc">Highest mark obtained</span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">{{$strong_chapter}}</h2>
                        <span class="desc">is your best performing chapter</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">{{$strong_subject}}</h2>
                        <span class="desc">is your best performing subject</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Statistics</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Test ID</th>
                            <th>Subject</th>
                            <th>Total Marks</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp
                        @foreach($stats as $stat)
                            <tr class="tr-shadow">
                                <td>{{$i++}}</td>
                                <td>{{$stat->test_id}}</td>
                                <td>{{$stat->subject->name}}</td>
                                <td>{{$stat->total_mark}}</td>
                                <td><a href="{{route('stats.show',$stat->test_id)}}" class="btn btn-success btn-block">View</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop