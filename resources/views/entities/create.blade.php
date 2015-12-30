<!DOCTYPE html>

    @inject('entity', 'App\Models\Entity')

    @include('partials.errors')

    {!! Form::open( ['route' => 'entity.store'] ) !!}

    @include('entities.fields')

    <p>
        {!! Form::submit(trans('forms.new')) !!}
    </p>

    {!! Form::close() !!}

</html>


{{--<form action="/entity" method="POST">--}}

    {{--@include('partials.errors')--}}

    {{--{!! csrf_field() !!}--}}

    {{--<p>--}}
        {{--<label for="company">{{trans('forms.company')}} </label>--}}
        {{--<input type="text" name="company" id="company">--}}
    {{--</p>--}}

    {{--<p>--}}
        {{--<label for="first_name">{{trans('forms.first_name')}} </label>--}}
        {{--<input type="text" name="first_name" id="first_name">--}}
    {{--</p>--}}

    {{--<p>--}}
        {{--<label for="last_name">{{trans('forms.last_name')}} </label>--}}
        {{--<input type="text" name="last_name" id="last_name">--}}
    {{--</p>--}}

    {{--<p>--}}
        {{--<button type="submit">--}}
            {{--{{trans('forms.register')}}--}}
        {{--</button>--}}
    {{--</p>--}}

    {{--</form>--}}

 {{--</html>--}}
