<form method="POST" action="/password/email">

    {!! csrf_field() !!}

    @include('partials.errors')

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
            Submit
        </button>
    </div>

</form>

