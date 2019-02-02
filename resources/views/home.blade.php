@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
  body{
        width:100%;
        height:100%;
    background-image:url(https://ebookfriendly.com/wp-content/uploads/2013/11/Letters-Flying-over-a-Book-540x405.jpeg);

  }
</style>
@section('content')

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="row">
  @foreach($books as $allbooks)
      <div class="col-md-4 col-sm-12 col-xs-6" style="padding-left:10%;">
          <br>
              
          <div class="card" style="width: 18rem;float:left;">
             
              <div class="card-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSm-U3UiCN8w-o1T47_ASXebAyXsb9Lk3oHrzcpsai-7FwX7h8">
                <h4 class="card-title">{{$allbooks['book-name']}}</h4>
                <h6 class="card-text">By:{{$allbooks['author-name']}}</h6>
                <br>
                <a href="/read" class="btn btn-primary">Read</a>
                <a href="/read" class="btn btn-primary">Borrow</a>
                
              </div>
            </div> 
         </div>
  @endforeach
     </div>
@endsection
