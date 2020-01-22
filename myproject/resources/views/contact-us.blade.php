@extends('layouts.app')

@section('content')
    <br>
    <div class="container card bg-light mb-3" >
        <br>
        <form method="post" action="{{route('activity.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name-event">Name Event</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name of event" >
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" class="form-control" id="des" name="des" placeholder="Explain about your Event" >
            </div>
            <div class="form-group">
                <label for="location">location of event</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter link for your Event location" >
            </div>

            {{-- <div class="form-group">
                <label >date fo event</label>
                <input type="date" name="date" max="3000-12-31"
                       min="1000-01-01" class="form-control" >
            </div> --}}
            <div class="form-group">
                <label >time of open:</label>
                <input type="time" name="time" min="1000-01-01"
                       max="3000-12-31"   style="display:inline" >
                <label >time of close: </label>
                <input type="time" name="time" min="1000-01-01"
                       max="3000-12-31"  >

            </div>



            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter the price of Event" >
            </div>

            <div class="form-group">
                <label for="category">select category</label>
                <select  class="form-control" id="category" name="category_id" >
                    <option value="" disabled selected>Select your category</option>
                    <option value="1">Doctors</option>
                    <option value="2">Restaurants</option>
                    <option value="3">Hotels</option>
                    <option value="4">Cars</option>
                    <option value="5">Banks And Financial</option>
                    <option value="6">Beauty</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Uplode image for activity</label>
                <input type="file" class="form-control-file" id="image" name="image" >
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Attach a license</label>
                <input type="file" class="form-control-file" id="image" name="image" >
            </div>



            <button type="submit" class="btn btn-success btn-block btn-group-lg mb-5">Submit</button>
        </form>


        {{-- <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div> --}}
    </div>

@endsection
