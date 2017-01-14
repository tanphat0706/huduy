<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
 * BACKEND ROUTES
 */
Route::group([
    'middlewareGroup' => ['web'],
    'prefix' => 'admin'
], function () {
    Route::auth();

    Route::group([
        'middleware' => ['auth']
    ], function () {
        Route::get('/', [
            'as' => 'admin',
            'uses' => 'HomeController@admin'
        ]);

        /**
         * User router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'user'
        ], function () {
            Route::get('/list', [
                'as' => 'users-list',
                'uses' => 'UserController@index'
            ]);

            // Ajax for datatables
            Route::get('/getUsersJson', [
                'as' => 'json-users-list',
                'uses' => 'UserController@getUsersJson'
            ]);

            Route::get('/create', [
                'as' => 'create-user',
                'uses' => 'UserController@create'
            ]);

            Route::post('/store', [
                'as' => 'store-user',
                'uses' => 'UserController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'edit-user',
                'uses' => 'UserController@edit'
            ]);

            Route::post('/update/{id}', [
                'as' => 'update-user',
                'uses' => 'UserController@update'
            ]);

            Route::delete('/delete/{id}', [
                'as' => 'delete-user',
                'uses' => 'UserController@destroy'
            ]);
            Route::get('/profile', [
                'as' => 'profile',
                'uses' => 'UserController@profile'
            ]);

            Route::post('/updateProfile', [
                'as' => 'update-profile',
                'uses' => 'UserController@updateProfile'
            ]);
        });
        /**
         * User Group router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'user-group'
        ], function () {
            Route::get('/list', [
                'as' => 'user-group-list',
                'uses' => 'UserGroupController@index'
            ]);

            // Ajax for datatables
            Route::get('/getUserGroupsJson ', [
                'as' => 'json-user-group-list',
                'uses' => 'UserGroupController@getUserGroupsJson'
            ]);

            Route::get('/create', [
                'as' => 'create-user-group',
                'uses' => 'UserGroupController@create'
            ]);

            Route::post('/store', [
                'as' => 'store-user-group',
                'uses' => 'UserGroupController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'edit-user-group',
                'uses' => 'UserGroupController@edit'
            ]);

            Route::post('/update/{id}', [
                'as' => 'update-user-group',
                'uses' => 'UserGroupController@update'
            ]);

            Route::post('/delete/{id}', [
                'as' => 'delete-user-group',
                'uses' => 'UserGroupController@destroy'
            ]);
        });

        /**
         * Category router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'category'
        ], function () {
            Route::get('/list', [
                'as' => 'category-list',
                'uses' => 'CategoryController@index'
            ]);
            // Ajax for datatables
            Route::get('/getCategoriesJson', [
                'as' => 'json-categories-list',
                'uses' => 'CategoryController@getCategoriesJson'
            ]);
            Route::get('/create', [
                'as' => 'category-create',
                'uses' => 'CategoryController@create'
            ]);
            Route::post('/store', [
                'as' => 'category-store',
                'uses' => 'CategoryController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'category-edit',
                'uses' => 'CategoryController@edit'
            ]);

            Route::put('/update/{id}', [
                'as' => 'category-update',
                'uses' => 'CategoryController@update'
            ]);

            Route::delete('/delete/{id}', [
                'as' => 'category-del',
                'uses' => 'CategoryController@destroy'
            ]);
        });
        /**
         * Carousel router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'carousel'
        ], function () {
            Route::get('/list', [
                'as' => 'carousel-list',
                'uses' => 'CarouselController@index'
            ]);
            // Ajax for datatables
            Route::get('/getCategoriesJson', [
                'as' => 'json-carousel-list',
                'uses' => 'CarouselController@getCarouselJson'
            ]);
            Route::get('/create', [
                'as' => 'carousel-create',
                'uses' => 'CarouselController@create'
            ]);
            Route::post('/store', [
                'as' => 'carousel-store',
                'uses' => 'CarouselController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'carousel-edit',
                'uses' => 'CarouselController@edit'
            ]);

            Route::put('/update/{id}', [
                'as' => 'carousel-update',
                'uses' => 'CarouselController@update'
            ]);

            Route::delete('/delete/{id}', [
                'as' => 'carousel-del',
                'uses' => 'CarouselController@destroy'
            ]);
        });
        /**
         * Product router
         *
         * @author Phat Le
         */
        Route::group([
            'prefix' => 'product'
        ], function () {
            Route::get('/list', [
                'as' => 'product-list',
                'uses' => 'ProductController@index'
            ]);
            // Ajax for datatables
            Route::get('/getProductsJson', [
                'as' => 'json-products-list',
                'uses' => 'ProductController@getProductsJson'
            ]);
            Route::get('/create', [
                'as' => 'product-create',
                'uses' => 'ProductController@create'
            ]);
            Route::post('/store', [
                'as' => 'product-store',
                'uses' => 'ProductController@store'
            ]);

            Route::get('/edit/{id}', [
                'as' => 'product-edit',
                'uses' => 'ProductController@edit'
            ]);

            Route::put('/update/{id}', [
                'as' => 'product-update',
                'uses' => 'ProductController@update'
            ]);

            Route::delete('/delete/{id}', [
                'as' => 'product-del',
                'uses' => 'ProductController@destroy'
            ]);
        });
    });
});
/*
 * FRONTEND ROUTES
 */

Route::get('/login', [
    'as' => 'login',
    'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('/login', [
    'as' => 'login',
    'uses' => 'Auth\AuthController@postLogin'
]);
Route::group([
    'middleware' => [
        'web'
    ]
], function () {
    Route::match([
        'get',
        'post'
    ], '/', [
        'as' => 'frontend',
        'uses' => 'HomeController@index'
    ]);
    Route::get('/search', [
        'as' => 'search',
        'uses' => 'QueryController@search'
    ]);
    Route::get('/san-pham', [
        'as' => 'all-product',
        'uses' => 'ProductController@all_product'
    ]);
    Route::get('/gioi-thieu', [
        'as' => 'gioi-thieu',
        'uses' => 'HomeController@gioi_thieu'
    ]);
    Route::get('/lien-he', [
        'as' => 'lien-he',
        'uses' => 'HomeController@lien_he'
    ]);
    Route::get('/{cate_alias}', [
        'as' => 'detail-category',
        'uses' => 'CategoryController@frontentDetail'
    ]);
    Route::get('/{cate_alias}/{alias}', [
        'as' => 'detail-product',
        'uses' => 'ProductController@frontentDetail'
    ]);

});
