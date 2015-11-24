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

   {{--{{dd('hola')}}--}}
    {{--<form method="POST" action="auth/login">--}}
    {!! Form::open( ['route' => 'auth/login', 'method' => 'POST'] ) !!}

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
        {!! Form::submit('login') !!}
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
