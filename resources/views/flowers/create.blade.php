@extends('layout')

@section('content')
    <h1>Create a new Flower</h1>
    <form method="POST" action="{{ route('flowers.store') }}">
        @csrf
        <div class="form-group">
            <label for="species">Species</label>
            <input type="text" name="species" class="form-control" id="brand" placeholder="Enter flower specie">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" name="color" class="form-control" id="color" placeholder="Enter flower color">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('flowers.index') }}">Back to the list</a>
@endsection