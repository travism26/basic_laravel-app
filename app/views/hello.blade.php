@extends('layouts.main')
@section('content')
    @if (isset($data['name']))
        {{{ $data['name'] }}}
    @else
        no name set.
    @endif

    @foreach ($data as $item)
        <li>{{{$item}}}</li>
    @endforeach
@stop