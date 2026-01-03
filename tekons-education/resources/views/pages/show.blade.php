@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold">{{ $page->title }}</h1>
    <div class="mt-4">
        {!! $page->content !!}
    </div>
@endsection
