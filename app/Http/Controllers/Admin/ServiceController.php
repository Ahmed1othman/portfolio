<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\ServicesRepo;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Service;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;

    public function __construct(ServicesRepo $repo)
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
        $services = Service::all();
        return view('admin.services.index', compact('data', 'services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(ServiceRequest $request)
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
                $data['photo'] = $this->repo->storeFile($file, 'services');
            }

            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه الخدمه بنجاح ');
            return redirect('Services');
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

    public function deleted()
    {
        $Services = Service::onlyTrashed()->get();
        return view('admin.services.deleted', compact('Services'));
    }

    public function edit($slider)
    {
        try {
            $data = $this->repo->findOrFail($slider);
            return view('admin.services.edit', compact('data'));
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
    public function update(ServiceRequest $request, $id)
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
                FacadesFile::delete('public/Service/' . $item->photo);
                $data['photo'] = $this->repo->storeFile($file, 'services');
            }

            $this->repo->update($data, $item);

            session()->flash('Edit', 'تم تعديل الخدمه بنجاح ');
            return redirect('Services');
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
    public function destroy($service)
    {
        $services = $this->repo->bulkDelete([$service]);
        if (!$services) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

    public function restor($service)
    {
        $services = $this->repo->bulkRestore([$service]);
        if (!$services) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }
}
