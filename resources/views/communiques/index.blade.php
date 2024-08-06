@extends('frontend.layout.pages-layout')

@section('content')
<div style="background-color: whitesmoke; text-align :center;">
    <h1>Liste des Communiqués de Presse</h1>
</div>
<a href="{{ route('communiques.create') }}" class="btn btn-primary mb-4 mt-2">Ajouter</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Numéro du CP</th>
            <th>Idientifiant du CP</th>
            <th>Libellé du CP</th>
            <th>Etudes Associées</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($communiques as $communique)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $communique->numerotationC }}</td>
            <td>{{ $communique->idInputC }}</td>
            <td>{{ $communique->libelleC }}</td>
            <td>{{ $communique->etudeAssocieeC }}</td>

            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('communiques.show', $communique->id) }}" class="link-dark me-3"><i class="fas fa-eye fa-lg"></i></a>
                    <a href="{{ route('communiques.edit', $communique->id) }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <form action="{{ route('communiques.destroy', $communique->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-light text-dark p-0"><i class="fas fa-trash-alt fa-lg"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection