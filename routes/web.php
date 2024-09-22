<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicController;
use App\Http\Middleware\CheckActiveUser;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'index'])->name('welcome');

///send contact us  to mailtrap
Route::get('contact', [ContactController::class, 'contactMail'])->name('contact');
Route::post('send', [ContactController::class, 'sendEmail'])->name('sendEmail');
Route::get('create', [ContactController::class, 'createMessage'])->name('message.create');
Route::post('store', [ContactController::class, 'store'])->name('message.store');


////public routes
Route::group(['prefix' => 'public'], function () {
    Route::group([
        'controller' => PublicController::class,
        'prefix' => 'index',
        'as' => 'index.',
    ], function () {
        Route::get('showAllcategory', 'showAllcategory')->name('showAllcategory');
        Route::get('index', 'index')->name('index');
        Route::get('topic_listing', 'ShowAlltopic')->name('topic_listing');
        Route::get('testimonial', 'showTestimonial')->name('testimonial');
        Route::get('testimonials', 'testimonial')->name('testimonials');
        Route::get('topic_details/{id}', 'showDetails')->name('topic_details');

        ///////increase nom of views
        Route::post('{id}/bookmark', 'bookmark')->name('bookmark');

    });
});

Route::group(
    ['middleware' => ['verified', CheckActiveUser::class],
    ],
    function () {

        Route::group(['prefix' => 'admin'], function () {
            /////User//////

            Route::group([
                'controller' => UserController::class,
                'prefix' => 'user',
                'as' => 'user.',
            ], function () {
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('index', 'index')->name('index');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');

                //Route::delete('{id}/delete', 'destroy')->name('delete');
            });
            //  Route::group([
            //     'controller' => RegisterController::class,
            //     'prefix' => 'users',
            //      'as' => 'users.',
            //  ], function () {
            //  });

            /////Topic//////
            Route::group([
                'controller' => TopicController::class,
                'prefix' => 'topic',
                'as' => 'topic.',
            ], function () {
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('index', 'index')->name('index');
                Route::get('{id}/show', 'show')->name('show');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');
                Route::delete('{id}/delete', 'destroy')->name('delete');

            });
            /////Category//////
            Route::group([
                'controller' => CategoryController::class,
                'prefix' => 'categories',
                'as' => 'categories.',
            ], function () {
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('index', 'index')->name('index');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');
                Route::delete('{id}/delete', 'destroy')->name('delete');
            });
            /////Testimonial//////

            Route::group([
                'controller' => TestimonialController::class,
                'prefix' => 'testimonial',
                'as' => 'testimonial.',
            ], function () {
                Route::get('create', 'create')->name('create');
                Route::post('store', 'store')->name('store');
                Route::get('index', 'index')->name('index');
                Route::get('{id}/show', 'show')->name('show');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::put('{id}/update', 'update')->name('update');
                Route::delete('{id}/delete', 'destroy')->name('delete');
            });
            //// add messages from contact form
            Route::group([
                'controller' => ContactController::class,
                'prefix' => 'message',
                'as' => 'message.',
            ], function () {

                Route::get('index', 'index')->name('index');
                Route::get('{id}/show', 'show')->name('show');
                Route::delete('{id}/delete', 'destroy')->name('delete');
                Route::put('{id}/mark-as-read', 'markAsRead')->name('markAsRead');

            });
        });
    });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
