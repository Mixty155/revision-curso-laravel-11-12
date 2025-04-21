@extends('master')

@section('content')
    <h1>contact</h1>
    <a href="{{ route("contact2") }}">Ir a contact2</a>

    <p>{{$name}}</p>

    @if ($name != "Luis")
        Tu nombre no es Luis.
        
    @else
        Tu nombre es Luis.
    @endif

    <ul>
    @foreach ([1,2,3,4,5] as $item)
        <li>{{$item}}</li>
    @endforeach
    </ul>
@endsection