<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'entity.update', $entity->id ], 'method' => 'put' ] ) !!}

    <p>
        {!! Form::label('company', $entity->id ) !!}
    </p>

    @include('entity.fields')

    <p>
        {!! Form::label('direcciones', 'direcciones') !!}
    </p>

    @foreach($entity->addresses as $address)

        <p>
            {!! $address->name !!} - {!! $address->first_name !!} - {!! $address->last_name !!} - {!! $address->address1 !!} - {!! $address->address2 !!}
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
