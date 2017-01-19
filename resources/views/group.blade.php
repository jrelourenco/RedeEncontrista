@extends('layouts.app')
{!! /* @var $objs \App\Model\Group[] */!!}
@section('content')

        @foreach($objs as $obj)
            <pre>{{$obj}}</pre>
        @endforeach

@endsection
