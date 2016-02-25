<!DOCTYPE html>
<html>

<body>

    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => [ 'user.update', $user->id ], 'method' => 'put' ] ) !!}

        @include('user.fields')

        <p>
            {!! Form::submit(trans('update')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>
