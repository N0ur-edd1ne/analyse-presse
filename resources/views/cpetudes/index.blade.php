<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudes</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../frontend/style.css">
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
                        <h1>Gérer les Associations entre Communiqués et Études</h1>
                    </div>

                    <br>

                    <form action="{{ route('associateStudyToCommunique') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="communiqueIdInput">Le Communiqué Presse :</label>
                            <select id="communiqueIdInput" name="communiqueIdInput" class="form-control" required>
                                <option value="" disabled selected>Sélectionnez un communiqué</option>
                                @foreach($communiques as $communique)
                                <option value="{{ $communique->idInputC }}">({{ $communique->idInputC }})</option>
                                @endforeach
                            </select>
                            @error('communiqueIdInput')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="etudeIdInput">L'Étude associée :</label>
                            <select id="etudeIdInput" name="etudeIdInput" class="form-control" required>
                                <option value="" disabled selected>Sélectionnez une étude</option>
                                @foreach($etudes as $etude)
                                <option value="{{ $etude->idInputE }}">({{ $etude->idInputE }})</option>
                                @endforeach
                            </select>
                            @error('etudeIdInput')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 px-4">Associer</button>
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
    <script src="../frontend/script.js"></script>

</body>

</html>