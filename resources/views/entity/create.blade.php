<!DOCTYPE html>
<html>

<body>

    <div class="container">

        @include('partials.errors')

        {!! Form::open( ['route' => 'entity.store', 'method' => 'post'] ) !!}

        @include('entity.fields')

        @foreach($rolelist as $role )
            <p>
                {!! Form::checkbox('id'.$role, $role) !!}
                {!! Form::label('name', $role->name) !!}

            </p>
        @endforeach
        <p>
            {!! Form::submit(trans('forms.new')) !!}
        </p>

        {!! Form::close() !!}

    </div>

</body>

</html>

