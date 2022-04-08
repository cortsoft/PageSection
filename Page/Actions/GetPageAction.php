<?php

namespace App\Containers\PageSection\Page\Actions;

use App\Containers\PageSection\Page\Models\Page;
use App\Containers\PageSection\Page\Tasks\GetPageTask;
use App\Ship\Core\Abstracts\Actions\Action;
use App\Ship\Exceptions\NotFoundException;


class GetPageAction extends Action
{
    public function run(): Page
    {
        $user = app(GetPageTask::class)->run();

        if (!$user) {
            throw new NotFoundException();
        }

        return $user;
    }
}
