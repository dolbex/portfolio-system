<?php namespace App\PortfolioItems;

use App\PortfolioItem;
use Devise\Support\Framework;

class PortfolioItemsManager
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

  function __construct(PortfolioItem $portfolioItem, Framework $Framework)
  {
    $this->PortfolioItem = $portfolioItem;
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
  * Create a new portfolioitem
  *
  * @param  array $input
  * @return PortfolioItem $portfolioItem
  */
  public function createPortfolioItem($input)
  {
    $validator = $this->Validator->make($input, $this->createRules(), array("Could not create new portfolioitem"));

    if ($validator->passes())
    {
      $portfolioItem = $this->PortfolioItem;

      $portfolioItem->portfolio_category_id = $input['portfolio_category_id'];
      $portfolioItem->name = $input['name'];
      $portfolioItem->description = $input['description'];
      $portfolioItem->creation_date = date('Y-m-d H:i:s', strtotime($input['creation_date']));
      $portfolioItem->more_information = isset($input['more_information']) ? 1 : 0;
      $portfolioItem->on_right = isset($input['on_right']) ? 1 : 0;
      $portfolioItem->on_top = isset($input['on_top']) ? 1 : 0;
      $portfolioItem->dark = isset($input['dark']) ? 1 : 0;
      $portfolioItem->display_order = $input['display_order'];


      $portfolioItem->save();

      return $portfolioItem;
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
  * Update a portfolioitem
  *
  * @param  integer $id
  * @param  array $input
  * @return PortfolioItem $portfolioItem
  */
  public function updatePortfolioItem($id, $input)
  {
    $validator = $this->Validator->make($input, $this->updateRules($id, $input), array("Could not update portfolioitem"));

    if ($validator->passes())
    {
      $portfolioItem = $this->PortfolioItem->findOrFail($id);

      $portfolioItem->portfolio_category_id = $input['portfolio_category_id'];
      $portfolioItem->name = $input['name'];
      $portfolioItem->description = $input['description'];
      $portfolioItem->creation_date = $input['creation_date'];
      $portfolioItem->more_information = isset($input['more_information']) ? 1 : 0;
      $portfolioItem->on_right = isset($input['on_right']) ? 1 : 0;
      $portfolioItem->on_top = isset($input['on_top']) ? 1 : 0;
      $portfolioItem->dark = isset($input['dark']) ? 1 : 0;
      $portfolioItem->display_order = $input['display_order'];


      $portfolioItem->save();

      return $portfolioItem;
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
  public function destroyPortfolioItem($id)
  {
    $portfolioItem = $this->PortfolioItem->findOrFail($id);
    $portfolioItem->delete();

    return $portfolioItem;
  }

}
