<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

use App\Models\Simple\XMLModel;
class Places extends XMLModel{
    protected $origin = WRITEPATH . 'data/placesData.xml';
    protected $keyField = 'id';
protected $validationRules = [];
}
