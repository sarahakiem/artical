<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Traits\Common;
use Illuminate\Http\Request;

class TopicController extends Controller
{use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {$categories = Category::select('id', 'category_name')->get();
        $topics = Topic::get();
        return view('admin.pages.topics', compact('topics', 'categories'));}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$categories = Category::select('id', 'category_name')->get();
        $topics = Topic::with('category')->get();
        return view('admin.pages.add_topic', compact('topics', 'categories'));}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'trending' => 'boolean',
            'published' => 'boolean',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',

        ]);
        $data['trending'] = $data['trending'] ?? false;
        $data['published'] = $data['published'] ?? false;
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/topics');

        }

        Topic::create($data);

        return redirect()->route('topic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        return view('admin.pages.topic_details', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {$categories = Category::select('id', 'category_name')->get();
        $topic = Topic::with('category')->findOrFail($id);
        return view('admin.pages.edit_topic', compact('topic', 'categories'));}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'trending' => 'boolean',
            'published' => 'boolean',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/topics');

        }
        Topic::where('id', $id)->update($data);
        return redirect()->route('topic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Topic::where('id', $id)->delete($id);
        return redirect()->route('topic.index');
    }}
