<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $place_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Classroom extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['place_id', 'name', 'created_at', 'updated_at'];

    public function place()
    {
        return $this->hasOne('App\Place','id','place_id');
    }

}
