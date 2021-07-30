@extends('layouts.general')

@section('header')
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h1 class="text-lg font-bold leading-7 text-gray-900">
                    Settings
                    </h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    @livewire('settings.index')
@endsection
