@inject('entity', 'App\Models\Entity')

<!DOCTYPE html>

{{ route('entity/' . $entity->id) }}

    {{--< form action="{{ route('/entity/' . $entity->id) }}" method="POST" accept-charset="UTF-8">--}}

    {{--@include('partials.errors')--}}

    {{--{!! csrf_field() !!}--}}

    {{--<p>--}}
        {{--<label for="company">{{trans('forms.company')}} </label>--}}
        {{--<input type="text" name="company" id="company" value="{{ old('company') }}">--}}
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

 </html>
