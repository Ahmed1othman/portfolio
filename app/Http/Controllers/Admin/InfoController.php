<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\InfoRepo;
use App\Http\Requests\Admin\InfoRequest;
use App\Models\Info;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;
use phpDocumentor\Reflection\PseudoTypes\NonEmptyLowercaseString;

class InfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;


    public function __construct(InfoRepo $repo)
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
        return view('admin.info.index', compact('data'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(InfoRequest $request)
    {

    }

    /**
     * update the Permission for dashboard.
     *
     * @param Request $request
     * @return Builder|Model|object
     */
    public function edit($info)
    {

    }


    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(InfoRequest $request, $id)
    {


        $row = [];
        try{
            $front = $this->repo->findOrFail($id);
            if ($front->option == 'show_logo'){
                if($request->has('show_logo'))
                    $row['value'] = true;
                else
                    $row['value'] = false;

                $data = $this->repo->update($row, $front);
                if ($data) {
                    session()->flash('Add', __('admin/app.success_message'));
                    return redirect('info');
                }
            }

            if(request()->hasFile('value')) {
                $file = request()->file('value');
                if ($file) {
                    FacadesFile::delete('public/front/' . $front->value);
                    $fileName = time() . rand(0, 999999999) . '.' . $file->getClientOriginalExtension();
                    $file->storeAs('public/front', $fileName);
                    $row['value'] =  $fileName;
                }
            }else{
                $row['value']=$request->value;
            }



            $data = $this->repo->update($row, $front);
            if ($data) {
                session()->flash('Add', __('admin/app.success_message'));
                return redirect('info');
            }

        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger', __('admin/app.some_thing_error'));
            return redirect('info');
        }

    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($info)
    {
        $info = $this->repo->bulkDelete([$info]);
        if (!$info) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }


}


