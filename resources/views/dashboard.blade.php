@extends('layout')

@section('main')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div style="font-size: 25px"> You're logged in!</div>

                    <div class="dashboard">
                        <ul>
                           <button style="background-color:#1a1aff; width:200px; height:50px;   border-radius: 5px">
                            <li><a  style="text-decoration: none ; color:black;"  href="{{route('blog.create')}}">Create Post</a></li>
                            </button>
                            <button style="background-color:#1a1aff; width:200px; height:50px;   border-radius: 5px">
                            <li><a style="text-decoration: none ; color:black;"  href="{{route('categories.create')}}">Create Category</a></li>
                            </button>
                            <button style="background-color:#1a1aff; width:200px; height:50px;   border-radius: 5px">
                            <li><a style="text-decoration: none ; color:black;"  href="{{route('categories.index')}}">Categories List</a></li>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection



