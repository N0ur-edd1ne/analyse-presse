@extends('frontend.layout.pages-layout')

@section('Etudes Servier', isset($page->title) ? $page->title : 'Page Title Here')

@section('content')

<div style="background-color: whitesmoke; text-align :center;">
    <h1>Etude Servier</h1>
</div>
<a href="{{ url('analyst-servier-analyse') }}" class="btn btn-primary mb-4 mt-2">Ajouter une analyse</a>
<table id="example" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>1. Numéro d’article</th>
            <th>2. Nom du support</th>
            <th>3. Date de la retombée</th>
            <th>4. Citation SERVIER, et marques</th>
            <th>5. Type de presse</th>
            <th>6. Famille de presse</th>
            <th>7. Tonalité des retombées par rapport à SERVIER</th>
            <th>8. Attribut d’image associé à l’image de SERVIER</th>
            <th>9. Thèmes</th>
            <th>10. Reprise de communiqués de presse et actions RP</th>
            <th>11. Prise de parole des représentants de SERVIER</th>
            <th>12. Si autres porte-parole</th>
            <th>13. Présence de SERVIER dans le titre</th>
            <th>14. Si autres relais d’opinion</th>
            <th>15. Actualité de SERVIER</th>
            <th>16. Sélection de verbatim</th>
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
            <td>{{ $record->citation }}</td>
            <td>{{ $record->typePresse }}</td>
            <td>{{ $record->famillePresse }}</td>
            <td>{{ $record->tonalite }}</td>
            <td>{{ $record->attributImage }}</td>
            <td>{{ $record->theme }}</td>
            <td>{{ $record->repriseCP }}</td>
            <td>{{ $record->paroleRepresentant }}</td>
            <td>{{ $record->autreRepresentant }}</td>
            <td>{{ $record->paroleOpinion }}</td>
            <td>{{ $record->autreOpinion }}</td>
            <td>{{ $record->actualite }}</td>
            <td>{{ $record->verbatim }}</td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="analyst-servier-edit_analyse/{{ $record->id }}" class="link-dark me-3"><i class="fas fa-edit fa-lg"></i></a>
                    <a href="analyst-servier-duplicate_analyse/{{ $record->id }}" class="link-dark"><i class="fas fa-clone fa-lg"></i></a>
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
            <th>4. Citation SERVIER, et marques</th>
            <th>5. Type de presse</th>
            <th>6. Famille de presse</th>
            <th>7. Tonalité des retombées par rapport à SERVIER</th>
            <th>8. Attribut d’image associé à l’image de SERVIER</th>
            <th>9. Thèmes</th>
            <th>10. Reprise de communiqués de presse et actions RP</th>
            <th>11. Prise de parole des représentants de SERVIER</th>
            <th>12. Si autres porte-parole</th>
            <th>13. Présence de SERVIER dans le titre</th>
            <th>14. Si autres relais d’opinion</th>
            <th>15. Actualité de SERVIER</th>
            <th>16. Sélection de verbatim</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<!-- JS pour boutons Action -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection