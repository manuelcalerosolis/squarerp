<form method="POST" action="/auth/register">

    {!! csrf_field() !!}

    <p>
        <label for="name">{{trans('forms.name')}}:</label>
        <input name="name" type="text" id="name">
    </p>

    <p>
        <label for="email">{{trans('forms.email')}}:</label>
        <input name="email" type="text" id="email">
    </p>

    <p>
        <label for="password">{{trans('forms.password')}}:</label>
        <input name="password" type="password" value="" id="password">
    </p>

    <p>
        <label for="password_confirmation">{{trans('forms.repeat_password')}}:</label>
        <input name="password_confirmation" type="password" value="" id="password_confirmation">
    </p>

    <p>
        <button type="submit">
            {{trans('forms.register')}}
        </button>
    </p>

</form>

