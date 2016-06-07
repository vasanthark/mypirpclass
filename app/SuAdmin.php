<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class SuAdmin extends Authenticatable
{
    protected $table = 'dmv_super_admin';
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
    
    public function getId() {
        return $this->id;
    }
}
