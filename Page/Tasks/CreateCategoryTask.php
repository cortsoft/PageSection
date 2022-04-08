<?php

namespace App\Containers\PageSection\Page\Tasks;

use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Data\Repositories\CategoryRepository;
use App\Ship\Core\Tasks\Task;


class CreateCategoryTask extends Task
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function run(array $page):Category
    {
        /*try {
            $page = $this->pageRepository->create($page);
        } catch (Exception $e) {
            throw new UserNotFoundException();
        }*/
        $category = $this->categoryRepository->create($page);

        return $category;
    }
}
