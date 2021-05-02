<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Citizens extends Model
{
    protected $table = 'citizens';
    protected $fillable = [
    	'name', 'kk_number', 'nik', 'sex_id', 'birth_place', 'birth_date', 'religion_id', 'education_id', 
    	'job_id', 'marital_status_id', 'family_status_id', 'country_id', 'passport_number', 'kitas_number', 
    	'father_name', 'mother_name', 'created_by', 'updated_by'
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

    public function religion()
    {
    	return $this->belongsTo(Religion::class);
    }

    public function education()
    {
    	return $this->belongsTo(Education::class);
    }

    public function job()
    {
    	return $this->belongsTo(Job::class);
    }

    public function marital()
    {
    	return $this->belongsTo(MaritalStatus::class);
    }

    public function family()
    {
    	return $this->belongsTo(FamilyStatus::class);
    }

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }
}