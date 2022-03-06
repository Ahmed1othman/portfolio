<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\ActiveSectionRepo;
use App\Http\Requests\Admin\ActiveSectionRequest;
use App\Models\ActiveSection;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;

class FrontSectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;


    public function __construct(ActiveSectionRepo $repo)
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
        return view('admin.activeSection.index', compact('data'));
    }

    public function create()
    {
        return view('admin.activeSection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(ActiveSectionRequest $request)
    {

    }

    /**
     * update the Permission for dashboard.
     *
     * @param Request $request
     * @return Builder|Model|object
     */
    public function edit($ActiveSection)
    {

    }


    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(ActiveSectionRequest $request, $id)
    {


        try{
            $front = $this->repo->findOrFail($id);

            $data['active'] = $request->active;

            $data = $this->repo->update($data, $front);
            if ($data) {
                $response=['code'=>1,'msg'=>__('admin/app.success_message')];
            }else{
                $response=['code'=>0,'msg'=>__('admin/app.some_thing_error')];
            }
            return json_encode($response);
        } catch (\Exception $e) {
            DB::rollback();
            $response=['code'=>0,'msg'=>__('admin/app.some_thing_error')];
             return json_encode($response);
        }

    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($ActiveSection)
    {
        $ActiveSection = $this->repo->bulkDelete([$ActiveSection]);
        if (!$ActiveSection) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }


}


