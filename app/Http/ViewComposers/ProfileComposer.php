<?php

namespace App\Http\ViewComposers;

use App\User;
use Illuminate\View\View;

class ProfileComposer
{
    protected $users;

    /**
     * ProfileComposer constructor.
     *
     * @param User $users
     */
    public function __construct(User $users)
    {
        // Dependencies automatically resolved by service container...
        $this->users = $users;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $count = 1;

        $view->with('count', $count);
    }
}