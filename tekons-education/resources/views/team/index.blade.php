@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold">Our Team</h1>
    <div class="mt-4">
        @foreach ($teamMembers as $teamMember)
            <div class="mb-4">
                <h2 class="text-2xl font-bold">{{ $teamMember->name }}</h2>
                <p class="text-lg">{{ $teamMember->position }}</p>
                <p>{{ $teamMember->bio }}</p>
            </div>
        @endforeach
    </div>
@endsection
