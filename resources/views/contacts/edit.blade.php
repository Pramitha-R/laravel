@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a Contact</h1>
        <div class="alert alert-danger">
            <!-- your message here -->
        </div>
        <br /> 
        <form method="post" action="{{route('update',['id'=>$contact->id])}}">
            @method('PATCH')
            @csrf
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" value="{{$contact->first_name}}" />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value="{{$contact->last_name}}" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" value="{{$contact->email}}" />
         </div>
         <div class="form-group">
          <label for="city">City:</label>
          <input type="text" class="form-control" name="city" value="{{$contact->city}}" />
         </div>
         <div class="form-group">
          <label for="country">Country:</label>
          <input type="text" class="form-control" name="country" value="{{$contact->country}}" />
         </div>
         <div class="form-group">
          <label for="job_title">Job Title:</label>
          <input type="text" class="form-control" name="job_title" value="{{$contact->job_title}}" />
         </div>
         <br>
         <button type="submit" class="btn btn-primary">Update</button>
         </form>
    </div>
</div>
@endsection