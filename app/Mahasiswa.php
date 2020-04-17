<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama
 * @property string $nim
 * @property string $email
 * @property string $jurusan
 * @property string $created_at
 * @property string $updated_at
 */
class Mahasiswa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'students';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'nim', 'email', 'jurusan', 'created_at', 'updated_at'];

}
