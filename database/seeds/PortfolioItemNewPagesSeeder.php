<?php

class PortfolioItemNewPagesSeeder extends DeviseSeeder
{
    public function run()
    {
        $pages = array (
  0 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_items.index',
    'title' => 'Admin PortfolioItems',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-items',
    'response_type' => 'View',
    'route_name' => 'admin-portfolioitems-index',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  1 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_items.create',
    'title' => 'Admin Create PortfolioItem',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-items/create',
    'response_type' => 'View',
    'route_name' => 'admin-portfolioitems-create',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  2 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_items.edit',
    'title' => 'Admin Edit PortfolioItem',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-items/edit/{portfolioItemid}',
    'response_type' => 'View',
    'route_name' => 'admin-portfolioitems-edit',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  3 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin PortfolioItem Update',
    'http_verb' => 'put',
    'slug' => '/admin/portfolio-items/update/{portfolioItemid}',
    'response_type' => 'Function',
    'response_path' => 'App\\PortfolioItems\\PortfolioItemsResponseHandler.requestUpdate',
    'response_params' => 'params.portfolioItemid, input',
    'route_name' => 'admin-portfolioitems-update',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  4 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin PortfolioItem Destroy',
    'http_verb' => 'delete',
    'slug' => '/admin/portfolio-items/destroy/{portfolioItemid}',
    'response_type' => 'Function',
    'response_path' => 'App\\PortfolioItems\\PortfolioItemsResponseHandler.requestDestroy',
    'response_params' => 'params.portfolioItemid',
    'route_name' => 'admin-portfolioitems-destroy',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  5 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin PortfolioItem Store',
    'http_verb' => 'post',
    'slug' => '/admin/portfolio-items/store',
    'response_type' => 'Function',
    'response_path' => 'App\\PortfolioItems\\PortfolioItemsResponseHandler.requestCreate',
    'response_params' => 'input',
    'route_name' => 'admin-portfolioitems-store',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  6 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_items.index',
    'title' => 'Admin Portfolio Item Single Row',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-media-items-single-row',
    'response_type' => 'View',
    'route_name' => 'admin-portfolio-items-media-single-row',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
);

        $now = date('Y-m-d H:i:s', strtotime('now'));

        $dvsPages = $this->findOrCreateRows('dvs_pages', 'route_name', $pages);

        foreach ( $dvsPages as $dvsPage )
        {
            $this->findOrCreateRow('dvs_page_versions', 'page_id', [
                'page_id'            => $dvsPage->id,
                'created_by_user_id' => 1,
                'name'               => 'Default',
                'starts_at'          => $now,
            ]);
        }
    }

}
