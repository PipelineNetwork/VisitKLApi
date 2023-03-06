<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VisitklEform;
use App\Models\VisitklEformImage;
use App\Models\VisitklEvent;
use App\Models\VisitklExperience;
use App\Models\VisitklProduct;
use App\Models\VisitklOffer;
use App\Models\VisitklGalleryItem;
use App\Models\VisitklFaq;


use Alert;


class FungsiController extends Controller
{
    public function user_view_homepage()
    {
        return view('homepage');
    }

    public function user_search()
    {
        return view('results');
    }

    public function user_view_about()
    {
        return view('about');
    }

    public function admin_view_dashboard()
    {
        return view('dashboard');
    }

    ## Event

    public function user_view_events()
    {
        $events = VisitklEvent::all();
        return view('public.events', compact('events'));
    }

    public function user_view_event(Request $request)
    {
        $id = (int) $request->route('event_id');
        $event = VisitklEvent::find($id);
        return view('public.event', compact('event'));
    }

    public function admin_view_events()
    {
        $events = VisitklEvent::all();
        return view('admin.events', compact('events'));
    }

    public function admin_view_event(Request $request)
    {
        $id = (int) $request->route('event_id');
        $event = VisitklEvent::find($id);
        return view('admin.event', compact('event'));
    }

    public function admin_create_event(Request $request)
    {
        $event = new VisitklEvent;
        $event->save();
        return back();
    }

    public function admin_update_event(Request $request)
    {
        $id = (int) $request->route('event_id');
        $event = VisitklEvent::find($id);
        $event->save();
        return back();
    }

    public function user_view_eform()
    {
        return view('public.eform');
    }

    public function user_submit_eform(Request $request)
    {
        $eform = new VisitklEform;
        $eform->name = $request->name;
        $eform->date_start = $request->date_start;
        $eform->date_end = $request->date_end;
        $eform->time_start = $request->time_start;
        $eform->time_end = $request->time_end;        
        $eform->venue = $request->venue;
        $eform->eform_type = $request->eform_type;
        $eform->event_type = $request->event_type;
        $eform->description = $request->description;

        $eform->link = $request->link;
        $eform->contact_no = $request->contact_no;
        $eform->fax = $request->fax;
        $eform->company = $request->company;
        $eform->email = $request->email;
        $eform->banner = $request->file('banner')->store('visitkl/banner');
        $eform->license = $request->file('license')->store('visitkl/license');
        $eform->save();

        Alert::success('E-Form', 'Form has succcessfully submitted!');
        return back();
    }

    public function admin_view_eform()
    {
        $eforms = VisitklEform::all();
        return view('admin.eforms', compact('eforms'));
    }

    public function admin_view_eform_detail(Request $request)
    {
        $id = (int) $request->route('eform_id');
        $eform = VisitklEform::find($id);
        $images = VisitklEformImage::where('eform_id', $id)->get();
        return view('admin.eform', compact('eform', 'images'));
    }    




    ## History

    public function user_view_history()
    {
        return view('public.history', compact('history'));
    }

    ## Experience

    public function user_view_experiences()
    {
        $experiences = VisitklExperience::all();
        return view('public.experiences', compact('experiences'));
    }

    public function user_view_experience(Request $request)
    {
        $id = (int) $request->route('experience_id');
        $experience = VisitklExperience::find($id);
        return view('public.experience', compact('experience'));
    }

    public function admin_view_experiences()
    {
        $experiences = VisitklExperience::all();
        return view('admin.experiences', compact('experiences'));
    }

    public function admin_view_experience(Request $request)
    {
        $id = (int) $request->route('experience_id');
        $experience = VisitklExperience::find($id);
        return view('admin.experience', compact('experience'));
    }

    public function admin_create_experience(Request $request)
    {

        $experience = new VisitklExperience;
        $experience->title = $request->title;
        $experience->category = $request->category;
        $experience->location = $request->location;
        $experience->description = $request->description;
        $experience->image_url = $request->file('image')->store('visitkl/uploads');
        $experience->save();
        return back();
    }

    public function admin_update_experience(Request $request)
    {
        $id = (int) $request->route('experience_id');
        $experience = VisitklExperience::find($id);
        $experience->save();
        return back();
    }

    ## Ecommerce

    public function user_view_products()
    {
        $products = VisitklProduct::all();
        return view('public.products', compact('products'));
    }

    public function user_view_product(Request $request)
    {
        $id = (int) $request->route('product_id');
        $product = VisitklProduct::find($id);
        return view('public.product', compact('product'));
    }

    public function admin_view_products()
    {
        $products = VisitklProduct::all();
        return view('admin.products', compact('products'));
    }

    public function admin_view_product(Request $request)
    {
        $id = (int) $request->route('product_id');
        $product = VisitklProduct::find($id);
        return view('admin.product', compact('product'));
    }

    public function admin_create_product(Request $request)
    {
        $product = new VisitklProduct;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->link = $request->link;
        $product->save();
        return back();
    }

    public function admin_update_product(Request $request)
    {
        $id = (int) $request->route('product_id');
        $product = VisitklProduct::find($id);
        $product->save();
        return back();
    }

    ## offer

    public function user_view_offers()
    {
        $offers = VisitklOffer::all();
        return view('public.offers', compact('offers'));
    }

    public function user_view_offer(Request $request)
    {
        $id = (int) $request->route('offer_id');
        $offer = VisitklOffer::find($id);
        return view('public.offer', compact('offer'));
    }

    public function admin_view_offers()
    {
        $offers = VisitklOffer::all();
        return view('admin.offers', compact('offers'));
    }

    public function admin_view_offer(Request $request)
    {
        $id = (int) $request->route('offer_id');
        $offer = VisitklOffer::find($id);
        return view('admin.offer', compact('offer'));
    }

    public function admin_create_offer(Request $request)
    {
        $offer = new VisitklOffer;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->link = $request->link;
        $offer->save();
        return back();
    }

    public function admin_update_offer(Request $request)
    {
        $id = (int) $request->route('offer_id');
        $offer = VisitklOffer::find($id);
        $offer->save();
        return back();
    }

    ## gallery


    public function user_view_gallery()
    {
        $items = VisitklGalleryItem::all();
        return view('public.items', compact('items'));
    }

    public function user_view_gallery_item(Request $request)
    {
        $id = (int) $request->route('item_id');
        $items = VisitklGalleryItem::find($id);
        return view('public.item', compact('item'));
    }

    public function admin_view_gallery()
    {
        $items = VisitklGalleryItem::all();
        return view('admin.items', compact('items'));
    }

    public function admin_view_gallery_item(Request $request)
    {
        $id = (int) $request->route('item_id');
        $item = VisitklGalleryItem::find($id);
        return view('admin.item', compact('item'));
    }

    public function admin_create_gallery_item(Request $request)
    {
        $item = new VisitklGalleryItem;
        $item->title = $request->title;
        $item->category = $request->category;
        $item->save();
        return back();
    }

    public function admin_update_gallery_item(Request $request)
    {
    }

    ## faq

    public function user_view_faq()
    {
        $faqs = VisitklFaq::all();
        return view('public.faqs', compact('faqs'));
    }

    public function admin_view_faq(Request $request)
    {
        $faqs = VisitklFaq::all();
        return view('admin.faqs', compact('faqs'));
    }

    public function admin_create_faq(Request $request)
    {
        $faq = new VisitklFaq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        return back();
    }

    public function admin_view_faq_detail(Request $request)
    {
        $id = (int) $request->route('faq_id');
        $faq = VisitklFaq::find($id);
        return view('admin.faq', compact('faq'));
    }    

    public function admin_update_faq(Request $request)
    {
        $id = (int) $request->route('faq_id');
        $faq = VisitklFaq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;        
        $faq->save();
        return back();
    }
}
