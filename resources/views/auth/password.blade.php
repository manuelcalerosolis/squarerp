<form method="POST" action="/password/email">

    @include('partials.errors')

    {!! csrf_field() !!}

    <div>
        {{trans('forms.email')}}
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
            {{trans('forms.submit')}}
        </button>
    </div>

</form>