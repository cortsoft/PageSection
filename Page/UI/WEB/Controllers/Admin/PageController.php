<?php

namespace App\Containers\PageSection\Page\UI\WEB\Controllers\Admin;


use App\Containers\PageSection\Page\Actions\GetChildrenCategoryAction;
use App\Containers\PageSection\Page\Actions\GetPagesAction;
use App\Containers\PageSection\Page\Models\Category;
use App\Containers\PageSection\Page\Models\Page;
use App\Containers\PageSection\Page\Tasks\CreatePageTask;
use App\Ship\Exceptions\NotFoundException;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends AdminController
{
    /**
     * @return View
     * @throws NotFoundException
     */
    public function index(): View
    {
        $pages = app(GetPagesAction::class)->run();
        return view('pageSection@page::admin.page.index',
            compact('pages'));
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
        return redirect()->route('admin.page.index');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\View\View
     * @throws \App\Ship\Exceptions\NotFoundException
     */
    public function edit(Page $page)
    {
        return view('pageSection@page::admin.page.edit', [
            'page'      =>  $page,
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
