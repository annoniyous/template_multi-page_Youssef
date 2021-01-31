@extends('template.main')
@section('content')
    <div>
        <section class="page-section">
            <div class="container">
              <div class="product-item">
                <div class="product-item-title d-flex">
                  <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                      <span class="section-heading-upper">{{$contenuP[0]->span1}}</span>
                      <span class="section-heading-lower">{{$contenuP[0]->span2}}</span>
                    </h2>
                  </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-01.jpg" alt="">
                <div class="product-item-description d-flex mr-auto">
                  <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{$contenuP[0]->monp1}}</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <section class="page-section">
            <div class="container">
              <div class="product-item">
                <div class="product-item-title d-flex">
                  <div class="bg-faded p-5 d-flex mr-auto rounded">
                    <h2 class="section-heading mb-0">
                      <span class="section-heading-upper">{{$contenuP[1]->span1}}</span>
                      <span class="section-heading-lower">{{$contenuP[1]->span2}}</span>
                    </h2>
                  </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-02.jpg" alt="">
                <div class="product-item-description d-flex ml-auto">
                  <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{$contenuP[1]->monp1}}</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <section class="page-section">
            <div class="container">
              <div class="product-item">
                <div class="product-item-title d-flex">
                  <div class="bg-faded p-5 d-flex ml-auto rounded">
                    <h2 class="section-heading mb-0">
                      <span class="section-heading-upper">{{$contenuP[2]->span1}}</span>
                      <span class="section-heading-lower">{{$contenuP[2]->span2}}</span>
                    </h2>
                  </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-03.jpg" alt="">
                <div class="product-item-description d-flex mr-auto">
                  <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{$contenuP[2]->monp1}}</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
    </div>
@endsection