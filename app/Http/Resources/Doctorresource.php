<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Doctorresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'image'=> 'http://192.168.100.210:8000/uploadedFiles/'.$this->image,
            'telephone'=> $this->telephone,
            'country'=> $this->country,
            'zone'=> $this->zone,
            'district'=> $this->district,
            'city'=> $this->city,
            'ward'=> $this->ward,
            'province'=> $this->province,
            'mobile'=> $this->mobile,





        ];
    }
}


