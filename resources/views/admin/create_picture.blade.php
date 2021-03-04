@extends('layouts.dashboard_base')

@section('styles')
    <link rel="stylesheet" href="/css/dropzone.css">
@endsection
<?php
use App\Models\Picture;
?>

@section('dashboard_main')

<div class="container">
    <h1>Képek feltöltése a(z) {{$product_id}}. termékhez</h1>
    @foreach ($errors->all() as $message)
        <div class="alert alert-danger">{{$message}}</div>
    @endforeach

    <?php
    $pictures = Picture::where('product_id', $product_id)->get();
    ?>
    <h5>Jelenlegi képek</h5>
       <div class="container mt-5 mb-5">
            @if($pictures)
                    @foreach($pictures as $picture)
                        <div class="row">
                                <div class="col photok-kijelzese-col">
                                    <a href="#"><img class="rounded" src="/uploads/{{$picture->file}}" alt="{{$picture->file}}" width="80"></a>
                                    <div class="form_delete">
                                        {!! Form::open(['route'=>['admin.pictures.delete',$picture->id],'method'=>'DELETE']) !!}
                                            {!! Form::submit('x', ['class'=>'btn btn-danger btn-sm btn-delete']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                       </div>
                    @endforeach
            @endif
        </div>
    <div class="container mt-4">
        {!! Form::open(['route'=>'admin.pictures.store','files' => true, 'class' => 'dropzone', 'id'=>'myImageDropzone']) !!}
            {!! Form::hidden('_method', 'POST') !!}
            {!! Form::hidden('product_id',$product_id) !!}
        {!! Form::close() !!}
    </div>

</div>
@endsection

@section('scripts')
    <script src="/js/dropzone.js"></script>
@endsection
