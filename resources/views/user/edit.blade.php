<!DOCTYPE html>
<html>

<body>

    <div class="container">

        {!! Form::open( ['route' => [ 'user.update', $user->id ], 'method' => 'put' ] ) !!}

        @include('partials.errors')

        <p>
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $user->name) !!}
        </p>

        <p>
            {!! Form::label('email', 'Mail:')!!}
            {!! Form::email('email', $user->email)!!}
        </p>

        <p>
            {!! Form::submit(trans('update')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>
