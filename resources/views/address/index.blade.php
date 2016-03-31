@inject('addresses', 'App\Models\Address')

<!DOCTYPE html>

<p>
     {!! link_to_route('address.create', $title = trans('forms.new_address')) !!}
</p>

<p>company - first_name - last_name - address1 - address2</p>

    @foreach($addresses::all() as $address)

    <p>
        {!! $address->company !!} - {!! $address->first_name !!} - {!! $address->last_name !!} - {!! $address->address1 !!} - {!! $address->address2 !!}
        {!! link_to_route('address.edit', $title = trans('forms.edit'), $parameters = $address->id) !!}

        {!! Form::open( ['route' => ['address.destroy', $address->id], 'method' => 'DELETE'] ) !!}
            <button type="submit">{!! trans('forms.delete') !!}</button>
        {!! Form::close() !!}
    </p>

    @endforeach

</html>
