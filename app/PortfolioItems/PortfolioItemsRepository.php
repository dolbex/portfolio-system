<?php namespace App\PortfolioItems;

use  App\PortfolioItem;

class PortfolioItemsRepository
{
	function __construct(PortfolioItem $portfolioItem)
	{
		$this->PortfolioItem = $portfolioItem;
	}

	function getPortfolioItem($id)
	{
		return $this->PortfolioItem->orderBy('portfolio_category_id')->orderBy('display_order')->findorfail($id);
	}

	function getAllPortfolioItems()
	{
		return $this->PortfolioItem->with('category')->orderBy('portfolio_category_id')->orderBy('display_order')->paginate();
	}
}
