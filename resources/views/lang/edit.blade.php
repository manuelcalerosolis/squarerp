<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open(['route' => [ 'lang.update', $lang->id ], 'method' => 'put' ]) !!}

    @include('lang.fields')

    <p>
        {!! Form::submit(trans('forms.update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
