<!DOCTYPE html>

<p>
    {!! link_to_route('entity_role.create', $title = trans('forms.new_rol')) !!}
</p>

<p>name</p>

    @foreach($entitiesRoles as $entityRole)

        <p>
        {!! $entityRole->name !!}

        {!! link_to_route('entity_role.edit', $title = trans('forms.edit'), $parameters = $entityRole->id) !!}

        {!! Form::open( [ 'route' => ['entity_role.destroy', $entityRole->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}
        </p>

    @endforeach

</html>
