<?php

use App\Http\Controllers\AboutSettingsController;
use App\Http\Controllers\BannerSettingsController;
use App\Http\Controllers\ExpertiseTitleController;
use App\Http\Controllers\ExpertiseInfoController;
use App\Http\Controllers\TestimonialSettingsController;
use App\Http\Controllers\TestimonialListController;
use App\Http\Controllers\BusinessSettingsController;
use App\Http\Controllers\BusinessListController;
use App\Http\Controllers\AchievementSettingsController;
use App\Http\Controllers\AchievementListController;
use App\Http\Controllers\ImageFileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\BlogSettingsController;
use App\Http\Controllers\BlogTitleSettingController;
use App\Http\Controllers\SingleBlogController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ContactSettingsController;
use App\Http\Controllers\FooterSettingsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SiteSettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use UniSharp\LaravelFilemanager\Lfm;
use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Models\Visitors;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/migrate', function () {
    \Artisan::call('migrate');
    dd('migrated!');
});

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});

Route::get('/storage', function () {
    File::link(
        storage_path('app/public'),
        public_path('storage')
    );
    return "Storage created!";
});

// Auth::routes(['register' => false]);

Route::get('/link', function () {
    $target = '/home/bizilabi/getupdemo.xyz/portfolio-v2.getupdemo.xyz/website/storage/app/public';
    $shortcut = '/home/bizilabi/getupdemo.xyz/portfolio-v2.getupdemo.xyz/storage';
    symlink($target, $shortcut);

    return "Storage link!";
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/geoip', function () {
    $geoipinfo = geoip()->getLocation('103.147.106.181');
    dd($geoipinfo);
    // return $geoipinfo->toArray();
});



Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Lfm::routes();

    //Hero
    Route::get('/hero', [BannerSettingsController::class, 'index'])->name('admin.hero');
    Route::put('/hero', [BannerSettingsController::class, 'update'])->name('admin.hero.update');

    //Hero-Sliders-list
    Route::get('/sliders/all', [BannerSettingsController::class, 'sliderIndex'])->name('admin.sliders.all');
    Route::get('/sliders/create', [BannerSettingsController::class, 'create'])->name('admin.sliders.create');
    Route::post('/sliders/store', [BannerSettingsController::class, 'store'])->name('admin.sliders.store');
    Route::get('/sliders/edit/{id}', [BannerSettingsController::class, 'edit'])->name('admin.sliders.edit');
    Route::post('/sliders/update/{id}', [BannerSettingsController::class, 'sliderUpdate'])->name('admin.sliders.update');
    Route::delete('/sliders/delete/{id}', [BannerSettingsController::class, 'destroy'])->name('admin.sliders.destroy');

    //About
    Route::get('/about', [AboutSettingsController::class, 'index'])->name('admin.about');
    Route::put('/about', [AboutSettingsController::class, 'update'])->name('admin.about.update');

    //Quotes
    Route::get('/quotes', [QuotesController::class, 'index'])->name('admin.quotes');
    Route::put('/quotes', [QuotesController::class, 'update'])->name('admin.quotes.update');

    //Expertise
    Route::get('/expertise-title', [ExpertiseTitleController::class, 'index'])->name('admin.expertise-title');
    Route::put('/expertise-title', [ExpertiseTitleController::class, 'update'])->name('admin.expertise-title.update');


    //Expertise-list
    Route::get('/expertise-info/all', [ExpertiseInfoController::class, 'index'])->name('admin.expertise-info.all');
    Route::get('/expertise-info/create', [ExpertiseInfoController::class, 'create'])->name('admin.expertise-info.create');
    Route::post('/expertise-info/store', [ExpertiseInfoController::class, 'store'])->name('admin.expertise-info.store');
    Route::get('/expertise-info/edit/{id}', [ExpertiseInfoController::class, 'edit'])->name('admin.expertise-info.edit');
    Route::post('/expertise-info/update/{id}', [ExpertiseInfoController::class, 'update'])->name('admin.expertise-info.update');
    Route::delete('/expertise-info/delete/{id}', [ExpertiseInfoController::class, 'destroy'])->name('admin.expertise-info.destroy');


    //Testimonial Header
    Route::get('/testimonial-title', [TestimonialSettingsController::class, 'index'])->name('admin.testimonial-title');
    Route::put('/testimonial-title', [TestimonialSettingsController::class, 'update'])->name('admin.testimonial-title.update');


    //Testimonial-list
    Route::get('/testimonial-info/all', [TestimonialListController::class, 'index'])->name('admin.testimonial-info.all');
    Route::get('/testimonial-info/create', [TestimonialListController::class, 'create'])->name('admin.testimonial-info.create');
    Route::post('/testimonial-info/store', [TestimonialListController::class, 'store'])->name('admin.testimonial-info.store');
    Route::get('/testimonial-info/edit/{id}', [TestimonialListController::class, 'edit'])->name('admin.testimonial-info.edit');
    Route::post('/testimonial-info/update/{id}', [TestimonialListController::class, 'update'])->name('admin.testimonial-info.update');
    Route::delete('/testimonial-info/delete/{id}', [TestimonialListController::class, 'destroy'])->name('admin.testimonial-info.destroy');


    //Business Header
    Route::get('/business-title', [BusinessSettingsController::class, 'index'])->name('admin.business-title');
    Route::put('/business-title', [BusinessSettingsController::class, 'update'])->name('admin.business-title.update');


    //Business-list
    Route::get('/business-info/all', [BusinessListController::class, 'index'])->name('admin.business-info.all');
    Route::get('/business-info/create', [BusinessListController::class, 'create'])->name('admin.business-info.create');
    Route::post('/business-info/store', [BusinessListController::class, 'store'])->name('admin.business-info.store');
    Route::get('/business-info/edit/{id}', [BusinessListController::class, 'edit'])->name('admin.business-info.edit');
    Route::post('/business-info/update/{id}', [BusinessListController::class, 'update'])->name('admin.business-info.update');
    Route::delete('/business-info/delete/{id}', [BusinessListController::class, 'destroy'])->name('admin.business-info.destroy');


    //Achievement Header
    Route::get('/achievement-title', [AchievementSettingsController::class, 'index'])->name('admin.achievement-title');
    Route::put('/achievement-title', [AchievementSettingsController::class, 'update'])->name('admin.achievement-title.update');


    //Achievement-list
    Route::get('/achievement-info/all', [AchievementListController::class, 'index'])->name('admin.achievement-info.all');
    Route::get('/achievement-info/create', [AchievementListController::class, 'create'])->name('admin.achievement-info.create');
    Route::post('/achievement-info/store', [AchievementListController::class, 'store'])->name('admin.achievement-info.store');
    Route::get('/achievement-info/edit/{id}', [AchievementListController::class, 'edit'])->name('admin.achievement-info.edit');
    Route::post('/achievement-info/update/{id}', [AchievementListController::class, 'update'])->name('admin.achievement-info.update');
    Route::delete('/achievement-info/delete/{id}', [AchievementListController::class, 'destroy'])->name('admin.achievement-info.destroy');


    //Image Gallery
    Route::get('/image', [ImageFileController::class, 'index'])->name('admin.image');
    Route::put('/image', [ImageFileController::class, 'update'])->name('admin.image.update');

    Route::post('/image', [ImageFileController::class, 'upload'])->name('admin.image.upload');
    Route::delete('/image/delete/{id}', [ImageFileController::class, 'destroy'])->name('admin.image.destroy');

    //Blog Section Title
    Route::get('/blog-section-title', [BlogTitleSettingController::class, 'index'])->name('admin.blog-title');
    Route::put('/blog-section-title', [BlogTitleSettingController::class, 'update'])->name('admin.blog-title.update');


    //Blog-Category
    Route::get('/blog/blog-cat/all', [BlogSettingsController::class, 'index'])->name('admin.blog-cat.all');
    Route::get('/blog/blog-cat/create', [BlogSettingsController::class, 'create'])->name('admin.blog-cat.create');
    Route::post('/blog/blog-cat/store', [BlogSettingsController::class, 'store'])->name('admin.blog-cat.store');
    Route::get('/blog/blog-cat/edit/{id}', [BlogSettingsController::class, 'edit'])->name('admin.blog-cat.edit');
    Route::post('/blog/blog-cat/update/{id}', [BlogSettingsController::class, 'update'])->name('admin.blog-cat.update');
    Route::delete('/blog/blog-cat/delete/{id}', [BlogSettingsController::class, 'destroy'])->name('admin.blog-cat.destroy');

    //Blog-List
    Route::get('/blog/blog-post/all', [BlogSettingsController::class, 'indexPost'])->name('admin.blog-post.all');
    Route::get('/blog/blog-post/create', [BlogSettingsController::class, 'createPost'])->name('admin.blog-post.create');
    Route::post('/blog/blog-post/store', [BlogSettingsController::class, 'storePost'])->name('admin.blog-post.store');
    Route::get('/blog/blog-post/edit/{id}', [BlogSettingsController::class, 'editPost'])->name('admin.blog-post.edit');
    Route::post('/blog/blog-post/update/{id}', [BlogSettingsController::class, 'updatePost'])->name('admin.blog-post.update');
    Route::delete('/blog/blog-post/delete/{id}', [BlogSettingsController::class, 'destroyPost'])->name('admin.blog-post.destroy');

    //Blog-image
    Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');

    //Contact-section
    Route::get('/contact-info', [HeaderController::class, 'index'])->name('admin.header');
    Route::put('/contact-info', [HeaderController::class, 'update'])->name('admin.header.update');

    //Message-type
    Route::get('/message/message-type/all', [ContactSettingsController::class, 'indexMessage'])->name('admin.message-type.all');
    Route::get('/message/message-type/create', [ContactSettingsController::class, 'create'])->name('admin.message-type.create');
    Route::post('/message/message-type/store', [ContactSettingsController::class, 'store'])->name('admin.message-type.store');
    Route::get('/message/message-type/edit/{id}', [ContactSettingsController::class, 'edit'])->name('admin.message-type.edit');
    Route::post('/message/message-type/update/{id}', [ContactSettingsController::class, 'updateMessage'])->name('admin.message-type.update');
    Route::delete('/message/message-type/delete/{id}', [ContactSettingsController::class, 'destroy'])->name('admin.message-type.destroy');

    //Message-type
    Route::get('/message/all', [MessageController::class, 'index'])->name('admin.message.all');
    Route::get('/message/view/{id}', [MessageController::class, 'show'])->name('admin.message.view');

    //About
    Route::get('/social-media', [ContactSettingsController::class, 'index'])->name('admin.contact');
    Route::put('/social-media', [ContactSettingsController::class, 'update'])->name('admin.contact.update');

    //Footer
    Route::get('/footer-settings', [FooterSettingsController::class, 'index'])->name('admin.footer');
    Route::put('/footer-settings', [FooterSettingsController::class, 'update'])->name('admin.footer.update');

    //Site-setting
    Route::get('/site-settings', [SiteSettingsController::class, 'index'])->name('admin.site');
    Route::put('/site-settings', [SiteSettingsController::class, 'update'])->name('admin.site.update');

    // Route::get('/check_slug', function () {
    //     $slug = SlugService::createSlug(App\Models\BlogSettings::class, 'slug', request('blog_title'));
    //     return response()->json(['slug' => $slug]);
    // });

});


Route::get('/admin', function () {
    $totalVisitors = Visitors::count();
    $totalVisitorslist = Visitors::all();
    return view('pages.dashboard.dashboard', compact('totalVisitors', 'totalVisitorslist'));
})->middleware(['auth'])->name('admin.home');

Route::get('/file-manager', function () {
    return view('pages.dashboard.file-manager');
})->middleware(['auth'])->name('admin.file');

/*=======================================================
    Front Routes
=======================================================*/
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/header', [PageController::class, 'header'])->name('header');
Route::get('/blog/blog-post/view/{slug}/{id}', [SingleBlogController::class, 'index'])->name('user.blog-post.view');
Route::post('/message/store', [MessageController::class, 'store'])->name('user.message.store');
Route::get('/blog/all', [PageController::class, 'blog'])->name('user.blog-post.all');



Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
