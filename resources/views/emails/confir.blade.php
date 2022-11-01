<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Hola, gracias por registrarte en nuestro evento <strong>MetaTalks</strong> !</h2>
    <p>Por favor confirma tu correo electrónico.</p>
    <p>Para ello simplemente debes hacer click en el siguiente enlace:</p>
   <h2><a href="{{ url('/register/verify/' .$cod) }}" style="text-align:center;">
        Clic para confirmar tu email
    </a></h2>
</body>
</html>