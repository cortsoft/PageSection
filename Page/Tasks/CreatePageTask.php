<?php

namespace App\Containers\PageSection\Page\Tasks;

use App\Containers\PageSection\Page\Models\Page;
use App\Containers\PageSection\Page\Data\Repositories\PageRepository;
use App\Ship\Core\Tasks\Task;


class CreatePageTask extends Task
{
    private PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function run(array $page):Page
    {
        /*try {
            $page = $this->pageRepository->create($page);
        } catch (Exception $e) {
            throw new UserNotFoundException();
        }*/
        $page = $this->pageRepository->create($page);

        return $page;
    }
}
