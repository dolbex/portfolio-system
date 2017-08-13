<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PortfolioCategory;

class PortfolioItem extends Model {

  function category()
  {
    return $this->belongsTo('App\PortfolioCategory', 'portfolio_category_id');
  }

  public function getMediaAttribute($value)
  {
    return json_decode($value);
  }
}
