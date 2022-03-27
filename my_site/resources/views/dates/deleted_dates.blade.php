@extends('dates.base.base')
@section('do_somesing')
<h1>
    Deleted dates
</h1>
<h3>
    Choose person you wont to restore dates
</h3>
<table class="table">  
    @foreach ($deleted_dates as $item)
            <th scope="row"><a href="{{ route('restor', $item->name)}}">{{$item->name}}</a></th>
    @endforeach
</table>
@endsection