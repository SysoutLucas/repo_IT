<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tarefas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'category', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
}
