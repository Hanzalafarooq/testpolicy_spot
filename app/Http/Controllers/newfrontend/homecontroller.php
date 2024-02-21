<?php

namespace App\Http\Controllers\newfrontend;

use App\Models\Page;
use App\Models\about;
use App\Models\Faq;
use App\Models\add_faqs;
use App\Models\contact;
use App\Models\insurance;
use App\Models\category; 
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(Request $request)
    {
        $content = page::get();
        $card = Testimonial::get();
        $category = category::with('insurances')->get();
        // return $category;die;
        return view('newfrontend.home')->with(compact('content', 'card', 'category'));
    }
    public function about()
    {
        $content = page::get();
        $about = about::get();
        $category = category::get();

        return view('newfrontend.about')->with(compact('content', 'about', 'category'));
    }
    public function insu($id)
    {
        $content = page::get();
        $category = category::get();
        // return $category;die;
        $insurance = insurance::get()->where('slug', $id);

        return view('newfrontend.insurance')->with(compact('content', 'insurance', 'category'));
    }
    public function faqs()
    {
        $content = page::get();
        $faq = faq::get();
        $faqss = add_faqs::get();
        $category = category::get();
        $insurance = insurance::get();

        // return $insurance;die;    
        return view('newfrontend.faq')->with(compact('content', 'faq', 'category','faqss','insurance'));
    }
    public function contact()
    {
        $content = page::get();
        $category = category::get();
        $contact = contact::get();
        return view('newfrontend.contact')->with(compact('content', 'contact', 'category'));
    }
}
