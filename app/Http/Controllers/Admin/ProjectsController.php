<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\projectsRepo;
use App\Http\Requests\Admin\projectsRequest;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class ProjectsController extends Controller
{
    protected $repo;

    public function __construct(projectsRepo $repo)
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
        $projects = project::all();
        return view('admin.projects.index', compact('data', 'projects'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(projectsRequest $request)
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
                $data['photo'] = $this->repo->storeFile($file, 'projects');
            }

            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه المشروع بنجاح ');
            return redirect('projects');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.projects.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(projectsRequest $request, $id)
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
                FacadesFile::delete('public/projects/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'projects');
            }

            $this->repo->update($data, $item);

            session()->flash('Edit', 'تم تعديل المشروع بنجاح ');
            return redirect('projects');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($projects)
    {
        $projects = $this->repo->bulkDelete([$projects]);
        if (!$projects) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

    public function deletedProject()
    {
        $projects = project::onlyTrashed()->get();
        return view('admin.projects.deleted', compact('projects'));
    }
}
