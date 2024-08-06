<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude LHG</title>

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
                        <h1>Grille d'analyse Louvre Hotels Group</h1>
                    </div>

                    <br>

                    <form form method="POST" action="{{ route('store_lhg', ['id' => $lhg->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-0">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1. Numéro d'article</label>
                                            <input type="text" class="form-control" name="numArticle" value="{{ $lhg->numArticle }}" />
                                            @error('numArticle')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>2. Numéro de page du PDF</label>
                                            <input type="text" class="form-control" name="pagePdf" value="{{ $lhg->pagePdf }}" />
                                            @error('pagePdf')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>3. Nom du support</label>
                                            <input type="text" class="form-control" name="nomSupport" value="{{ $lhg->nomSupport }}" />
                                            @error('nomSupport')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>4. Audience</label>
                                            <input type="text" class="form-control" name="audience" value="{{ $lhg->audience }}" />
                                            @error('audience')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>5. Equivalent Publicitaire</label>
                                            <input type="text" class="form-control" name="equivalentPub" value="{{ $lhg->equivalentPub }}" />
                                            @error('equivalentPub')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>6. Mois de la retombée</label>
                                            <input type="text" class="form-control" name="moisRetombee" value="{{ $lhg->moisRetombee }}" />
                                            @error('moisRetombee')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>7. Type de support</label>
                                            <input type="text" class="form-control" name="typeSupport" value="{{ $lhg->typeSupport }}" />
                                            @error('typeSupport')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>8. Familles de presse</label>
                                            <input type="text" class="form-control" name="famillePresse" value="{{ $lhg->famillePresse }}" />
                                            @error('famillePresse')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">9. Poids de LHG</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio29" name="poidsLhg" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio29">1. Sujet principal</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio30" name="poidsLhg" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio30">2. Sujet secondaire</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio31" name="poidsLhg" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio31">3. Simple mention</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('poidsLhg')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">10. Citation fond d'investissement</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio32" name="citationInvestissement" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio32">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio33" name="citationInvestissement" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio33">2. Jin Jiang International Hotels Development Co</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('citationInvestissement')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">11. Citation LHG et marques</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="citationLhg[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck1">1. Louvre Hotels Group seul</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="citationLhg[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck2">2. Louvre Hotels Group avec au moins une des marques</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="citationLhg[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck3">3. Première Classe</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="citationLhg[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck4">4. Campanile</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="citationLhg[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck5">5. Kyriad</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="citationLhg[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck6">6. Kyriad Direct</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="citationLhg[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck7">7. Tulip Inn</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="citationLhg[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck8">8. Tulip Residences</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="citationLhg[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck9">9. Golden Tulip</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="citationLhg[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck10">10. Royal Tulip</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" name="citationLhg[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck11">11. Réseau Sarovar en Inde</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" name="citationLhg[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck12">12. Groupe Hôtels & Préférence</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('citationLhg')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">12. Thèmes</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="theme[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck13">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="theme[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck14">2. Développement national et international</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="theme[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck15">3. Ressources humaines</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="theme[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck16">4. Social</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="theme[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck17">5. Dirigeants et gouvernance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="theme[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck18">6. Politique de gestion immobilière et d’actifs</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="theme[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck19">7. Responsabilité Sociétale d’entreprise</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="theme[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck20">8. Sponsoring et partenariats</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck21" name="theme[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck21">9. Affaires et controverses</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck22" name="theme[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck22">10. Résultats et performances du Groupe</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck23" name="theme[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck23">11. Rachat du Groupe</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck24" name="theme[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck24">12. Simple référence Jin Jiang</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck25" name="theme[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck25">13. Marketing client ou Innovations</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck26" name="theme[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck26">14. Qualité de l’offre d’hébergement et de restauration</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck27" name="theme[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck27">15. Université culinaire d’entreprise Chaud Devant</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck28" name="theme[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck28">16. Tourisme d’affaires</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck29" name="theme[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck29">17. Prix</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck30" name="theme[]" value="18" />
                                                    <label class="custom-control-label" for="customCheck30">18. Classement hôtelier</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck31" name="theme[]" value="19" />
                                                    <label class="custom-control-label" for="customCheck31">19. Fréquentation ou Taux d’occupation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck32" name="theme[]" value="20" />
                                                    <label class="custom-control-label" for="customCheck32">20. Rénovation d’hôtels</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck33" name="theme[]" value="21" />
                                                    <label class="custom-control-label" for="customCheck33">21. Franchises</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck34" name="theme[]" value="22" />
                                                    <label class="custom-control-label" for="customCheck34">22. Faits divers</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck35" name="theme[]" value="23" />
                                                    <label class="custom-control-label" for="customCheck35">23. Simple mention touristique / présentation d’hôtels</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck36" name="theme[]" value="24" />
                                                    <label class="custom-control-label" for="customCheck36">24. Référence à la Covid19</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck37" name="theme[]" value="25" />
                                                    <label class="custom-control-label" for="customCheck37">25. Autre thème</label>
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
                                            <div class="accordion-header">13. Reprise de messages-clés</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck38" name="repriseMessage[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck38">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck39" name="repriseMessage[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck39">2. Un acteur majeur de l’industrie hôtelière / présence internationale</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck40" name="repriseMessage[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck40">3. Une entreprise en croissance, un groupe performant</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck41" name="repriseMessage[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck41">4. Un expert visionnaire et novateur sur le marché de l’hôtellerie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck42" name="repriseMessage[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck42">5. Une référence en termes de métier hôtelier et qualité de services</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck43" name="repriseMessage[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck43">6. Un partenaire agile, flexible, qui s’adapte aux cultures locales</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck44" name="repriseMessage[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck44">7. Des marques innovantes qui contribuent au bien-être</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck45" name="repriseMessage[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck45">8. Une expérience de restauration de qualité</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck46" name="repriseMessage[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck46">9. Un créateur d’emplois contribue au développement du tourisme</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck47" name="repriseMessage[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck47">10. Un employeur responsable</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck48" name="repriseMessage[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck48">11. Un des plus importants conglomérats de tourisme en Chine</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck49" name="repriseMessage[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck49">12. Une entreprise responsable (pratiques RSE, citoyennes…)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck50" name="repriseMessage[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck50">13. Autre</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('repriseMessage')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">14. Reprise de communiqués de presse - actions presse</div>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">15. Tonalité du traitement médiatique par rapport à LHG</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio34" name="tonaliteTraitement" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio34">1. Favorable</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio35" name="tonaliteTraitement" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio35">2. Neutre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio36" name="tonaliteTraitement" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio36">3. Mitigée</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio37" name="tonaliteTraitement" class="custom-control-input" value="4/" />
                                                    <label class="custom-control-label" for="customRadio37">4. Défavorable</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('tonaliteTraitement')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">16. Mention de Federico J. GONZALEZ, PDG</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio38" name="mentionFederico" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio38">1. Oui</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio39" name="mentionFederico" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio39">2. Non</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('mentionFederico')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">17. Traits d’image associés à Federico J. GONZALEZ</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck57" name="imageFederico[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck57">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck58" name="imageFederico[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck58">2. Leadership</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck59" name="imageFederico[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck59">3. Responsabilité</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck60" name="imageFederico[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck60">4. Gestion</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck61" name="imageFederico[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck61">5. Influence</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck62" name="imageFederico[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck62">6. Autre</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('imageFederico')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">18. Prise de parole des représentants de LHG</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck63" name="paroleRepresentant[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck63">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck64" name="paroleRepresentant[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck64">2. Federico J. GONZALEZ</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck65" name="paroleRepresentant[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck65">3. Jean-Louis AMICE</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck66" name="paroleRepresentant[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck66">4. Krystel BLONDEAU</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck67" name="paroleRepresentant[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck67">5. Eduardo BOSCH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck68" name="paroleRepresentant[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck68">6. Saurabh CHAWLA</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck69" name="paroleRepresentant[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck69">7. Jean-Virgile CRANCE</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck70" name="paroleRepresentant[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck70">8. Olivier DAURAT</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck71" name="paroleRepresentant[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck71">9. Benjamin DORNIC</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck72" name="paroleRepresentant[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck72">10. Xavier DOUCHY</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck73" name="paroleRepresentant[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck73">11. Lorraine DUVAL</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck74" name="paroleRepresentant[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck74">12. Joël GUIRAUD</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck75" name="paroleRepresentant[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck75">13. Sébastien MAQUET</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck76" name="paroleRepresentant[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck76">14. Marie NONELL</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck77" name="paroleRepresentant[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck77">15. Christophe NOVELLON</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck78" name="paroleRepresentant[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck78">16. Emmanuel OLLIER</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck79" name="paroleRepresentant[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck79">17. Federica PIRAS</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck80" name="paroleRepresentant[]" value="18" />
                                                    <label class="custom-control-label" for="customCheck80">18. Alain SEBAH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck81" name="paroleRepresentant[]" value="19" />
                                                    <label class="custom-control-label" for="customCheck81">19. Quang THAI</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck82" name="paroleRepresentant[]" value="20" />
                                                    <label class="custom-control-label" for="customCheck82">20. Andreas TSCHERNING</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck83" name="paroleRepresentant[]" value="21" />
                                                    <label class="custom-control-label" for="customCheck83">21. Arnoud VINK</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck84" name="paroleRepresentant[]" value="22" />
                                                    <label class="custom-control-label" for="customCheck84">22. Directeurs d’hôtels ou Gérants</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck85" name="paroleRepresentant[]" value="23" />
                                                    <label class="custom-control-label" for="customCheck85">23. Collaborateurs et autres membres du personnel</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck86" name="paroleRepresentant[]" value="24" />
                                                    <label class="custom-control-label" for="customCheck86">24. Autre</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('paroleRepresentant')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">19. Prise de parole de relais d’opinion</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck87" name="paroleOpinion[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck87">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck88" name="paroleOpinion[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck88">2. Clients</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck89" name="paroleOpinion[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck89">3. Concurrents</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck90" name="paroleOpinion[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck90">4. Responsables politiques ou Elus</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck91" name="paroleOpinion[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck91">5. Avocats</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck92" name="paroleOpinion[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck92">6. Syndicats hôtellerie ou restauration</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck93" name="paroleOpinion[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck93">7. YU MINLIANG, président de Jin Jiang</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck94" name="paroleOpinion[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck94">8. Partenaires commerciaux</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck95" name="paroleOpinion[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck95">9. Partenaires financiers et investisseurs</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck96" name="paroleOpinion[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck96">10. Experts du secteur</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck97" name="paroleOpinion[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck97">11. Autre</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('paroleOpinion')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>20. Actualité de LHG ou de ses marques</label>
                                            <input type="text" class="form-control" name="actualiteLhg" />
                                            @error('actualiteLhg')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">21. Identification des meilleures retombées</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio40" name="identificationRetombee" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio40">1. Peu intéressante</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio41" name="identificationRetombee" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio41">2. Plutôt intéressante</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio42" name="identificationRetombee" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio42">3. Très intéressante</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('identificationRetombee')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>22. Sélection de verbatim</label>
                                            <input type="text" class="form-control" name="selectionVerbatim" />
                                            @error('selectionVerbatim')
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
                            etude: 'Louvre Hotel Group',
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
                            etude: 'Louvre Hotel Group',
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
                            etudeName: 'Louvre Hotel Group',
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
                            etudeName: 'Louvre Hotel Group',
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