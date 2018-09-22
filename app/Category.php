<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\Category as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 'image', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function rules($id = '')
    {
        return [
            'name'      => 'required|min:3|max:100',
            'url'     => "required|min:3|max:100",
            'image' => 'image',
            'description'  => 'required|min:3|max:200',
        ];
    }
}
