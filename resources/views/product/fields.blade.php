    <p>
        {!! Form::label('ean13', trans('forms.ean13') ) !!}
        {!! Form::text('ean13', ( isset( $product ) ? $product->ean13 : null ) ) !!}
    </p>

    <p>
        {!! Form::label('upc', trans('forms.upc') ) !!}
        {!! Form::text('upc', ( isset( $product ) ? $product->upc : null ) ) !!}
    </p>

    <p>
        {!! Form::label('price', trans('forms.price') ) !!}
        {!! Form::number('price', ( isset( $product ) ? $product->price : null ) ) !!}
    </p>



