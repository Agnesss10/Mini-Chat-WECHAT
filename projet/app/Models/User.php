<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    public $timestamps = false;

    protected $hidden = ['mdp'];

    protected $fillable = ['prenom','nom','pseudo', 'mdp','mail','num'];

    public function getAuthPassword(){
        return $this->mdp;
    }
    public function messages(){
        $this->belongsToMany(Message::class, 'messages', 'message_id',
            'user_env_id');
    }



}
