<?php namespace App\PortfolioCategories;

use  App\PortfolioCategory;

class PortfolioCategoriesRepository
{
	function __construct(PortfolioCategory $portfolioCategory)
	{
		$this->PortfolioCategory = $portfolioCategory;
	}

	function getPortfolioCategory($id)
	{
		return $this->PortfolioCategory->with('items')->findorfail($id);
	}

	function getPortfolioCategoryBySlug($slug)
	{
		return $this->PortfolioCategory->with('items')->where('slug', $slug)->first();
	}

	function getAllPortfolioCategories()
	{
		return $this->PortfolioCategory->with('items')->orderBy('display_order')->get();
	}

  function getAllPortfolioCategoriesList()
	{
		return $this->PortfolioCategory->orderBy('display_order')->pluck('name', 'id');
	}
}
