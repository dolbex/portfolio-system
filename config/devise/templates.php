<?php return array (
		'admin.blogs.create' => array(
			'human_name' => 'Admin Create Blogs',
			'extends' => 'devise::admin.layouts.master',
		),
		'admin.blogs.edit' => array(
			'human_name' => 'Admin Edit Blogs',
			'extends' => 'devise::admin.layouts.master',
			'vars' => array(
				'blog' => array(
					'App\Blogs\BlogsRepository.getBlog' => array(
						'{params.blogid}',
					),
				),
			),
		),
		'admin.blogs.index' => array(
			'human_name' => 'Admin Blogs Index',
			'extends' => 'devise::admin.layouts.master',
			'vars' => array(
				'blogs' => 'App\Blogs\BlogsRepository.getAllBlogs',
			),
		),
	);