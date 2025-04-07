<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class MediaService
{
    public function storeFile($model, UploadedFile $file)
    {
        return $model->addMedia($file)->toMediaCollection();
    }
}
