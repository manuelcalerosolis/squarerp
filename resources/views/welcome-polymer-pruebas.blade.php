<!DOCTYPE html>
<html>
<head>
    <title>Laravel Pruebas Polymer</title>
    <script src="bower_components/webcomponentsjs/webcomponents.js"></script>
    <link rel="import" href="bower_components/polymer/polymer.html">
    <link rel="import" href="bower_components/erp-user-component/erp-user-component.html">
    <link rel="import" href="bower_components/erp-pass-component/erp-pass-component.html">
    <link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html">
    <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="bower_components/paper-drawer-panel/paper-drawer-panel.html">
    <link rel="import" href="bower_components/paper-fab/paper-fab.html">
    <link rel="import" href="bower_components/iron-form/iron-form.html">

    <link rel="import" href="bower_components/paper-input/paper-input.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/paper-styles/paper-styles.html">
    <link rel="import" href="bower_components/paper-styles/demo-pages.html">

    {{--<style>--}}
        {{--body{--}}
            {{--width: 50%;--}}
            {{--padding: 0;--}}
            {{--margin:0;--}}
        {{--}--}}
    {{--</style>--}}
</head>

<body>

    <paper-toolbar class="main">
        <paper-icon-button icon="menu"></paper-icon-button>
        <span title>ERP PRUEBAS</span>
    </paper-toolbar>


        <div>
            <h4>Login</h4>
            <div class="horizontal-section">
                <form is="iron-form" id="formPost" method="post" action="http://www.google.es">
                    <paper-input name="usuario" label="Usuario" required></paper-input>
                    <paper-input name="password" type="password" label="Contraseña" required></paper-input>
                    <br>


                    <br><br><br>
                    <paper-button raised
                                  onclick="clickHandler(event)">Submit</paper-button>
                    {{--<button type="submit">Native Submit</button>--}}
                </form>
            </div>
        </div>

    <script>
        document.getElementById('formGet').addEventListener('iron-form-submit', display);
        document.getElementById('formPost').addEventListener('iron-form-submit', display);

        function display(event) {
            var output = document.getElementById('output');
            output.innerHTML = JSON.stringify(event.detail);
        }

        function clickHandler(event) {
            Polymer.dom(event).localTarget.parentElement.submit();
        }
    </script>

</body>

</html>