<?php
?>

<div class="panel">
    <div class="header">
        @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class', 'alert-success') }}" role="alert">
                {{ Session::get('message') }}
                <a href="{{ route('admin.page.category.index') }}" class="text-primary ">Назад</a>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Назва сторінки</label>
            <input type="text" name="name" value="{{ $page->name ?? '' }}" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Назва сторінки, яка буде привязана до категорій меню або навігації.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputCategory1" class="form-label">Категорія меню</label>
            <select name="parent_id" class="form-control">
                <option value="0">-- без батьківської категорії</option>
                @include('pageSection@page::admin.category._categories')
            </select>
        </div>
    </div>
    <div class="footer">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary d-flex align-content-center align-items-center">
                <i class="bi bi-save2 icone-1x"></i> <span class="mx-2"> Зберегти</span> </button>
        </div>
    </div>
</div>
