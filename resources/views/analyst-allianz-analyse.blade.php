<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Etude Allianz France</title>

    <!-- Lien CSS pour les icones de la template -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <!-- Lien CSS pour la template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Le fichier CSS de la template  -->
    <link rel="stylesheet" href="frontend/style.css">

    <!-- Le style de la 1ère template -->
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        .custom-control-label {
            margin-left: 5px;
        }

        .custom-control-input {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .col-md-6 {
            width: 50%;
            float: left;
            padding-right: 15px;
            padding-left: 15px;
            position: relative;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <img src="../frontend/images/logo-1.png" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#"><img src="../frontend/images/logo-2.png" alt="" id="logo-2"></a>
                </div>
            </div>
            <ul class="sidebar-nav">
                @if(Auth::check() && Auth::user()->type == 'supervisor')
                <li class="sidebar-item">
                    <a href="{{ url('supervisor-dashboard') }}" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'supervisor')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#gestion" aria-expanded="false" aria-controls="gestion">
                        <i class="lni lni-notepad"></i>
                        <span>Gestion</span>
                    </a>
                    <ul id="gestion" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('users.index') }}" class="sidebar-link">
                                <i class="lni lni-users"></i>
                                Utilisateurs
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('communiques.index') }}" class="sidebar-link">
                                <i class="lni lni-library"></i>
                                Communiqués
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('etudes.index') }}" class="sidebar-link">
                                <i class="lni lni-book"></i>
                                Etudes
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('cpetudes.index') }}" class="sidebar-link">
                                <i class="lni lni-link"></i>
                                Associations
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'supervisor')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#analyse" aria-expanded="false" aria-controls="analyse">
                        <i class="lni lni-timer"></i>
                        <span>Analyse</span>
                    </a>
                    <ul id="analyse" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#allianz" aria-expanded="false" aria-controls="allianz">
                                <i class="lni lni-list"></i>
                                <span>Allianz</span>
                            </a>
                            <ul id="allianz" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#analyse">
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-allianz-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-allianz-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#servier" aria-expanded="false" aria-controls="servier">
                                <i class="lni lni-list"></i>
                                <span>Servier</span>
                            </a>
                            <ul id="servier" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#analyse">
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-servier-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-servier-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#apec" aria-expanded="false" aria-controls="apec">
                                <i class="lni lni-list"></i>
                                <span>APEC</span>
                            </a>
                            <ul id="apec" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#analyse">
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-apec-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-apec-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#lhg" aria-expanded="false" aria-controls="lhg">
                                <i class="lni lni-list"></i>
                                <span>LHG</span>
                            </a>
                            <ul id="lhg" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#analyse">
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-lhg-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-lhg-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#fdj" aria-expanded="false" aria-controls="fdj">
                                <i class="lni lni-list"></i>
                                <span>FDJ</span>
                            </a>
                            <ul id="fdj" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#analyse">
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-fdj-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ url('analyst-fdj-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'supervisor')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#import" aria-expanded="false" aria-controls="import">
                        <i class="lni lni-add-files"></i>
                        <span>Importations</span>
                    </a>
                    <ul id="import" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('excel-allianz/import') }}" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                Allianz
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('excel-servier/import') }}" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                Servier
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('excel-apec/import') }}" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                APEC
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('excel-lhg/import') }}" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                LHG
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('excel-fdj/import') }}" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                FDJ
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'supervisor')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#export" aria-expanded="false" aria-controls="export">
                        <i class="lni lni-empty-file"></i>
                        <span>Exportations</span>
                    </a>
                    <ul id="export" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                Allianz
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                Servier
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                APEC
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                LHG
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="lni lni-list"></i>
                                FDJ
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'analyst')
                <li class="sidebar-item">
                    <a href="{{ url('analyst-dashboard') }}" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'analyst')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#allianz" aria-expanded="false" aria-controls="allianz">
                        <i class="lni lni-list"></i>
                        <span>Allianz</span>
                    </a>
                    <ul id="allianz" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-allianz-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-allianz-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'analyst')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#servier" aria-expanded="false" aria-controls="servier">
                        <i class="lni lni-list"></i>
                        <span>Servier</span>
                    </a>
                    <ul id="servier" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-servier-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-servier-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'analyst')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#apec" aria-expanded="false" aria-controls="apec">
                        <i class="lni lni-list"></i>
                        <span>APEC</span>
                    </a>
                    <ul id="apec" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-apec-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-apec-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'analyst')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#lhg" aria-expanded="false" aria-controls="lhg">
                        <i class="lni lni-list"></i>
                        <span>LHG</span>
                    </a>
                    <ul id="lhg" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-lhg-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-lhg-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(Auth::check() && Auth::user()->type == 'analyst')
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#fdj" aria-expanded="false" aria-controls="fdj">
                        <i class="lni lni-list"></i>
                        <span>FDJ</span>
                    </a>
                    <ul id="fdj" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-fdj-analyse') }}" class="sidebar-link">Nouvelle Retombée</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('analyst-fdj-list_analyses') }}" class="sidebar-link">Liste des Retombées</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>

            <div class="sidebar-footer">
                <a href="{{ url('logout') }}" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>

        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control border-0 rounded-0" placeholder="Search...">
                        <button class="btn border-0 rounded-0" type="button">Search</button>
                    </div>
                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="frontend/images/account.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-timer"></i>
                                    <span>Analytics</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-cog"></i>
                                    <span>Settings</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ url('logout') }}" class="dropdown-item">
                                    <i class="lni lni-exit"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content px-3 py-4">
                <div class="container-fluid">

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div style="background-color: whitesmoke; text-align :center;">
                        <h1>Grille d'analyse Allianz France</h1>
                    </div>

                    <br>

                    <form method="POST" action="{{ route('store_allianz', ['id' => $allianz->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-0">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1. Numéro d'article</label>
                                            <input type="text" class="form-control" name="numArticle" value="{{ $allianz->numArticle }}" />
                                            @error('numArticle')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>2. Nom du support</label>
                                            <input type="text" class="form-control" name="nomSupport" value="{{ $allianz->nomSupport }}" />
                                            @error('nomSupport')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>3. Date de la retombée</label>
                                            <input type="text" class="form-control" name="dateRetombee" value="{{ $allianz->dateRetombee }}" />
                                            @error('dateRetombee')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>4. Mois de la retombée</label>
                                            <input type="text" class="form-control" name="moisRetombee" value="{{ $allianz->moisRetombee }}" />
                                            @error('moisRetombee')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>5. Audience potentielle</label>
                                            <input type="text" class="form-control" name="audience" value="{{ $allianz->audience }}" />
                                            @error('audience')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>6. Type de support</label>
                                            <input type="text" class="form-control" name="typeSupport" value="{{ $allianz->typeSupport }}" />
                                            @error('typeSupport')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>7. Familles de presse</label>
                                            <input type="text" class="form-control" name="famillePresse" value="{{ $allianz->famillePresse }}" />
                                            @error('famillePresse')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                    <br>
                                        <div class="accordion">
                                            <div class="accordion-header">8. Citation LHG et marques</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="theme[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck1">1. Stratégie / Gouvernance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="theme[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck2">2. Résultats / Actualités financières</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="theme[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck3">3. Investissements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="theme[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck4">4. Politique RH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="theme[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck5">5. Engagements RSE / Mécénat / Développement Durable</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="theme[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck6">6. Sponsoring JO</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="theme[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck7">7. Innovation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="theme[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck8">8. Transformation Digitale</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="theme[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck9">9. Etudes / Rapports / Expertises éco</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="theme[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck10">10. Distribution</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" name="theme[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck11">11. Publicité / Marque / Sponsoring hors JO</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" name="theme[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck12">12. Assurance Biens et Responsabilité particulier</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="theme[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck13">13. Epargne / Assurance Vie / Epargne Retraite</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="theme[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck14">14. Assurance Santé, Prévoyance et assurance emprunteur</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="theme[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck15">15. Prévention</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="theme[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck16">16. Indemnisation / Service client</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="theme[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck17">17. Réclamations clients / Litiges</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="theme[]" value="18" />
                                                    <label class="custom-control-label" for="customCheck18">18. Risques de réputation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="theme[]" value="19" />
                                                    <label class="custom-control-label" for="customCheck19">19. Autre thème</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('theme')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">9. Tonalité du traitement médiatique vis-à-vis d’Allianz France</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio27" name="tonaliteTraitement" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio27">1. Neutre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio28" name="tonaliteTraitement" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio28">2. Favorable</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio29" name="tonaliteTraitement" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio29">3. Mitigée</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio30" name="tonaliteTraitement" class="custom-control-input" value="4/" />
                                                    <label class="custom-control-label" for="customRadio30">4. Défavorable</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('tonaliteTraitement')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">10. Reprise de messages-clés d’Allianz France</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="repriseMessage[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck20">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck21" name="repriseMessage[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck21">2. La confiance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck22" name="repriseMessage[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck22">3. L’expertise</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck23" name="repriseMessage[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck23">4. La qualité de service</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck24" name="repriseMessage[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck24">5. La proximité</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck25" name="repriseMessage[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck25">6. La solidité</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck26" name="repriseMessage[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck26">7. Humain</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck27" name="repriseMessage[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck27">8. Engagé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck28" name="repriseMessage[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck28">9. Conquérant</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck29" name="repriseMessage[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck29">10. Mondial</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('repriseMessage')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">11. Prise de parole des représentants et experts d’Allianz France</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck30" name="paroleRepresentant[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck30">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck31" name="paroleRepresentant[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck31">2. Non présidé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck32" name="paroleRepresentant[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck32">3. Carlos ARAUJO, Directeur ESG, innovation et gouvernance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck33" name="paroleRepresentant[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck33">4. Frédéric BACCELLI, Directeur Général Adjoint d'Allianz</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck34" name="paroleRepresentant[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck34">5. Charlotte BICHET D'HALLUIN, Leader de l’écosystème d'Allianz</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck35" name="paroleRepresentant[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck35">6. Edouard BINET, Directeur de l'indemnisation Service client</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck36" name="paroleRepresentant[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck36">7. Nicolas BOULET, Directeur des Investissements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck37" name="paroleRepresentant[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck37">8. Stéphane CAMON, Leader écosystème ma santé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck38" name="paroleRepresentant[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck38">9. Sylvain CORIAT, Membre du Comité Exécutif d’Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck39" name="paroleRepresentant[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck39">10. Christophe DEPONT, Directeur Marque, Publicité et Partenariats</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck40" name="paroleRepresentant[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck40">11. Marion DEWAGENAERE, Leader de l'écosystème Mon avenir</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck41" name="paroleRepresentant[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck41">12. Alexandre DU GARREAU, Membre du Comité Exécutif de Distribution</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck42" name="paroleRepresentant[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck42">13. Yann LECAE, Directeur stratégie indemnisation chez Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck43" name="paroleRepresentant[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck43">14. Julien MARTINEZ, Membre du Comité Exécutif, Directeur service</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck44" name="paroleRepresentant[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck44">15. François NEDEY, Membre du Comité Exécutif des comptes</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck45" name="paroleRepresentant[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck45">16. Lucie NICOLAS-ENCREVE, Directrice Talent Management</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck46" name="paroleRepresentant[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck46">17. Mathias PATTEIN, Responsable Sobriété Energétique</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck47" name="paroleRepresentant[]" value="18" />
                                                    <label class="custom-control-label" for="customCheck47">18. Jean-Baptiste PERRET TORRES, Directeur de la stratégie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck48" name="paroleRepresentant[]" value="19" />
                                                    <label class="custom-control-label" for="customCheck48">19. Jacques RICHIER, Président d'Allianz et de administration</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck49" name="paroleRepresentant[]" value="20" />
                                                    <label class="custom-control-label" for="customCheck49">20. Giovanna SANTI, Ecosystème Leader "Ma prévention"</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck50" name="paroleRepresentant[]" value="21" />
                                                    <label class="custom-control-label" for="customCheck50">21. Rémi SAUCIE, Directeur financier et membre du Comité Exécutif</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck51" name="paroleRepresentant[]" value="22" />
                                                    <label class="custom-control-label" for="customCheck51">22. Matthias SEEWALD, Directeur des Investissements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck52" name="paroleRepresentant[]" value="23" />
                                                    <label class="custom-control-label" for="customCheck52">23. Ludovic SUBRAN, Chef économiste du Groupe Allianz</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck53" name="paroleRepresentant[]" value="24" />
                                                    <label class="custom-control-label" for="customCheck53">24. Nicolas TETART, Responsable Prévention Routière</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck54" name="paroleRepresentant[]" value="25" />
                                                    <label class="custom-control-label" for="customCheck54">25. Sylvain THEVENIAUD, Directeur de l'accélérateur Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck55" name="paroleRepresentant[]" value="26" />
                                                    <label class="custom-control-label" for="customCheck55">26. Pierre VAYSSE, Membre du Comité Exécutif des Assurances</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck56" name="paroleRepresentant[]" value="27" />
                                                    <label class="custom-control-label" for="customCheck56">27. Fabien WATHLE, Directeur Général d'Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck57" name="paroleRepresentant[]" value="28" />
                                                    <label class="custom-control-label" for="customCheck57">28. Autres représentants ou experts d’Allianz France</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('paroleRepresentant')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">12. Prise de parole de relais d’opinion sur Allianz France</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck58" name="paroleOpinion[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck58">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck59" name="paroleOpinion[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck59">2. Représentants politiques</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck60" name="paroleOpinion[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck60">3. Experts Secteur Assurance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck61" name="paroleOpinion[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck61">4. France Assureurs</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck62" name="paroleOpinion[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck62">5. Clients / Assurés</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck63" name="paroleOpinion[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck63">6. Concurrents</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck64" name="paroleOpinion[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck64">7. ACPR</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck65" name="paroleOpinion[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck65">8. Partenaires commerciaux</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck66" name="paroleOpinion[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck66">9. Autres relais d’opinion</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('paroleOpinion')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">13. Reprise de communiqués de presse / actions RP</div>
                                            <div class="accordion-content">
                                                @foreach($communiques as $communique)
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="{{ $communique->idInputC }}" name="repriseCP[]" value="{{ $communique->numerotationC }}" />
                                                    <label class="custom-control-label" for="{{ $communique->idInputC }}">{{ $communique->numerotationC }}. {{ $communique->libelleC }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @error('repriseCP')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>14. Actualité Allianz France</label>
                                            <input type="text" class="form-control" name="actualiteAlz" />
                                            @error('actualiteAlz')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>15. Verbatim</label>
                                            <input type="text" class="form-control" name="verbatim" />
                                            @error('verbatim')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href="https://terrain360.eu/">
                                <strong>Terrain360</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Lien JS pour la template -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Lien JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Le fichier JS de la template  -->
    <script src="frontend/script.js"></script>

    <!-- Script pour les checkbox -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Gestion des changements pour les communiqués
            $('input[name="repriseCP[]"]').change(function() {
                var communiqueId = $(this).attr('id');
                var isChecked = $(this).is(':checked');
                console.log('Communiqué changé:', communiqueId, 'Checked:', isChecked);

                if (isChecked) {
                    // Cocher l'étude associée
                    $.ajax({
                        url: '/get-related-study',
                        method: 'POST',
                        data: {
                            communiqueId: communiqueId,
                            etude: 'Allianz France',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            console.log('Données reçues du serveur:', data);
                            if (data && data.idInputE) {
                                console.log('Tentative de cocher l\'étude:', data.idInputE);
                                $('#' + data.idInputE).prop('checked', true);
                            } else {
                                console.log('Aucune étude associée trouvée ou format de données incorrect');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Erreur lors de la récupération de l'étude associée:", error);
                            console.log('Réponse du serveur:', xhr.responseText);
                        }
                    });
                } else {
                    // Décocher l'étude associée
                    $.ajax({
                        url: '/get-related-study',
                        method: 'POST',
                        data: {
                            communiqueId: communiqueId,
                            etude: 'Allianz France',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            console.log('Données reçues du serveur pour décocher:', data);
                            if (data && data.idInputE) {
                                console.log('Tentative de décocher l\'étude:', data.idInputE);
                                $('#' + data.idInputE).prop('checked', false);
                            } else {
                                console.log('Aucune étude associée trouvée pour décocher ou format de données incorrect');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Erreur lors de la récupération de l'étude à décocher:", error);
                            console.log('Réponse du serveur:', xhr.responseText);
                        }
                    });
                }
            });

            // Gestion des changements pour les études
            $('input[name="repriseEtude[]"]').change(function() {
                var etudeId = $(this).attr('id');
                var isChecked = $(this).is(':checked');
                console.log('Étude changée:', etudeId, 'Checked:', isChecked);

                if (isChecked) {
                    // Cocher le communiqué associé
                    $.ajax({
                        url: '/get-related-communique',
                        method: 'POST',
                        data: {
                            etudeId: etudeId,
                            etudeName: 'Allianz France',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            console.log('Données reçues du serveur:', data);
                            if (data && data.idInputC) {
                                console.log('Tentative de cocher le communiqué:', data.idInputC);
                                $('#' + data.idInputC).prop('checked', true);
                            } else {
                                console.log('Aucun communiqué associé trouvé ou format de données incorrect');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Erreur lors de la récupération du communiqué associé:", error);
                            console.log('Réponse du serveur:', xhr.responseText);
                        }
                    });
                } else {
                    // Décocher le communiqué associé
                    $.ajax({
                        url: '/get-related-communique',
                        method: 'POST',
                        data: {
                            etudeId: etudeId,
                            etudeName: 'Allianz France',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(data) {
                            console.log('Données reçues du serveur pour décocher:', data);
                            if (data && data.idInputC) {
                                console.log('Tentative de décocher le communiqué:', data.idInputC);
                                $('#' + data.idInputC).prop('checked', false);
                            } else {
                                console.log('Aucun communiqué associé trouvé pour décocher ou format de données incorrect');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Erreur lors de la récupération du communiqué à décocher:", error);
                            console.log('Réponse du serveur:', xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>

</body>

</html>