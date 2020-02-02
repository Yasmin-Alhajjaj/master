@extends('layouts.app')

@section('content')

<br><br>
<div class="container">
            <select  class="form-control" id="city" name="city" >
                <option value="" disabled selected>Search in your city</option>
                <option>Amman</option>
                <option>Zarqa</option>
                <option>Irbid</option>
                <option>Aqaba</option>
                <option>Mafraq</option>
                <option>Jerash</option>
                <option>Karak</option>
                <option>Ajloun</option>
                <option>Tafilah</option>
                <option>salt</option>
                <option>Madaba</option>
                <option>Ma'an</option>
            </select>
</div>
            <div class="intro">
            <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

        @foreach($activity as $activities)
            <!-- Intro Item -->
                <div class="intro_item" >
                <!-- {{--                    <a href="/{{$events->id}}/info">--}} -->
                    <a href="{{route('comment.show',['id' => $activities->id])}}">

                        <div class="intro_image"><center><img src="{{asset('storage').'/'.$activities->photo}}" alt=""></center></div>
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
