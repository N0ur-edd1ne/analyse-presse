<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/auth.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
    <img class="wave" src="frontend/images/wave.png">
    <div class="container">
        <div class="img">
            <img src="frontend/images/img.svg">
        </div>
        <div class="auth-container">
            <form action="{{ route('login.action') }}" method="POST">
                @csrf

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong class="font-bold">Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li><span class="block sm:inline">{{ $error }}</span></li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <img class="avatar" src="frontend/images/avatar.svg">
                <h2>Bienvenue</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Nom d'Utilisateur</h5>
                        <input class="input" type="text" name="username" id="username" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Mot de Passe</h5>
                        <input class="input" type="password" name="password" id="password" required>
                    </div>
                </div>
                <div class="input-div three">
                    <div class="i">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div>
                        <select class="input" name="mode_travail" id="mode_travail" required>                    
                            <option value="" disabled selected>Mode de Travail</option>
                            <option value="presentiel">Présentiel</option>
                            <option value="distance">À distance</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="btn" value="Se Connecter">
            </form>
        </div>
    </div>

    <script src="frontend/auth.js"></script>
</body>

</html>