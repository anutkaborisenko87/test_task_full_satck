@extends('layouts.dashboardLayout.appDashboardLayout')
@section('content')
    <main>
        <h1 class="text-center">Admin dashboard</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="post" action="{{ route('importCSV') }}" class="mx-5 my-5" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="csv_file" class="col-md-4 col-form-label text-md-end">{{ __('Upload csv') }}</label>
                <div class="col-md-6">
                    <input id="csv_file" type="file" class="form-control @error('csv_file') is-invalid @enderror"
                           name="csv_file">

                    @error('csv_file')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Import') }}
                    </button>
                </div>
            </div>
        </form>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button class="btn btn-danger" type="button"
                   onclick="event.preventDefault(); if (confirm('Do you realy want to clear table?')) document.getElementById('clear-form').submit();">
                    {{ __('Clear') }}
                </button>

                <form id="clear-form" action="{{ route('clearTestimonials') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </main>
@endsection
