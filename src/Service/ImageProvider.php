<?php

namespace App\Service;

use App\Entity\Image;

class ImageProvider 
{
    public function transformDataForTwig(array $images): array
    {
        $transformedData = [];
        /** @var Image as $image */
        foreach ($images as $image) {
            $transformedData[] = [
            'title' => $image->getTitle(),
            'path' => Image::PATH_TO_IMAGES . '/' . $image->getPath(),
            'alt' => $image->getAlt()
            ];
        }

        return $transformedData;


    }
}