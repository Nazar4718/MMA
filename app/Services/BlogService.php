<?php

namespace App\Services;


use App\Models\Blog;

class BlogService {
    public function update(Blog $blog, array $data){
        return $blog
            ->update($data);
    }

    public function delete(Blog $blog){
        return $blog->delete();
    }

    public function create(array $data){
        return Blog::create($data);
    }
}
