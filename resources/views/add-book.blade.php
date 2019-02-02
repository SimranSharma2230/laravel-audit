@extends('layouts.app')

@section('content')
<div class="container">
<form  method="POST" action="{{url('/add-book')}}"  enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Book Name</label>
    


    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="book-name" placeholder="Book Name">
   
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Author Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="author-name" placeholder="Author Name">
  </div>
  <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
 
 </form></div>
@endsection