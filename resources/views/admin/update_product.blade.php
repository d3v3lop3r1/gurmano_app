@extends('layouts.dashboard_base')

@section('dashboard_main')
    @php
        $groups = config('product_group');
        $producers = config('product_producer');
        $product = $prod->first();
        //dd($prod);
    @endphp
    <div class="container">
        <h1><strong>ID-{{ $id }} {{ $product->name }} szerkesztése</strong></h2>
        <br>
        @foreach ($errors->all() as $message)
            <div class="alert alert-danger">{{$message}}</div>
        @endforeach
        {!! Form::model($product,['method'=>'PATCH','route'=>['admin.products.update',$id]]) !!}
        {!! Form::token() !!}

            <div class="form-group">
                {{ Form::label('Termékcsoport', null, ['class' => 'control-label']) }}
                {{ Form::select('group', $groups, null,['class' => 'form-select']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Gyártó', null, ['class' => 'control-label']) }}
                {{ Form::select('producer', $producers, null, ['class' => 'form-select']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Új termék', null, ['class' => 'control-label']) }}
                {{ Form::select('is_new', [[0=>'nem',1=>'igen']], null, ['class' => 'form-select']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Terméknév', null, ['class' => 'control-label']) }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Változat', null, ['class' => 'control-label']) }}
                {{ Form::text('variant', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Készlet(db)', null, ['class' => 'control-label']) }}
                {{ Form::number('pcs', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Leírás', null, ['class' => 'control-label']) }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Rövid leírás', null, ['class' => 'control-label']) }}
                {{ Form::textarea('short_description', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Méret', null, ['class' => 'control-label']) }}
                {{ Form::text('size', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Összetevők', null, ['class' => 'control-label']) }}
                {{ Form::textarea('ingredients', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Kiskerár(bruttó) Ft', null, ['class' => 'control-label']) }}
                {{ Form::number('price_1', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Nagykerár(nettó) Ft', null, ['class' => 'control-label']) }}
                {{ Form::number('price_2', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Egyedi ár(nettó) Ft', null, ['class' => 'control-label']) }}
                {{ Form::number('price_3', null, ['class' => 'form-control']) }}
            </div>

            <div class="mt-3 text-end">
                {!! Form::submit('mentés', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>

@endsection
