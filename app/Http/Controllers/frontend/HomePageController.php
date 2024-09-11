<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function home() {
        $sliderTitle = DB::table('slider_sections')->first();
        $services = DB::table('services')->take(3)->get();
        $aboutUs = DB::table('about_us')->first();
        $faqHeader = DB::table('faq_header_sections')->first();
        $faqs = DB::table('faqs')->get();
        return view('frontend.pages.homepage', compact('sliderTitle','services','aboutUs','faqHeader','faqs'));
    }
    public function aboutUs() {
        $teams = DB::table('teams')->get();
        return view('frontend.pages.about_us', compact('teams'));
    }

    public function contact() {
        return view('frontend.pages.contact');
    }

    public function servicePage() {
        $services = DB::table('services')->get();
        return view('frontend.pages.service', compact('services'));
    }

    public function serviceDetailsPage() {
        $services = DB::table('services')->get();
        return view('frontend.pages.service_details', compact('services'));
    }

    public function projectPage() {
        return view('frontend.pages.project');
    }

    public function blogPage() {
        $blogs = DB::table('blogs')->select('blogs.*', 'users.name as user_name')
                ->join('users', 'blogs.user_id', '=', 'users.id')
                ->where('status', 1)
                ->get();
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blogDetailsPage($slug) {

        $blog = DB::table('blogs')->select('blogs.*', 'users.name as user_name')
                ->join('users', 'blogs.user_id', '=', 'users.id')
                ->where('slug', $slug)
                ->first();
        $blogs = DB::table('blogs')->latest()->take(3)->get();
        $services = DB::table('services')->get();
        return view('frontend.pages.blog_details', compact('blog','blogs','services'));
    }

    public function contactStore(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $check = ContactUs::where('email',$request->email)->first();

        if (!$check){
            $contact = new ContactUs();
            $contact->username = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();
        }

        return response()->json(['success' => true, 'message' => 'Contact Message Send successful.']);
    }

}
