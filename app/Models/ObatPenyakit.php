<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatPenyakit extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function obat() {
        return $this->belongsTo(Obat::class);
    }

    public function penyakit() {
        return $this->belongsTo(Penyakit::class);
    }
}
