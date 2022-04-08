<?php

namespace App\Containers\PageSection\Page\Data\Seeders;

use App\Containers\PageSection\Page\Tasks\CreateCategoryTask;
use App\Ship\Core\Abstracts\Seeders\Seeder;


class CategorySeeder_1 extends Seeder
{
    public function run(): void
    {
        // Default Permissions ----------------------------------------------------------
        $createPermissionTask = app(CreateCategoryTask::class);
        $createPermissionTask->run([
            'name' => 'Про нас',
            'parent_id' => 0,
        ]);
        $createPermissionTask->run([
            'name' => 'Отримання й оплата',
            'parent_id' => 1,
        ]);

    }
}
