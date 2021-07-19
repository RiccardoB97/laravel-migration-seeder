@extends('layout.app')
@section('title', 'Home - Travel Packages')
@section('main_content')
<div class="container">
    <div class="card">
        <dl>
            <dt>Package name:</dt>
            <dd>{{$package->name}}</dd>
            <dt>Destination:</dt>
            <dd>{{$package->destination}}</dd>
            <dt>Description:</dt>
            <dd>{{$package->description}}</dd>
            <dt>Price:</dt>
            <dd>{{$package->price}}</dd>
            <dt>Actions</dt>
            <dd>
                <a href="{{route('packages.show', $package->id)}}">View</a> |
                <a href="{{route('packages.edit',$package->id)}}">Edit</a> |
                <a href="{{route('packages.destroy',$package->id)}}">Delete</a>
            </dd>
            <img src="{{$package->image_url}}" alt="{{$package->name}}">
        </dl>
    </div>
</div>
@endsection