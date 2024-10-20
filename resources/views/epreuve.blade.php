@extends('layouts/layout')
@section('title', 'epreuve')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">epreuve</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Numero</th>

                <th>Date</th>
                <th>Lieu</th> 
                <th>id matiere</th>

            </tr>
        </thead>
        <tbody>
        @foreach($epreuves as $e)
            <tr>
                <td>{{ $e['id'] }}</td>
                <td>{{ $e['numero'] }}</td>

                <td>{{ $e['date'] }}</td>
                <td>{{ $e['lieu'] }}</td>
                <td>{{ $e['matiere_id'] }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
