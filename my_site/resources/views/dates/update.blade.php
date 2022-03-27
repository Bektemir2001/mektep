@extends('dates.base.base')
@section('do_somesing')
<form action="{{ route('update', $id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <div class="form-group">
        <label for="Name">Name</label>
        <textarea name="name" class="form-control" id="Name" placeholder="Name">{{$person->name}}</textarea>
      </div>
      <div class="form-group">
        <label for="Last_name">Last_name</label>
        <textarea name="last_name" class="form-control" id="Last_name" placeholder="Last_name">{{$person->last_name}}</textarea>
      </div>
      <div class="form-group">
        <label for="age">age</label>
        <input name="age" type="integer" class="form-control" id="age" value="{{$person->age}}">
      </div>
      <div class="form-group">
        <label for="Content">Content</label>
        <textarea name="content" class="form-control" id="Content" placeholder="Content">{{$person->content}}</textarea>
      </div>
      <div class="form-group">
        <select class="form-select" aria-label="Default select example" name="category_id">
          <option selected>Categiries</option>
          @foreach ($categories as $category)
            <option 
            {{$category->id === $person->category_id ? ' selected ': ''}}
            value="{{$category->id}}">{{$category->title}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="Tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" name='tags[]'>
          @foreach ($tags as $tag)
            <option 
            @foreach ($person->tags as $postTag)
              {{$tag->id === $postTag->id ? ' selected ': ''}}
            @endforeach
            value="{{$tag->id}}">{{$tag->title}}</option>
          @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection