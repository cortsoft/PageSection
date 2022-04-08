<?php


namespace App\Containers\PageSection\Page\Actions;

use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Tasks\GetChildrenCategoryTask;
use App\Ship\Core\Abstracts\Actions\Action;
use App\Ship\Exceptions\NotFoundException;


class GetChildrenCategoryAction extends Action
{
    public function run()
    {
        $user = app(GetChildrenCategoryTask::class)->run();

        if (!$user) {
            throw new NotFoundException();
        }

        return $user;
    }
}
