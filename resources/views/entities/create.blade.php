<!DOCTYPE html>

@include('partials.errors')

<form action="/entity" method="POST">

    {!! csrf_field() !!}

    <p>
        <label for="company">{{trans('forms.company')}} </label>
        <input type="text" name="company" id="company">
    </p>

    <p>
        <label for="first_name">{{trans('forms.first_name')}} </label>
        <input type="text" name="first_name" id="first_name">
    </p>

    <p>
        <label for="last_name">{{trans('forms.last_name')}} </label>
        <input type="text" name="last_name" id="last_name">
    </p>

    <p>
        <button type="submit">
            {{trans('forms.register')}}
        </button>
    </p>

    </form>

 </html>
