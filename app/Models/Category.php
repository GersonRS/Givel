<?php

namespace Givel\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    		'name',
            'common_fund',
            'reserve_fund',
            'administration_fee'
    ];

    public function products()
    {
    	return $this->hasMany(Product::Class);

    }

}
