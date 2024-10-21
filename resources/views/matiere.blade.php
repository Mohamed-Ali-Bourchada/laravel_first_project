@extends('layouts.layout')

@section('title', 'Matieres')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Matieres</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>                
                <th>Id</th>
                <th>Code</th>
                <th>Libelle</th>
                <th>Coefficient</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matieres as $matiere)
            <tr>
                <td>{{ $matiere['id'] }}</td>
                <td>{{ $matiere['code'] }}</td>
                <td>{{ $matiere['libelle'] }}</td>
                <td>{{ $matiere['coef'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Pagination Links -->
<div class="d-flex justify-content-center mt-4">
    <nav aria-label="Page navigation">
        <div>
            {{ $matieres->links('pagination::bootstrap-4') }}  <!-- Use Bootstrap 4 pagination template -->
        </div>
    </nav>
</div>



</div>
@endsection
