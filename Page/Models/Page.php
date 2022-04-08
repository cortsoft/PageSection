<?php
namespace App\Containers\PageSection\Page\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'name',
        'slug'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
