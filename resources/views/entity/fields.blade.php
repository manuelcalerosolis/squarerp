    <p>
        {!! Form::label('company', trans('forms.company') ) !!}
        {!! Form::text('company', ( isset( $entity ) ? $entity->company : null ) ) !!}
    </p>

    <p>
        {!! Form::label('first_name', trans('forms.first_name') ) !!}
        {!! Form::text('first_name', ( isset( $entity ) ? $entity->first_name : null ) ) !!}
    </p>

    <p>
        {!! Form::label('last_name', trans('forms.last_name') ) !!}
        {!! Form::text('last_name', ( isset( $entity ) ? $entity->last_name : null ) ) !!}
    </p>

    <p>
        {!! Form::label('role_list', trans('forms.roles') ) !!}
        {!! Form::select('role_list[]', ( isset( $roles ) ? $roles : [''] ), ( isset($entity) ? $entity->getRoleListAttribute() : null ), ['multiple'] ) !!}
    </p>


