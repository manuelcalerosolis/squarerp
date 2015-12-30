<!DOCTYPE html>

@include('partials.errors')

{!! Form::open( ['route' => ['entity.update', $entity->id], 'method' => 'put']) !!}

    <p>
        {!! Form::label('company', trans('forms.company') ) !!}
        {!! Form::text('company', $entity->company) !!}
    </p>

    <p>
        {!! Form::label('first_name', trans('forms.first_name') ) !!}
        {!! Form::text('first_name', $entity->first_name) !!}
    </p>

    <p>
        {!! Form::label('last_name', trans('forms.last_name') ) !!}
        {!! Form::text('last_name', $entity->last_name) !!}
    </p>

    <p>
        {!! Form::submit(trans('forms.edit')) !!}
    </p>

    {!! Form::close() !!}

 </html>
