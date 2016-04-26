<!DOCTYPE html>
<html>

<body>

    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => 'role.store', 'method' => 'post'] ) !!}

        @include('role.fields')

        <p>
            {!! Form::submit(trans('forms.new')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>

