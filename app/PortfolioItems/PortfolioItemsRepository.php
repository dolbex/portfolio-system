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
		return $this->PortfolioItem->findorfail($id);
	}

	function getAllPortfolioItems()
	{
		return $this->PortfolioItem->with('category')->paginate();
	}
}
