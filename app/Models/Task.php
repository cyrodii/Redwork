<?php

namespace Redwork\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->update(false);
    }
}
