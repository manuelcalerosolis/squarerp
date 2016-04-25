    <p>
        {!! Form::label('name', trans('forms.name') ) !!}
        {!! Form::text('name', ( isset( $entity_role ) ? $entity_role->name : null ) ) !!}
    </p>

