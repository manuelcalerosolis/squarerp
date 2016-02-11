<!DOCTYPE html>
<html>

<body>
    <div class="container">

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
            {!! Form::submit('Register') !!}
            </p>

        {!! Form::close() !!}

        @if (isset($errors) and $errors->any())
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif

    </div>

</body>
</html>
