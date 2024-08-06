<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APEC</title>
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
                        <h1>Grille d'analyse APEC</h1>
                    </div>

                    <br>

                    <form method="POST" action="{{ url('update_apec', $apec->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="pd-20 bg-white border-radius-4 box-shadow mb-0">

                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>1. Numéro d'article</label>
                                            <input type="text" class="form-control" name="numArticle" value="{{ $apec->numArticle }}" />
                                            @error('numArticle')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>2. Nom du support</label>
                                            <input type="text" class="form-control" name="nomSupport" value="{{ $apec->nomSupport }}" />
                                            @error('nomSupport')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>3. Audience</label>
                                            <input type="text" class="form-control" name="audience" value="{{ $apec->audience }}" />
                                            @error('audience')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>4. Date</label>
                                            <input type="text" class="form-control" name="date" value="{{ $apec->date }}" />
                                            @error('date')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>5. Type de média</label>
                                            <input type="text" class="form-control" name="typeMedias" value="{{ $apec->typeMedias }}" />
                                            @error('typeMedias')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>6. Famille de presse</label>
                                            <input type="text" class="form-control" name="famillePresse" value="{{ $apec->famillePresse }}" />
                                            @error('famillePresse')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>7. Délégations régionales</label>
                                            <input type="text" class="form-control" name="delegationRegionale" value="{{ $apec->delegationRegionale }}" />
                                            @error('delegationRegionale')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">8. Thèmes développés</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="themeDeveloppe[]" value="1" {{ in_array('1', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck1">1. Vie de l'entreprise</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="themeDeveloppe[]" value="2" {{ in_array('2', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck2">2. Dialogue social / actu emploi</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="themeDeveloppe[]" value="3" {{ in_array('3', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck3">3. Etudes de l'Aрес</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="themeDeveloppe[]" value="4" {{ in_array('4', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck4">4. Etudes autres que l'Apec</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="themeDeveloppe[]" value="5" {{ in_array('5', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck5">5. Services aux jeunes diplômés</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="themeDeveloppe[]" value="6" {{ in_array('6', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck6">6. Services aux cadres</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="themeDeveloppe[]" value="7" {{ in_array('7', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck7">7. Services aux cadres seniors</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="themeDeveloppe[]" value="8" {{ in_array('8', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck8">8. Services aux cadres demandeurs d'emploi de longue durée</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" name="themeDeveloppe[]" value="9" {{ in_array('9', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck9">9. Services aux entreprises</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" name="themeDeveloppe[]" value="10" {{ in_array('10', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck10">10. Actualités emploi</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" name="themeDeveloppe[]" value="11" {{ in_array('11', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck11">11. Inclusion, diversité, parité : de manière générale</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" name="themeDeveloppe[]" value="12" {{ in_array('12', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck12">12. Inclusion, diversité, parité : Seniors</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="themeDeveloppe[]" value="13" {{ in_array('13', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck13">13. Inclusion, diversité, parité : Inégalités F/H</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" name="themeDeveloppe[]" value="14" {{ in_array('14', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck14">14. Inclusion, diversité, parité : QPV</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="themeDeveloppe[]" value="15" {{ in_array('15', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck15">15. Novapec</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="themeDeveloppe[]" value="16" {{ in_array('16', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck16">16. Partenariats, participation à des événements</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="themeDeveloppe[]" value="17" {{ in_array('17', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck17">17. Organisation de salons Apec</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="themeDeveloppe[]" value="18" {{ in_array('18', explode('/', $apec->themeDeveloppe)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck18">18. Autres</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('themeDeveloppe')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">9. Reprise des communiqués de presse</div>
                                            <div class="accordion-content">
                                                @foreach($communiques as $communique)
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="{{ $communique->idInputC }}" name="repriseCP[]" value="{{ $communique->numerotationC }}" {{ in_array($communique->numerotationC, explode('/', $apec->repriseCP)) ? 'checked' : '' }} />
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
                                        <div class="accordion">
                                            <div class="accordion-header">10. Reprise des études</div>
                                            <div class="accordion-content">
                                                @foreach($etudes as $etude)
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="{{ $etude->idInputE }}" name="repriseEtude[]" value="{{ $etude->numerotationE }}" {{ in_array($etude->numerotationE, explode('/', $apec->repriseEtude)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="{{ $etude->idInputE }}">{{ $etude->numerotationE }}. {{ $etude->libelleE }}</label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @error('repriseEtude')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">11. Prise de parole des représentants de l'APEC</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="Representant[]" value="1" {{ in_array('1', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck19">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck20" name="Representant[]" value="2" {{ in_array('2', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck20">2. Gaël Bouron, Responsable Adjoint pôle Etudes</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck21" name="Representant[]" value="3" {{ in_array('3', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck21">3. Indira Camalon, responsable La Réunion - Mayotte</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck22" name="Representant[]" value="4" {{ in_array('4', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck22">4. Christian Clémencelle, Vice-Président CA</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck23" name="Representant[]" value="5" {{ in_array('5', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck23">5. Marie-Laure Collet, Vice-Présidente CA</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck24" name="Representant[]" value="6" {{ in_array('6', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck24">6. Pierre Damiani, Président CA</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck25" name="Representant[]" value="7" {{ in_array('7', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck25">7. Véronique Dubois, Directrice de la communication</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck26" name="Representant[]" value="8" {{ in_array('8', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck26">8. Bernard Garcia, Directeur des affaires administratives / financières</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck27" name="Representant[]" value="9" {{ in_array('9', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck27">9. Galles Gateau, Directeur Général</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck28" name="Representant[]" value="10" {{ in_array('10', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck28">10. Hélène Halec, Directrice stratégie, innovation et digital</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck29" name="Representant[]" value="11" {{ in_array('11', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck29">11. Bruno Jonchier, Directeur des services et du réseau</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck30" name="Representant[]" value="12" {{ in_array('12', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck30">12. Pierre Lamblin, Directeur des données et études</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck31" name="Representant[]" value="13" {{ in_array('13', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck31">13. Laetitia Niaudeau, Directrice Générale Adjointe</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck32" name="Representant[]" value="14" {{ in_array('14', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck32">14. Boris Parsy, Directeur des systèmes d'information</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck33" name="Representant[]" value="15" {{ in_array('15', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck33">15. Eric Pérès, Vice-Président CA</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck34" name="Representant[]" value="16" {{ in_array('16', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck34">16. Vanessa Robert, Directrice des RH & RSE</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck35" name="Representant[]" value="17" {{ in_array('17', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck35">17. Hervé Silbande, responsable Guadeloupe, Martinique, Guyane</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck36" name="Representant[]" value="18" {{ in_array('18', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck36">18. Stéphane Currenti délégué régional Auvergne-Rhône-Alpes</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck37" name="Representant[]" value="19" {{ in_array('19', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck37">19. Valerie Fenaux, déléguée régionale Nouvelle-Aquitaine</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck38" name="Representant[]" value="20" {{ in_array('20', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck38">20. Nicolas François, délégué régional Centre-Val de Loire</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck39" name="Representant[]" value="21" {{ in_array('21', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck39">21. Anthony Fumard, délégué régional Alpes-Côte d'Azur - Corse</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck40" name="Representant[]" value="22" {{ in_array('22', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck40">22. Florence Heitz déléguée régionale Grand Est</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck41" name="Representant[]" value="23" {{ in_array('23', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck41">23. Dominique Largaud, déléguée régionale lle-de-France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck42" name="Representant[]" value="24" {{ in_array('24', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck42">24. Marc Lesueur, délégué régional Normandie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck43" name="Representant[]" value="25" {{ in_array('25', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck43">25. Cyrille Longuépée déléguée régional Occitanie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck44" name="Representant[]" value="26" {{ in_array('26', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck44">26. Olivier Maurin, délégué régional Bretagne</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck45" name="Representant[]" value="27" {{ in_array('27', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck45">27. Hervé Reynier, délégué régional Bourgogne Franche Comté</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck46" name="Representant[]" value="28" {{ in_array('28', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck46">28. Michèle Sallembien, déléguée régionale Pays de la Loire</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck47" name="Representant[]" value="29" {{ in_array('29', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck47">29. Jacques Triponel, délégué régional Hauts-de- France</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck48" name="Representant[]" value="30" {{ in_array('30', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck48">30. Délégué régional</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck49" name="Representant[]" value="31" {{ in_array('31', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck49">31. Réseau de consultants</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck50" name="Representant[]" value="32" {{ in_array('32', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck50">32. Autres collaborateurs de l'APEC</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck51" name="Representant[]" value="33" {{ in_array('33', explode('/', $apec->Representant)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck51">33. Autres membres du CA</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('Representant')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">12. Prise de parole de relais d'opinion</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck52" name="relaisOpinion[]" value="1" {{ in_array('1', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck52">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck53" name="relaisOpinion[]" value="2" {{ in_array('2', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck53">2. Demandeurs d'emploi</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck54" name="relaisOpinion[]" value="3" {{ in_array('3', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck54">3. Jeunes diplômés</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck55" name="relaisOpinion[]" value="4" {{ in_array('4', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck55">4. Cadres salariés</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck56" name="relaisOpinion[]" value="5" {{ in_array('5', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck56">5. Membres d'entreprises conseillées par l'Apec</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck57" name="relaisOpinion[]" value="6" {{ in_array('6', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck57">6. Partenaires / écosystème emploi formation / écoles</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck58" name="relaisOpinion[]" value="7" {{ in_array('7', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck58">7. Pouvoirs publics</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck59" name="relaisOpinion[]" value="8" {{ in_array('8', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck59">8. Julie Langlade, Resp. programme NOVAPEC</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck60" name="relaisOpinion[]" value="9" {{ in_array('9', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck60">9. Publics bénéficiaires du programme NOVAPEC</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck61" name="relaisOpinion[]" value="10" {{ in_array('10', explode('/', $apec->relaisOpinion)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck61">10. Autre</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('relaisOpinion')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">13. Teneur de l'article par rapport à l'APEC</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio44" name="teneurArticle" class="custom-control-input" value="1/" {{ $apec->teneurArticle ==='1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio44">1. Favorable</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio45" name="teneurArticle" class="custom-control-input" value="2/" {{ $apec->teneurArticle ==='2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio45">2. Neutre</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio46" name="teneurArticle" class="custom-control-input" value="3/" {{ $apec->teneurArticle ==='3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio46">3. Mitigée</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio47" name="teneurArticle" class="custom-control-input" value="4/" {{ $apec->teneurArticle ==='4/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio47">4. Défavorable</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('teneurArticle')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="accordion">
                                            <div class="accordion-header">14. Reprise des messages-clés de l'APEC</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck62" name="repriseMessage[]" value="1" {{ in_array('1', explode('/', $apec->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck62">1. Aucun</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck63" name="repriseMessage[]" value="2" {{ in_array('2', explode('/', $apec->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck63">2. L'Apec, un acteur engagé et mobilisé</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck64" name="repriseMessage[]" value="3" {{ in_array('3', explode('/', $apec->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck64">3. L'Apec anticipe le monde du travail de demain</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck65" name="repriseMessage[]" value="4" {{ in_array('4', explode('/', $apec->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck65">4. L'Apec accompagne les cadres / jeunes diplômés toute leur vie</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck66" name="repriseMessage[]" value="5" {{ in_array('5', explode('/', $apec->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck66">5. L'Apec aide à la réussite des recrutements des entreprises</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" class="custom-control-input" id="customCheck67" name="repriseMessage[]" value="6" {{ in_array('6', explode('/', $apec->repriseMessage)) ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customCheck67">6. L'Apec se développe</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('repriseMessage')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">15. Epaisseur médiatique</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio48" name="epaisseurMediatique" class="custom-control-input" value="1/" {{ $apec->epaisseurMediatique ==='1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio48">1. Sujet principal</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio49" name="epaisseurMediatique" class="custom-control-input" value="2/" {{ $apec->epaisseurMediatique ==='2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio49">2. Sujet secondaire</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio50" name="epaisseurMediatique" class="custom-control-input" value="3/" {{ $apec->epaisseurMediatique ==='3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio50">3. Simple mention</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('epaisseurMediatique')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>16. Actualité de la retombée</label>
                                            <input type="text" class="form-control" name="actualiteRetombee" value="{{ $apec->actualiteRetombee }}" />
                                            @error('actualiteRetombee')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>17. Sélection de verbatims</label>
                                            <input type="text" class="form-control" name="selectionVerbatim" value="{{ $apec->selectionVerbatim }}" />
                                            @error('selectionVerbatim')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <br>
                                        <div class="accordion">
                                            <div class="accordion-header">18. Identification des meilleures retombées</div>
                                            <div class="accordion-content">
                                                <div>
                                                    <input type="radio" id="customRadio51" name="identificationRetombee" class="custom-control-input" value="1/" {{ $apec->identificationRetombee ==='1/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio51">1. Peu intéressante</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio52" name="identificationRetombee" class="custom-control-input" value="2/" {{ $apec->identificationRetombee ==='2/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio52">2. Plutôt intéressante</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="customRadio53" name="identificationRetombee" class="custom-control-input" value="3/" {{ $apec->identificationRetombee ==='3/' ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="customRadio53">3. Très intéressante</label>
                                                </div>
                                            </div>
                                        </div>
                                        @error('identificationRetombee')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>19. Préciser s'il s'agit d'une interview de Gilles Gateau</label>
                                            <input type="text" class="form-control" name="gillesGateau" value="{{ $apec->gillesGateau }}" />
                                            @error('gillesGateau')
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
                        etude: 'APEC',
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
                        etude: 'APEC',
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
                        etude: 'APEC',
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
                        etude: 'APEC',
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