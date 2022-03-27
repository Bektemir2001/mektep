<?php
namespace App\Services\Date;
use App\Models\Post;
use App\Models\Category;

class Service{
    public function store($date){
        $tags = $date['tags'];
        unset($date['tags']);
        $post = Post::create($date);
        $post->tags()->attach($tags);
    }
    public function update($new_date, $id){
        if(array_key_exists('tags', $new_date)) $tags = $new_date['tags'];
        else $tags = [];
        unset($new_date['tags']);
        $date = Post::find($id);
        $date->update($new_date);
        $date->tags()->sync($tags);
    }
}