@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

@section('content')
        

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
 <center>
                    <div class="row" >
            <div class="col-md-4 col-sm-12 col-xs-6" style="padding-left:10%;">
              <div class="card" style="width: 18rem;float:left;">
              <img src="https://covers.openlibrary.org/w/id/8242377-L.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> Restoration Drama</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/read" class="btn btn-primary">Read</a>
              </div>
            </div> 
            </div>

            <div class="col-md-4 col-sm-12 col-xs-6" style="padding-left: 5%;">
            <div class="card" style="width: 18rem;">
              <img src="https://ia600605.us.archive.org/zipview.php?zip=/10/items/olcovers611/olcovers611-L.zip&file=6113465-L.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">The Wonderful LIFE and most surprizing ADVENTURES of ROBINFON CRUFOE</h5>
                <p class="card-text"></p>
                <a href="/read" class="btn btn-primary">Read</a>
              </div>
            </div>   
            </div>
            <div class="col-md-4 col-sm-12 col-xs-6">
                    <div class="card" style="width: 18rem;">
              <img src="https://covers.openlibrary.org/w/id/8243672-L.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Grand Opera</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/read" class="btn btn-primary">Read</a>
              </div>
            </div>     
            </div>
            </div>
</center>
@endsection
