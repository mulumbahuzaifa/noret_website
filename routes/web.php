<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\AdminAddBlogComponent;
use App\Http\Livewire\AdminAddCategoryComponent;
use App\Http\Livewire\AdminAddServicesComponent;
use App\Http\Livewire\AdminBlogComponent;
use App\Http\Livewire\AdminCategoryComponent;
use App\Http\Livewire\AdminContactComponent;
use App\Http\Livewire\AdminEditBlogComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminEditServicesComponent;
use App\Http\Livewire\AdminServicesComponent;
use App\Http\Livewire\AdminSettingComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\BookingComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ShopDetailsComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeComponent::class);
Route::get('/services', ShopComponent::class)->name('services');
Route::get('/services/{slug}', ShopDetailsComponent::class)->name('services.details');
Route::get('/sectors', ServicesComponent::class)->name('sectors');
Route::get('/sector/{slug}', ServiceDetailsComponent::class)->name('sectors.details');
Route::get('/about-us', AboutComponent::class)->name('about');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/blog-details/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/wishlist', WishlistComponent::class)->name('wishlist');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/thank-you', ThankyouComponent::class)->name('thankyou');
Route::get('/apply-booking', BookingComponent::class)->name('booking');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//For Customer
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function(){
    // Route::get('/user/review/{property_id}', UserReviewComponent::class)->name('user.review');
});

//For Admin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified' , 'authadmin'])->group(function(){
    Route::get('/admin/service/edit/{service_slug}', AdminEditServicesComponent::class)->name('admin.editservice');
    Route::get('/admin/services/add', AdminAddServicesComponent::class)->name('admin.addservice');
    Route::get('/admin/services', AdminServicesComponent::class)->name('admin.services');

    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/categories/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/categories/add', AdminAddCategoryComponent::class)->name('admin.addcategory');


    // Route::get('/admin/branches', AdminBranchesComponent::class)->name('admin.branches');
    // Route::get('/admin/branches/edit/{address}', AdminEditBranchesComponent::class)->name('admin.editbranch');
    // Route::get('/admin/branches/add', AdminAddBranchesComponent::class)->name('admin.addbranch');

    // Route::get('/admin/staffs', AdminStaffsComponent::class)->name('admin.staffs');
    // Route::get('/admin/staffs/add', AdminAddStaffComponent::class)->name('admin.addstaff');

    // Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.orders');
    Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');
    Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');

    Route::get('/admin/blogs', AdminBlogComponent::class)->name('admin.blogs');
    Route::get('/admin/blogs/add', AdminAddBlogComponent::class)->name('admin.addblog');
    Route::get('/admin/blogs/edit/{blog_slug}', AdminEditBlogComponent::class)->name('admin.editblog');

});
