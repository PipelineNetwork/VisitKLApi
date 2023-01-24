<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VisitklEform;
use App\Models\VisitklEvent;
use App\Models\VisitklExperience;

class FungsiController extends Controller
{
    public function user_view_homepage() {
        return view('homepage');
    }

    public function user_view_about() {
        return view('about');
    }    

    public function admin_view_dashboard() {
        return view('dashboard');
    }    

    ## Event

    public function user_view_events() {
        $events = VisitklEvent::all();
        return view('public.events', compact('events'));
    }

    public function user_view_event(Request $request) {
        $id = (int) $request->route('event_id');
        $event = VisitklEvent::find($id);
        return view('public.event', compact('event'));
    }

    public function admin_view_events() {
        $events = VisitklEvent::all();
        return view('admin.events', compact('events'));
    }

    public function admin_view_event(Request $request) {
        $id = (int) $request->route('event_id');
        $event = VisitklEvent::find($id);        
        return view('admin.event', compact('event'));
    }
    
    public function admin_create_event(Request $request) {
        $event = new VisitklEvent;
        $event->save();
        return back();
    }

    public function admin_update_event(Request $request) {
        $id = (int) $request->route('event_id');
        $event = VisitklEvent::find($id);   
        $event->save();
        return back();               
    }

    public function user_view_eform() {
        return view('public.eform');
    }

    public function user_submit_eform(Request $request) {
        $eform = new VisitklEform;
        $eform->save();
        return back();      
    }

    public function admin_view_eform() {
        $eforms = VisitklEform::all();
        return view('admin.eforms', compact('eforms'));        
    }

    public function admin_submit_eform(Request $request) {
        $id = 1;
        $eform = VisitklEform::find($id);  
        $event = new VisitklEvent;   
        $event->save();
        return back();      
    }    
    
    

    ## History

    public function user_view_history() {
        return view('public.history', compact('history'));
    }

    ## Experience

    public function user_view_experiences() {
        $experiences = VisitklExperience::all();
        return view('public.experiences', compact('experiences'));        
    }

    public function user_view_experience(Request $request) {
        $id = (int) $request->route('experience_id');
        $experience = VisitklExperience::find($id);        
        return view('public.experience', compact('experience'));
    }    

    public function admin_view_experiences() {
        $experiences = VisitklExperience::all();
        return view('admin.experiences', compact('experiences'));
    }

    public function admin_view_experience(Request $request) {
        $id = (int) $request->route('experience_id');
        $experience = VisitklExperience::find($id);  
        return view('admin.experience', compact('experience'));
    }     

    public function admin_create_experience(Request $request) {
        $experience = new VisitklExperience;
        $experience->save();
        return back();
    }     

    public function admin_update_experience(Request $request) {
        $id = (int) $request->route('experience_id');
        $experience = VisitklExperience::find($id);   
        $experience->save();
        return back();     
    } 
    
    ## Ecommerce

    public function user_view_products() {
        $products = '';
        return view('public.products', compact('products'));        
    }

    public function user_view_product(Request $request) {
        $products = '';
        return view('public.product', compact('product'));         
    }  

    public function admin_view_products() {
        $products = '';
        return view('admin.products', compact('products'));           
    }

    public function admin_view_product(Request $request) {
        $product = '';
        return view('admin.product', compact('product'));         
    }     

    public function admin_create_product(Request $request) {}     

    public function admin_update_product(Request $request) {}      

    ## offer

    public function user_view_offers() {
        $offers = '';
        return view('public.offers', compact('offers'));          
    }

    public function user_view_offer(Request $request) {
        $offer = '';
        return view('public.offer', compact('offer'));        
    }    

    public function admin_view_offers() {
        $offers = '';
        return view('admin.offers', compact('offers'));        
    }

    public function admin_view_offer(Request $request) {
        $offer = '';
        return view('admin.offer', compact('offer'));         
    }     

    public function admin_create_offer(Request $request) {

    }     

    public function admin_update_offer(Request $request) {

    }   
    
    ## gallery


    public function user_view_gallery() {}   

    public function user_view_gallery_item(Request $request) {}   
    
    public function admin_view_gallery() {}  

    public function admin_view_gallery_item(Request $request) {}  
    
    public function admin_create_gallery_item(Request $request) {}  

    public function admin_update_gallery_item(Request $request) {}  

    ## faq

    public function user_view_faq() {}    

    public function admin_view_faq() {}    

    public function admin_create_faq(Request $request) {}    

    public function admin_update_faq(Request $request) {}    
 
}
