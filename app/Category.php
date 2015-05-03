<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = array('name');

    public function subcategory(){
        return $this->hasMany('App\SubCategory');
    }
}
