@extends('layout.app')
@section('title', 'Home - Travel Packages')
@section('main_content')
<div class="container">
    @foreach($packages as $package)
    <div class="card">
        <dl>
            <dt>Package name:</dt>
            <dd>{{$package->name}}</dd>
            <dt>Description:</dt>
            <dd>{{$package->description}}</dd>
            <dt>Price:</dt>
            <dd>{{$package->price}}</dd>
            <img src="{{$package->image_url}}" alt="{{$package->name}}">
        </dl>
    </div>
    @endforeach
</div>
@endsection