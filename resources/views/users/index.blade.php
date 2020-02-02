@extends('layouts.user')

@section('css')
        <link rel="stylesheet"  type="text/css" href="{{asset('/css/index_page.css')}}">
@endsection

@section('title','Home')

@section('content')
        @php $i=1 @endphp
        <div class="row">
        @foreach($subjects as $subject)
                <div class="card-container col-md-4">
                        <div class="card">
                            <img src="{{asset('storage/'.$subject->image)}}" height="350px" width="100%" style="position:absolute;z-index: 0;">
                            <div class="card-count-container" style="position:relative;">
                            <div class="card-count" >{{$i++}}</div>
                                <a href="{{route('subject.show',$subject->id)}}" class="stretched-link"></a>
                            </div>
                            <div class="card-footer" style="position:relative;">
                                    <span>{{$subject->name}}</span>
                                    {{$subject->description}}
                            </div>
                    </div>
                </div>
        @endforeach
        </div>
        {{$subjects->links()}}
@stop
