<?php

namespace App\Containers\PageSection\Page\Tasks;

use App\Containers\PageSection\Page\Models\Page;
use App\Containers\PageSection\Page\Data\Repositories\PageRepository;
use App\Ship\Core\Tasks\Task;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Database\Eloquent\Collection;
use Exception;


class GetPagesTask extends Task
{
    private PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * @return mixed
     */
    public function run():Collection
    {
        try {
            $pages = $this->pageRepository->all();
        } catch (Exception $e) {
            throw new NotFoundException();
        }

        return $pages;
    }
}
