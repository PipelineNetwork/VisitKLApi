<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FungsiController extends Controller
{
    public function user_view_homepage() {
        return view('homepage');
    }

    ## Event

    public function user_view_events() {
        $events = '';
        return view('public.events', compact('events'));
    }

    public function user_view_event() {
        return view('public.event', compact('event'));
    }

    public function user_view_eform() {
        return view('public.eform');
    }

    public function user_submit_eform() {}

    public function admin_view_events() {
        return view('admin.events', compact('events'));
    }

    public function admin_view_event() {
        return view('admin.event', compact('event'));
    }
    
    public function admin_create_event() {}

    public function admin_update_event() {}

    ## History

    public function user_view_history() {
        return view('public.history', compact('history'));
    }

    public function admin_view_histories() {
        return view('admin.histories', compact('histories'));
    }    

    public function admin_view_history() {
        return view('admin.history', compact('history'));
    }

    public function admin_update_history() {}

    ## Experience

    public function user_view_experiences() {
        return view('public.experiences', compact('experiences'));
    }

    public function user_view_experience() {
        return view('public.experience', compact('experience'));
    }    

    public function admin_view_experiences() {
        return view('admin.experiences', compact('experiences'));
    }

    public function admin_view_experience() {}     

    public function admin_create_experience() {}     

    public function admin_update_experience() {} 
    
    ## Ecommerce

    public function user_view_products() {}

    public function user_view_product() {}  
    
    public function user_add_product() {}  

    public function user_view_cart() {} 

    public function user_pay_cart() {}  

    public function user_view_purchases() {}  

    public function admin_view_purchases() {}  

    public function admin_view_products() {}

    public function admin_view_product() {}     

    public function admin_create_product() {}     

    public function admin_update_product() {}      

    ## offer

    public function user_view_offers() {}

    public function user_view_offer() {}    

    public function admin_view_offers() {}

    public function admin_view_offer() {}     

    public function admin_create_offer() {}     

    public function admin_update_offer() {}   
    
    ## gallery

    public function user_view_galleries() {}

    public function user_view_gallery() {}   
    
    public function admin_view_galleries() {}

    public function admin_view_gallery() {}  
    
    public function admin_create_gallery() {}  

    public function admin_update_gallery() {}  

    ## faq

    public function user_view_faq() {}    

    public function admin_view_faq() {}    

    public function admin_create_faq() {}    

    public function admin_update_faq() {}    
 
}
