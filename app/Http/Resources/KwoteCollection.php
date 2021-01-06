<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class KwoteCollection extends ResourceCollection
{
    // Using a custom key instead of 'data'
    public static $wrap = 'kwotes';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'api' => [
                'version' => '1.0',
                'date' => date('d M Y'),
                'developer' => 'Ibidapo A.',
                'attribution' => url('https://www.bhekor.com.ng')
            ],
        ];
    }
}
