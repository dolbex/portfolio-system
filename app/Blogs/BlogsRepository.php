<?php namespace App\Blogs;

use  App\Blog;

class BlogsRepository 
{
	function __construct(Blog $blog) 
	{
		$this->Blog = $blog;
	}

	function getBlog($id)
	{
		return $this->Blog->findorfail($id);
	}

	function getAllBlogs()
	{
		return $this->Blog->paginate();
	}
}