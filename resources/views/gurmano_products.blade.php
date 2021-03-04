@extends('page_layouts.base')

@section('main')
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 p-4">
                <div class="card border-0" >
                    <img src="/images/feature/svg/sour.svg" class="card-img-top" alt="Hagyományos savanyúságok logo" height="150">
                    <div class="card-body">
                      <h5 class="card-title">Hagyományos savanyúságok</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="/products/gurmano/sour" class="btn btn-primary">Megnézem</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-4">
                <div class="card border-0" >
                    <img src="/images/feature/svg/roasted.svg" class="card-img-top" alt="Delikát sült termékek logo" height="150">
                    <div class="card-body">
                      <h5 class="card-title">Delikát sült termékek</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="/products/gurmano/roasted" class="btn btn-primary">Megnézem</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 p-4">
                <div class="card border-0" >
                    <img src="/images/feature/svg/cheese.svg" class="card-img-top" alt="Sajttal készített termékek logo" height="150">
                    <div class="card-body">
                      <h5 class="card-title">Sajttal készített termékek</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="/products/gurmano/cheese" class="btn btn-primary">Megnézem</a>
                    </div>
                </div>

            </div>
        </div>

        <hr class="featurette-divider">
        <div class="container text-center bg-light p-4">
            <h2>Összes termék</h2>
        </div>

        <div class="row">
            @foreach($gurmano_products as $product)
                <div class="col-lg-6">
                    <div class="card mb-3 border-0" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5 mt-auto pb-5">
                                <img class="img-fluid" src="/uploads/{{ $product->pictures()->first()->file }}" alt="{{ $product->name }}" height="100">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                <h5 class="card-title">{{ $product->name }} - {{ $product->size }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text"><small class="text-muted">Gyártó:{{ $product->producer }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
