<?php

namespace App\Containers\PageSection\Page\Data\Repositories;

use App\Containers\PageSection\Page\Models\Category;
use App\Ship\Core\Abstracts\Repositories\Repository;


class CategoryRepository extends Repository
{
    protected $fieldSearchable = [
        'name'  => 'like',
        'slug' => '=',
    ];

    public function model(): string
    {
        return Category::class;
    }
}
