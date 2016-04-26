    <p>
        {!! Form::label('name', trans('forms.name') ) !!}
        {!! Form::text('name', ( isset( $role ) ? $role->name : null ) ) !!}
    </p>

