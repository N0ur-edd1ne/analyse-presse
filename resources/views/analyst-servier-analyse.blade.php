<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etude Servier</title>

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
                        <h1>Grille d'analyse Servier</h1>
                    </div>

                    <br>

                    <form method="POST" action="{{ route('store_servier', ['id' => $servier->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-0">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1. Numéro d'article</label>
                                            <input type="text" class="form-control" name="numArticle" value="{{ $servier->numArticle }}" />
                                            @error('numArticle')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>2. Nom du support</label>
                                            <input type="text" class="form-control" name="nomSupport" value="{{ $servier->nomSupport }}" />
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
                                            <input type="text" class="form-control" name="dateRetombee" value="{{ $servier->dateRetombee }}" />
                                            @error('dateRetombee')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">4. Citation SERVIER, et marques</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="citation[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck1">1. Servier / Gouvernance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="citation[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck2">2. Biogaran</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="citation[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck3">3. Oril Industrie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="citation[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck4">4. Laboratoires Servier Industrie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="citation[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck5">5. Mediator</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="citation[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck6">6. Autre</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="citation[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck7">7. Mécénat Servier</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('citation')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">5. Type de presse</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio1" name="typePresse" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio1">1. Print</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio2" name="typePresse" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio2">2. Online</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio3" name="typePresse" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio3">3. TV ou Radio</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('typePresse')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">6. Famille de presse</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio4" name="famillePresse" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio4">1. Agence de presse</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio5" name="famillePresse" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio5">2. PQN</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio6" name="famillePresse" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio6">3. PQR</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio7" name="famillePresse" class="custom-control-input" value="4/" />
                                                    <label class="custom-control-label" for="customRadio7">4. Presse économique et financière</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio8" name="famillePresse" class="custom-control-input" value="5/" />
                                                    <label class="custom-control-label" for="customRadio8">5. Presse métier</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio9" name="famillePresse" class="custom-control-input" value="6/" />
                                                    <label class="custom-control-label" for="customRadio9">6. Autres presses sectorielles</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio10" name="famillePresse" class="custom-control-input" value="7/" />
                                                    <label class="custom-control-label" for="customRadio10">7. News-Hebdos</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio11" name="famillePresse" class="custom-control-input" value="8/" />
                                                    <label class="custom-control-label" for="customRadio11">8. Presse grand public</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio12" name="famillePresse" class="custom-control-input" value="9/" />
                                                    <label class="custom-control-label" for="customRadio12">9. TV-Radios</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio13" name="famillePresse" class="custom-control-input" value="10/" />
                                                    <label class="custom-control-label" for="customRadio13">10. Presse étrangère</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('famillePresse')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">7. Tonalité des retombées par rapport à SERVIER</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio14" name="tonalite" class="custom-control-input" value="1/" />
                                                    <label class="custom-control-label" for="customRadio14">1. Factuelle</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio15" name="tonalite" class="custom-control-input" value="2/" />
                                                    <label class="custom-control-label" for="customRadio15">2. Favorable</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio16" name="tonalite" class="custom-control-input" value="3/" />
                                                    <label class="custom-control-label" for="customRadio16">3. Mitigée</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio17" name="tonalite" class="custom-control-input" value="4/" />
                                                    <label class="custom-control-label" for="customRadio17">4. Défavorable</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('tonalite')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">8. Attribut d’image associé à l’image de SERVIER</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="attributImage[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck8">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="attributImage[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck9">2. Groupe en transformation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="attributImage[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck10">3. Groupe Indépendant gouverné par une Fondation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" name="attributImage[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck11">4. Groupe International</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" name="attributImage[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck12">5. Groupe Engagé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="attributImage[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck13">6. Groupe Innovant</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="attributImage[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck14">7. Leader du cardio-métabolisme</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="attributImage[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck15">8. Groupe engagé en oncologie</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('attributImage')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">9. Thèmes</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="theme[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck16">1. Stratégie et Transformation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="theme[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck17">2. Partenariats</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="theme[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck18">3. Gouvernance, nominations</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="theme[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck19">4. Actualités financières</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="theme[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck20">5. R & D</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck21" name="theme[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck21">6. Production, Fabrication</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck22" name="theme[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck22">7. Bioproduction</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck23" name="theme[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck23">8. Lancements de médicaments</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck24" name="theme[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck24">9. Actualités Produits</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck25" name="theme[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck25">10. Actualités Marché du secteur pharmaceutique</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck26" name="theme[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck26">11. Stratégie RH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck27" name="theme[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck27">12. Social RH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck28" name="theme[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck28">13. Développement Durable</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck29" name="theme[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck29">14. Actions solidaires/Mécénat Servier</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck30" name="theme[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck30">15. Affaire Mediator</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck31" name="theme[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck31">16. Autres Litiges, Affaires et Controverses</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck32" name="theme[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck32">17. Faits divers</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck33" name="theme[]" value="18" />
                                                    <label class="custom-control-label" for="customCheck33">18. Autre thème</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck34" name="theme[]" value="19" />
                                                    <label class="custom-control-label" for="customCheck34">19. RSE-RH</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('theme')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">10. Reprise de communiqués de presse et actions RP</div>
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

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">11. Prise de parole des représentants de SERVIER</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck95" name="paroleRepresentant[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck95">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck96" name="paroleRepresentant[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck96">2. Autres porte-parole</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck97" name="paroleRepresentant[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck97">3. Non précisé | Sources off</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck98" name="paroleRepresentant[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck98">4. Claude BERTRAND, Directeur Général de la R & D</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck99" name="paroleRepresentant[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck99">5. Pascal BRIERE, Vice-Président Exécutif Activités Génériques</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck100" name="paroleRepresentant[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck100">6. Damien CATOIR Vice-Président Exécutif Secrétaire Général</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck101" name="paroleRepresentant[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck101">7. Virginie DOMINGUEZ, Vice-Présidente Exécutive Digital, Data & SI</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck102" name="paroleRepresentant[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck102">8. Philippe GONNARD Vice-Président Exécutif Global Product Strategy</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck103" name="paroleRepresentant[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck103">9. David HINDLEY, Vice-Président Exécutif RH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck104" name="paroleRepresentant[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck104">10. Siham IMANI, Vice-Présidente Exécutive Corporate Strategy</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck105" name="paroleRepresentant[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck105">11. Arnaud LALLOUETTE Vice-Président Exécutif Global Medical</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck106" name="paroleRepresentant[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck106">12. Olivier LAUREAU, Président</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck107" name="paroleRepresentant[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck107">13. Pascal LEMAIRE, Vice-Président Exécutif Finance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck108" name="paroleRepresentant[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck108">14. STEPHANE MASCARAU, Vice-Président Exécutif Opérations Monde</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck109" name="paroleRepresentant[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck109">15. Pierre VENESQUE, Vice-Président Exécutif Industrie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck110" name="paroleRepresentant[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck110">16. Porte-parole Biogaran</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck111" name="paroleRepresentant[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck111">17. Avocats de Servier</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('paroleRepresentant')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>12. Si autres porte-parole</label>
                                            <input type="text" class="form-control" name="autreRepresentant" />
                                            @error('autreRepresentant')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">13. Prise de parole de relais d’opinion sur SERVIER</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck112" name="paroleOpinion[]" value="1" />
                                                    <label class="custom-control-label" for="customCheck112">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck113" name="paroleOpinion[]" value="2" />
                                                    <label class="custom-control-label" for="customCheck113">2. Autre relais d’opinion</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck114" name="paroleOpinion[]" value="3" />
                                                    <label class="custom-control-label" for="customCheck114">3. Irène FRACHON, médecin, lanceur d’alerte (Mediator)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck115" name="paroleOpinion[]" value="4" />
                                                    <label class="custom-control-label" for="customCheck115">4. Partenaires commerciaux, fournisseurs…</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck116" name="paroleOpinion[]" value="5" />
                                                    <label class="custom-control-label" for="customCheck116">5. Concurrents</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck117" name="paroleOpinion[]" value="6" />
                                                    <label class="custom-control-label" for="customCheck117">6. Institutions, institutions juridiques (Conseil d’Etat, Sénat, parquet…)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck118" name="paroleOpinion[]" value="7" />
                                                    <label class="custom-control-label" for="customCheck118">7. Responsables politiques (Ministres…)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck119" name="paroleOpinion[]" value="8" />
                                                    <label class="custom-control-label" for="customCheck119">8. Professionnels de Santé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck120" name="paroleOpinion[]" value="9" />
                                                    <label class="custom-control-label" for="customCheck120">9. CNAM (Caisse Nationale d’Assurance Maladie)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck121" name="paroleOpinion[]" value="10" />
                                                    <label class="custom-control-label" for="customCheck121">10. EMA (Agence Européenne du Médicament)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck122" name="paroleOpinion[]" value="11" />
                                                    <label class="custom-control-label" for="customCheck122">11. EFPIA (Fédération des associations et industries pharmaceutiques)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck123" name="paroleOpinion[]" value="12" />
                                                    <label class="custom-control-label" for="customCheck123">12. ANSM (Agence Sécurité du Médicament et des Produits de Santé)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck124" name="paroleOpinion[]" value="13" />
                                                    <label class="custom-control-label" for="customCheck124">13. LEEM (Les Entreprises du Médicament)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck125" name="paroleOpinion[]" value="14" />
                                                    <label class="custom-control-label" for="customCheck125">14. ONIAM (Office National d’Indemnisation des accidents médicaux)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck126" name="paroleOpinion[]" value="15" />
                                                    <label class="custom-control-label" for="customCheck126">15. G5 Santé (Ipsen, LFB, Pierre Fabre, Sanofi, Servier et Théa)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck127" name="paroleOpinion[]" value="16" />
                                                    <label class="custom-control-label" for="customCheck127">16. Victimes du Mediator et Association des victimes du Mediator</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck128" name="paroleOpinion[]" value="17" />
                                                    <label class="custom-control-label" for="customCheck128">17. Avocats des victimes du Mediator (Charles Joseph- Oudin…)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck129" name="paroleOpinion[]" value="18" />
                                                    <label class="custom-control-label" for="customCheck129">18. Autres patients ou associations de patients (hors Mediator)</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck130" name="paroleOpinion[]" value="19" />
                                                    <label class="custom-control-label" for="customCheck130">19. Personnel syndiqué et Syndicats de travailleurs</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('paroleOpinion')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>14. Si autres relais d’opinion</label>
                                            <input type="text" class="form-control" name="autreOpinion" />
                                            @error('autreOpinion')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>15. Actualité de SERVIER</label>
                                            <input type="text" class="form-control" name="actualite" />
                                            @error('actualite')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>16. Sélection de verbatim</label>
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
                            etude: 'Servier',
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
                            etude: 'Servier',
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
                            etudeName: 'Servier',
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
                            etudeName: 'Servier',
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