@extends('page_layouts.base_welcome')

@section('main_welcome')
    @php
        use App\Models\Picture;
    @endphp

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">

        <div class="container text-center mb-3"><h1>Legújabb termékeink</h1></div>

        @foreach ($new_products as $product)
            <div class="col-lg-4">
                @php
                    $photo = Picture::where('product_id',$product->id)->first();
                    $photo_file = '/uploads/' . $photo->file;
                @endphp
                <img src="{{ $photo_file }}" alt="{{ $product->name }}">
                <h2>{{ $product->name }}</h2>
                <p calss="text-truncate">{{ $product->description }}</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        @endforeach


    </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 mh-100">
                <h2 class="featurette-heading">Nem mindegy, hogy hol terem a növény. <span class="text-muted"> Amit a paprikáról tudni kell, azt mi tudjuk.... </span></h2>
                <p class="lead">
                    A Gurmano termékekhez főleg a Pelagonija régióban termesztett alapanyagokat használjuk. A Crna és Krushevska Reka folyók tiszta vízéhez való
                    hozzáférés egész évben lehetővé teszi, hogy ez a régió kivételesen alkalmas legyen a kerti növények termesztésére. Közülük a "Kurtovska Kapija"
                    (Capsicum annuum var. Annuum (Grossum Group) "Kurtovska kapija" paprika, amely édes, húsos és lapos zöldség, jelentős mennyiségű vitaminnal, cukorral
                    és fehérjével, a legtöbb termék fő összetevője a Gurmano termékeknek.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid shadow" src="/images/feature/worker_english.jpg" alt="Kedvvel teli munka">

            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">A Gurmano termékek eredete. <span class="text-muted">Csak a legjobb dolgok időtállóak...</span></h2>
                <p class="lead">Vidéken található a „Krivogashtani Promet” társaság, amelyet 1990-ben alapítottak,
                    és a természet előírása szerint működik. Az eredeti receptek felhasználásával, valamint a biztonsági és minőségi
                    előírások betartásával készített házi készítésű hagyományos finomságok évek óta jelen vannak Ausztrália, az Egyesült
                    Államok és Európa piacain. Végül több mint 20 év elteltével a Társaság összes termékét egyetlen márkanév alatt egyesítette,
                    így piacra dobta: a Gurmano-t.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/images/logo/svg/logo.svg" alt="Gurmano logo" height="500">

            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">A termékekről. <span class="text-muted"> Minden esetben...</span></h2>
                <p class="lead">
                    Szeretettel és odaadással készülnek, mert továbbra is eredeti házi recepteket alkalmazunk a legfinomabb finomságokhoz.
                    A Gurmano termékek finom ízegyensúlya kielégíti a legigényesebb ínyencek kritériumait is.
                    Salátaként és előételként vagy főételként - nemcsak étvágyat ébreszt, de felkorbácsolja még a legínyencebb fantáziát is.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid shadow" src="/images/feature/battered_peppers.jpg" alt="Nem csak ínyenceknek">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

@endsection
