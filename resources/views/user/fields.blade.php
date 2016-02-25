<p>
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', ( isset($user) ? $user->name : null ) ) !!}
</p>

<p>
    {!! Form::label('email', 'Mail:')!!}
    {!! Form::email('email', ( isset($user) ? $user->email : null ) ) !!}
</p>
