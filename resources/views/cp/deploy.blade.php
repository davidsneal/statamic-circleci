@extends('statamic::layout')

@section('title', 'Deployments')

@section('content')
    <header class="mb-3">
        <div class="flex items-center justify-between">
            <h1>Deployments</h1>
        </div>
    </header>
    <div class="p-0 card">
        <div class="p-2">
            <circleci-addon
                route="{{ $route }}"
            />
        </div>
    </div>
@endsection
