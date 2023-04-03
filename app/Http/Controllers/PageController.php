<?php

namespace App\Http\Controllers;

use App\Models\AboutSettings;
use App\Models\BannerSettings;
use App\Models\Quotes;
use App\Models\ExpertiseInfo;
use App\Models\ExpertiseTitle;
use App\Models\TestimonialList;
use App\Models\TestimonialSettings;
use App\Models\BusinessSettings;
use App\Models\BusinessList;
use App\Models\AchievementSettings;
use App\Models\AchievementList;
use App\Models\ImageSectionTitle;
use App\Models\ImageFile;
use App\Models\BlogSettings;
use App\Models\BlogTitleSetting;
use App\Models\HeaderSocialSettings;
use App\Models\ContactSettings;
use App\Models\FooterSettings;
use App\Models\HeroSlider;
use App\Models\MessageType;
use App\Models\SiteSettings;
use App\Models\Visitors;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {

        $banner_settings = BannerSettings::first();
        $about_settings = AboutSettings::first();
        $quotes_settings = Quotes::first();
        $expertise_title = ExpertiseTitle::first();
        $testimonial_title = TestimonialSettings::first();
        $business_title = BusinessSettings::first();
        $achievement_title = AchievementSettings::first();
        $image_title = ImageSectionTitle::first();
        $header_social_settings = HeaderSocialSettings::first();
        $contact_settings = ContactSettings::first();
        $footer_settings = FooterSettings::first();
        $site_settings = SiteSettings::first();
        $blog_section_settings = BlogTitleSetting::first();
        $expertise_infolist = ExpertiseInfo::all();
        $testimonial_infolist = TestimonialList::latest()->take(5)->get();
        $business_list = BusinessList::all();
        $achievement_list = AchievementList::all();
        $image_list = ImageFile::all();
        $blog_list = BlogSettings::all();
        $message_type_list = MessageType::all();
        $sliders_list = HeroSlider::all();

        $geoipinfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        // dd($geoipinfo);
        $unique_ip = true;
        $visitors = Visitors::all();
        foreach($visitors as $visitor){
            if($visitor->ip_address == request()->ip()){
                $unique_ip = false;
            }
        }
        if($unique_ip == true){
            $visitor = Visitors::create([
                'ip_address' => request()->ip(),
                'country' => $geoipinfo->country,
                'city' => $geoipinfo->city,
                'post_code' => $geoipinfo->postal_code,
            ]);
        }

        return view(
            'pages.frontend.home',
            compact(
                'banner_settings',
                'about_settings',
                'quotes_settings',
                'expertise_title',
                'expertise_infolist',
                'testimonial_title',
                'testimonial_infolist',
                'business_title',
                'business_list',
                'achievement_title',
                'achievement_list',
                'image_title',
                'image_list',
                'blog_list',
                'header_social_settings',
                'contact_settings',
                'message_type_list',
                'footer_settings',
                'site_settings',
                'blog_section_settings',
                'sliders_list'
            )
        );
    }


    public function blog()
    {
        $blog_list = BlogSettings::all();
        $footer_settings = FooterSettings::first();
        $blog_section_settings = BlogTitleSetting::first();
        $site_settings = SiteSettings::first();

        return view('pages.frontend.blog-case', compact('blog_list','footer_settings','site_settings','blog_section_settings'));
    }
}
