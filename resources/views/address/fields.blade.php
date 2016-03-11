    <p>
        {!! Form::label('company', trans('forms.company') ) !!}
        {!! Form::text('company', ( isset( $address ) ? $address->company : null ) ) !!}
    </p>

    <p>
        {!! Form::label('first_name', trans('forms.first_name') ) !!}
        {!! Form::text('first_name', ( isset( $address ) ? $address->first_name : null ) ) !!}
    </p>

    <p>
        {!! Form::label('last_name', trans('forms.last_name') ) !!}
        {!! Form::text('last_name', ( isset( $address ) ? $address->last_name : null ) ) !!}
    </p>

    <p>
        {!! Form::label('address1', trans('forms.address1') ) !!}
        {!! Form::text('address1', ( isset( $address ) ? $address->address1 : null ) ) !!}
    </p>

    <p>
        {!! Form::label('address2', trans('forms.address2') ) !!}
        {!! Form::text('address2', ( isset( $address ) ? $address->address2 : null ) ) !!}
    </p>

    <p>
        {!! Form::label('postal_code', trans('forms.postal_code') ) !!}
        {!! Form::text('postal_code', ( isset( $address ) ? $address->postal_code : null ) ) !!}
    </p>

    <p>
        {!! Form::label('city', trans('forms.city') ) !!}
        {!! Form::text('city', ( isset( $address ) ? $address->city : null ) ) !!}
    </p>

    <p>
        {!! Form::label('other', trans('forms.other') ) !!}
        {!! Form::text('other', ( isset( $address ) ? $address->other : null ) ) !!}
    </p>

    <p>
        {!! Form::label('phone', trans('forms.phone') ) !!}
        {!! Form::text('phone', ( isset( $address ) ? $address->phone : null ) ) !!}
    </p>

    <p>
        {!! Form::label('phone_mobile', trans('forms.phone_mobile') ) !!}
        {!! Form::text('phone_mobile', ( isset( $address ) ? $address->phone_mobile : null ) ) !!}
    </p>
    