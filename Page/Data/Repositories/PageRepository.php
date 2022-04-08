<?php

namespace App\Containers\PageSection\Page\Data\Repositories;

use App\Containers\PageSection\Page\Models\Page;
use App\Ship\Core\Abstracts\Repositories\Repository;


class PageRepository extends Repository
{
    protected $fieldSearchable = [
        'name'  => 'like',
        'slug' => '=',
    ];

    public function model(): string
    {
        return Page::class;
    }
}
