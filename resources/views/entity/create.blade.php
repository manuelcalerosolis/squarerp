<!DOCTYPE html>

    @inject('entity', 'App\Models\Entity')

    @include('partials.errors')

    {!! Form::open( ['route' => 'entity.store'] ) !!}

    @include('entity.fields')

    <p>
        {!! Form::submit(trans('forms.new')) !!}
    </p>

    {!! Form::close() !!}

</html>

