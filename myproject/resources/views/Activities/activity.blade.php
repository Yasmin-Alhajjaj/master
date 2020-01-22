@extends('layouts.app')

@section('content')

    <div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

        @foreach($activity as $activities)
            <!-- Intro Item -->
                <div class="intro_item" >
                <!-- {{--                    <a href="/{{$events->id}}/info">--}} -->
                    <a href="{{route('comment.show',['id' => $activities->id])}}">

                        <div class="intro_image"><img src="{{asset('storage').'/'.$activities->photo}}" alt=""></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="#">{{$activities->name}}</a></div>
                            <div class="intro_subtitle">{{$activities->description}}</div>
                            <div class="intro_subtitle">{{$activities->location}}</div>

                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>


@endsection
