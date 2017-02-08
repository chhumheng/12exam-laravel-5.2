<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'Countries';
    protected $primaryKey = 'pkCountriesID';
    protected $fillable = ['pkCountriesID', 'countriesNameEN', 'countriesNameKH','countriesNameZH','countriesNameTH', 'countriesStatus'];
}