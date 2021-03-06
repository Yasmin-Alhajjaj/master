@extends('layouts.app')

@section('content')


<div class="alert alert-info">
    <strong>Info!</strong> To be able to register your activity, you must log on to the WebSite as a user.
  </div>

@if ($message = Session::get('success'))
        <div class="alert alert-success ">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($message = Session::get('notsuccess'))
        <div class="alert alert-danger alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <br>
    <div class="container card bg-light mb-3" >
        <br>
        <form method="post" action="{{route('activity.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name-activity">Name Activity</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name of activity" >
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Explain about your activity" >
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="city">City</label>
                <select  class="form-control" id="city" name="city" >
                    <option value="" disabled selected>Select your city</option>
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
                @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>



            <div class="form-group">
                <label for="location">Address of activity</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter link for your activity location" >
                @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label >phone number</label>
                <input type="text" name="phone" class="form-control" >
            </div>
            <div class="form-group">
                <label >time of open:</label>
                <input type="time" name="timeopen" min="1000-01-01"
                       max="3000-12-31"   style="display:inline" >
                       @error('timeopen')
                       <div class="alert alert-danger">{{ $message }}</div>
                       @enderror



                <label >time of close: </label>
                <input type="time" name="timeclose" min="1000-01-01"
                       max="3000-12-31"  >
                       @error('timeclose')
                       <div class="alert alert-danger">{{ $message }}</div>
                       @enderror

            </div>



            <div class="form-group">
                <label for="price">Price </label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price of activity" >
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">select category</label>
                <select  class="form-control" id="category" name="category_id" >
                    <option value="" disabled selected>Select your category</option>
                    @foreach ($cat as $cat )
                <option value="{{$cat->id}}">{{$cat->name}}</option>

                    @endforeach
                </select>
                @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Uplode image for activity</label>
                <input type="file" class="form-control-file" id="image" name="image" >
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- <div class="form-group">
                <label for="exampleFormControlFile1">Attach a license</label>
                <input type="file" class="form-control-file" id="image" name="image" >
            </div> -->



            <button type="submit" class="btn btn-success btn-block btn-group-lg mb-5">Submit</button>
        </form>








    </div>

@endsection
