<!DOCTYPE html>
<html>
   <head>

      <title>Laravel ERP</title>
   
      <script src="bower_components/webcomponentsjs/webcomponents.js"></script>

      <link rel="import" href="bower_components/polymer/polymer.html">
      <link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html">
      <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html">
      <link rel="import" href="bower_components/iron-icons/iron-icons.html">
      <link rel="import" href="bower_components/paper-drawer-panel/paper-drawer-panel.html">
      <link rel="import" href="bower_components/paper-fab/paper-fab.html">
       <link rel="import" href="bower_components/paper-input/paper-input.html">
       <link rel="import" href="bower_components/iron-form/iron-form.html">

      <style>
         body{
            width: 100%;
            padding: 0;
            margin: 0;
         }
         paper-toolbar.main{
            background-color: var(--paper-blue-500)
         }
         paper-toolbar.drawer{
            background-color: #000000
         }
         paper-fab.add{
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: var(--paper-blue-300);
         }

      </style>

   </head>
   <body>
      
        <paper-toolbar class="tall">
           <paper-icon-button paper-drawer-toggle icon="menu"></paper-icon-button>
           <span title class="flex">laravel ERP</span>
           <paper-icon-button icon="refresh"></paper-icon-button>
        </paper-toolbar>

        <paper-fab onclick="submitForm()" icon="android" class="add"></paper-fab>

        <div class="layout vertical center-center">
            <div>
                <div class="horizontal-section wide">
                    <form is="iron-form" id="form" method="post" action="/form/handler">
                        <paper-input name="user" label="user"></paper-input>
                        <paper-input name="password" label="password"></paper-input>
                    </form>
                </div>
            </div>
        </div>

   </body>


</html>
