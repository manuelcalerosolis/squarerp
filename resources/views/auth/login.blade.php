<!DOCTYPE html>
<html>
<head>
    <title>Laravel Pruebas Polymer</title>
   @include('polymer.include')

</head>

<body>

<paper-toolbar class="main">
    <paper-icon-button icon="menu"></paper-icon-button>
    <span title>ERP PRUEBAS</span>
</paper-toolbar>

<div class="login-page">

    {{--<h4>Login</h4>--}}

    <div class="horizontal-section">

        <form method="post" action="/auth/login">

            {!! csrf_field() !!}

            @include('partials.errors')

            <paper-input name="email" label={!!trans('forms.email')!!} value={!! old("email") !!}></paper-input>
            <paper-input name="password" type="password" label={!!trans('forms.password')!!}></paper-input>
            <br>

            <br><br>
            <paper-button raised
                          onclick="clickHandler(event)">{!! trans('forms.login')!!}</paper-button>
        </form>

    </div>

</div>

<script>
    function clickHandler(event) {
        Polymer.dom(event).localTarget.parentElement.submit();
    }
</script>

</body>

</html>