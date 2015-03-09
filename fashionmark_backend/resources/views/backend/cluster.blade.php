@extends('templates.master')



@section('content')
    <div class="row">
        <div class="col-md-4">
            <center>
                <img src="{{ $product->image }}"width="100%"/>
                <p><small>{{ $product->name }}</small></p>
                <p><strong>{{ $product->brand }}</strong></p>
                <p>{{ $product->price }}</p>
            </center>
        </div>
        <div class="col-md-8">
            <form action="/cluster" method="post">
                <button type="submit" class="btn btn-primary">Default button</button>
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            </form>
        </div>
    </div>

@stop