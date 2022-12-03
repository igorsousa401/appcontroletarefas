<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa', 'data_tarefa_conclusao', 'user_id'];
    protected $dates = ['data_tarefa_conclusao'];
}
