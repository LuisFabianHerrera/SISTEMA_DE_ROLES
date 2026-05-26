<h1>PERFIL USUARIO</h1>

<p>{{ auth()->user()->name }}</p>

<p>{{ auth()->user()->email }}</p>

<a href="/logout">
    Cerrar Sesión
</a>