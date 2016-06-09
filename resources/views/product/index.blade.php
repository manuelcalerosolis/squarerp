<!DOCTYPE html>

<p>
    {!! link_to_route('product.create', $title = trans('forms.new_product')) !!}
</p>

<p>company - first_name - last_name</p>

@foreach($products as $product)

    <p>
        {{ $product->company }} - {!! $product->first_name !!} - {!! $product->last_name !!}
        {!! link_to_route('product.edit', $title = trans('forms.edit'), $parameters = $product->id) !!}

        {!! Form::open( [ 'route' => ['product.destroy', $product->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}

    </p>

    @endforeach

</html>
