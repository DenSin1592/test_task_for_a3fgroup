<?php

namespace App\Http\Controllers\Web\Client;


class HomeController extends AbstractClientController
{
    public function show()
    {
        return view('home.index');
    }
}
