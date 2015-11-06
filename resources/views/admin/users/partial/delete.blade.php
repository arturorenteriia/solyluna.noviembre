{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE' ]) !!}
<center><button type="submit" onclick="return confirm('Seguro que desea eliminar al usuario')" class="btn btn-danger">Eliminar usuario</button></center>
{!! Form::close() !!}