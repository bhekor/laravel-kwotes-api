<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Kwote extends JsonResource
{
    // Using a custom key instead of 'data'
    public static $wrap = 'kwote';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'quote' => $this->quote,
            'author' => $this->author,
            'category' => $this->category,
            'likes' => $this->likes
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0',
            'developer' => 'Ibidapo A.',
            'attribution' => 'https://www.bhekor.com.ng',
        ];
    }
}
