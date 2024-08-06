@extends('frontend.layout.pages-layout')

@section('Etudes Allianz', isset($page->title) ? $page->title : 'Page Title Here')

@section('content')

<div style="background-color: whitesmoke; text-align :center;">
    <h1>Etude Allianz France</h1>
</div>
<a href="{{ url('analyst-allianz-analyse') }}" class="btn btn-primary mb-4 mt-2">Ajouter une analyse</a>
<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>1. Numéro d’article</th>
            <th>2. Nom du support</th>
            <th>3. Date de la retombée</th>
            <th>4. Mois de la retombée</th>
            <th>5. Audience potentielle</th>
            <th>6. Type de support</th>
            <th>7. Familles de presse</th>
            <th>8. Thèmes/Angles</th>
            <th>9. Tonalité du traitement médiatique vis-à-vis d’Allianz France</th>
            <th>10. Reprise de messages-clés d’Allianz France</th>
            <th>11. Prise de parole des représentants et experts d’Allianz France</th>
            <th>12. Prise de parole de relais d’opinion sur Allianz France</th>
            <th>13. Reprise de communiqués de presse / actions RP</th>
            <th>14. Actualité Allianz France</th>
            <th>15. Verbatim</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody style="text-align: center;">
    @foreach($data as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->numArticle }}</td>
            <td>{{ $record->nomSupport }}</td>
            <td>{{ $record->dateRetombee }}</td>
            <td>{{ $record->moisRetombee }}</td>
            <td>{{ $record->audience }}</td>
            <td>{{ $record->typeSupport }}</td>
            <td>{{ $record->famillePresse }}</td>
            <td>{{ $record->theme }}</td>
            <td>{{ $record->tonaliteTraitement }}</td>
            <td>{{ $record->repriseMessage }}</td>
            <td>{{ $record->paroleRepresentant }}</td>
            <td>{{ $record->paroleOpinion }}</td>
            <td>{{ $record->repriseCP }}</td>
            <td>{{ $record->actualiteAlz }}</td>
            <td>{{ $record->verbatim }}</td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="analyst-allianz-edit_analyse/{{ $record->id }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <a href="analyst-allianz-duplicate_analyse/{{ $record->id }}" class="link-dark"><i class="fas fa-clone fa-lg"></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th>Id</th>
            <th>1. Numéro d’article</th>
            <th>2. Nom du support</th>
            <th>3. Date de la retombée</th>
            <th>4. Mois de la retombée</th>
            <th>5. Audience potentielle</th>
            <th>6. Type de support</th>
            <th>7. Familles de presse</th>
            <th>8. Thèmes/Angles</th>
            <th>9. Tonalité du traitement médiatique vis-à-vis d’Allianz France</th>
            <th>10. Reprise de messages-clés d’Allianz France</th>
            <th>11. Prise de parole des représentants et experts d’Allianz France</th>
            <th>12. Prise de parole de relais d’opinion sur Allianz France</th>
            <th>13. Reprise de communiqués de presse / actions RP</th>
            <th>14. Actualité Allianz France</th>
            <th>15. Verbatim</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<!-- JS pour boutons Action -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection