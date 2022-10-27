<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'id',
    ];

    
    /**
     * Get the user that owns the Task
     * 
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        //this function performes a query in the database where
        //we get the data of user owner of the task
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
