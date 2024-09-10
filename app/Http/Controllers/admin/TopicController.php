<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Category;
use App\Traits\Common;
use Illuminate\Http\Request;

class TopicController extends Controller
{         use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $categories = Category::select('id', 'category_name')->get();
        $topics=Topic::get();
        return view('admin.topics',compact('topics','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();
        return view('admin.add_topic', compact('categories'));

    }

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

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images/topics');

        }

        Topic::create($data);

        //return redirect()->route('jobs.index');
        return('data inserted sucessfuly');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic = Topic::with('category')->findOrFail($id);
        return view('admin.topic_details', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   $categories = Category::select('id', 'category_name')->get();
        $topic = Topic::with('category')->findOrFail($id);
        return view('admin.edit_topic', compact('topic','categories'));
    }

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
    }
}
