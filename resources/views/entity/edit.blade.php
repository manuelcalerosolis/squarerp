<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'entity.update', $entity->id ], 'method' => 'put' ] ) !!}

    @include('entity.fields')

    <p>
        {!! link_to_route('entity.address.create', trans('forms.new_address'), [$entity]) !!}
    </p>

    <p>
        @foreach($entity->addresses as $address )
            <p>
                {!! Form::label('addresses', $address->name ) !!}
                {!! link_to_route('entity.address.edit', trans('forms.update'), [$address->id, $entity]) !!}
                {!! link_to_route('entity.address.destroy', trans('forms.delete'), [$address->id, $entity]) !!}
            </p>
        @endforeach

            <p>
                {!! Form::label('role_id', 'Selecciona un rol') !!}
                {!! Form::select('role_id',$role) !!}
            </p>

    </p>

    <p>
        {!! Form::submit(trans('forms.update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
