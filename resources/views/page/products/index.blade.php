@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created at</th>
                            <th>QR</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ currency($product->price)  }}</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                <td>{!! QrCode::encoding('UTF-8')->size(50)->generate('id:'.$product->id . ', name:'.$product->name .', price:'.$product->price . ', created_at:'.$product->created_at->format('Y-m-d')) !!}</td>
                            </tr>

                        @endforeach

                    </table>
                    {!! $products->links() !!}
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
