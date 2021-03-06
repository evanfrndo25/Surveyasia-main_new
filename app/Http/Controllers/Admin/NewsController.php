<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $title = "Berita";

    public function index()
    {
        $news = News::latest()->paginate(10000);
        // dd($news);

        return view('admin.news.index', [
            'title' => $this->title,
            'news' => $news
        ]);
    }
    public function search(Request $request)
    {
        $search = $request->search;
        // dd($search);
        if ($search = $request->search) {
            $news = DB::table('news')
                ->where('title', 'like', '%' . $search . '%')
                ->paginate();
        } else {
            $news = News::latest()->paginate(2);
        }
        // ddd($news);

        return view('admin.news.index', [
            'title' => $this->title,
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', [
            'title' => $this->title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'img' => 'image|file|max:1024',
            
        ]);
        // status :
        // 0 = draft, 1 = publish, 
        $news['status'] = '1';
        $news['author'] = '1';
        $news['slug'] = Str::slug(request('title'));

        # image is true?
        if ($request->file('img')) {
            $news['img'] = $request->file('img')->store('news-img');
        }
        News::create($news);
        return redirect('admin/news/')->with('status', 'Berita berhasil diposting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        // dd($news);
        return view('admin.news.show', compact('news'), [
            'title' => $this->title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'title' => $this->title,
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        # status :
        # 0 = draft, 1 = publish

        $news = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'image|file|max:1024',
            'category' => 'required'
        ]);
        
        $news['author'] = '1';

        # image is true?
        if ($request->file('img')) {
            if ($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $news['img'] = $request->file('img')->store('news-img');
        }
        News::where('id', $id)->update($news);
        return redirect('admin/news/')->with('status', 'Berita berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->img) {
            Storage::delete($request->img);
        }
        News::find($id)->delete();
        return back()->with('status', 'Berita berhasil dihapus');
    }
}
