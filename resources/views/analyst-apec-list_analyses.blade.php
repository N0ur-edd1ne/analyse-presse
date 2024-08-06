@extends('frontend.layout.pages-layout')

@section('Etudes APEC', isset($page->title) ? $page->title : 'Page Title Here')

@section('content')

<div style="background-color: whitesmoke; text-align :center;">
    <h1>Etude APEC</h1>
</div>

@php
    $nextId = App\Models\Apec::where('statut', '!=', 'analysée')->orderBy('id', 'asc')->first()?->id;
@endphp

@if($nextId)
    <a href="{{ url('analyst-apec-analyse') }}" class="btn btn-primary mb-4 mt-2">Ajouter une analyse</a>
@else
    <p class="alert alert-info mb-4 mt-2">Toutes les études APEC ont été analysées.</p>
@endif

<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>1. Numéro d'article</th>
            <th>2. Nom du support</th>
            <th>3. Audience</th>
            <th>4. Date</th>
            <th>5. Type de média</th>
            <th>6. Familles de presse</th>
            <th>7. Délégations régionales</th>
            <th>8. Thèmes développés</th>
            <th>9. Reprise des communiqués de presse</th>
            <th>10. Reprise des études</th>
            <th>11. Prise de parole des représentants de l'APEC</th>
            <th>12. Prise de parole de relais d'opinion</th>
            <th>13. Teneur de l'article par rapport à l'APEC</th>
            <th>14. Reprise des messages-clés de l'APEC</th>
            <th>15. Epaisseur médiatique</th>
            <th>16. Actualité de la retombée</th>
            <th>17. Sélection de verbatims</th>
            <th>18. Identification des meilleures retombées</th>
            <th>19. Préciser s'il s'agit d'une interview de Gilles Gateau</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="text-align: center;">
    @foreach($apec as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->numArticle }}</td>
            <td>{{ $record->nomSupport }}</td>
            <td>{{ $record->audience }}</td>
            <td>{{ $record->date }}</td>
            <td>{{ $record->typeMedias }}</td>
            <td>{{ $record->famillePresse }}</td>
            <td>{{ $record->delegationRegionale }}</td>
            <td>{{ $record->themeDeveloppe }}</td>
            <td>{{ $record->repriseCP }}</td>
            <td>{{ $record->repriseEtude }}</td>
            <td>{{ $record->Representant }}</td>
            <td>{{ $record->relaisOpinion }}</td>
            <td>{{ $record->teneurArticle }}</td>
            <td>{{ $record->repriseMessage }}</td>
            <td>{{ $record->epaisseurMediatique }}</td>
            <td>{{ $record->actualiteRetombee }}</td>
            <td>{{ $record->selectionVerbatim }}</td>
            <td>{{ $record->identificationRetombee }}</td>
            <td>{{ $record->gillesGateau }}</td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="analyst-apec-edit_analyse/{{ $record->id }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <a href="analyst-apec-duplicate_analyse/{{ $record->id }}" class="link-dark"><i class="fas fa-clone fa-lg"></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th>Id</th>
            <th>1. Numéro d'article</th>
            <th>2. Nom du support</th>
            <th>3. Audience</th>
            <th>4. Date</th>
            <th>5. Type de média</th>
            <th>6. Familles de presse</th>
            <th>7. Délégations régionales</th>
            <th>8. Thèmes développés</th>
            <th>9. Reprise des communiqués de presse</th>
            <th>10. Reprise des études</th>
            <th>11. Prise de parole des représentants de l'APEC</th>
            <th>12. Prise de parole de relais d'opinion</th>
            <th>13. Teneur de l'article par rapport à l'APEC</th>
            <th>14. Reprise des messages-clés de l'APEC</th>
            <th>15. Epaisseur médiatique</th>
            <th>16. Actualité de la retombée</th>
            <th>17. Sélection de verbatims</th>
            <th>18. Identification des meilleures retombées</th>
            <th>19. Préciser s'il s'agit d'une interview de Gilles Gateau</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<!-- JS pour boutons Action -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection