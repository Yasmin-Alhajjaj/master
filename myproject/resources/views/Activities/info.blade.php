@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

        <center>   <div  class="col-md-4" style="padding:15px;">
                    <div style="display:inline-block; border:solid 1px #808080; padding:15px;color: black">
                        <div>
                            <img class="img-fluid" alt="non" src="{{asset('storage').'/'.$activity->photo}}" />
                            <br />

                            <h2>{{$activity->name}}</h2>
                            <br />
                            <p class=" float-xs-right">{{$activity->description}}</p>
                        </div>
                        <br />

                        @if ($activity->price >0)
                         <p class="text-justify" >the price :{{$activity->price}}</p>
                        @endif

                        <p class="text-justify">timeopen: <spam style="color:black"> {{$activity->timeopen}} </spam> </p>
                        <p class="text-justify">timeclose: <spam style="color:black"> {{$activity->timeclose}} </spam> </p>
                        <br />


                        <div class="ratings text-xs-center">

                            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$activity->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/private-internet-access-coupon/">privateinternetaccess</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                        </div>
                        <br>
                        <!-- {{-- <h3 class="text-justify">activity Date : {{$activity->date}}</h3> --}} -->

                        <!-- {{-- <div class="btn-ground text-xs-center" style="padding-bottom: 30px">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal1"><i class="fa fa-shopping-cart"></i> Buy Tickets</button>
                        </div> --}} -->
                    </div>
                </div>

        </center>



<style>

    .comment-wrapper .media-list .media {
        border-bottom:1px dashed #dddddd;
        margin-bottom:25px;
    }
</style>



<br>
            <form method="POST" action="{{route('comment.store') }}">


                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <hr>
                                    <ul class="media-list">
                                        @foreach($comment as $comments)
                                            <li class="media">

                                                <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">{{$comments->created_at}} </small>
                                </span>
                                                    <strong class="text-success">@ {{$comments->user->name}}</strong>
                                                    <p>
                                                        {{$comments->description}}                                    </p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>


                @csrf
                <div class="form-group">
                    <input type="text" style="height: 100px" name="description"  class="form-control" placeholder="Add comment"/>
                    <input type="hidden" name="activity_id" value="{{ $activity->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Add Comment" />
                </div>
            </form>











@endsection
