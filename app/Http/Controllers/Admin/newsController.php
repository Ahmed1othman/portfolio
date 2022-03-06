<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\newsRepo;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\news;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class newsController extends Controller
{
    protected $repo;

    public function __construct(newsRepo $repo)
    {

        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->repo->getAll();
        $news = news::all();
        return view('admin.news.index', compact('data', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        try {
            $data = [
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'notes' => ['en' => $request->notes, 'ar' => $request->notes_ar]
            ];
            if ($request->active) {
                $data['active'] = 1;
            } else {
                $data['active'] = 0;
            }
            $file = request()->file('photo');

            if ($file) {
                $data['photo'] = $this->repo->storeFile($file, 'news');
            }

            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه الخبر بنجاح ');
            return redirect('news');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.news.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $item = $this->repo->findOrFail($request->id);
        try {
            $data = [
                'title' => ['en' => $request->title, 'ar' => $request->title_ar],
                'notes' => ['en' => $request->notes, 'ar' => $request->notes_ar]
            ];
            if ($request->active) {
                $data['active'] = 1;
            } else {
                $data['active'] = 0;
            }

            $file = request()->file('photo');

            if ($file) {
                FacadesFile::delete('public/news/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'news');
            }

            $this->repo->update($data, $item);

            session()->flash('Edit', 'تم تعديل الخبر بنجاح ');
            return redirect('news');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($news)
    {
        $news = $this->repo->bulkDelete([$news]);
        if (!$news) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

    public function deletedNews()
    {
        $news = news::onlyTrashed()->get();
        return view('admin.news.deleted', compact('news'));
    }
}
