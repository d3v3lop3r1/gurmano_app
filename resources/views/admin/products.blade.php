@extends('layouts.dashboard_base')

@section('dashboard_main')
    <h1>Termék lista</h1>
    @if (!isset($products) && $products->whenEmpty)
        <h1 class="alert alert-danger">Nincs még termék az adatbázisban!<h1/>
    @else()
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Termékcsoport</th>
            <th scope="col">Gyártó</th>
            <th scope="col">Új</th>
            <th scope="col">Név</th>
            <th scope="col">Változat</th>
            <th scope="col">Kiszerelés</th>
            <th scope="col">Ár</th>
            <th scope="col">Raktárkészlet</th>
            <th scope="col">Képek</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row"><a href="/admin/products/{{ $product->id }}">{{ $product->id }}</a></th>
                    <td>{{ $product->group }}</td>
                    <td>{{ $product->producer }}</td>
                    <td>{{ ($product->is_new)?'x':' ' }}</td>
                    <td><a href="/admin/products/edit/{{ $product->id }}">{{ $product->name }}</a></td>
                    <td>{{ $product->variant }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->price_1 }}</td>
                    <td>{{ $product->pcs }}</td>
                    <td><a href="/admin/pictures/create/{{ $product->id }}">{{ $product->pictures->count() }}</a></td>
                </tr>

            @endforeach
        </tbody>
      </table>
    @endif
@endsection
