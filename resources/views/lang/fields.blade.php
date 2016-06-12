    <p>
        {!! Form::label('name', trans('forms.name') ) !!}
        {!! Form::text('name', ( isset( $lang ) ? $lang->name : null ) ) !!}
    </p>

    <p>
        {!! Form::label('iso_code', trans('forms.iso_code') ) !!}
        {!! Form::text('iso_code', ( isset( $lang ) ? $lang->iso_code : null ) ) !!}
    </p>

    <p>
        {!! Form::label('language_code', trans('forms.language_code') ) !!}
        {!! Form::text('language_code', ( isset( $lang ) ? $lang->language_code : null ) ) !!}
    </p>



