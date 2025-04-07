<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(
        public BlogService $blogService,
        public BlogRepository $blogRepository
    )
    {
    }

    public function index()
    {
        $posts = $this->blogRepository->findAll();
        return view('pages.blog.index', ['posts' => $posts]);
    }
    public function show($id){
        $post = $this->blogRepository->findById($id);

        return view('pages.blog.show', ['post' => $post]);
    }
    public function create(){

        return view('pages.blog.create');
    }
    public function store(StoreBlogRequest $request){
        $validated = $request->validated();

        $this->blogService->create($validated);
        return redirect()->route('blog.index');
    }
    public function edit($id){
        $post = $this->blogRepository->findById($id);
        return view('pages.blog.edit', ['post' => $post]);
    }
    public function update(UpdateBlogRequest $request, $id){
        $data = $request->validated();
        $post = $this->blogRepository->findById($id);
        $this->blogService->update($post, $data);

        return redirect()->route('blog.index');
    }
    public function destroy($id){
        $post = $this->blogRepository->findById($id);
       $this->blogService->delete($post);
        return redirect()->route('blog.index');
    }
}
