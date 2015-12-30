<!DOCTYPE html>

@include('partials.errors')

{!! Form::open( ['route' => ['entity.update', $entity->id], 'method' => 'put']) !!}

    @include('entities.fields')

    <p>
        {!! Form::submit(trans('forms.edit')) !!}
    </p>

    {!! Form::close() !!}

 </html>
