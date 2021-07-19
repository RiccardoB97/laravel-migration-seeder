@extends('layout.app')
@section('title', 'Add package - Travel Packages')
@section('main_content')
    <div class="container">
        <form action="{{route("packages.update", $package->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{$package->name}}">
            <small id="nameHelper" class="text-muted">Insert the package name here</small>
            </div>
            <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId" value="{{$package->description}}">
            <small id="descriptionHelper" class="text-muted">Insert the package description here</small>
            </div>
            <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" name="destination" id="destination" class="form-control" placeholder="" aria-describedby="helpId" value="{{$package->destination}}">
            <small id="destinationHelper" class="text-muted">Insert the package destination here</small>
            </div>
            <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId" step="0.01" value="{{$package->price}}">
            <small id="priceHelper" class="text-muted">Insert the package price here</small>
            </div>
            <div class="form-group">
            <label for="image_url">Image URL</label>
            <input type="text" name="image_url" id="image_url" class="form-control" placeholder="" aria-describedby="helpId" value="{{$package->image_url}}">
            <small id="image_urlHelper" class="text-muted">Insert the package image URL here</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection