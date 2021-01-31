@extends('template.main')
@section('content')
    <div>
        <section class="page-section clearfix">
            <div class="container">
              <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{$contenuH[0]->span}}</span>
                    <span class="section-heading-lower">{{$contenuH[1]->span2}}</span>
                  </h2>
                  <p class="mb-3">{{$contenuH[2]->monP}}
                  </p>
                  <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <section class="page-section cta">
            <div class="container">
              <div class="row">
                <div class="col-xl-9 mx-auto">
                  <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                      <span class="section-heading-upper">{{$contenuH[3]->span1Sec2}}</span>
                      <span class="section-heading-lower">{{$contenuH[3]->span2Sec2}}</span>
                    </h2>
                    <p class="mb-0">{{$contenuH[3]->monP2}}</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
    </div>
@endsection