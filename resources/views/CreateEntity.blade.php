<!DOCTYPE html>
<html>
<head>
    <title>Entity</title>

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

        {!! Form::open( ['route' => 'entity.store', 'method' => 'post'] ) !!}

        <p>
            {!! Form::label('company', 'Company:') !!}
            {!! Form::text('company') !!}
        </p>

        <p>
            {!! Form::label('first_name', 'First Name:')!!}
            {!! Form::text('first_name')!!}
        </p>

        <p>
            {!! Form::label('last_name','Last name:')!!}
            {!! Form::text('last_name')!!}
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
