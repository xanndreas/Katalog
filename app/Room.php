<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'rooms';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'gedung',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function roomTeachers()
    {
        return $this->hasMany(Teacher::class, 'room_id', 'id');
    }
}