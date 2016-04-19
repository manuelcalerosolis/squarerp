<!DOCTYPE html>
<html>

<body>

    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => 'rol.store', 'method' => 'post'] ) !!}

        @include('rol.fields')

        <p>
            {!! Form::submit(trans('forms.new')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>

