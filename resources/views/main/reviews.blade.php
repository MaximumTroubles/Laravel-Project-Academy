@extends('layouts.main')
@section('content')
<h3>Reviews Page</h3>
@include('messages.errors')

<form action="/reviews" method="POST">
    @csrf
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="from-group col-3">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="from-group col-3">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror"></textarea>
        @error('name')
             <div class="invalid-feedback">{{ $message }}</div>
         @enderror
    </div>
    <button class="btn btn-primary mt-2">Send</button>
</form>
@endsection