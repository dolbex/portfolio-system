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
		return $this->PortfolioCategory->findorfail($id);
	}

	function getAllPortfolioCategories()
	{
		return $this->PortfolioCategory->paginate();
	}
}