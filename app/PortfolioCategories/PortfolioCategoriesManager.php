<?php namespace App\PortfolioCategories;

use App\PortfolioCategory;
use Devise\Support\Framework;

class PortfolioCategoriesManager
{

    /**
     * Framework components being used from Laravel's framework
     *
     * @var Framework
     */
    protected $Framework;

    /**
     * Errors are kept in an array and can be
     * used later if validation fails and we want to
     * know why
     *
     * @var array
     */
    public $errors;

    /**
     * Validation messages
     */
    public $messages = array(
        // 'title.required' => 'Title required.',
    );

	function __construct(PortfolioCategory $portfolioCategory, Framework $Framework)
	{
		$this->PortfolioCategory = $portfolioCategory;
		$this->Validator = $Framework->Validator;
	}

	/**
     * Create validation rules
     *
     * @return array
     */
	public function createRules()
	{
 		return array(
        	// 'title' => 'required',
    	);
	}

	/**
	 * Create a new portfoliocategory
	 *
	 * @param  array $input
	 * @return PortfolioCategory $portfolioCategory
	 */
	public function createPortfolioCategory($input)
	{
        $validator = $this->Validator->make($input, $this->createRules(), array("Could not create new portfoliocategory"));

        if ($validator->passes())
        {
    		$portfolioCategory = $this->PortfolioCategory;

            $portfolioCategory->name = $input['name'];
            $portfolioCategory->slug = str_slug($input['slug']);
            $portfolioCategory->short_description = $input['short_description'];
            $portfolioCategory->long_description = $input['long_description'];
            $portfolioCategory->display_order = $input['display_order'];


    		$portfolioCategory->save();

    		return $portfolioCategory;
        }

        $this->errors = $validator->errors()->all();
        $this->message = "There were validation errors.";
        return false;
	}

	/**
     * Update validation rules
     *
     * @return array
     */
	public function updateRules()
	{
 		return array(
        	// 'title' => 'min:3'
    	);
	}

	/**
	 * Update a portfoliocategory
	 *
	 * @param  integer $id
	 * @param  array $input
	 * @return PortfolioCategory $portfolioCategory
	 */
	public function updatePortfolioCategory($id, $input)
	{
        $validator = $this->Validator->make($input, $this->updateRules($id, $input), array("Could not update portfoliocategory"));

		if ($validator->passes())
        {
    		$portfolioCategory = $this->PortfolioCategory->findOrFail($id);

            $portfolioCategory->name = $input['name'];
            $portfolioCategory->slug = str_slug($input['slug']);
            $portfolioCategory->short_description = $input['short_description'];
            $portfolioCategory->long_description = $input['long_description'];
            $portfolioCategory->display_order = $input['display_order'];


    		$portfolioCategory->save();

    		return $portfolioCategory;
        }

        $this->errors = $validator->errors()->all();
        $this->message = "There were validation errors.";
        return false;
	}

	/**
	 * Delete a Spotlight
	 *
	 * @param  integer $id
	 * @return Spotlight $Spotlight
	 */
	public function destroyPortfolioCategory($id)
	{
		$portfolioCategory = $this->PortfolioCategory->findOrFail($id);
		$portfolioCategory->delete();

		return $portfolioCategory;
	}

}
