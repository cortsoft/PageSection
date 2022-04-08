<?php

namespace App\Containers\PageSection\Page\UI\WEB\Controllers;


use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Ship\Parents\Controllers\WebController;
use Exception;
use Illuminate\Http\RedirectResponse;

class Controller extends WebController
{
    public function index()
    {

        return view('pageSection@page::welcome');
    }
}
