<?php

namespace App\Transformers;

use App\Models\Inventaris;
use league\Fractal\TransformerAbstract;

class InventarisTransformer extends TransformerAbstract
{
  public function transform(Inventaris $data)
  {
    return [
      'id' => $data->id_inventaris,
      'nama' => $data->nama_inventaris,
      'jumlah' => $data->jumlah,
      'satuan' => $data->satuan,
      'keterangan' => $data->id_inventaris,
    ];
  }
}
