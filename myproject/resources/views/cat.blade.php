@extends('layouts.app')

@section('content')

    <br>
    <div class="container card bg-light mb-3" >
        <br>
        <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name-activity">Name Category</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name of category" >
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Explain about category" >
                @error('description')
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

          
            <button type="submit" class="btn btn-success btn-block btn-group-lg mb-5">Submit</button>
        </form>



     




    </div>

@endsection
