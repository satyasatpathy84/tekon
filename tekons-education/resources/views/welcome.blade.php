@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold">Welcome to Tekons Education</h1>
        <p class="mt-4 text-lg">Empowering Communities Through Education</p>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-bold text-center">Contact Us</h2>
        <form id="contact-form" class="mt-4 max-w-xl mx-auto">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                <textarea id="message" name="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Send Message
                </button>
            </div>
        </form>
    </div>
@endsection
