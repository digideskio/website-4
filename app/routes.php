<?php

/*
|--------------------------------------------------------------------------
| Read Documentation
|--------------------------------------------------------------------------
*/

Route::get('code/{project}/{version}/{page?}', 'DocsController@getDocs');

/*
|--------------------------------------------------------------------------
| Code
|--------------------------------------------------------------------------
*/

Route::controller('code', 'CodeController');

/*
|--------------------------------------------------------------------------
| Read Article
|--------------------------------------------------------------------------
*/

Route::get('article/{slug}', 'ArticleController@getArticle');

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::controller('/', 'HomeController');