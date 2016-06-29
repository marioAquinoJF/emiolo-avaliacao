<?php

namespace Emiolo\Entities\User;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Emiolo\Entities\Image;
class User extends Authenticatable implements Transformable
{

    use TransformableTrait;

    protected $fillable = [
        'name', 'email', 'password', 'presentation', 'url_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
