<!DOCTYPE html>

@inject('entities', 'App\Models\Entity')

<p>company - first_name - last_name</p>

@foreach($entities::all() as $entity)
    <p>
        {{ $entity->company }} - {!! $entity->first_name !!} - {!! $entity->last_name !!}
    </p>
@endforeach

</html>
