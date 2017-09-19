<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table='categories';
    //protected $connection= 'mysql';

    // campos de una vista para trabajar
    protected $fillable= ['name', 'description'];

    public function books(){
        return $this->hasMany(Book::class, 'category_id');
    }

}
