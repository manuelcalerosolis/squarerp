<!DOCTYPE html>

<p>
    {!! link_to_route('lang.create', $title = trans('forms.new_lang')) !!}
</p>

<p>ean13 - upc - price</p>

@foreach($langs as $lang)

    <p>
        {{ $lang->name }} - {!! $lang->iso_code !!} - {!! $lang->language_code !!}
        {!! link_to_route('lang.edit', $title = trans('forms.edit'), $parameters = $lang->id) !!}

        {!! Form::open( [ 'route' => ['lang.destroy', $lang->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}

    </p>

    @endforeach

</html>
