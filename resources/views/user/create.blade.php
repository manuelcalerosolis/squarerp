<!DOCTYPE html>
<html>

<body>
    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => 'user.store', 'method' => 'post'] ) !!}

            @include('user.fields')

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
