<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArsipSurat extends Model
{
    protected $fillable = ['nomor_surat', 'kategori_surat_id', 'judul', 'file_surat'];


    public function kategoriSurat(): BelongsTo
    {
        return $this->belongsTo(KategoriSurat::class);
    }

     protected static function booted()
    {
        static::deleting(function (ArsipSurat $model) {
            $disk = env('FILESYSTEM_DISK', config('filesystems.default'));
            if ($model->file_surat && Storage::disk($disk)->exists($model->file_surat)) {
                Storage::disk($disk)->delete($model->file_surat);
            }
        });
    }

    // Optional: if you want replacing behavior in model when file attribute updated,
    // you can implement a mutator to delete old file when file_surat changed:
    public function setFileSuratAttribute($value)
    {
        $disk = env('FILESYSTEM_DISK', config('filesystems.default'));

        // If the attribute is being set to a new string/path that differs from current,
        // delete the old file.
        if ($this->exists && $this->getOriginal('file_surat') && $value && $value !== $this->getOriginal('file_surat')) {
            if (Storage::disk($disk)->exists($this->getOriginal('file_surat'))) {
                Storage::disk($disk)->delete($this->getOriginal('file_surat'));
            }
        }

        $this->attributes['file_surat'] = $value;
    }

    
}
