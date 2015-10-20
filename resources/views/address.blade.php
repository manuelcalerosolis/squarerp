<!DOCTYPE html>
<html>
    <head>
        <title>Address</title>
    </head>
    <body>

        <p>{{$entity->company}}</p>
        <p>{{$entity->first_name}}</p>
        <p>{{$entity->last_name}}</p>

        @foreach ($entity->addresses as $address)
            <p>direccion : {{$address->address1}}</p>
        @endforeach

    </body>
</html>
