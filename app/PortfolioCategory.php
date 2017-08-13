<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model {
  function items() {
    return $this->hasMany('App\PortfolioItem', 'portfolio_category_id');
  }
}
