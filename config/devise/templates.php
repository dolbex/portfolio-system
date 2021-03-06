<?php return [
  'master' => [
    'human_name' => 'Master Template',
    'vars' => [
      'categories' => 'App\PortfolioCategories\PortfolioCategoriesRepository.getAllPortfolioCategories'
    ]
  ],
  'homepage' => [
    'human_name' => 'Homepage Template',
    'extends' => 'master'
  ],
  'category' => [
    'human_name' => 'Homepage Template',
    'extends' => 'master',
    'vars' => [
      'category' => [
        'App\PortfolioCategories\PortfolioCategoriesRepository.getPortfolioCategoryBySlug' => [
          '{params.slug}'
        ]
      ]
    ]
  ],
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
  'admin.portfolio_categories.create' => array(
    'human_name' => 'Admin Create PortfolioCategories',
    'extends' => 'devise::admin.layouts.master',
  ),
  'admin.portfolio_categories.edit' => array(
    'human_name' => 'Admin Edit PortfolioCategories',
    'extends' => 'devise::admin.layouts.master',
    'vars' => array(
      'portfolioCategory' => array(
        'App\PortfolioCategories\PortfolioCategoriesRepository.getPortfolioCategory' => array(
          '{params.portfolioCategoryid}',
        ),
      ),
    ),
  ),
  'admin.portfolio_categories.index' => array(
    'human_name' => 'Admin PortfolioCategories Index',
    'extends' => 'devise::admin.layouts.master',
    'vars' => array(
      'portfolioCategories' => 'App\PortfolioCategories\PortfolioCategoriesRepository.getAllPortfolioCategories',
    ),
  ),
  'admin.portfolio_items.create' => array(
    'human_name' => 'Admin Create PortfolioItems',
    'extends' => 'devise::admin.layouts.master',
    'vars' => array(
      'portfolioCategories' => 'App\PortfolioCategories\PortfolioCategoriesRepository.getAllPortfolioCategoriesList',
    ),
  ),
  'admin.portfolio_items.edit' => array(
    'human_name' => 'Admin Edit PortfolioItems',
    'extends' => 'devise::admin.layouts.master',
    'vars' => array(
      'portfolioItem' => array(
        'App\PortfolioItems\PortfolioItemsRepository.getPortfolioItem' => array(
          '{params.portfolioItemid}',
        ),
      ),
      'portfolioCategories' => 'App\PortfolioCategories\PortfolioCategoriesRepository.getAllPortfolioCategoriesList',
    ),
  ),
  'admin.portfolio_items.index' => array(
    'human_name' => 'Admin PortfolioItems Index',
    'extends' => 'devise::admin.layouts.master',
    'vars' => array(
      'portfolioItems' => 'App\PortfolioItems\PortfolioItemsRepository.getAllPortfolioItems',
    ),
  ),
];
