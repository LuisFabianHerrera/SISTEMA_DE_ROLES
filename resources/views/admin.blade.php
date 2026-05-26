<h1>ADMINISTRADOR</h1>

<a href="/logout">Cerrar Sesión</a>

<hr>

@foreach($usuarios as $usuario)

    <p>

        {{ $usuario->name }}

        -

        {{ $usuario->email }}

    </p>

@endforeach