<?php

namespace App\Http\Controllers\Web\Client;

use Illuminate\View\View;


class HomeController extends AbstractClientController
{
    public function show(): View
    {
        return \View::make('client.home.index');
    }
}
