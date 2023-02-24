<?php

namespace App\Http\Services\Admin;

use App\Models\Destination;

class DestinationService
{
  public function create($data)
  {
    Destination::create([
      'name' => $data->name,
      'area_id' => $data->area_id,
      'address' => $data->alamat,
      'address_url' => $data->address_url,
      'description' => $data->description,
    ]);
  }
}
