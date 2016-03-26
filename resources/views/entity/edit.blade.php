<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'entity.update', $entity->id ], 'method' => 'put' ] ) !!}

    <p>
        {!! Form::label('entity_id', $entity->id ) !!}
    </p>

    @include('entity.fields')

    <p>
        {!! Form::label('addresses', 'addresses' ) !!}
        {!! Form::select('addresses', $entity->addresses->lists('name'), null, ['multiple'=>'multiple', 'name'=>'addresses[]'] ) !!}
    </p>

    <p>
        {!! link_to_route('address.create', trans('forms.new_address'), [$entity->id]) !!}
    </p>

    <p>
        {!! Form::submit(trans('update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
