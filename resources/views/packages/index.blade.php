@extends('layout.app')
@section('title', 'Home - Travel Packages')
@section('main_content')
<nav>
    <div class="container">
        <a href="{{route('packages.create')}}" class='btn btn-primary'>Add a package</a>
    </div>
</nav>
<div class="container cards">
    @foreach($packages as $package)
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
                <form action="{{route('packages.destroy', $package->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </dd>
            <img src="{{$package->image_url}}" alt="{{$package->name}}">
        </dl>
    </div>
    @endforeach
</div>
@endsection