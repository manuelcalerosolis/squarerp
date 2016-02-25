{{--@inject('entity', 'App\Models\Entity')--}}

<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'entity.update', $entity->id ], 'method' => 'put' ] ) !!}

    @include('entity.fields')

    <p>
        {!! Form::submit(trans('update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
