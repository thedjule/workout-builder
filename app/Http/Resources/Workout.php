<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Workout extends Resource
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
            'id' => $this->id,
            'name' => $this->name,
            'notes' => $this->notes,
            'exercises' => $this->exercises
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
