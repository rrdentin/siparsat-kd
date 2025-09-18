<?php

namespace App\Models;

use App\Models\ArsipSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriSurat extends Model
{
    protected $fillable = ['nama_kategori', 'keterangan'];

    public function arsipSurat(): HasMany
    {
        return $this->hasMany(ArsipSurat::class);
    }

      public static function getNextId()
    {
        $latest = self::latest('id')->first();  // Get the last record's ID
        return $latest ? $latest->id + 1 : 1;  // Increment it by 1 or return 1 if no records exist
    }

}
