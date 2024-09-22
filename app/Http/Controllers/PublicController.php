<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Topic;

class PublicController extends Controller
{
    private function getCategoriesWithTopics($limit)
    {
        return Category::where('published', 1)
            ->whereHas('topics', function ($query) {
                $query->where('published', 1);
            })
            ->with(['topics' => function ($query) {
                $query->where('published', 1)->latest()->take(3);
            }])
            ->latest()
            ->limit($limit)
            ->get();
    }

    private function getPublishedTopics()
    {
        return Topic::where('published', 1)->get();
    }

    private function getPublishedTestimonials()
    {
        return Testimonial::where('published', 1)->get();
    }

    // Show all categories
    public function showAllcategory()
    {
        $categories = $this->getCategoriesWithTopics(3);
        $topics = $this->getPublishedTopics(3);

        return view('public.includes.index_brwosesSec', compact('categories', 'topics'));
    }

    // Show home page
    public function index()
    {
        $categories = $this->getCategoriesWithTopics(3);
        $topics = $this->getPublishedTopics(3);
        $testimonial = $this->getPublishedTestimonials(3);
        $popularTopics = Topic::where('published', 1)->whereHas('category', function ($query) {
            $query->where('published', 1);
            $query->whereHas('topics', function ($subQuery) {
                $subQuery->where('published', 1);
            });
        })->orderBy('views', 'desc')->take(1)->get();
        $popularTopics2 = Topic::where('published', 1)->whereHas('category', function ($query) {
            $query->where('published', 1);
            $query->whereHas('topics', function ($subQuery) {
                $subQuery->where('published', 1);
            });
        })->orderBy('views', 'desc')->skip(1)->take(1)->get();

        return view('public.pages.index', compact('categories', 'topics', 'testimonial', 'popularTopics', 'popularTopics2'));
    }

    // Show all topics list
    public function ShowAlltopic()
    {
        $topics = Topic::where('published', 1)->paginate(4);
        $trendingTopics = Topic::where('published', 1)->where('trending', 1)->latest()->take(2)->get();

        return view('public.pages.topics-listing', compact('topics', 'trendingTopics'));
    }

    // send varibles to public view
    public function testimonial()
    {
        $testimonial = $this->getPublishedTestimonials();

        return view('public.pages.testimonials', compact('testimonial'));
    }

    // Show testimonials ( include view)
    public function showTestimonial()
    {
        $testimonial = $this->getPublishedTestimonials();

        return view('public.includes.testimonial', compact('testimonial'));
    }

    public function showDetails(string $id)
    {
        $topic = Topic::with('category')->where('published', 1)->findOrFail($id);
        return view('public.pages.topics-detail', compact('topic'));
    }

    // increase number of views when press in bookmark in topic details
    public function bookmark($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->increment('views');

        return redirect()->back();
    }

}
