@inject('entities', 'App\Models\Entity')

<!DOCTYPE html>

<p>company - first_name - last_name</p>

@foreach($entities::all() as $entity)
    <p>
        {{ $entity->company }} - {!! $entity->first_name !!} - {!! $entity->last_name !!}
        {!! link_to_route('entity.edit', $title = 'Editar', $parameters = $entity->id) !!}
    </p>
@endforeach

</html>
