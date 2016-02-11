@inject('users', 'App\Models\User')

<!DOCTYPE html>

<p>
{!! link_to_route('user.create', $title = 'Nuevo usuario') !!}
</p>

<p>
    name - email
</p>

@foreach($users::all() as $user)

    <p>
        {{ $user->name }} - {!! $user->email !!}
        {!! link_to_route('user.edit', $title = 'Editar', $parameters = $user->id) !!}

        {!! Form::open( [   'route' => ['user.destroy', $user->id],
                            'method' => 'DELETE'] ) !!}
            <button type="submit">Eliminar</button>
        {!! Form::close() !!}
    </p>

@endforeach

</html>
