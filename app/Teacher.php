<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'teachers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'alamat',
        'room_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function teacherSchedules()
    {
        return $this->hasMany(Schedule::class, 'teacher_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}