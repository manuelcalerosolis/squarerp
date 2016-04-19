    <p>
        {!! Form::label('name', trans('forms.name') ) !!}
        {!! Form::text('name', ( isset( $entity ) ? $entity->name : null ) ) !!}
    </p>

