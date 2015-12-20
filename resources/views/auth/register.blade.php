<form method="POST" action="/auth/register">

    @include('partials.errors')

    {!! csrf_field() !!}

    <div>
        <label for="name">{{trans('forms.name')}}:</label>
        <input name="name" type="text" id="name" value="{{ old('name') }}">
    </div>

    <div>
        <label for="email">{{trans('forms.email')}}:</label>
        <input name="email" type="text" id="email" value="{{ old('email') }}">
    </div>

    <div>
        <label for="password">{{trans('forms.password')}}:</label>
        <input name="password" type="password" value="" id="password">
    </div>

    <div>
        <label for="password_confirmation">{{trans('forms.repeat_password')}}:</label>
        <input name="password_confirmation" type="password" value="" id="password_confirmation">
    </div>

    <div>
        <button type="submit">
            {{trans('forms.register')}}
        </button>
    </div>

</form>

