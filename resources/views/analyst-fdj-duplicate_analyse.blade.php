<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FDJ</title>
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
					<div style="background-color: whitesmoke; text-align :center;">
						<h1>Etudes FDJ</h1>
					</div>
					<form method="POST" action="{{ url('store_fdj') }}" enctype="multipart/form-data">
						@csrf

						<div class="pd-20 bg-white border-radius-4 box-shadow mb-0">

							<div class="form-group">

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>1. Numéro de la retombée</label>
											<input type="text" class="form-control" name="numRetombee" value="{{ $fdj->numRetombee }}" />
											@error('numRetombee')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>2. Nom du support</label>
											<input type="text" class="form-control" name="nomSupport" value="{{ $fdj->nomSupport }}" />
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
											<input type="text" class="form-control" name="audience" value="{{ $fdj->audience }}" />
											@error('audience')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>4. Equivalent publicitaire</label>
											<input type="text" class="form-control" name="equivalentPub" value="{{ $fdj->equivalentPub }}" />
											@error('equivalentPub')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>5. Mois de la retombée</label>
											<input type="text" class="form-control" name="moisRetombee" value="{{ $fdj->moisRetombee }}" />
											@error('moisRetombee')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>6. Famille de presse</label>
											<input type="text" class="form-control" name="famillePresse" value="{{ $fdj->famillePresse }}" />
											@error('famillePresse')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>7. Type de médias</label>
											<input type="text" class="form-control" name="typeMedias" value="{{ $fdj->typeMedias }}" />
											@error('typeMedias')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>8. Répartition par régions</label>
											<input type="text" class="form-control" name="repartitionRegions" value="{{ $fdj->repartitionRegions }}" />
											@error('repartitionRegions')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="accordion">
											<div class="accordion-header">9. Thèmes et sous-thèmes abordés</div>
											<div class="accordion-content">
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck1" name="themeAbordes[]" value="1" {{ in_array('1', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck1">1. Actualités économiques</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck2" name="themeAbordes[]" value="2" {{ in_array('2', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck2">2. Actualités corporate</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck3" name="themeAbordes[]" value="3" {{ in_array('3', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck3">3. IPO</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck4" name="themeAbordes[]" value="4" {{ in_array('4', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck4">4. Jeu responsable</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck5" name="themeAbordes[]" value="5" {{ in_array('5', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck5">5. Fondation FDJ</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck6" name="themeAbordes[]" value="6" {{ in_array('6', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck6">6. Mixité parité</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck7" name="themeAbordes[]" value="7" {{ in_array('7', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck7">7. Autre sujet RSE</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck8" name="themeAbordes[]" value="8" {{ in_array('8', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck8">8. Equipes cyclistes</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck9" name="themeAbordes[]" value="9" {{ in_array('9', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck9">9. Autres investissements dans le sport, dont Paris 2024</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck10" name="themeAbordes[]" value="10" {{ in_array('10', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck10">10. Le sport au féminin</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck11" name="themeAbordes[]" value="11" {{ in_array('11', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck11">11. E-sport</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck12" name="themeAbordes[]" value="12" {{ in_array('12', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck12">12. Autre sujet sportif</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck13" name="themeAbordes[]" value="13" {{ in_array('13', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck13">13. Jeux de tirage et de grattage</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck14" name="themeAbordes[]" value="14" {{ in_array('14', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck14">14. Application FDJ</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck15" name="themeAbordes[]" value="15" {{ in_array('15', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck15">15. Jeux excessifs/addiction</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck16" name="themeAbordes[]" value="16" {{ in_array('16', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck16">16. Jeux des mineurs</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck17" name="themeAbordes[]" value="17" {{ in_array('17', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck17">17. Pression publicitaire</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck18" name="themeAbordes[]" value="18" {{ in_array('18', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck18">18. Sponsoring Ligue Française de Football</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck19" name="themeAbordes[]" value="19" {{ in_array('19', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck19">19. Gagnants</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck20" name="themeAbordes[]" value="20" {{ in_array('20', explode('/', $fdj->themeAbordes)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck20">20. Autre thème</label>
												</div>
											</div>
										</div>
										@error('themeAbordes')
										<span class="text-danger"> {{ $message }} </span>
										@enderror
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="accordion">
											<div class="accordion-header">10. Angle de la retombée</div>
											<div class="accordion-content">
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck21" name="angleRetombee[]" value="1" {{ in_array('1', explode('/', $fdj->angleRetombee)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck21">1. Corporate</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck22" name="angleRetombee[]" value="2" {{ in_array('2', explode('/', $fdj->angleRetombee)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck22">2. Sport</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck23" name="angleRetombee[]" value="3" {{ in_array('3', explode('/', $fdj->angleRetombee)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck23">3. Consumer</label>
												</div>
											</div>
										</div>
										@error('angleRetombee')
										<span class="text-danger"> {{ $message }} </span>
										@enderror
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="accordion">
											<div class="accordion-header">11. Tonalité des retombées par rapport à la FDJ</div>
											<div class="accordion-content">
												<div>
													<input type="radio" id="customRadio33" name="tonaliteRetombees" class="custom-control-input" value="1/" {{ $fdj->tonaliteRetombees ==='1/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio33">1. Positive</label>
												</div>
												<div>
													<input type="radio" id="customRadio34" name="tonaliteRetombees" class="custom-control-input" value="2/" {{ $fdj->tonaliteRetombees ==='2/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio34">2. Neutre</label>
												</div>
												<div>
													<input type="radio" id="customRadio35" name="tonaliteRetombees" class="custom-control-input" value="3/" {{ $fdj->tonaliteRetombees ==='3/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio35">3. Mitigée</label>
												</div>
												<div>
													<input type="radio" id="customRadio36" name="tonaliteRetombees" class="custom-control-input" value="4/" {{ $fdj->tonaliteRetombees ==='4/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio36">4. Négative</label>
												</div>
											</div>
										</div>
										@error('tonaliteRetombees')
										<span class="text-danger"> {{ $message }} </span>
										@enderror
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="accordion">
											<div class="accordion-header">12. Attributs d'image</div>
											<div class="accordion-content">
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck24" name="attributImage[]" value="1" {{ in_array('1', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck24">1. Aucun</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck25" name="attributImage[]" value="2" {{ in_array('2', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck25">2. Performante économiquement et financièrement</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck26" name="attributImage[]" value="3" {{ in_array('3', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck26">3. Reponsable</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck27" name="attributImage[]" value="4" {{ in_array('4', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck27">4. Engagée</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck28" name="attributImage[]" value="5" {{ in_array('5', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck28">5. Innovante</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck29" name="attributImage[]" value="6" {{ in_array('6', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck29">6. Proche des gens</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck30" name="attributImage[]" value="7" {{ in_array('7', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck30">7. Optimiste</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck31" name="attributImage[]" value="8" {{ in_array('8', explode('/', $fdj->attributImage)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck31">8. Autre</label>
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
											<div class="accordion-header">13. Discours des porte-parole du Groupe</div>
											<div class="accordion-content">
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck32" name="discoursGroupe[]" value="1" {{ in_array('1', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck32">1. Aucun</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck33" name="discoursGroupe[]" value="2" {{ in_array('2', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck33">2. Stéphane PALLEZ</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck34" name="discoursGroupe[]" value="3" {{ in_array('3', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck34">3. Isabelle CESARI</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck35" name="discoursGroupe[]" value="4" {{ in_array('4', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck35">4. Pierre-Marie ARGOUARC'H</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck36" name="discoursGroupe[]" value="5" {{ in_array('5', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck36">5. Patrick BUFFARD</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck37" name="discoursGroupe[]" value="6" {{ in_array('6', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck37">6. Pascal CHAFFARD</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck38" name="discoursGroupe[]" value="7" {{ in_array('7', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck38">7. Charles LANTIERI</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck39" name="discoursGroupe[]" value="8" {{ in_array('8', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck39">8. Cécile LAGE</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck40" name="discoursGroupe[]" value="9" {{ in_array('9', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck40">9. Stéphen DELCOURT</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck41" name="discoursGroupe[]" value="10" {{ in_array('10', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck41">10. Marc MADIOT</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck42" name="discoursGroupe[]" value="11" {{ in_array('11', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck42">11. Thibaut PINOT</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck43" name="discoursGroupe[]" value="12" {{ in_array('12', explode('/', $fdj->discoursGroupe)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck43">12. Autre porte-parole</label>
												</div>
											</div>
										</div>
										@error('discoursGroupe')
										<span class="text-danger"> {{ $message }} </span>
										@enderror
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="accordion">
											<div class="accordion-header">14. Discours des relais d'opinion</div>
											<div class="accordion-content">
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck44" name="discoursOpinion[]" value="1" {{ in_array('1', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck44">1. Aucun</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck45" name="discoursOpinion[]" value="2" {{ in_array('2', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck45">2. Clients , joueurs</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck46" name="discoursOpinion[]" value="3" {{ in_array('3', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck46">3. Gagnants</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck47" name="discoursOpinion[]" value="4" {{ in_array('4', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck47">4. Addictologues</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck48" name="discoursOpinion[]" value="5" {{ in_array('5', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck48">5. Buralistes</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck49" name="discoursOpinion[]" value="6" {{ in_array('6', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck49">6. Stéphane Bern</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck50" name="discoursOpinion[]" value="7" {{ in_array('7', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck50">7. Elus, partis politiques</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck51" name="discoursOpinion[]" value="8" {{ in_array('8', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck51">8. Gouvernement</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck52" name="discoursOpinion[]" value="9" {{ in_array('9', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck52">9. Concurrents</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck53" name="discoursOpinion[]" value="10" {{ in_array('10', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck53">10. Syndicats</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck54" name="discoursOpinion[]" value="11" {{ in_array('11', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck54">11. Analystes financiers</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck55" name="discoursOpinion[]" value="12" {{ in_array('12', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck55">12. Partenaires</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck56" name="discoursOpinion[]" value="13" {{ in_array('13', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck56">13. ANJ / Autorité de régulation des jeux en ligne</label>
												</div>
												<div>
													<input type="checkbox" class="custom-control-input" id="customCheck57" name="discoursOpinion[]" value="14" {{ in_array('14', explode('/', $fdj->discoursOpinion)) ? 'checked' : '' }} />
													<label class="custom-control-label" for="customCheck57">14. Autres</label>
												</div>
											</div>
										</div>
										@error('discoursOpinion')
										<span class="text-danger"> {{ $message }} </span>
										@enderror
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>15. Actualité FDJ</label>
											<input type="text" class="form-control" name="actualite" value="{{ $fdj->actualite }}" />
											@error('actualite')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>16. Verbatim</label>
											<input type="text" class="form-control" name="verbatim" value="{{ $fdj->verbatim }}" />
											@error('verbatim')
											<span class="text-danger"> {{ $message }} </span>
											@enderror
										</div>
									</div>
								</div>

								<br>

								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="accordion">
											<div class="accordion-header">17. Identification des 500 meilleures retombées</div>
											<div class="accordion-content">
												<div>
													<input type="radio" id="customRadio37" name="identificationRetombee" class="custom-control-input" value="1/" {{ $fdj->identificationRetombee ==='1/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio37">1. Peu intéressante</label>
												</div>
												<div>
													<input type="radio" id="customRadio38" name="identificationRetombee" class="custom-control-input" value="2/" {{ $fdj->identificationRetombee ==='2/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio38">1. Plutôt intéressante</label>
												</div>
												<div>
													<input type="radio" id="customRadio39" name="identificationRetombee" class="custom-control-input" value="3/" {{ $fdj->identificationRetombee ==='3/' ? 'checked' : '' }} />
													<label class="custom-control-label" for="customRadio39">1. Très intéressante</label>
												</div>
											</div>
										</div>
										@error('identificationRetombee')
										<span class="text-danger"> {{ $message }} </span>
										@enderror
									</div>
								</div>
							</div>

						</div>
						<button type="submit" class="btn btn-primary">Ajouter</button>
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

</body>

</html>