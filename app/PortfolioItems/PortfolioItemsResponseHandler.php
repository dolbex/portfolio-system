<?php namespace App\PortfolioItems;

use Illuminate\Routing\Redirector;

class PortfolioItemsResponseHandler
{
	function __construct(Redirector $Redirect, PortfolioItemsManager $PortfolioItemsManager)
	{
		$this->Redirect = $Redirect;
		$this->Manager  = $PortfolioItemsManager;
	}

	function requestCreate($input)
	{
		if ($this->Manager->createPortfolioItem($input))
        {
            return $this->Redirect->route('admin-portfolioitems-index')
                ->with('message', 'PortfolioItem successfully created');
        }

        return $this->Redirect->route('admin-portfolioitems-create')
                ->withInput()
                ->withErrors($this->Manager->errors)
                ->with('message', $this->Manager->message);
	}

	function requestUpdate($id, $input)
	{
		if ($this->Manager->updatePortfolioItem($id, $input))
        {
            return $this->Redirect->route('admin-portfolioitems-index')
                ->with('message', 'PortfolioItem successfully updated');
        }

        return $this->Redirect->route('admin-portfolioitems-edit', $id)
                ->withInput()
                ->withErrors($this->Manager->errors)
                ->with('message', $this->Manager->message);
	}

	function requestDestroy($id)
	{
		$this->Manager->destroyPortfolioItem($id);

        return $this->Redirect->route('admin-portfolioitems-index')
                ->with('message', 'PortfolioItem successfully removed');
	}

}