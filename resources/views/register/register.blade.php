<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="container-principal">
        <img src="{{ asset('img/amazon_logo.png') }}" alt="Amazon Logo" class="amazon-logo" width="200">
        <div class="container">
            <h2 style="display:flex;justify-content:start; font-size: 28px">Crear cuenta</h2>
            <form id="registerForm">
                @csrf
                <div class="form-group">
                    <label for="name">Tu nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required
                        placeholder="Debe tener al menos 6 caracteres">
                    <span id="passwordHelp" class="form-text" style="font-size: 12px"><img
                            src="{{ asset('img/signo.png') }}" alt=""> La contraseña debe contener al menos seis
                        caracteres.</span>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Vuelve a escribir la contraseña</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        required>
                </div>
                <button type="submit" class="btn-primary">Crear tu cuenta de Amazon
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="spinner"
                        style="display: none;"></span>
                </button>
            </form>
            <div id="responseMessage" class="mt-3"></div>
            <div class="footer">
                <p>Al crear una cuenta, aceptas las <a href="#">Condiciones de Uso</a> y el <a
                        href="#">Aviso de Privacidad</a> de Amazon.</p>
                <hr aria-hidden="true" class="a-divider-normal">
                <p>¿Ya tienes una cuenta? <a href="#"> Iniciar sesión ▶</a></p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
