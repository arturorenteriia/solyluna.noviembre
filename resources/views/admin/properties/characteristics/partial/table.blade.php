<table class="highlight striped bordered centered responsive-table">
    <thead>
    <tr>
        <th>Category</th>
        <th>Amenity</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($amenities as $amenity)
        <tr>
            <td class="">{{ $amenity->category }}</td>
            <td class="">{{ $amenity->amenity }}</td>
            <td class="">
                {!! Form::open(['route' => ['admin.characteristic.destroy', $amenity], 'method' => 'DELETE' ]) !!}
                <button type="submit" onclick="return confirm('Seguro que desea eliminar')" class="btn btn-danger">delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>