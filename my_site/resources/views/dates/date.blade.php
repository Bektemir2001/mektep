@extends('dates.base.base')
@section('do_somesing')
<table class="table">
    <thead>
    <tr>
        <th scope="col">nom</th>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Last_name</th>
        <th scope="col">age</th>
        <th scope="col">category</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    
    @foreach ($dates as $item)
        <tbody>
        <tr>
            <th scope="row">{{$id_for_date+=1}}</th>
            <th >{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->last_name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->category_id}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
        </tr>
        </tbody>
    @endforeach
</table>
<div>{{$dates->links()}}</div>
@endsection