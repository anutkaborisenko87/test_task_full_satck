@extends('layouts.dashboardLayout.appDashboardLayout')
@section('content')
    <main>
        <h1 class="text-center">Admin dashboard</h1>
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
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
        <table>
            <thead>
            <tr>
                <th>Заголовок колонки 1</th>
                <th>Заголовок колонки 2</th>
                <th>Заголовок колонки 3</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Ячейка 1</td>
                <td>Ячейка 2</td>
                <td>Ячейка 3</td>
            </tr>
            <tr>
                <td>Ячейка 4</td>
                <td>Ячейка 5</td>
                <td>Ячейка 6</td>
            </tr>
            <tr>
                <td>Ячейка 7</td>
                <td>Ячейка 8</td>
                <td>Ячейка 9</td>
            </tr>
            </tbody>
        </table>
    </main>
@endsection
