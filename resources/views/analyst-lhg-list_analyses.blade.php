@extends('frontend.layout.pages-layout')

@section('Etudes LHG', isset($page->title) ? $page->title : 'Page Title Here')

@section('content')

<div style="background-color: whitesmoke; text-align :center;">
    <h1>Etude LHG</h1>
</div>

@php
    $nextId = App\Models\Lhg::where('statut', '!=', 'analysée')->orderBy('id', 'asc')->first()?->id;
@endphp

@if($nextId)
    <a href="{{ url('analyst-lhg-analyse') }}" class="btn btn-primary mb-4 mt-2">Ajouter une analyse</a>
@else
    <p class="alert alert-info mb-4 mt-2">Toutes les études LHG ont été analysées.</p>
@endif

<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>1. Numéro d’article</th>
            <th>2. Numéro de page du PDF</th>
            <th>3. Nom du support</th>
            <th>4. Audience</th>
            <th>5. Equivalent Publicitaire</th>
            <th>6. Mois de la retombée</th>
            <th>7. Type de support</th>
            <th>8. Familles de presse</th>
            <th>9. Poids de LHG</th>
            <th>10. Citation fond d’investissement</th>
            <th>11. Citation LHG et marques</th>
            <th>12. Thèmes</th>
            <th>13. Reprise de messages-clés</th>
            <th>14. Reprise de communiqués de presse</th>
            <th>15. Tonalité du traitement médiatique par rapport à LHG et ou ses marques</th>
            <th>16. Mention de Federico J. GONZALEZ, PDG</th>
            <th>17. Traits d’image associés à Federico J. GONZALEZ</th>
            <th>18. Prise de parole des représentants de LHG</th>
            <th>19. Prise de parole de relais d’opinion</th>
            <th>20. Actualité de LHG ou de ses marques</th>
            <th>21. Identification des meilleures retombées</th>
            <th>22. Sélection de verbatim</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="text-align: center;">
    @foreach($data as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->numArticle }}</td>
            <td>{{ $record->pagePdf }}</td>
            <td>{{ $record->nomSupport }}</td>
            <td>{{ $record->audience }}</td>
            <td>{{ $record->equivalentPub }}</td>
            <td>{{ $record->moisRetombee }}</td>
            <td>{{ $record->typeSupport }}</td>
            <td>{{ $record->famillePresse }}</td>
            <td>{{ $record->poidsLhg }}</td>
            <td>{{ $record->citationInvestissement }}</td>
            <td>{{ $record->citationLhg }}</td>
            <td>{{ $record->theme }}</td>
            <td>{{ $record->repriseMessage }}</td>
            <td>{{ $record->repriseCP }}</td>
            <td>{{ $record->tonaliteTraitement }}</td>
            <td>{{ $record->mentionFederico }}</td>
            <td>{{ $record->imageFederico }}</td>
            <td>{{ $record->paroleRepresentant }}</td>
            <td>{{ $record->paroleOpinion }}</td>
            <td>{{ $record->actualiteLhg }}</td>
            <td>{{ $record->identificationRetombee }}</td>
            <td>{{ $record->selectionVerbatim }}</td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="analyst-lhg-edit_analyse/{{ $record->id }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <a href="analyst-lhg-duplicate_analyse/{{ $record->id }}" class="link-dark"><i class="fas fa-clone fa-lg"></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th>Id</th>
            <th>1. Numéro d’article</th>
            <th>2. Numéro de page du PDF</th>
            <th>3. Nom du support</th>
            <th>4. Audience</th>
            <th>5. Equivalent Publicitaire</th>
            <th>6. Mois de la retombée</th>
            <th>7. Type de support</th>
            <th>8. Familles de presse</th>
            <th>9. Poids de LHG</th>
            <th>10. Citation fond d’investissement</th>
            <th>11. Citation LHG et marques</th>
            <th>12. Thèmes</th>
            <th>13. Reprise de messages-clés</th>
            <th>14. Reprise de communiqués de presse</th>
            <th>15. Tonalité du traitement médiatique par rapport à LHG et ou ses marques</th>
            <th>16. Mention de Federico J. GONZALEZ, PDG</th>
            <th>17. Traits d’image associés à Federico J. GONZALEZ</th>
            <th>18. Prise de parole des représentants de LHG</th>
            <th>19. Prise de parole de relais d’opinion</th>
            <th>20. Actualité de LHG ou de ses marques</th>
            <th>21. Identification des meilleures retombées</th>
            <th>22. Sélection de verbatim</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<!-- JS pour boutons Action -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection