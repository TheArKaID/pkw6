<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $namamatkul
 * @property string $waktu
 * @property string $lab
 * @property string $created_at
 * @property string $updated_at
 */
class Jadwal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jadwal';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['namamatkul', 'waktu', 'lab', 'created_at', 'updated_at'];

}
