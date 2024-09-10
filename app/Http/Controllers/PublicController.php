<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Helper method to fetch categories with topics
    private function getCategoriesWithTopics($limit)
    {
        return Category::with(['topics' => function ($query) {
            $query->latest()->take(3);
        }])->latest()->limit($limit)->get();
    }

    // Helper method to fetch published topics
    private function getPublishedTopics()
    {
        return Topic::where('published', 1)->get();
    }

    // Helper method to fetch published testimonials
    private function getPublishedTestimonials()
    {
        return Testimonial::where('published', 1)->get();
    }

    // Show all categories
    public function showAllcategory()
    {
        $categories = $this->getCategoriesWithTopics(2);
        $topics = $this->getPublishedTopics();

        return view('includes.index_brwosesSec', compact('categories', 'topics'));
    }

    // Show home page
    public function index()
    {
        $categories = $this->getCategoriesWithTopics(3);
        $topics = $this->getPublishedTopics();
        $testimonial = $this->getPublishedTestimonials();

        return view('public.index', compact('categories', 'topics', 'testimonial'));
    }

    // Show all topics list
    public function ShowAlltopic()
    {
        $topics = Topic::where('published', 1)->paginate(4);

        return view('public.topics-listing', compact('topics'));
    }

    // Show testimonials
    public function testimonial()
    {
        $testimonial = $this->getPublishedTestimonials();

        return view('public.testimonials', compact('testimonial'));
    }

    // Show testimonials (different view)
    public function showTestimonial()
    {
        $testimonial = $this->getPublishedTestimonials();

        return view('includes.testimonial', compact('testimonial'));
    }

    public function showDetails(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        return view('public.topics-detail', compact('topic'));
    }
}
