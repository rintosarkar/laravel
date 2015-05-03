<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model {

	protected $fillable=[
        'category_id','sub_cat_name','published_at'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
