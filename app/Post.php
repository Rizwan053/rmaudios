<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [

    'photo_id',
    'category_id',
    'title',
    'body',
    'url',
    'slug'

    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate ' => true,
            ]
        ];
    }
    

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    
    public function category(){
        return $this->belongsTo('App\Category');
    }




}//end of class
