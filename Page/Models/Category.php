<?php
namespace App\Containers\PageSection\Page\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'navigations';

    protected $fillable = [
        'name',
        'parent_id'
    ];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
