@extends('layouts.app')

@section('content')

    <div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

        @foreach($category_list as $list)
            <!-- Intro Item -->

                <div class="intro_item" >
                    <a href="{{route('activity.show',['id' => $list->id])}}">
                        <div class="intro_image"><img height="250px" width="100%" src="{{asset('storage').'/'.$list->photo}}" alt=""></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="#">{{$list->name}}</a></div>
                            <div class="intro_subtitle">{{$list->description}}</div>
                        </div>
                    </a>
                </div>


            @endforeach

        </div>
    </div>
@endsection
