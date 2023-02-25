@extends('layouts.dashboardLayout.appDashboardLayout')
@section('content')
    <main>
        <h1>Заголовок страницы</h1>
        <form>
            <input type="file">
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
