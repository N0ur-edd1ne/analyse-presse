<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LHG</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

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
                                <img src="../frontend/images/account.png" class="avatar img-fluid" alt="">
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

                    <form method="POST" action="{{ url('update_allianz', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-0">
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1. Numéro d'article</label>
                                            <input type="text" class="form-control" name="numArticle" value="{{ $data->numArticle }}" />
                                            @error('numArticle')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>2. Nom du support</label>
                                            <input type="text" class="form-control" name="nomSupport" value="{{ $data->nomSupport }}" />
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
                                            <input type="text" class="form-control" name="dateRetombee" value="{{ $data->dateRetombee }}" />
                                            @error('dateRetombee')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">4. Mois de la retombée</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio1" name="moisRetombee" class="custom-control-input" value="1/" {{ $data->moisRetombee == '1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio1">1. Janvier</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio2" name="moisRetombee" class="custom-control-input" value="2/" {{ $data->moisRetombee == '2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio2">2. Février</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio3" name="moisRetombee" class="custom-control-input" value="3/" {{ $data->moisRetombee == '3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio3">3. Mars</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio4" name="moisRetombee" class="custom-control-input" value="4/" {{ $data->moisRetombee == '4/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio4">4. Avril</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio5" name="moisRetombee" class="custom-control-input" value="5/" {{ $data->moisRetombee == '5/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio5">5. Mai</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio6" name="moisRetombee" class="custom-control-input" value="6/" {{ $data->moisRetombee == '6/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio6">6. Juin</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio7" name="moisRetombee" class="custom-control-input" value="7/" {{ $data->moisRetombee == '7/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio7">7. Juillet</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio8" name="moisRetombee" class="custom-control-input" value="8/" {{ $data->moisRetombee == '8/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio8">8. Août</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio9" name="moisRetombee" class="custom-control-input" value="9/" {{ $data->moisRetombee == '9/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio9">9. Septembre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio10" name="moisRetombee" class="custom-control-input" value="10/" {{ $data->moisRetombee == '10/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio10">10. Octobre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio11" name="moisRetombee" class="custom-control-input" value="11/" {{ $data->moisRetombee == '11/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio11">11. Novembre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio12" name="moisRetombee" class="custom-control-input" value="12/" {{ $data->moisRetombee == '12/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio12">12. Décembre</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('moisRetombee')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>5. Audience potentielle</label>
                                            <input type="text" class="form-control" name="audience" value="{{ $data->audience }}" />
                                            @error('audience')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">6. Type de support</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio13" name="typeSupport" class="custom-control-input" value="1/" {{ $data->typeSupport == '1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio13">1. Print</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio14" name="typeSupport" class="custom-control-input" value="2/" {{ $data->typeSupport == '2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio14">2. Web</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio15" name="typeSupport" class="custom-control-input" value="3/" {{ $data->typeSupport == '3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio15">3. Audiovisuel</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('typeSupport')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">7. Familles de presse</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio16" name="famillePresse" class="custom-control-input" value="1/" {{ $data->famillePresse == '1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio16">1. Agences de presse</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio17" name="famillePresse" class="custom-control-input" value="2/" {{ $data->famillePresse == '2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio17">2. PQN</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio18" name="famillePresse" class="custom-control-input" value="3/" {{ $data->famillePresse == '3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio18">3. PQR-PHR</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio19" name="famillePresse" class="custom-control-input" value="4/" {{ $data->famillePresse == '4/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio19">4. Presse économique et financière</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio20" name="famillePresse" class="custom-control-input" value="5/" {{ $data->famillePresse == '5/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio20">5. Presse spécialisée Assurance</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio21" name="famillePresse" class="custom-control-input" value="6/" {{ $data->famillePresse == '6/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio21">6. Autres presses spécialisées</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio22" name="famillePresse" class="custom-control-input" value="7/" {{ $data->famillePresse == '7/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio22">7. News-Magazines</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio23" name="famillePresse" class="custom-control-input" value="8/" {{ $data->famillePresse == '8/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio23">8. Presse Grand Public</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio24" name="famillePresse" class="custom-control-input" value="9/" {{ $data->famillePresse == '9/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio24">9. TV</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio25" name="famillePresse" class="custom-control-input" value="10/" {{ $data->famillePresse == '10/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio25">10. Radio</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio26" name="famillePresse" class="custom-control-input" value="11/" {{ $data->famillePresse == '11/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio26">11. Portails d’information / Agrégateurs</label>
                                                </div>

                                            </div>
                                        </div>
                                        @error('famillePresse')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">8. Citation LHG et marques</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="theme[]" value="1" {{ in_array('1', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck1">1. Stratégie / Gouvernance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="theme[]" value="2" {{ in_array('2', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck2">2. Résultats / Actualités financières</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="theme[]" value="3" {{ in_array('3', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck3">3. Investissements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="theme[]" value="4" {{ in_array('4', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck4">4. Politique RH</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="theme[]" value="5" {{ in_array('5', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck5">5. Engagements RSE / Mécénat / Développement Durable</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="theme[]" value="6" {{ in_array('6', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck6">6. Sponsoring JO</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="theme[]" value="7" {{ in_array('7', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck7">7. Innovation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="theme[]" value="8" {{ in_array('8', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck8">8. Transformation Digitale</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="theme[]" value="9" {{ in_array('9', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck9">9. Etudes / Rapports / Expertises éco</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="theme[]" value="10" {{ in_array('10', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck10">10. Distribution</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" name="theme[]" value="11" {{ in_array('11', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck11">11. Publicité / Marque / Sponsoring hors JO</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" name="theme[]" value="12" {{ in_array('12', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck12">12. Assurance Biens et Responsabilité particulier</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="theme[]" value="13" {{ in_array('13', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck13">13. Epargne / Assurance Vie / Epargne Retraite</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="theme[]" value="14" {{ in_array('14', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck14">14. Assurance Santé, Prévoyance et assurance emprunteur</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="theme[]" value="15" {{ in_array('15', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck15">15. Prévention</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="theme[]" value="16" {{ in_array('16', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck16">16. Indemnisation / Service client</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="theme[]" value="17" {{ in_array('17', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck17">17. Réclamations clients / Litiges</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="theme[]" value="18" {{ in_array('18', explode('/', $data->theme)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck18">18. Risques de réputation</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="theme[]" value="19" {{ in_array('19', explode('/', $data->theme)) ? 'checked' : '' }} />
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
                                                    <input type="radio" id="customRadio27" name="tonaliteTraitement" class="custom-control-input" value="1/" {{ $data->tonaliteTraitement == '1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio27">1. Neutre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio28" name="tonaliteTraitement" class="custom-control-input" value="2/" {{ $data->tonaliteTraitement == '2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio28">2. Favorable</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio29" name="tonaliteTraitement" class="custom-control-input" value="3/" {{ $data->tonaliteTraitement == '3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio29">3. Mitigée</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio30" name="tonaliteTraitement" class="custom-control-input" value="4/" {{ $data->tonaliteTraitement == '4/' ? 'checked' : '' }} />
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="repriseMessage[]" value="1" {{ in_array('1', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck20">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck21" name="repriseMessage[]" value="2" {{ in_array('2', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck21">2. La confiance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck22" name="repriseMessage[]" value="3" {{ in_array('3', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck22">3. L’expertise</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck23" name="repriseMessage[]" value="4" {{ in_array('4', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck23">4. La qualité de service</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck24" name="repriseMessage[]" value="5" {{ in_array('5', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck24">5. La proximité</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck25" name="repriseMessage[]" value="6" {{ in_array('6', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck25">6. La solidité</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck26" name="repriseMessage[]" value="7" {{ in_array('7', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck26">7. Humain</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck27" name="repriseMessage[]" value="8" {{ in_array('8', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck27">8. Engagé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck28" name="repriseMessage[]" value="9" {{ in_array('9', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck28">9. Conquérant</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck29" name="repriseMessage[]" value="10" {{ in_array('10', explode('/', $data->repriseMessage)) ? 'checked' : '' }} />
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck30" name="paroleRepresentant[]" value="1" {{ in_array('1', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck30">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck31" name="paroleRepresentant[]" value="2" {{ in_array('2', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck31">2. Non présidé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck32" name="paroleRepresentant[]" value="3" {{ in_array('3', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck32">3. Carlos ARAUJO, Directeur ESG, innovation et gouvernance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck33" name="paroleRepresentant[]" value="4" {{ in_array('4', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck33">4. Frédéric BACCELLI, Directeur Général Adjoint d'Allianz</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck34" name="paroleRepresentant[]" value="5" {{ in_array('5', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck34">5. Charlotte BICHET D'HALLUIN, Leader de l’écosystème d'Allianz</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck35" name="paroleRepresentant[]" value="6" {{ in_array('6', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck35">6. Edouard BINET, Directeur de l'indemnisation Service client</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck36" name="paroleRepresentant[]" value="7" {{ in_array('7', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck36">7. Nicolas BOULET, Directeur des Investissements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck37" name="paroleRepresentant[]" value="8" {{ in_array('8', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck37">8. Stéphane CAMON, Leader écosystème ma santé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck38" name="paroleRepresentant[]" value="9" {{ in_array('9', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck38">9. Sylvain CORIAT, Membre du Comité Exécutif d’Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck39" name="paroleRepresentant[]" value="10" {{ in_array('10', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck39">10. Christophe DEPONT, Directeur Marque, Publicité et Partenariats</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck40" name="paroleRepresentant[]" value="11" {{ in_array('11', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck40">11. Marion DEWAGENAERE, Leader de l'écosystème Mon avenir</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck41" name="paroleRepresentant[]" value="12" {{ in_array('12', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck41">12. Alexandre DU GARREAU, Membre du Comité Exécutif de Distribution</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck42" name="paroleRepresentant[]" value="13" {{ in_array('13', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck42">13. Yann LECAE, Directeur stratégie indemnisation chez Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck43" name="paroleRepresentant[]" value="14" {{ in_array('14', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck43">14. Julien MARTINEZ, Membre du Comité Exécutif, Directeur service</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck44" name="paroleRepresentant[]" value="15" {{ in_array('15', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck44">15. François NEDEY, Membre du Comité Exécutif des comptes</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck45" name="paroleRepresentant[]" value="16" {{ in_array('16', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck45">16. Lucie NICOLAS-ENCREVE, Directrice Talent Management</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck46" name="paroleRepresentant[]" value="17" {{ in_array('17', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck46">17. Mathias PATTEIN, Responsable Sobriété Energétique</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck47" name="paroleRepresentant[]" value="18" {{ in_array('18', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck47">18. Jean-Baptiste PERRET TORRES, Directeur de la stratégie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck48" name="paroleRepresentant[]" value="19" {{ in_array('19', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck48">19. Jacques RICHIER, Président d'Allianz et de administration</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck49" name="paroleRepresentant[]" value="20" {{ in_array('20', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck49">20. Giovanna SANTI, Ecosystème Leader "Ma prévention"</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck50" name="paroleRepresentant[]" value="21" {{ in_array('21', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck50">21. Rémi SAUCIE, Directeur financier et membre du Comité Exécutif</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck51" name="paroleRepresentant[]" value="22" {{ in_array('22', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck51">22. Matthias SEEWALD, Directeur des Investissements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck52" name="paroleRepresentant[]" value="23" {{ in_array('23', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck52">23. Ludovic SUBRAN, Chef économiste du Groupe Allianz</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck53" name="paroleRepresentant[]" value="24" {{ in_array('24', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck53">24. Nicolas TETART, Responsable Prévention Routière</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck54" name="paroleRepresentant[]" value="25" {{ in_array('25', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck54">25. Sylvain THEVENIAUD, Directeur de l'accélérateur Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck55" name="paroleRepresentant[]" value="26" {{ in_array('26', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck55">26. Pierre VAYSSE, Membre du Comité Exécutif des Assurances</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck56" name="paroleRepresentant[]" value="27" {{ in_array('27', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck56">27. Fabien WATHLE, Directeur Général d'Allianz France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck57" name="paroleRepresentant[]" value="28" {{ in_array('28', explode('/', $data->paroleRepresentant)) ? 'checked' : '' }} />
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
                                                    <input type="checkbox" class="custom-control-input" id="customCheck58" name="paroleOpinion[]" value="1" {{ in_array('1', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck58">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck59" name="paroleOpinion[]" value="2" {{ in_array('2', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck59">2. Représentants politiques</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck60" name="paroleOpinion[]" value="3" {{ in_array('3', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck60">3. Experts Secteur Assurance</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck61" name="paroleOpinion[]" value="4" {{ in_array('4', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck61">4. France Assureurs</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck62" name="paroleOpinion[]" value="5" {{ in_array('5', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck62">5. Clients / Assurés</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck63" name="paroleOpinion[]" value="6" {{ in_array('6', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck63">6. Concurrents</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck64" name="paroleOpinion[]" value="7" {{ in_array('7', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck64">7. ACPR</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck65" name="paroleOpinion[]" value="8" {{ in_array('8', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck65">8. Partenaires commerciaux</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck66" name="paroleOpinion[]" value="9" {{ in_array('9', explode('/', $data->paroleOpinion)) ? 'checked' : '' }} />
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
                                                    <input type="checkbox" class="custom-control-input" id="{{ $communique->idInputC }}" name="repriseCP[]" value="{{ $communique->numerotationC }}" {{ in_array($communique->numerotationC, explode('/', $data->repriseCP)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="{{ $communique->idInputC }}">
                                                        {{ $communique->numerotationC }}. {{ $communique->libelleC }}
                                                    </label>
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
                                            <input type="text" class="form-control" name="actualiteAlz" value="{{ $data->actualiteAlz }}" />
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
                                            <input type="text" class="form-control" name="verbatim" value="{{ $data->verbatim }}" />
                                            @error('verbatim')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../frontend/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <!-- Script pour les checkbox -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle communique checkbox change
            $('input[name="repriseCP[]"]').change(function() {
                var communiqueId = $(this).attr('id');
                var isChecked = $(this).is(':checked');

                if (isChecked) {
                    // Fetch related studies
                    $.post('/get-related-studies', {
                        communiqueId: communiqueId,
                        etude: 'Allianz France',
                        _token: '{{ csrf_token() }}'
                    }, function(data) {
                        data.forEach(function(idInputE) {
                            $('#' + idInputE.idInputE).prop('checked', true);
                        });
                    });
                } else {
                    // Uncheck related studies
                    $.post('/get-related-studies', {
                        communiqueId: communiqueId,
                        etude: 'Allianz France',
                        _token: '{{ csrf_token() }}'
                    }, function(data) {
                        data.forEach(function(idInputE) {
                            $('#' + idInputE.idInputE).prop('checked', false);
                        });
                    });
                }
            });

            // Handle etude checkbox change
            $('input[name="repriseEtude[]"]').change(function() {
                var etudeId = $(this).attr('id');
                var isChecked = $(this).is(':checked');

                if (isChecked) {
                    // Fetch related communiques
                    $.post('/get-related-communiques', {
                        etudeId: etudeId,
                        etude: 'Allianz France',
                        _token: '{{ csrf_token() }}'
                    }, function(data) {
                        data.forEach(function(idInputC) {
                            $('#' + idInputC.idInputC).prop('checked', true);
                        });
                    });
                } else {
                    // Uncheck related communiques
                    $.post('/get-related-communiques', {
                        etudeId: etudeId,
                        etude: 'Allianz France',
                        _token: '{{ csrf_token() }}'
                    }, function(data) {
                        data.forEach(function(idInputC) {
                            $('#' + idInputC.idInputC).prop('checked', false);
                        });
                    });
                }
            });
        });
    </script>

</body>

</html>