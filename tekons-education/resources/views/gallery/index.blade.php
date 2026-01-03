@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold">Our Gallery</h1>
    <div class="mt-4">
        @foreach ($galleryImages as $galleryImage)
            <div class="mb-4">
                <h2 class="text-2xl font-bold">{{ $galleryImage->title }}</h2>
                <img src="{{ $galleryImage->image }}" alt="{{ $galleryImage->title }}">
                <p>{{ $galleryImage->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
