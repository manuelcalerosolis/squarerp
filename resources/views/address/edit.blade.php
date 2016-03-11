<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open( ['route' => [ 'address.update', $address->id ], 'method' => 'put' ] ) !!}

    @include('address.fields')

    <p>
        {!! Form::submit(trans('update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
