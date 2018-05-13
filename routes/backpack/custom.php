<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('student', 'StudentCrudController');
    CRUD::resource('syllabus', 'SyllabusCrudController');
    CRUD::resource('batch', 'BatchCrudController');
    CRUD::resource('course', 'CourseCrudController');
    CRUD::resource('subject', 'SubjectCrudController');
    CRUD::resource('faculty', 'FacultyCrudController');
    CRUD::resource('department', 'DepartmentCrudController');
    CRUD::resource('studentcategory', 'StudentCategoryCrudController');
    CRUD::resource('academicdetail', 'AcademicDetailCrudController');
}); // this should be the absolute last line of this file
