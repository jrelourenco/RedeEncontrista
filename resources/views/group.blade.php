@extends('layouts.app')

@section('content')

        @foreach($objs as $obj)
            <pre>{{$obj}}</pre>
        @endforeach

@endsection
