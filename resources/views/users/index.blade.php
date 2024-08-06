@extends('frontend.layout.pages-layout')

@section('content')
<div style="background-color: whitesmoke; text-align :center;">
    <h1>Liste des Utilisateurs</h1>
</div>
<a href="{{ route('users.create') }}" class="btn btn-primary mb-4 mt-2">Ajouter</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom d'Utilisateur</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->type }}</td>

            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('users.show', $user->id) }}" class="link-dark me-3"><i class="fas fa-eye fa-lg"></i></a>
                    <a href="{{ route('users.edit', $user->id) }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-light text-dark p-0" onclick="return confirm('You want to delete this user ?')"><i class="fas fa-trash-alt fa-lg"></i></button>
                    
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