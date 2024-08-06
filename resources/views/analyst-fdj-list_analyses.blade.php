@extends('frontend.layout.pages-layout')

@section('Etudes FDJ', isset($page->title) ? $page->title : 'Page Title Here')

@section('content')

<div style="background-color: whitesmoke; text-align :center;">
    <h1>Etude FDJ</h1>
</div>

@php
    $nextId = App\Models\Fdj::where('statut', '!=', 'analysée')->orderBy('id', 'asc')->first()?->id;
@endphp

@if($nextId)
    <a href="{{ url('analyst-fdj-analyse') }}" class="btn btn-primary mb-4 mt-2">Ajouter une analyse</a>
@else
    <p class="alert alert-info mb-4 mt-2">Toutes les études FDJ ont été analysées.</p>
@endif

<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>1. Numéro de la retombée</th>
            <th>2. Nom du support</th>
            <th>3. Audience</th>
            <th>4. Equivalent publicitaire</th>
            <th>5. Mois de la retombée</th>
            <th>6. Famille de presse</th>
            <th>7. Type de médias</th>
            <th>8. Répartition par régions</th>
            <th>9. Thèmes et sous-thèmes abordés</th>
            <th>10. Angle de la retombée</th>
            <th>11. Tonalité des retombées par rapport à la FDJ</th>
            <th>12. Attributs d'image</th>
            <th>13. Discours des porte-parole du Groupe</th>
            <th>14. Discours des relais d'opinion</th>
            <th>15. Actualité FDJ</th>
            <th>16. Verbatim</th>
            <th>17. Identification des 500 meilleures retombées</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="text-align: center;">
        @foreach($data as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->numRetombee }}</td>
            <td>{{ $record->nomSupport }}</td>
            <td>{{ $record->audience }}</td>
            <td>{{ $record->equivalentPub }}</td>
            <td>{{ $record->moisRetombee }}</td>
            <td>{{ $record->famillePresse }}</td>
            <td>{{ $record->typeMedias }}</td>
            <td>{{ $record->repartitionRegions }}</td>
            <td>{{ $record->themeAbordes }}</td>
            <td>{{ $record->angleRetombee }}</td>
            <td>{{ $record->tonaliteRetombees }}</td>
            <td>{{ $record->attributImage }}</td>
            <td>{{ $record->discoursGroupe }}</td>
            <td>{{ $record->discoursOpinion }}</td>
            <td>{{ $record->actualite }}</td>
            <td>{{ $record->verbatim }}</td>
            <td>{{ $record->identificationRetombee}}</td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="analyst-fdj-edit_analyse/{{ $record->id }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <a href="analyst-fdj-duplicate_analyse/{{ $record->id }}" class="link-dark"><i class="fas fa-clone fa-lg"></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th>Id</th>
            <th>1. Numéro de la retombée</th>
            <th>2. Nom du support</th>
            <th>3. Audience</th>
            <th>4. Equivalent publicitaire</th>
            <th>5. Mois de la retombée</th>
            <th>6. Famille de presse</th>
            <th>7. Type de médias</th>
            <th>8. Répartition par régions</th>
            <th>9. Thèmes et sous-thèmes abordés</th>
            <th>10. Angle de la retombée</th>
            <th>11. Tonalité des retombées par rapport à la FDJ</th>
            <th>12. Attributs d'image</th>
            <th>13. Discours des porte-parole du Groupe</th>
            <th>14. Discours des relais d'opinion</th>
            <th>15. Actualité FDJ</th>
            <th>16. Verbatim</th>
            <th>17. Identification des 500 meilleures retombées</th>
        </tr>
    </tfoot>
</table>

<!-- JS pour boutons Action -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection