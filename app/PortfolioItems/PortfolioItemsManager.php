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
      'display_order' => 'required',
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
      return $this->savePortfolioItem($input);
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
      $input['id'] = $id;
      return $this->savePortfolioItem($input);
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

  private function savePortfolioItem($data) {
    if (isset($data['id']))
    {
      $item = $this->PortfolioItem->find($data['id']);
    }
    else
    {
      $item = new PortfolioItem();
    }

    // dd($data['media']);

    $item->portfolio_category_id = $data['portfolio_category_id'];
    $item->name = $data['name'];
    $item->description = $data['description'];
    $item->creation_date = date('Y-m-d H:i:s', strtotime($data['creation_date']));
    $item->more_information = isset($data['more_information']) ? 1 : 0;
    $item->on_right = isset($data['on_right']) ? 1 : 0;
    $item->on_top = isset($data['on_top']) ? 1 : 0;
    $item->dark = isset($data['dark']) ? 1 : 0;
    $item->display_order = $data['display_order'];
    $item->media = $data['media'];

    $item->save();

    return $item;
  }

}
