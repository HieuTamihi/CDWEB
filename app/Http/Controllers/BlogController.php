<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $blog;
    private $blogs;
    public function __construct()
    {
        $this->blog = new Blog();
    }
    public function index()
    {
        $blogNew = $this->blog->getBlogNew();
        return view('users.blog.index', compact('blogNew'));
    }
    public function indexadmin()
    {
        $blogs = Blog::all();

        return view('admin.blog.index', [
            'blogs' => $blogs,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'status' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,bmp',
            'content' => 'required',
        ]);

        if (!$validatedData) {
            return redirect()->back()->withErrors('loi');
        }

        $image = $request->file('image');
        $filename = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path('images/blog'), $filename);

        $blog = new Blog;
        $blog->title = $request->get('title');
        $blog->status = $request->get('status');
        $blog->image = $filename;
        $blog->content = $request->get('content');
        $blog->save();

        return redirect('/admin.blog.index');
    }
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = blog::findOrFail($id);

        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Get the blog post
        $blog = Blog::find($id);

        // Get the form data
        $title = $request->input('title');
        $status = $request->input('status');
        $image = $request->file('image');
        $content = $request->input('content');

        // Update the blog post
        $blog->title = $title;
        $blog->status = $status;
        if ($image) {
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images/blog'), $filename);
            $blog->image = $filename;
        }
        $blog->content = $content;
        $blog->save();

        // Redirect to the blog index page
        return redirect('/admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog) {
            $blog->delete();

            return redirect()->route('admin.blog.index');
        } else {
            return redirect()->route('admin.blog.index')->with('error', 'Không tìm thấy blog nào ' . $id);
        }
    }
    // chi tiet blog
    public function blogdetail($id)
    {
        $blogdetail = Blog::find($id);
        if(!$blogdetail){
            return back();
        }
        return view('users.blog.detailblog',compact('blogdetail'));
    }

    public function searchAdmin(Request $request)
    {
        $keyword = $request->input('keyword');

        // Sử dụng model để tìm kiếm dữ liệu
        $blogs = Blog::where('title', 'like', '%' . $keyword . '%')->get();

        return view('admin.blog.results', compact('blogs','keyword'));
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Sử dụng model để tìm kiếm dữ liệu
        $blogNew = Blog::where('title', 'like', '%' . $keyword . '%')->get();

        return view('users.blog.results', compact('blogNew','keyword'));
    }
}
