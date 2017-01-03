<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class SearchComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */


    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('allproduct', $allproduct::all());
    }
}