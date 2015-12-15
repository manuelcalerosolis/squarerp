<form method="POST" action="/auth/login">

    {!! csrf_field() !!}

    @include('partials.errors')

    <div>
        Email
        <input type="email" name="email" >
        {{--value="{{ old('email') }}"--}}
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        <button type="submit">
            {{trans('forms.login')}}
        </button>
    </div>

</form>
