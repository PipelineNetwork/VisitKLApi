<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FungsiController;


Route::get('/', [FungsiController::class, 'user_view_homepage']);
Route::post('/', [FungsiController::class, 'user_search']);
Route::get('/admin', [FungsiController::class, 'admin_view_dashboard']);

Route::get('/about', [FungsiController::class, 'user_view_about']);

Route::get('/events', [FungsiController::class, 'user_view_events']);
Route::get('/events/{event_id}', [FungsiController::class, 'user_view_event']);
Route::get('/admin/events', [FungsiController::class, 'admin_view_events']);
Route::get('/admin/events/{event_id}', [FungsiController::class, 'admin_view_event']);
Route::post('/admin/events', [FungsiController::class, 'admin_create_event']);
Route::put('/admin/events/{event_id}', [FungsiController::class, 'admin_update_event']);

Route::get('/eform', [FungsiController::class, 'user_view_eform']);
Route::get('/eform-gallery', [FungsiController::class, 'user_view_eform_gallery']);
Route::post('/eform', [FungsiController::class, 'user_submit_eform']);

Route::get('/admin/eform', [FungsiController::class, 'admin_view_eform']);
Route::get('/admin/eform/{eform_id}', [FungsiController::class, 'admin_view_eform_detail']);


Route::get('/experiences', [FungsiController::class, 'user_view_experiences']);
Route::get('/experiences/{experience_id}', [FungsiController::class, 'user_view_experience']);
Route::get('/admin/experiences', [FungsiController::class, 'admin_view_experiences']);
Route::get('/admin/experiences/{experience_id}', [FungsiController::class, 'admin_view_experience']);
Route::post('/admin/experiences', [FungsiController::class, 'admin_create_experience']);
Route::put('/admin/experiences/{experience_id}', [FungsiController::class, 'admin_update_experience']);

Route::get('/offers', [FungsiController::class, 'user_view_offers']);
Route::get('/offers/{offer_id}', [FungsiController::class, 'user_view_offer']);
Route::get('/admin/offers', [FungsiController::class, 'admin_view_offers']);
Route::get('/admin/offers/{offer_id}', [FungsiController::class, 'admin_view_offer']);
Route::post('/admin/offers', [FungsiController::class, 'admin_create_offer']);
Route::put('/admin/offers/{offer_id}', [FungsiController::class, 'admin_update_offer']);

Route::get('/products', [FungsiController::class, 'user_view_products']);
Route::get('/products/{product_id}', [FungsiController::class, 'user_view_product']);
Route::get('/admin/products', [FungsiController::class, 'admin_view_products']);
Route::get('/admin/products/{product_id}', [FungsiController::class, 'admin_view_product']);
Route::post('/admin/products', [FungsiController::class, 'admin_create_product']);
Route::put('/admin/products/{product_id}', [FungsiController::class, 'admin_update_product']);


Route::get('/gallery', [FungsiController::class, 'user_view_gallery']);
Route::get('/gallery/{item_id}', [FungsiController::class, 'user_view_gallery_item']);
Route::get('/admin/gallery', [FungsiController::class, 'admin_view_gallery']);
Route::get('/admin/gallery/{item_id}', [FungsiController::class, 'admin_view_gallery_item']);
Route::post('/admin/gallery', [FungsiController::class, 'admin_create_gallery_item']);
Route::put('/admin/gallery/{item_id}', [FungsiController::class, 'admin_update_gallery_item']);

Route::get('/faqs', [FungsiController::class, 'user_view_faq']);
Route::get('/admin/faqs', [FungsiController::class, 'admin_view_faq']);
Route::post('/admin/faqs', [FungsiController::class, 'admin_create_faq']);
Route::get('/admin/faqs/{faq_id}', [FungsiController::class, 'admin_view_faq_detail']);
Route::put('/admin/faqs/{faq_id}', [FungsiController::class, 'admin_update_faq']);