<form method="POST" action="/password/reset">

    {!! csrf_field() !!}

    <input type="hidden" name="token" value="{{ $token }}">

    @include('partials.errors')

    <div>
        {{trans('forms.email')}}
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        {{trans('forms.email')}}
        <input type="password" name="password">
    </div>

    <div>
        {{trans('forms.repeat_password')}}
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            {{trans('forms.reset_password')}}
        </button>
    </div>

</form>

