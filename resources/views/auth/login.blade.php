{{--<form method="POST" action="/auth/login">--}}

    {{--{!! csrf_field() !!}--}}

    {{--@include('partials.errors')--}}

    {{--<div>--}}
        {{--{{trans('forms.email')}}--}}
        {{--<input type="email" name="email" value="{{ old('email') }}">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--{{trans('forms.password')}}--}}
        {{--<input type="password" name="password">--}}
    {{--</div>--}}

    {{--<div>--}}
        {{--<button type="submit" id="loginButton">--}}
            {{--{{trans('forms.login')}}--}}
        {{--</button>--}}
    {{--</div>--}}

{{--</form>--}}


<!DOCTYPE html>
<html>
<head>
    <title>Laravel Pruebas Polymer</title>
    <script src="../bower_components/webcomponentsjs/webcomponents.js"></script>
    <link rel="import" href="../bower_components/polymer/polymer.html">
    <link rel="import" href="../bower_components/erp-user-component/erp-user-component.html">
    <link rel="import" href="../bower_components/erp-pass-component/erp-pass-component.html">
    <link rel="import" href="../bower_components/paper-toolbar/paper-toolbar.html">
    <link rel="import" href="../bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="../bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="../bower_components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="../bower_components/paper-fab/paper-fab.html">
    <link rel="import" href="../bower_components/iron-form/iron-form.html">

    <link rel="import" href="../bower_components/paper-input/paper-input.html">
    <link rel="import" href="../bower_components/paper-button/paper-button.html">
    <link rel="import" href="../bower_components/paper-styles/paper-styles.html">
    <link rel="import" href="../bower_components/paper-styles/erp-pages.html">

</head>

<body>

<paper-toolbar class="main">
    <paper-icon-button icon="menu"></paper-icon-button>
    <span title>ERP PRUEBAS</span>
</paper-toolbar>

<div class="login-page">

    <h4>Login</h4>

    <div class="horizontal-section">

        <form method="post" action="/auth/login">

            {!! csrf_field() !!}

            @include('partials.errors')

            <paper-input name="email" label={!!trans('forms.email')!!} value={!! old("email") !!}></paper-input>

            <paper-input name="password" type="password" label={!!trans('forms.password')!!}></paper-input>

            <br>
            <br>

            <paper-button raised
                          id="loginButton"
                          type="submit"
                          onclick="clickHandler(event)">
                {!! trans('forms.login')!!}
            </paper-button>

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