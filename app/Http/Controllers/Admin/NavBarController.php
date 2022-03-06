<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\NavBarRepo;
use App\Http\Requests\Admin\NavBarRequest ;
use App\Models\NavBar;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;

class NavBarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;



    public function __construct(NavBarRepo $repo)
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
       $data=$this->repo->getAll();
        return view('admin.navbar.index', compact('data'));
    }

    public function create()
    {
        return view('admin.navbar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(NavBarRequest $request)
    {
      try {
            $data=[
                'title' => $request->title
            ];
            if($request->active){
                $data['active']=1;
            }else{
                $data['active']=0;
            }
            $this->repo->create($data);
            session()->flash('Add', __('admin/app.success_message'));
            return redirect('navbar');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('error', __('admin/app.success_message'));
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
        $row=$this->repo->findOrFail($slider);
        return view('admin.navbar.edit',compact('row'));
    }

    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(NavBarRequest $request,$id)
    {
        $item=$this->repo->findOrFail($request->id);
        try {
            $data=[
                'title' => $request->title
            ];
            if($request->active){
                $data['active']=1;
            }else{
                $data['active']=0;
            }

              $this->repo->update($data,$item);

            session()->flash('Edit', __('admin/app.success_message'));
            return redirect('navbar');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('error',__('app.some_thing_error'));
        }

    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($slider)
    {
        $navbar=$this->repo->bulkDelete([$slider]);
        if (!$navbar ) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }



}


