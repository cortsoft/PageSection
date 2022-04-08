<?php

namespace App\Containers\PageSection\Page\Data\Seeders;

use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Ship\Core\Abstracts\Seeders\Seeder;


class PageSeeder_1 extends Seeder
{
    public function run(): void
    {
        // Default Permissions ----------------------------------------------------------
        $createPermissionTask = app(CreatePageTask::class);
        $createPermissionTask->run([
            'name' => 'Про нас',
            'slug' => 'pro-nac',
        ]);
        $createPermissionTask->run([
            'name' => 'Отримання й оплата',
            'slug' => 'otrumanya-ta-oplata',
        ]);

    }
}
