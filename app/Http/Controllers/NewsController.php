<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Repositories\NewsRepository;
use App\Services\MediaService;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(
        public NewsService $newsService,
        public NewsRepository $newsRepository,
        public MediaService $mediaService
    )
    {
    }
    public function index(){
        $news = $this->newsRepository->findAll();
       return view('pages.news.index', ['news'=> $news]);
    }
    public function show($id){
        $news = $this->newsRepository->findById($id);
        return view('pages.news.show', ['news' =>$news]);
    }
    public function create(){
        return view('pages.news.create');
    }
    public function store(StoreNewsRequest $request){
        $validated = $request->validated();

        $news = $this->newsService->create($validated);

        $this->mediaService->storeFile($news, $request->file('file'));

        return redirect()->route('news.index');
    }
    public function edit($id){
        $news = $this->newsRepository->findById($id);
        return view('pages.news.edit', ['news'=>$news]);
    }
    public function update(StoreNewsRequest $request, $id){
        $data = $request->validated();
        $news = $this->newsRepository->findById($id);
        $this->newsService->update($news, $data);

        return redirect()->route('news.index');
    }
    public function destroy($id){
        $news = $this->newsRepository->findById($id);
        $this->newsService->delete($news);
        return redirect()->route('news.index');
    }
}
