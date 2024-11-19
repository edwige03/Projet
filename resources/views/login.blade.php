<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <form action="{{ route('login.process') }}" method="POST" class="login-form">
            @csrf
            <h1 class="form-title">Connexion</h1>

            @if ($errors->any())
                <ul class="alert alert-danger">
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif
            @if ($message = Session::get('error'))
                <div class="error-message">{{ $message }}</div><br>
            @endif

            <label for="email" class="form-label">Email</label><br>
            <input type="text" name="email" id="email" class="form-input" placeholder="Saisir l'e-mail ici..."><br/><br/>

            <label for="password" class="form-label">Mot de passe</label><br/>
            <input type="password" name="password" id="password" class="form-input" placeholder="Saisir le mot de passe ici..."><br/><br/>

            <a href="{{ route('registration') }}" class="register-link">S'inscrire</a><br/><br/>

            <button type="submit" class="submit-button">Soumettre</button>
        </form>
    </div>
</body>

</html>
