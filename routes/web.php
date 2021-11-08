<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DaftarEventController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventJenisController;
use App\Http\Controllers\Admin\JawabanController;
use App\Http\Controllers\Admin\PertanyaanController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DEventController;
use App\Http\Controllers\User\EventController as UserEventController;
use App\Http\Controllers\User\JawabanSayaController;
use App\Http\Controllers\User\JawabanUser;
use App\Http\Controllers\User\LikeJawabanController;
use App\Http\Controllers\User\LikePertanyaanController;
use App\Http\Controllers\User\TimelineController;
use App\Http\Controllers\User\UserJawabKomentarController;
use App\Http\Controllers\User\UserKomentarController;
use App\Http\Controllers\User\UserPertanyaanController;
use App\Http\Controllers\User\UserPertanyaanSayaController;
use App\Http\Controllers\UserReplyController;
use App\Models\Admin\Event;
use App\Models\Admin\EventCategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', [AdminController::class,'index'])
            ->name('admin.dashboard');
        //article
        Route::resource('articles', ArticleController::class);
        Route::resource('category-articles', ArticleCategoryController::class);
        //event
        Route::resource('events', EventController::class);
        Route::resource('category-events', EventCategoryController::class);
        Route::resource('jenis-events',EventJenisController::class);
        //daftar event
        Route::resource('daftar-events',DaftarEventController::class);
        //pertanyaan
        Route::resource('diskusi', PertanyaanController::class);
        //Jawaban
        Route::resource('jawaban', JawabanController::class);
        //Komentar
        Route::resource('komentar', KomentarController::class);
        //Jawab Komentar
    });

// Users
Route::resource('pertanyaan', UserPertanyaanController::class);
Route::resource('pertanyaan-saya', UserPertanyaanSayaController::class);
Route::resource('timeline', TimelineController::class);
route::get('timeline/kategori/{name}',[TimelineController::class,'category'])->name('diskusi.kategori');
Route::get('timeline/likejawaban/{id}', [LikeJawabanController::class, 'like'])->name('likejawaban');
Route::get('timeline/likepertanyaan/{id}', [LikePertanyaanController::class, 'like_pertanyaan'])->middleware('auth')->name('likepertanyaan');
Route::resource('jawaban-user', JawabanUser::class);
Route::resource('jawaban-saya', JawabanSayaController::class);
Route::resource('jawab-komentar', UserJawabKomentarController::class);
Route::resource('reply', UserReplyController::class);
Route::resource('user-komentar', UserKomentarController::class);

    Route::get('auth/google/redirect', [LoginController::class,'redirectToGoogle'])->name('login.google');
    Route::get('auth/google/callback', [LoginController::class,'handleGoogleCallback']);
    Route::get('login/facebook/auth/redirect', [LoginController::class,'redirectToFacebook'])->name('login.facebook');
    Route::get('login/facebook/auth/callback', [LoginController::class,'handleFacebookCallback']);

//Frontend
Route::get('/',[FrontendController::class,'index'])->name('beranda');
Route::get('/artikel',[FrontendController::class,'article'])->name('article');
Route::get('/artikel/{slug}',[FrontendController::class,'detailarticle'])->name('detailarticle');
Route::get('/profil/sejarah',[FrontendController::class,'sejarah'])->name('sejarah');
Route::view('/profil/tugas-dan-fungsi','frontend.profil.tugas-fungsi')->name('tugas');
Route::view('/profil/infografis','frontend.profil.infografis')->name('infografis');
Route::view('/profil/struktur','frontend.profil.struktur')->name('struktur');
Route::view('/profil/kontak','frontend.profil.contact')->name('kontak');
Route::view('/sitemap', 'frontend.sitemap')->name('sitemap');
Route::get('/event',[FrontendController::class,'event'])->name('event');
Route::get('/event/{slug}',[FrontendController::class,'detailevent'])->name('detailevent');
Route::get('/webinar',[FrontendController::class,'webinar'])->name('webinar');
Route::get('/workshop',[FrontendController::class,'workshop'])->name('workshop');
Route::get('/kursus',[FrontendController::class,'kursus'])->name('kursus');
Route::get('/diskusi',[FrontendController::class,'diskusi'])->name('timeline');
Route::get('/search',[FrontendController::class,'search'])->name('search');
Route::post('/kirim-pesan',[FrontendController::class,'sendEmail'])->name('contact.send');
// Route::get('/event/print/{slug}',[FrontendController::class,'printEvent'])->name('printEvent');
Route::get('/event/print/{slug}',[FrontendController::class,'pdfEvent'])->name('pdfEvent');
Route::get('/artikel/print/{slug}',[FrontendController::class,'pdfArticle'])->name('pdfArticle');
// Route::get('/event/webinar',function(){
//     $webinars = Event::where('id_jenis',1)->with('getCategory')->get();
//         $categories = EventCategory::with('getEvent')->get();
//         return view('frontend.event.webinar',compact('webinars','categories'));
// });

//dashboard
Route::middleware(['auth'])->prefix('user')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('user.index');
    Route::get('/upload-event',[UserEventController::class,'index'])->middleware(['auth','verified'])->name('user.upload');
    Route::post('/dashboard',[UserEventController::class,'store'])->name('user.upload.store');
    Route::get('/event-diikuti',[DashboardController::class,'ikutEvent'])->name('user.ikutevent');
    Route::get('/event-diikuti/detail/{slug}',[DashboardController::class,'detailIkutEvent'])->name('user.detail.ikutevent');
    Route::get('/event-diupload',[DashboardController::class,'uploadEvent'])->name(('user.uploadevent'));
    Route::get('/event-diupload/detail/{slug}',[DashboardController::class,'detailUploadEvent'])->name('user.detail.uploadevent');
    Route::get('/profil/{id}',[DashboardController::class,'indexProfil'])->name('user.profil');
    Route::put('/profil/{id}',[DashboardController::class,'updateProfil'])->name('user.update');
});

Route::post('/event',[DEventController::class,'store'])->middleware(['auth','user'])->name('user.devent.store');

Route::post('/user-komentar',[UserKomentarController::class,'store'])->name('user-komentar.store')->middleware(['auth','user']);
