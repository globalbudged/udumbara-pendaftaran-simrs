<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class PasienResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'nik' => $this->nik,
            'noka' => $this->noka,
            'no_rm' => $this->no_rm,
            'no_hp' => $this->no_hp,
            'nama' => $this->nama,
            'kewarganegaraan' => $this->kewarganegaraan,
            'negara' => $this->negara,
            'alamat' => $this->alamat,
            'provinsi' => $this->provinsi,
            'kabkot' => $this->kabkot,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
            'kodepos' => $this->kodepos,
            'rt' => $this->rt,
            'rw' => $this->rw,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'gender' => $this->gender,
            'agama' => $this->agama,
            'masa' => $this->masa,
            'status_pernikahan' => $this->status_pernikahan,
            'pendidikan' => $this->pendidikan,
            'suku' => $this->suku,
            'sapaan' => $this->sapaan,
            'cara_datang' => $this->cara_datang,
            'jenis_pasien' => $this->jenis_pasien,
            'flag' => $this->flag,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
