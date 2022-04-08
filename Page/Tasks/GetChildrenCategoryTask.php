<?php


namespace App\Containers\PageSection\Page\Tasks;

use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Data\Repositories\CategoryRepository;
use App\Ship\Core\Tasks\Task;


class GetChildrenCategoryTask extends Task
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function run()
    {
        /*try {
            $page = $this->pageRepository->create($page);
        } catch (Exception $e) {
            throw new UserNotFoundException();
        }*/
        $category = $this->categoryRepository->with('children')->findWhere(['parent_id'=>0]);

        return $category;
    }
}
