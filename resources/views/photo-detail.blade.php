@extends('layoutss.main') 
@section('content')
<body>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ ('assets/img/adem.png') }}">
        {{-- <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form> --}}
        <h1 style="color: #fbda9e; font-size: 60px; font-style:oblique; text-decoration: underline; ">"TERASA LEBIH BAIK KETIKA BERSAMA"</h1>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                All Photos
            </h2>
            {{-- <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div> --}}
        </div>

        {{-- <div class="container-fluid pt-5 pb-3">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    @foreach
                    <div></div>
                    @endforeach
                </div>
            </div>
        </div>  --}}





        
        <div class="row tm-mb-90 tm-gallery">
        	{{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/americanoCoffe.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>americano Coffe</h2>
                        <a href="/photo-detail">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">18 Oct 2020</span>
                    <span>9,906 views</span>
                </div>
            </div> --}}
            <div class="row">
                @foreach ($photo as $photo)
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card" style="width: 100%; position: relative;">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="{{ asset('storage/' . $photo->LokasiFile) }}" alt="" style="width: 100%;">
                            <div class="card-body bg-light text-center">
                                <h4>{{ $photo->JudulFoto }}</h4>
                                <div class="d-flex justify-content-center mb-3">
                                    {{-- <small class="mr-3"><i class="fa fa-user text-primary">{{ $photo->user->full_name }}</i></small> --}}
                                    {{-- <small class="mr-3"><i class="fa fa-folder text-primary">{{ $photo->user->album_name }}</i></small> --}}
                                    <small class="mr-3"><i class="fa fa-comments text-primary">15</i></small>
                                    {{-- <small id="like-icon-{{ $photo->FotoID }}" class="mr-3 like-icon" data-photo-id="{{ $photo->FotoID }}"><i class="fa fa-heart text-primary"></i></small> --}}
                                    <small class="mr-3 like-icon"><a href="/initial-view/detail-photo/{{$photo->photoId}}/like"><i class="fa fa-heart text-primary">{{$like}}</i></a></small>
                                </div>
                                <p>{{ $photo->DeskripsiFoto }}</p>
                                <a href="" class="btn btn-primary px-4 mx-auto my-2"> nkjhuyf</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/susuAren.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Kopi Susu Aren</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Oct 2020</span>
                    <span>12,460 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/susuAdem.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Kopi Susu Adem</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">10 Oct 2020</span>
                    <span>11,402 views</span>
                </div>
            </div>
            
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/bobaBrownsugar.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Boba Brown Sugar</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">24 Sep 2020</span>
                    <span>16,008 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/premiumMatcha.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Premium Matcha</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">20 Sep 2020</span>
                    <span>12,860 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/matchaChocolate.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Matcha Chocolate</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">16 Sep 2020</span>
                    <span>10,900 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/creamyWihitevizy.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Creamy White Vizy</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Sep 2020</span>
                    <span>11,300 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/kopiAntik.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Kopi Antik</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">10 Sep 2020</span>
                    <span>42,700 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/Espresso.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Espresso</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">8 Sep 2020</span>
                    <span>11,402 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/creamyThaitea.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Creamy Thai Tea</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">4 Sep 2020</span>
                    <span>32,906 views</span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ ('assets/img/yogurtBlueberrycheese.jpg') }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>Yogurt Blueberry Cheese</h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">28 Aug 2020</span>
                    <span>50,700 views</span>
                </div>
            </div>        --}}
        </div> 


        <!-- row -->
        {{-- <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div> --}}
    </div> <!-- container-fluid, tm-container-content -->

</body>
@endsection