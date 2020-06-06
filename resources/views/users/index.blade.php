@extends('layouts.main')

@section('title', 'User Management')

@section('contentHeader')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            User Management
        </h1>
    </div>
@endsection
@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <livewire:user.index />
    </div>
@endsection
