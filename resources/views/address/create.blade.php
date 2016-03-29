<!DOCTYPE html>
<html>

<body>

    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => ['entity.address.store', $entity], 'method' => 'post'] ) !!}

        @include('address.fields')

        <p>
            {!! Form::submit(trans('forms.new')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>

