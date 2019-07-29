<?php

namespace App;

use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'title', 'description', 'owner_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->HasMany(Task::class);
    }
    public function addTask($description)
    {
        return Task::create([
            'project_id' => $this->id,
            'description' => $description
        ]);
    }
}
