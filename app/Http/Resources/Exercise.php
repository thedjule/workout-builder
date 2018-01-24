<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Exercise extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'video' => $this->video,
            'exerciseType' => $this->exerciseType,
            'muscleGroup' => $this->muscleGroups
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://www.srdjan.cc')
        ];
    }
}
