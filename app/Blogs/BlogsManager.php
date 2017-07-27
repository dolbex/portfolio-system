<?php namespace App\Blogs;

use App\Blog;
use Devise\Support\Framework;

class BlogsManager
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

	function __construct(Blog $blog, Framework $Framework)
	{
		$this->Blog = $blog;
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
	 * Create a new blog
	 *
	 * @param  array $input
	 * @return Blog $blog
	 */
	public function createBlog($input)
	{
        $validator = $this->Validator->make($input, $this->createRules(), array("Could not create new blog"));

        if ($validator->passes())
        {
    		$blog = $this->Blog;

            $blog->title = $input['title'];
            $blog->introduction = $input['introduction'];
            $blog->content = $input['content'];
            $blog->publication_date = $input['publication_date'];
            $blog->main_image = $input['main_image'];


    		$blog->save();

    		return $blog;
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
	 * Update a blog
	 *
	 * @param  integer $id
	 * @param  array $input
	 * @return Blog $blog
	 */
	public function updateBlog($id, $input)
	{
        $validator = $this->Validator->make($input, $this->updateRules($id, $input), array("Could not update blog"));

		if ($validator->passes())
        {
    		$blog = $this->Blog->findOrFail($id);

            $blog->title = $input['title'];
            $blog->introduction = $input['introduction'];
            $blog->content = $input['content'];
            $blog->publication_date = $input['publication_date'];
            $blog->main_image = $input['main_image'];


    		$blog->save();

    		return $blog;
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
	public function destroyBlog($id)
	{
		$blog = $this->Blog->findOrFail($id);
		$blog->delete();
		
		return $blog;
	}

}