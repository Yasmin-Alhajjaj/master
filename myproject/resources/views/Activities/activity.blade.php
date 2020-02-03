@extends('layouts.app')

@section('content')

<br><br>

@if(!empty($activity[0]->category_id))

<div class="container">
    {{-- $activity[0]->category_id --}}
        <form method="post" action="{{route('search',['id'=>$activity[0]->category_id] )}}">
            @csrf
            <select  class="form-control" id="city" name="city" >
                <option disabled selected value="">select your city</option>
                <option value="All">All</option>
                <option value="Amman" >Amman</option>
                <option value="Zarqa" >Zarqa</option>
                <option value="Irbid" >Irbid</option>
                <option value="Aqaba" >Aqaba</option>
                <option value="Mafraq" >Mafraq</option>
                <option value="Jerash" >Jerash</option>
                <option value="Karak" >Karak</option>
                <option value="Ajloun" >Ajloun</option>
                <option value="Tafilah" >Tafilah</option>
                <option value="salt" >salt</option>
                <option value="Madaba" >Madaba</option>
                <option value="Ma'an" >Ma'an</option>
            </select>
            <button class="btn btn-primary">Search</button>
        </form>
</div>
@endif
            <div class="intro">
            <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

        @foreach($activity as $activities)
            <!-- Intro Item -->
            <a href="{{route('comment.show',['id' => $activities->id])}}">

                <div class="intro_item" >
                <!-- {{--                    <a href="/{{$events->id}}/info">--}} -->

                        <div class="intro_image"><center><img src="{{asset('storage').'/'.$activities->photo}}" alt=""></center></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="#">{{$activities->name}}</a></div>
                            <div class="intro_subtitle">{{$activities->description}}</div>
                            <div class="intro_subtitle">{{$activities->location}}</div>

                        </div>
                </div>
                                    </a>

            @endforeach

        </div>
    </div>


@endsection
