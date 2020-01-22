@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

        <center>   <div class="col-md-4" style="padding:15px;">
                    <div style="display:inline-block; border:solid 1px #808080; padding:15px;color: black">
                        <div>
                            <img class="img-fluid" alt="eCommerce Product List" src="{{asset('storage').'/'.$activity->photo}}" />
                            <br />
                            @if ($activity->price ==0)

                            <h2 class="float-xs-right" style="color: #2fa360" >Free Event</h2>
                            @else
                            <h2 class="float-xs-right" >${{$activity->price}}</h2>
                            @endif
                            <h2>{{$activity->name}}</h2>
                            <br />
                            <p class="text-justify">{{$activity->description}}</p>
                        </div>
                        <br />
                        <div class="ratings text-xs-center">

                            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$activity->location}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/private-internet-access-coupon/">privateinternetaccess</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                        </div>
                        <br>
                        {{-- <h3 class="text-justify">Event Date : {{$activity->date}}</h3> --}}
                        <h3 class="text-justify"> activity Time :  {{$event->time}} </h3>
                        <br />
                        <div class="btn-ground text-xs-center" style="padding-bottom: 30px">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal1"><i class="fa fa-shopping-cart"></i> Buy Tickets</button>
{{--                            <button type="button" class="fa fa-shopping-cart" data-toggle="modal" data-target="#productmodal1"><i class="fa fa-info"></i> Book now</button>--}}
                        </div>
                    </div>
                </div>

        </center>
    </div>
        </div>

        <div class="modal fade" id="productmodal1" tabindex="-1" role="dialog" aria-labelledby="productmodal1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Close</h4>
                    </div>



                                <div class="card" style="margin: 1%">
                                    <div class="card-header">
                                        <div class="row">
                                            <h3 class="text-xs-center">Payment Details</h3>
                                            <img class="img-fluid cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" action="{{route('update_point',$event->id)}}">
                                            @method('PUT')
                                            @csrf                                            <div class="row">
                                                <div class="col-xs-12 col-lg-7" style="margin-left: 2%">
                                                    <div class="form-group">
                                                        <label>CARD NUMBER</label>
                                                        <div class="input-group">
                                                            <input min="10" max="16" type="tel" class="form-control" placeholder="Card Number" />
                                                            <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7">
                                                    <div class="form-group">
                                                        <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                        <input type="month" class="form-control" placeholder="MM / YY" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-5 col-md-5 float-xs-right">
                                                    <div class="form-group">
                                                        <label>CV CODE</label>
                                                        <input type="tel" class="form-control" placeholder="CVC" min="3" max="4"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-7 col-md-7" style="margin-left: 2%">
                                                    <div class="form-group">
                                                        <label>CARD OWNER</label>
                                                        <input type="text" class="form-control" placeholder="Card Owner Names" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button  class="btn btn-warning btn-lg btn-block">Process payment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                </div>
            </div>
        </div>



        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

        <script type="text/javascript">
            jQuery(function ($) {
                $('#rating1').shieldRating({
                    max: 5,
                    step: 1,
                    value: 3,
                    markPreset: false
                });
                $('#rating2').shieldRating({
                    max: 5,
                    step: 1,
                    value: 4,
                    markPreset: false
                });
                $('#rating3').shieldRating({
                    max: 5,
                    step: 1,
                    value: 2,
                    markPreset: false
                });
                $('#rating4').shieldRating({
                    max: 5,
                    step: 1,
                    value: 3,
                    markPreset: false
                });
                $('#rating5').shieldRating({
                    max: 5,
                    step: 1,
                    value: 4,
                    markPreset: false
                });
                $('#rating6').shieldRating({
                    max: 5,
                    step: 1,
                    value: 2,
                    markPreset: false
                });
            });
        </script>

        <style>
        </style>






<style>
    .comment-wrapper .panel-body {
        max-height:650px;
        overflow:auto;
    }
    .comment-wrapper .media-list .media img {
        width:64px;
        height:64px;
        border:2px solid #e5e7e8;
    }
    .comment-wrapper .media-list .media {
        border-bottom:1px dashed #efefef;
        margin-bottom:25px;
    }
</style>










{{--        <div class="card-footer text-muted">--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <ul  class="list-group list-group-flush">--}}

{{--                </ul>--}}
{{--            </div>--}}

{{--            @foreach($comment as $comments)--}}
{{--            <div class="card">--}}
{{--          <img src="{{asset('storage').'/'.$comments->user->user_image}}" width="30px"--}}
{{--               height="30px" />--}}
{{--                <div class="card-header">--}}
{{--                    {{$comments->user->name}}--}}
{{--                </div>--}}

{{--                <div class="card-body">--}}
{{--                    <blockquote class="blockquote mb-0">--}}
{{--                       <p style="width: 100%" class="list-group-item">{{$comments->description}} </p>--}}
{{--                       <footer class="blockquote-footer">{{$comments->created_at}} <cite title="Source Title"></cite></footer>--}}
{{--                    </blockquote>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            @endforeach--}}
<br>
            <form method="POST" action="{{route('comment.store') }}">


                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <hr>
                                    <ul class="media-list">
                                        @foreach($comment as $comments)
                                            <li class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="{{asset('storage').'/'.$comments->user->user_image}}" alt="" class="img-circle">
                                                </a>
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
                    <input type="hidden" name="event_id" value="{{ $event->id }}" />












                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Add Comment" />
                </div>
            </form>

        </div>
    </div>










@endsection
