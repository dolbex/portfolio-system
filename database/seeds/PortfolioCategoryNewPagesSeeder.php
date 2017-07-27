<?php

class PortfolioCategoryNewPagesSeeder extends DeviseSeeder
{
    public function run()
    {
        $pages = array (
  0 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_categories.index',
    'title' => 'Admin PortfolioCategories',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-categories',
    'response_type' => 'View',
    'route_name' => 'admin-portfoliocategories-index',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  1 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_categories.create',
    'title' => 'Admin Create PortfolioCategory',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-categories/create',
    'response_type' => 'View',
    'route_name' => 'admin-portfoliocategories-create',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  2 =>
  array (
    'language_id' => 45,
    'view' => 'admin.portfolio_categories.edit',
    'title' => 'Admin Edit PortfolioCategory',
    'http_verb' => 'get',
    'slug' => '/admin/portfolio-categories/edit/{portfolioCategoryid}',
    'response_type' => 'View',
    'route_name' => 'admin-portfoliocategories-edit',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  3 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin PortfolioCategory Update',
    'http_verb' => 'put',
    'slug' => '/admin/portfolio-categories/update/{portfolioCategoryid}',
    'response_type' => 'Function',
    'response_path' => 'App\\PortfolioCategories\\PortfolioCategoriesResponseHandler.requestUpdate',
    'response_params' => 'params.portfolioCategoryid, input',
    'route_name' => 'admin-portfoliocategories-update',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  4 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin PortfolioCategory Destroy',
    'http_verb' => 'delete',
    'slug' => '/admin/portfolio-categories/destroy/{portfolioCategoryid}',
    'response_type' => 'Function',
    'response_path' => 'App\\PortfolioCategories\\PortfolioCategoriesResponseHandler.requestDestroy',
    'response_params' => 'params.portfolioCategoryid',
    'route_name' => 'admin-portfoliocategories-destroy',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  5 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin PortfolioCategory Store',
    'http_verb' => 'post',
    'slug' => '/admin/portfolio-categories/store',
    'response_type' => 'Function',
    'response_path' => 'App\\PortfolioCategories\\PortfolioCategoriesResponseHandler.requestCreate',
    'response_params' => 'input',
    'route_name' => 'admin-portfoliocategories-store',
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
