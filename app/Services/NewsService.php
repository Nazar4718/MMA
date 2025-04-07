<?php

namespace App\Services;

use App\Models\News;

class NewsService
{
    public function update(News $news, array $data){
        return $news
            ->update($data);
    }

    public function delete(News $news){
        return $news->delete();
    }

    public function create(array $data){
        return News::create($data);
    }
}
