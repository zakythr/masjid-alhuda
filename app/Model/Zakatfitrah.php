<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Zakatfitrah extends Model
{
    protected $table = 'zakatfitrah';
    protected $fillable = [
    	'nama', 'sex_id', 'jeniszakat_id', 'jumlahberas', 
        'jumlahuang', 'tanggalfitrah', 'alamat', 'created_by', 'updated_by'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($modal) {
            $modal->created_by = Auth::user()->id;
        });
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }

    public function jeniszakatfitrah()
    {
    	return $this->belongsTo(Jeniszakatfitrah::class);
    }
}