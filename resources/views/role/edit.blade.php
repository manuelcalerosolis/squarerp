<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'role.update', $role->id ], 'method' => 'put' ] ) !!}

    @include('role.fields')

    <p>
        {!! Form::submit(trans('forms.update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
