@extends('frontend.layout.pages-layout')

@section('content')

<div class="container-fluid py-4">
    <!-- En-tête -->
    <header class="mb-5">
        <h1 class="fw-bold fs-2 text-center">Tableau de Bord Superviseur</h1>
    </header>

    <!-- Cartes d'aperçu -->
    <section class="mb-5">
        <h2 class="fw-bold fs-4 mb-4">Aperçu des Études</h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Allianz</h5>
                        <p class="card-text fw-bold text-success">800 / 200</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">LHG</h5>
                        <p class="card-text fw-bold text-success">600 / 300</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">APEC</h5>
                        <p class="card-text fw-bold text-success">700 / 100</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">FDJ</h5>
                        <p class="card-text fw-bold text-success">650 / 50</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">SERVIER</h5>
                        <p class="card-text fw-bold text-success">300 / 300</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cartes d'aperçu -->
    <section>
        <h2 class="fw-bold fs-4 mb-4">Tableau des Statistiques des Analystes</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Analystes</th>
                                <th scope="col">Allianz</th>
                                <th scope="col">LHG</th>
                                <th scope="col">APEC</th>
                                <th scope="col">FDJ</th>
                                <th scope="col">SERVIER</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Analyste 1</th>
                                <td>150 / 50</td>
                                <td>90 / 10</td>
                                <td>140 / 60</td>
                                <td>50 / 50</td>
                                <td>190 / 10</td>
                            </tr>
                            <tr>
                                <th scope="row">Analyste 2</th>
                                <td>160 / 40</td>
                                <td>150 / 50</td>
                                <td>100 / 50</td>
                                <td>140 / 10</td>
                                <td>40 / 60</td>
                            </tr>
                            <tr>
                                <th scope="row">Analyste 3</th>
                                <td>170 / 30</td>
                                <td>160 / 40</td>
                                <td>90 / 60</td>
                                <td>130 / 20</td>
                                <td>50 / 50</td>
                            </tr>
                            <tr>
                                <th scope="row">Analyste 4</th>
                                <td>180 / 20</td>
                                <td>170 / 30</td>
                                <td>80 / 70</td>
                                <td>120 / 30</td>
                                <td>70 / 30</td>
                            </tr>
                            <tr>
                                <th scope="row">Analyste 5</th>
                                <td>190 / 10</td>
                                <td>180 / 20</td>
                                <td>70 / 80</td>
                                <td>110 / 40</td>
                                <td>80 / 20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de filtrage -->
    <section class="mb-5">
        <h2 class="fw-bold fs-4 mb-4">Filtrage</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="filterAnalyst" class="form-label">Analyste</label>
                        <select class="form-select" id="filterAnalyst">
                            <option disabled selected>Sélectionner un analyste</option>
                            <option value="Analyste 1">Analyste 1</option>
                            <option value="Analyste 2">Analyste 2</option>
                            <option value="Analyste 3">Analyste 3</option>
                            <option value="Analyste 4">Analyste 4</option>
                            <option value="Analyste 5">Analyste 5</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="filterStudy" class="form-label">Étude</label>
                        <select class="form-select" id="filterStudy">
                            <option disabled selected>Sélectionner une étude</option>
                            <option value="Allianz">Allianz</option>
                            <option value="LHG">LHG</option>
                            <option value="APEC">APEC</option>
                            <option value="FDJ">FDJ</option>
                            <option value="SERVIER">SERVIER</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="startDate" class="form-label">Date de début</label>
                        <input type="date" class="form-control" id="startDate">
                    </div>
                    <div class="col-md-6">
                        <label for="endDate" class="form-label">Date de fin</label>
                        <input type="date" class="form-control" id="endDate">
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary btn-lg px-4 py-2" id="applyFilter">
                        <i class="bi bi-filter"></i> Filtrer
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Tableau des statistiques -->
    <section>
        <h2 class="fw-bold fs-4 mb-4">Tableau des Statistiques des Études</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Études</th>
                                <th scope="col">Rb. Reçues</th>
                                <th scope="col">Rb. Analysées</th>
                                <th scope="col">Rb. Manquantes</th>
                                <th scope="col">Temps Passé</th>
                                <th scope="col">Cadence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Allianz</th>
                                <td>1000</td>
                                <td>800</td>
                                <td>200</td>
                                <td>10h</td>
                                <td>80%</td>
                            </tr>
                            <tr>
                                <th scope="row">LHG</th>
                                <td>900</td>
                                <td>600</td>
                                <td>300</td>
                                <td>8h</td>
                                <td>66%</td>
                            </tr>
                            <tr>
                                <th scope="row">APEC</th>
                                <td>800</td>
                                <td>700</td>
                                <td>100</td>
                                <td>7h</td>
                                <td>87%</td>
                            </tr>
                            <tr>
                                <th scope="row">FDJ</th>
                                <td>700</td>
                                <td>650</td>
                                <td>50</td>
                                <td>6h</td>
                                <td>93%</td>
                            </tr>
                            <tr>
                                <th scope="row">SERVIER</th>
                                <td>600</td>
                                <td>300</td>
                                <td>300</td>
                                <td>5h</td>
                                <td>50%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection