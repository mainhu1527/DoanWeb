<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'composers.CategoryMenu', 'App\Http\ViewComposers\CategoryMenuComposer'
        );
        View::composer(
            'composers.CategoryProduct', 'App\Http\ViewComposers\CategoryProductComposer'
        );
         View::composer(
            'composers.CategorySearch', 'App\Http\ViewComposers\SearchComposer'
        );
          View::composer(
            'composers.CategoryDetail', 'App\Http\ViewComposers\DetailComposer'
        );
            View::composer(
            'composers.CategoryEdit', 'App\Http\ViewComposers\EditComposer'
        );  
              View::composer(
            'composers.CategoryAccount', 'App\Http\ViewComposers\AccountComposer'
        );
        // Using Closure based composers...
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
?>