@extends('layouts.app')

@section('content')


    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
<style>
    .image-container {
        position: relative;
    }
    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .image-container:hover .image {
        opacity: 0.3;
    }
    .image-container:hover .middle {
        opacity: 1;
    }
</style>


    <script src="{{ asset('js/profile.js') }}"></script>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">

                                <!-- <div class="image-container">
                                    <img src="{{asset('storage').'/'.Auth::user()->user_image}}" id="imgProfile" style="width: 200px; height: 200px" class="img-thumbnail" />
                                    <br><br><br><br><br>                     
                                    <div class="middle">
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div> -->
                              


                                <br><br><br><br><br>                     
                                <br><br><br><br>                    

                                <div class="userData ml-3">
                                    <h1 class="d-block" style="font-size: 3.5rem; font-weight: bold"><a href="javascript:void(0);"> Hello {{ Auth::user()->name }}</a></h1>
                                </div>
                                
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>


                          
                               

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    

                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ Auth::user()->name }}
                                            </div>


                                        </div>


                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ Auth::user()->email }}
                                            </div>

                                        </div>
                                        <hr />

                                      


                                        @foreach($activity as $activities)
                <div class="intro_item" >

                        <div class="intro_image"><img src="{{asset('storage').'/'.$activities->photo}}" alt=""></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="#">{{$activities->name}}</a></div>

                        </div>
                        <hr/>
                    
                    <a  style="float: right" href="/edit/{{$activities->id}}" class="btn btn-warning">Edit This</a>

                </div>
            @endforeach

                                        <br><br>
                                        <br><br>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    


@endsection

