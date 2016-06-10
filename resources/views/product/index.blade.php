<!DOCTYPE html>

<p>
    {!! link_to_route('product.create', $title = trans('forms.new_product')) !!}
</p>

<p>ean13 - upc - price</p>

@foreach($products as $product)

    <p>
        {{ $product->ean13 }} - {!! $product->upc !!} - {!! $product->price !!}
        {!! link_to_route('product.edit', $title = trans('forms.edit'), $parameters = $product->id) !!}

        {!! Form::open( [ 'route' => ['product.destroy', $product->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}

    </p>

    @endforeach

</html>
