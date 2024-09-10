<?php
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact',[ContactController::class,'contactMail'])->name('contact');
Route::post('send',[ContactController::class,'sendEmail'])->name('sendEmail');
///contact message





Route::group(['prefix' => 'public'], function () {
    Route::group([
        'controller' => PublicController::class,
        'prefix' => 'index',
        'as' => 'index.'
    ], function () {
        Route::get('showAllcategory', 'showAllcategory')->name('showAllcategory');
        Route::get('index', 'index')->name('index');
        Route::get('topic_listing','ShowAlltopic')->name('topic_listing');
        Route::get('testimonial','showTestimonial')->name('testimonial');
        Route::get('testimonials','testimonial')->name('testimonials');
        Route::get('topic_details/{id}', 'showDetails')->name('topic_details');
        


    });
});


Route::group(
    [
        //'prefix' => LaravelLocalization::setLocale(),
        //'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {

        Route::group(['prefix' => 'admin'], function () {
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
            Route::get('create', 'createMessage')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('index', 'index')->name('index');
            Route::get('{id}/show', 'show')->name('show');
            Route::delete('{id}/delete', 'destroy')->name('delete');            
        });
        });
    });
