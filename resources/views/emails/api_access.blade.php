<!DOCTYPE html>
<html>
<head>
    <title>Accès à l'API</title>
</head>
<body>
    <p>Bonjour {{ $user->first_name }},</p>
    <p>Merci pour votre demande d'accès à notre API. Voici vos identifiants :</p>
    <p>Email : {{ $user->email }}</p>
    <p>Mot de passe : {{ $password }}</p>
    <p>Veuillez vous connecter et changer votre mot de passe dès que possible.</p>
    <p>Cordialement,</p>
    <p>L'équipe TIKERAMA</p>
</body>
</html>
