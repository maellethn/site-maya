<?php

namespace App\Services\File;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\KernelInterface;

class FileUploader
{
    private KernelInterface $appKernel;

    public function __construct(KernelInterface $appKernel)
    {
        $this->appKernel = $appKernel;
    }

    public function upload(UploadedFile $file): string
    {
        $path = $this->appKernel->getProjectDir().'/public/images';
        $name=md5(uniqid()).'.'.$file->guessExtension();
        if ($file->guessExtension() == 'pdf'){
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $name = $originalFilename . '-' . uniqid() . '.' . $file->guessExtension();
            $file->move($path, $name);
        } else {
            $file->move($path, $name);
        }
        return 'images/'.$name;
    }

}
