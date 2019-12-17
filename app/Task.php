<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    protected $fillable = ['task_name', 'user_id'];

    public function users()
    {
        return $this->belongTo('App\User');
    }

}
