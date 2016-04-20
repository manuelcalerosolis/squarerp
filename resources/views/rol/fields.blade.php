    <p>
        {!! Form::label('name', trans('forms.name') ) !!}
        {!! Form::text('name', ( isset( $rol ) ? $rol->name : null ) ) !!}
    </p>

