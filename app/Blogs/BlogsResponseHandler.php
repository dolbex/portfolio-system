<?php namespace App\Blogs;

use Illuminate\Routing\Redirector;

class BlogsResponseHandler
{
	function __construct(Redirector $Redirect, BlogsManager $BlogsManager)
	{
		$this->Redirect = $Redirect;
		$this->Manager  = $BlogsManager;
	}

	function requestCreate($input)
	{
		if ($this->Manager->createBlog($input))
        {
            return $this->Redirect->route('admin-blogs-index')
                ->with('message', 'Blog successfully created');
        }

        return $this->Redirect->route('admin-blogs-create')
                ->withInput()
                ->withErrors($this->Manager->errors)
                ->with('message', $this->Manager->message);
	}

	function requestUpdate($id, $input)
	{
		if ($this->Manager->updateBlog($id, $input))
        {
            return $this->Redirect->route('admin-blogs-index')
                ->with('message', 'Blog successfully updated');
        }

        return $this->Redirect->route('admin-blogs-edit', $id)
                ->withInput()
                ->withErrors($this->Manager->errors)
                ->with('message', $this->Manager->message);
	}

	function requestDestroy($id)
	{
		$this->Manager->destroyBlog($id);

        return $this->Redirect->route('admin-blogs-index')
                ->with('message', 'Blog successfully removed');
	}

}