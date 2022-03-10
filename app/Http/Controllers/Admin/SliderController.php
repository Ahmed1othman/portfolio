<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\SliderRepo;
use App\Http\Requests\Admin\SliderRequest ;
use App\Models\Slider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;

class SliderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repo;



    public function __construct(SliderRepo $repo)
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
        return view('admin.sliders.index', compact('data'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(SliderRequest $request)
    {
      try {
            $data=[
                'title' => ['en' =>$request->title, 'ar' => $request->title_ar],
                'text' => ['en' => $request->text, 'ar' => $request->text_ar]
            ];
            if($request->active){
                $data['active']=1;
            }else{
                $data['active']=0;
            }
            $file=request()->file('photo');

            if($file)
            {
                $data['photo'] =  $this->repo->storeFile($file,'sliders');
            }
            $this->repo->create($data);
            session()->flash('Add', 'تم اضافه المنتج بنجاح ');
            return redirect('sliders');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()
                ->with('error',__('app.some_thing_error'));
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
        return view('admin.sliders.edit',compact('row'));
        // return response()->json($data, 200);
    }

    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(SliderRequest $request,$id)
    {

        $item=$this->repo->findOrFail($request->id);
        try {
            $data=[
                'title' => ['en' =>$request->title, 'ar' => $request->title_ar],
                'text' => ['en' => $request->text, 'ar' => $request->text_ar]
            ];
            if($request->active){
                $data['active']=1;
            }else{
                $data['active']=0;
            }

            $file=request()->file('photo');

            if($file)
            {
                FacadesFile::delete('public/slider/images/' . $item->photo);
                $data['photo'] =  $this->repo->storeFile($file,'sliders');
            }

              $this->repo->update($data,$item);

            session()->flash('Edit', 'تم اضافه المنتج بنجاح ');
            return redirect('sliders');
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
        $sliders=$this->repo->bulkDelete([$slider]);
        if (!$sliders ) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }



}


