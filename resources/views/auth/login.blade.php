@include('partials.errors')

<form method="POST" action="/auth/login">

    {!! csrf_field() !!}

    <div>
        {{trans('forms.email')}}
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        {{trans('forms.password')}}
        <input type="password" name="password">
    </div>

    <div>
        <button type="submit">
            {{trans('forms.login')}}
        </button>
    </div>

</form>
