@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Edit Post
            </h1>
        </div>
    </div>

    
    @if ($errors->any())

        <div class="w-4/5 m-auto">
            @foreach ($errors->all() as $error)
                <li class="text-gray-50 w-1/5 mb-4 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </div>

    @endif


    <div class="w-4/5 m-auto pt-20">
        <form action="/blog/{{ $post->slug }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
                <input type="text" class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" name="title" value="{{ $post->title }}">
            
                <textarea class="py-20 bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" name="description">
                    {{ $post->description }}
                </textarea>
                
                <button class="bg-blue-500 text-gray-100 text-lg font-extrabold py-4 rounded-3xl px-8 uppercase" type="submit">
                    Submit
                </button>
        </form>
    </div>

@endsection