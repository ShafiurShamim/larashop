<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function path()
    {
        return "/shop/{$this->slug}";
    }

    /**
    * Get the route key name for Laravel.
    *
    * @return string
    */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Set the name of the grade.
     *
     * @param string $name
     */
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = str_slug($name);
    }
}
