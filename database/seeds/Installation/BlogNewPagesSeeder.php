<?php
namespace Installation;

class BlogNewPagesSeeder extends \DeviseSeeder
{
    public function run()
    {
        $pages = array (
  0 =>
  array (
    'language_id' => 45,
    'view' => 'admin.blogs.index',
    'title' => 'Admin Blogs',
    'http_verb' => 'get',
    'slug' => '/admin/blogs',
    'response_type' => 'View',
    'route_name' => 'admin-blogs-index',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  1 =>
  array (
    'language_id' => 45,
    'view' => 'admin.blogs.create',
    'title' => 'Admin Create Blog',
    'http_verb' => 'get',
    'slug' => '/admin/blogs/create',
    'response_type' => 'View',
    'route_name' => 'admin-blogs-create',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  2 =>
  array (
    'language_id' => 45,
    'view' => 'admin.blogs.edit',
    'title' => 'Admin Edit Blog',
    'http_verb' => 'get',
    'slug' => '/admin/blogs/edit/{blogid}',
    'response_type' => 'View',
    'route_name' => 'admin-blogs-edit',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  3 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin Blog Update',
    'http_verb' => 'put',
    'slug' => '/admin/blogs/update/{blogid}',
    'response_type' => 'Function',
    'response_path' => 'App\\Blogs\\BlogsResponseHandler.requestUpdate',
    'response_params' => 'params.blogid, input',
    'route_name' => 'admin-blogs-update',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  4 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin Blog Destroy',
    'http_verb' => 'delete',
    'slug' => '/admin/blogs/destroy/{blogid}',
    'response_type' => 'Function',
    'response_path' => 'App\\Blogs\\BlogsResponseHandler.requestDestroy',
    'response_params' => 'params.blogid',
    'route_name' => 'admin-blogs-destroy',
    'middleware' => 'devise.permissions:ifNotLoggedInGoToLogin',
  ),
  5 =>
  array (
    'language_id' => 45,
    'view' => NULL,
    'title' => 'Admin Blog Store',
    'http_verb' => 'post',
    'slug' => '/admin/blogs/store',
    'response_type' => 'Function',
    'response_path' => 'App\\Blogs\\BlogsResponseHandler.requestCreate',
    'response_params' => 'input',
    'route_name' => 'admin-blogs-store',
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
