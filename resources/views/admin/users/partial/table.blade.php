<table class="striped responsive-table">
    <tr>
        <th>#</th>
        <th>Role</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach($users as $user)
        <tr data-id="{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('admin.users.edit', $user) }}" class="waves-effect waves-light btn"><i class="material-icons left">settings</i></a>
            </td>
        </tr>
    @endforeach
</table>