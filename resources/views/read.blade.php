 @extends('layouts.app')

    @section('content')
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"style="height:500px;" >
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000" style="height:500px;">
              <img src="https://www.oliversacks.com/os/wp-content/uploads/2015/04/DSC_6976-opt.jpg" style="height:85%;width:50%;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="5000"style="height:500px;">
              <img src="http://blogs.lse.ac.uk/lsereviewofbooks/files/2016/02/Books-for-Survey.jpg" style="height:85%;width:50%;" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="5000"style="height:500px;">
              <img src="https://www.incimages.com/uploaded_files/image/970x450/getty_172087268_107792.jpg"style="height:85%;width:50%;" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<div class="row">
  <div class="col-lg-4">
             <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Regents Restoration Drama</h5>
                <h6 class="card-subtitle mb-2 text-muted">NICHOLAS ROWE</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Next Page</a>
                <a href="#" class="card-link">I have read this</a>
              </div>
             </div>
           </div>
  <div class="col-lg-4">
             <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">The Wonderful LIFE and most surprizing ADVENTURES of ROBINFON CRUFOE</h5>
                <h6 class="card-subtitle mb-2 text-muted">A true Relation how he was at laft micraculoufly preferved by pirates</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Next Page</a>
                <a href="#" class="card-link">I have read this</a>
              </div>
             </div>
</div>
  <div class="col-lg-4">
             <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Grand Opera</h5>
                <h6 class="card-subtitle mb-2 text-muted">LIBERTTO:The original italian,fremch or german libertto with a correct english translation</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Next Page</a>
                <a href="#" class="card-link">I have read this</a>
              </div>
             </div> 
</div>
</div>
@endsection



