@inject('entities', 'App\Models\Entity')

<!DOCTYPE html>

<p>
    {!! link_to_route('entity.create', $title = trans('forms.new_entity')) !!}
</p>

<p>company - first_name - last_name</p>

@foreach($entities::all() as $entity)

    <p>
        {{ $entity->company }} - {!! $entity->first_name !!} - {!! $entity->last_name !!}
        {!! link_to_route('entity.edit', $title = trans('forms.edit'), $parameters = $entity->id) !!}

        {!! Form::open( [ 'route' => ['entity.destroy', $entity->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}

    </p>

    @endforeach

</html>
