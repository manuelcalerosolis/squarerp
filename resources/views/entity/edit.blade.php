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

    @foreach($entity->addresses as $address)

    <p>
        {!! $address->name !!}
    </p>

    @endforeach

    <p>
        {!! link_to_route('address.create', $title = trans('forms.new_address'), $entity) !!}
    </p>

    <p>
        {!! Form::submit(trans('update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
