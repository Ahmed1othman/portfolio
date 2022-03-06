<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\FeaturesRepo;
use App\Http\Requests\Admin\featureRequest;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\feature;
use App\Models\Service;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class featuresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;


    public function __construct(FeaturesRepo $repo)
    {

        $this->repo = $repo;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data = $this->repo->getAll();
        $features = feature::all();
        return view('admin.features.index', compact('data', 'features'));
    }

    public function create()
    {
        try {
            return view('admin.features.create');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(featureRequest $request)
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
                $data['photo'] = $this->repo->storeFile($file, 'features');
            }

            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه الميزه بنجاح ');
            return redirect('features');
       } catch (\Exception $e) {
           return redirect()->back()
               ->with('error', __('app.some_thing_error'));
       }
    }

    /**
     * update the Permission for dashboard.
     *
     * @param Request $request
     * @return Builder|Model|object
     */
    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.features.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(featureRequest $request, $id)
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
                FacadesFile::delete('public/feature/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'features');
            }

            $this->repo->update($data, $item);

            session()->flash('Edit', 'تم تعديل الميزه بنجاح ');
            return redirect('features');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($features)
    {
        $features = $this->repo->bulkDelete([$features]);
        if (!$features) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

    public function deletedFeature()
    {
        $features = feature::onlyTrashed()->get();
        return view('admin.features.deleted', compact('features'));
    }
}
