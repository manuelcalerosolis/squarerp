<!DOCTYPE html>

<p>
    {!! link_to_route('role.create', $title = trans('forms.new_role')) !!}
</p>

<p>name</p>

    @foreach($roles as $role)

        <p>
        {!! $role->name !!}

        {!! link_to_route('role.edit', $title = trans('forms.edit'), $parameters = $role->id) !!}

        {!! Form::open( [ 'route' => ['role.destroy', $role->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}
        </p>

    @endforeach

</html>
