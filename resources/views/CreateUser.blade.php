<!DOCTYPE html>
<html>
<head>
    <title>User</title>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

    </style>

</head>
<body>
    <div class="container">

        {{--{!! Form::open( ['route' => 'user.store', 'method' => 'post'] ) !!}--}}
        <form method="POST" action="http://laravel.dev/user" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="nshT55DhNZm3ziXzJvGNVltnYZ7yU5ChYXkfACgo">

            <p>
                <label for="name">Name:</label>
                <input name="name" type="text" value="" id="name">
            </p>

            <p>
                <label for="email">Mail:</label>
                <input name="email" type="email" value="" id="email">
            </p>

            <p>
                <label for="password">Password:</label>
                <input name="password" type="password" value="" id="password">
            </p>

            <p>
                <label for="password_confirmation">Password confirmation:</label>
                <input name="password_confirmation" type="password" value="" id="password_confirmation">
            </p>

            <p>
                <input type="submit" value="Register">
            </p>

        </form>
        {{--<p>--}}
            {{--{!! Form::label('name', 'Name:') !!}--}}
            {{--{!! Form::text('name') !!}--}}
        {{--</p>--}}

        {{--<p>--}}
            {{--{!! Form::label('email', 'Mail:')!!}--}}
            {{--{!! Form::email('email')!!}--}}
        {{--</p>--}}

        {{--<p>--}}
            {{--{!! Form::label('password','Password:')!!}--}}
            {{--{!! Form::password('password')!!}--}}
        {{--</p>--}}

        {{--<p>--}}
            {{--{!! Form::label('password_confirmation', 'Password confirmation:')!!}--}}
            {{--{!! Form::password('password_confirmation')!!}--}}
        {{--</p>--}}

        {{--<p>--}}
        {{--{!! Form::submit('Register') !!}--}}
        {{--</p>--}}

        {{--{!! Form::close() !!}--}}

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
