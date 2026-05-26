<h1>Inicio de Sesion</h1>
<h1>LUIS BENJAMIN FABIAN HERRERA</h1>

<form action="/login" method="POST">

    @csrf

    <input type="email" name="email" placeholder="Correo">

    <input type="password" name="password" placeholder="Contraseña">

    <button type="submit">
        Ingresar
    </button>

</form>