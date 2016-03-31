<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'entity.update', $entity->id ], 'method' => 'put' ] ) !!}

    @include('entity.fields')

    <p>
        <ul>
        @foreach($entity->addresses as $address )
            <li>
                {!! Form::label('addresses', $address->name ) !!}
                {!! link_to_route('entity.address.edit', trans('forms.update'), [$address->id, $entity]) !!}
                {!! link_to_route('entity.address.destroy', trans('forms.delete'), [$address->id, $entity]) !!}
            </li>
        @endforeach
        </ul>
        {{--{!! Form::select('addresses', $entity->addresses->lists('name'), null, ['multiple' => 'multiple', 'name' => 'addresses[]'] ) !!}--}}
    </p>

    <p>
        {!! link_to_route('entity.address.create', trans('forms.new_address'), [$entity]) !!}
    </p>

    <p>
        {!! Form::submit(trans('forms.update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
