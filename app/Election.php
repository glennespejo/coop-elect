<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    protected $table = 'elections';
    protected $fillable = [
		'election_name',
		'logo',
		'header',
		'description',
		'election_start_date',
		'election_end_date',
		'active',
	];
}
