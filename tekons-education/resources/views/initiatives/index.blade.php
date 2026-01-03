@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold">Our Initiatives</h1>
    <div class="mt-4">
        @foreach ($initiatives as $initiative)
            <div class="mb-4">
                <h2 class="text-2xl font-bold">{{ $initiative->title }}</h2>
                <p>{{ $initiative->description }}</p>
            </div>
        @endforeach
    </div>
@endsection
