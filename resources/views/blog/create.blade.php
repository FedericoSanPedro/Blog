@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Create Post
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
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            
                <input type="text" class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" name="title" placeholder="Title...">
            
                <input type="textarea" class="py-20 bg-transparent block border-b-2 w-full h-20 text-6xl outline-none" name="description" placeholder="Description...">
            
                <div class="bg-grey-lighter pt-15">
                    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class="mt-2 text-base leading-normal">
                            Select a file
                        </span>
                        <input type="file" class="hidden" name="image">
                    </label>
                </div>
                
                <button class="bg-blue-500 text-gray-100 text-lg font-extrabold py-4 rounded-3xl px-8 uppercase" type="submit">
                    Submit
                </button>
        </form>
    </div>

@endsection