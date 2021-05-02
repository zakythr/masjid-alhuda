<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Zakatmal extends Model
{
    protected $table = 'zakatmal';
    protected $fillable = [
    	'nama', 'sex_id', 'jumlahuang', 'alamat', 'tanggalmal', 'created_by', 'updated_by'
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
}