<?php namespace App\PortfolioCategories;

use Illuminate\Routing\Redirector;

class PortfolioCategoriesResponseHandler
{
	function __construct(Redirector $Redirect, PortfolioCategoriesManager $PortfolioCategoriesManager)
	{
		$this->Redirect = $Redirect;
		$this->Manager  = $PortfolioCategoriesManager;
	}

	function requestCreate($input)
	{
		if ($this->Manager->createPortfolioCategory($input))
        {
            return $this->Redirect->route('admin-portfoliocategories-index')
                ->with('message', 'PortfolioCategory successfully created');
        }

        return $this->Redirect->route('admin-portfoliocategories-create')
                ->withInput()
                ->withErrors($this->Manager->errors)
                ->with('message', $this->Manager->message);
	}

	function requestUpdate($id, $input)
	{
		if ($this->Manager->updatePortfolioCategory($id, $input))
        {
            return $this->Redirect->route('admin-portfoliocategories-index')
                ->with('message', 'PortfolioCategory successfully updated');
        }

        return $this->Redirect->route('admin-portfoliocategories-edit', $id)
                ->withInput()
                ->withErrors($this->Manager->errors)
                ->with('message', $this->Manager->message);
	}

	function requestDestroy($id)
	{
		$this->Manager->destroyPortfolioCategory($id);

        return $this->Redirect->route('admin-portfoliocategories-index')
                ->with('message', 'PortfolioCategory successfully removed');
	}

}