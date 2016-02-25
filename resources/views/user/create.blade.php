<!DOCTYPE html>
<html>

<body>
    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => 'user.store', 'method' => 'post'] ) !!}

            <p>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name') !!}
            </p>

            <p>
                {!! Form::label('email', 'Mail:')!!}
                {!! Form::email('email')!!}
            </p>

            <p>
                {!! Form::label('password','Password:')!!}
                {!! Form::password('password')!!}
            </p>

            <p>
                {!! Form::label('password_confirmation', 'Password confirmation:')!!}
                {!! Form::password('password_confirmation')!!}
            </p>

            <p>
            {!! Form::submit('register') !!}
            </p>

        {!! Form::close() !!}

    </div>

</body>
</html>
