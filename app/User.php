<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsTo(Role::class,'rol','id');
    }

  
    public function scopeName($query, $name){

        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(name, apellido, cedula,' ')"), "LIKE", "%$name%");
        }
     
    
    }

    public function hasRoles(array $rols){
     
        foreach ($rols as $roles){
         
            if ($this->roles->name === $roles){               
                return true;
            }
        }        
        return false;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
