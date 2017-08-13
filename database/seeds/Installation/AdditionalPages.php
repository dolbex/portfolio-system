<?php namespace Installation;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class AdditionalPages extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $pages = [
          array (
            'language_id' => 45,
            'translated_from_page_id' => 0,
            'view' => 'category',
            'title' => 'Category',
            'http_verb' => 'get',
            'route_name' => 'portfolio-category',
            'is_admin' => 0,
            'dvs_admin' => 0,
            'slug' => '/category/{slug}',
            'short_description' => 'A view of a category',
            'meta_title' => NULL,
            'meta_description' => NULL,
            'meta_keywords' => NULL,
            'head' => NULL,
            'footer' => NULL,
            'middleware' => NULL,
            'ab_testing_enabled' => 0,
            'response_type' => 'View',
            'response_path' => NULL,
            'response_params' => 'params.slug',
            'deleted_at' => NULL,
          )
        ];

        foreach ($pages as $newPage) {
            $page = DB::table('dvs_pages')->where('route_name', '=', $newPage['route_name'])->first();

            $pageId = $page ? $page->id : DB::table('dvs_pages')->insertGetId(array_merge($newPage, ['created_at' => new DateTime, 'updated_at' => new DateTime]));

            $pageVersion = DB::table('dvs_page_versions')->where('page_id', '=', $pageId)->first();

            // make sure there is at least a Default page version
            if (!$pageVersion) {
                DB::table('dvs_page_versions')->insert([
                    'page_id' => $pageId,
                    'created_by_user_id' => 0,
                    'name' => 'Default',
                    'starts_at' => new DateTime,
                    'ends_at' => null,
                    'preview_hash' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ]);
            }
        }
    }


}
