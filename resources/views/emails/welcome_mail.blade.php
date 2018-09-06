<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome to the site {{ $user['name'] }}</h2>
<br/>
Tu contraseña es {{ $password }}, puedes usarla para iniciar sesión desde ahora.
</body>
 
</html>