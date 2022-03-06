<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\CustomRepo;
use App\Http\Requests\Admin\CustomRequest ;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;
use function Symfony\Component\Translation\t;

class CustomController extends Controller
{
    protected $repo;
    protected $namespaceName;
    protected $modelName;

    public function __construct(CustomRepo $repo)
    {
       $this->repo = $repo;
       $this->modelName = 'custom-page';
       $this->namespaceName = 'admin';
    }

    public function index()
    {
       $data=$this->repo->getAll();
        return view($this->namespaceName.'.'.$this->modelName.'.index', compact('data'));
    }

    public function create()
    {
        return view($this->namespaceName.'.'.$this->modelName.'.create');
    }
    public function store(CustomRequest $request)
    {
      try {
        $this->repo->prepareSwitch($request,['active']);
          $data=$request->all();
          foreach($data as $key=>$val){
                $file=request()->file($key);
                if($file){
                    $data[$key] = $this->repo->storeFile($file,$this->modelName);
                }
            }
          $data['name_en']=$this->slugify($request->name_en);
          $data['name_ar']=$this->slugify($request->name_ar);
          $this->repo->create($data);
          session()->flash('Add', __('admin/app.success_message'));
          return redirect($this->modelName);

        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger', __('admin/app.some_thing_error'));
            return redirect()->back()->with('error',__('app.some_thing_error'));
        }
    }
        public static function slugify($text, string $divider = '-')
        {
            $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
            //$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            $text = preg_replace('[^-\w+]', '', $text);
            $text = trim($text, $divider);
            $text = preg_replace('[-+]', $divider, $text);
            $text = strtolower($text);
            return $text;
        }

    public function edit($id)
    {
        $row=$this->repo->findOrFail($id);
        return view($this->namespaceName.'.'.$this->modelName.'.edit', compact('row'));
    }

    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(CustomRequest $request,$id)
    {
        try {
            DB::beginTransaction();
            $this->repo->prepareSwitch($request,['active']);
            $data=$request->all();
            $item=$this->repo->findOrFail($request->id);
            foreach($data as $key=>$val){
                $file=request()->file($key);
                if($file){
                    FacadesFile::delete('public/'.$this->modelName.'/images/' . $item->photo);
                    $data[$key]=$this->repo->storeFile($file,$this->modelName);
                }
            }
            $data['name_en']=$this->slugify($request->name_en);
            $data['name_ar']=$this->slugify($request->name_ar);
            $this->repo->update($data,$item);
            DB::commit();
            session()->flash('Edit', __('admin/app.success_message'));
            return redirect($this->modelName);
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger', __('admin/app.some_thing_error'));
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
    public function destroy($id)
    {
        try {
            $data=$this->repo->bulkDelete([$id]);
            if (!$data ) {
                return __('app.users.cannotdelete');
            }
            return 1;

        } catch (\Exception $e) {
            session()->flash('danger', __('admin/app.some_thing_error'));
            return redirect()->back()
                ->with('error', __('app.some_thing_error'));
        }
    }





}


