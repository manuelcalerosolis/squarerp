<!DOCTYPE html>
<html>

<body>

    <div class="container">

        @include('partials.errors')

        {!! Form::open(['route' => 'lang.store', 'method' => 'post']) !!}

        @include('lang.fields')

        <p>
            {!! Form::submit(trans('forms.new')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>

