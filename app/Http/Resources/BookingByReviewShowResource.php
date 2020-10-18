<?php

namespace App\Http\Resources;
use App\Http\Resources\BookingByReviewBookableShowResource as BookableResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingByReviewShowResource extends JsonResource
{
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
            'booking_id'        => $this->id,
            'from'              => $this->from ,
            'to'                =>$this->to,
            'bookable'       =>new BookableResource($this->bookable) 

        ];
    }
}
