<?php

namespace App\Containers\PageSection\Page\Actions;


use App\Containers\PageSection\Page\Models\Page;
use App\Containers\PageSection\Page\Tasks\GetPagesTask;
use App\Ship\Core\Abstracts\Actions\Action;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Database\Eloquent\Collection;


class GetPagesAction extends Action
{
    public function run():Collection
    {
        $pages = app(GetPagesTask::class)->run();

        if (!$pages) {
            throw new NotFoundException();
        }

        return $pages;
    }
}
