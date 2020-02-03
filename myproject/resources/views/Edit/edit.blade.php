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

                                <form method="POST" action="{{route('activity.update',$active->id)}}">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                    </div>



                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab"
                                           href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Edit </a>
                                    </li>

                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                         aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">Name Activity</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->name}}" type="text" name="name"
                                                       class="form-control" id="name" aria-describedby="emailHelp"
                                                       placeholder="Edit Name">

                                            </div>


                                        </div>


                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">description</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->description}}" type="text" name="description"
                                                       class="form-control" id="description" aria-describedby="emailHelp"
                                                       placeholder="Edit description">
                                            </div>

                                        </div>
                                        <hr/>


                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">city</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <select  class="form-control" id="city" name="city" placeholder="Edit city">
                                                    <option value="{{$active->city}}" disabled selected>{{$active->city}}</option>
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


                                                {{-- <input value="{{$active->city}}" type="text" name="city"
                                                       class="form-control" id="city" aria-describedby="emailHelp"
                                                       placeholder="Edit city"> --}}
                                            </div>

                                        </div>
                                        <hr/>


                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">location</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->location}}" type="text" name="location"
                                                       class="form-control" id="location" aria-describedby="emailHelp"
                                                       placeholder="Edit location">
                                            </div>

                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->phone}}" type="text" name="phone"
                                                       class="form-control" id="phone" aria-describedby="emailHelp"
                                                       placeholder="Edit phone">
                                            </div>

                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">timeopen</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->timeopen}}" type="time" name="timeopen"
                                                       class="form-control" id="timeopen" aria-describedby="emailHelp"
                                                       placeholder="Edit timeopen">
                                            </div>

                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">timeclose</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->timeclose}}" type="time" name="timeclose"
                                                       class="form-control" id="timeclose" aria-describedby="emailHelp"
                                                       placeholder="Edit timeclose">
                                            </div>

                                        </div>
                                        <hr/>



                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">price</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input value="{{$active->price}}" type="text" name="price"
                                                       class="form-control" id="price" aria-describedby="emailHelp"
                                                       placeholder="Edit price">
                                            </div>

                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-6">
                                                <label style="font-weight:bold;">category</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <select  class="form-control" id="category" name="category_id" >
                    <option value="{{$active->category_id}}" selected >{{$active->category_id}}</option>
                    <option value="1">Doctors</option>
                    <option value="2">Restaurants</option>
                    <option value="3">Cars</option>
                    <option value="4">Beauty</option>
                    <option value="5">Hotels</option>
                    <option value="6">Banks And Financial</option>
                </select>
                                            </div>

                                        </div>
                                        <hr/>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
