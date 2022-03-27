@extends('dates.base.base')
@section('do_somesing')
<form action="{{ route('dates.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <div class="form-group">
        <label for="Name">Name</label>
        <textarea name="name" class="form-control" id="Name" placeholder="Name">{{old("name")}}</textarea>
        @error("name")
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="Last_name">Last_name</label>
        <textarea name="last_name" class="form-control" id="Last_name" placeholder="Last_name">{{old("last_name")}}</textarea>
        @error("last_name")
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="age">age</label>
        <input name="age" type="integer" class="form-control" id="age" placeholder="age" value="{{old("age")}}">
        @error("age")
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label for="Content">Content</label>
        <textarea name="content" class="form-control" id="Content" placeholder="Content"></textarea>
      </div>
      <div class="form-group">
        <label for="age">category</label>
        <select class="form-select" id="category" name="category_id">
          @foreach ($categories as $category)
            <option 
            {{old("category_id") == $category->id ? ' selected ':''}}
            value="{{$category->id}}">{{$category->title}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="Tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" name='tags[]'>
          @foreach ($tags as $tag)
            <option 
            value="{{$tag->id}}">{{$tag->title}}</option>
          @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection