<?php

namespace App\Containers\PageSection\Page\UI\WEB\Controllers\Admin;


use App\Containers\PageSection\Page\Actions\GetChildrenCategoryAction;
use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Ship\Parents\Controllers\WebController;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends AdminController
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::all();
        return view('pageSection@page::admin.category.index',
            compact('categories'));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Ship\Exceptions\NotFoundException
     */
    public function create()
    {
        return view('pageSection@page::admin.category.create', [
            'category'      =>  [],
            'categories'    => app(GetChildrenCategoryAction::class)->run(),
            'delimiter'     => ''
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.page.category.index');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Ship\Exceptions\NotFoundException
     */
    public function edit(Category $category)
    {
        return view('pageSection@page::admin.category.edit', [
            'category'      =>  $category,
            'categories'    => app(GetChildrenCategoryAction::class)->run(),
            'delimiter'     => ''
        ]);
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return RedirectResponse
     */

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        Session::flash('message', 'Категорія оновлена!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.page.category.edit', $category);
    }
}
