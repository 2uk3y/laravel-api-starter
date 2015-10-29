<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premise extends Model
{
	// -- define new table name
	// protected $table = 'custom_table';
	
	// -- define new field id for table
	// protected $primaryKey = 'custom_id_colum';

	// -- define other field for date_created and date_updated
	// const CREATED_AT = 'custom_created_at';
	// const UPDATED_AT = 'custom_updated_at';

	// -- indicates if the model should be timestamp
	// public $timestamps = false;
    
    protected $fillable = [ 'regno', 'company_name', 'state_name', 'district_name' ];
}
