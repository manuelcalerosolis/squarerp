<!DOCTYPE html>
<html>

<body>

<div class="container">

    @include('partials.errors')

    {!! Form::open(['route' => [ 'product.update', $product->id ], 'method' => 'put' ]) !!}

    @include('product.fields')

    <p>
        @foreach($product->productsLang as $productLang)
        <p>
            {!! Form::label('name', $productLang->name ) !!}
        </p>
        @endforeach
    </p>

    <p>
        {!! Form::submit(trans('forms.update')) !!}
    </p>

    {!! Form::close() !!}

</div>

</body>

</html>
