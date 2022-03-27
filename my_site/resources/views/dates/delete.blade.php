@extends('dates.base.base')
@section('do_somesing')
<h1>
    Choose person you wont to delete dates
</h1>
<table class="table">
    @foreach ($dates as $item)
            <th scope="row"><a href="{{ route('delete',$item->id) }}">{{$item->name}}</a></th>
    @endforeach
</table>
<div>{{$dates->links()}}</div>
@endsection