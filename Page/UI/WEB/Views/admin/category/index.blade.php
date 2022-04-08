<?php

?>
@extends('pageSection@page::layouts.admin')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="d-flex flex-column w-100 p-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3><b>Категорії сторінок</b></h3>
        <a href="{{ route('admin.page.category.create') }}" class="btn-primary btn"><i class="bi bi-folder-plus"></i> Створити</a>
    </div>
    <div class="table-panel">
        <table class="table table-borderless table-sm table-striped table-hover w-100 m-0">
            <thead>
            <tr>
                <th scope="col"><input type="checkbox"></th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td><input type="checkbox"></td>
                    <td>{{ $category->name ?? ''}}</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td class="text-align-end"><a href="{{ route('admin.page.category.edit', $category) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a> </td>
                </tr>
            @empty
            @endforelse

            </tbody>
        </table>
    </div>


</div>

@endsection
