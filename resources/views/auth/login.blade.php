<form method="POST" action="/auth/login">

    @include('partials.errors')

    {!! csrf_field() !!}

    <div>
        {{trans('forms.email')}}
        <input type="email" name="email" >
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
