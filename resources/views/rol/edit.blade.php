<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'rol.update', $entity->id ], 'method' => 'put' ] ) !!}

    @include('entity.fields')

    <p>
        {!! Form::submit(trans('forms.update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
