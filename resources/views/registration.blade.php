<!DOCTYPE html>
<html lang="en">

<<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head> 

<body>
    <form action="{{ route('registration.process') }}" method="POST" class="registration-form">
        @csrf
        <h1 class="form-title">Inscription</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif
        @if ($message = Session::get('error'))
            <div class="error-message">{{ $message }}</div><br>
        @endif

        <label for="name" class="form-label">Nom d'utilisateur</label><br>
        <input type="text" name="name" id="name" class="form-input" placeholder="Saisir le nom ici..."><br/><br/>

        <label for="email" class="form-label">Email</label><br>
        <input type="text" name="email" id="email" class="form-input" placeholder="Saisir l'e-mail ici..."><br/><br/>

        <label for="password" class="form-label">Mot de passe</label><br/>
        <input type="password" name="password" id="password" class="form-input" placeholder="Saisir le mot de passe ici..."><br/><br/>

        <label for="passwordConfirm" class="form-label">Confirmer mot de passe</label><br/>
        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-input" placeholder="Confirmer le mot de passe ici..."><br/><br/>

        <a href="{{ route('login') }}" class="login-link">Se Connecter</a><br/><br/>

        <button type="submit" class="submit-button">Soumettre</button>
    </form>
</body>

</html>