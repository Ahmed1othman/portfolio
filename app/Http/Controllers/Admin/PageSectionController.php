<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Eloquent\PageSectionRepo;
use App\Http\Requests\Admin\PageSectionRequest ;
use App\Models\Custom;
use App\Models\PageSection;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File as FacadesFile;

class PageSectionController extends Controller
{
    protected $repo;
    protected $namespaceName;
    protected $modelName;

    public function __construct(PageSectionRepo $repo)
    {
        $this->repo = $repo;
        $this->modelName = 'page-sections';
        $this->namespaceName = 'admin';
    }



    public function getPageSections($pageId){
        $data = Custom:: findOrfail($pageId);
        return view($this->namespaceName.'.'.$this->modelName.'.index', compact('data'));
    }//end of getPageSections

    public function createPageSection($pageId)
    {
        return view($this->namespaceName.'.'.$this->modelName.'.create',compact('pageId'));
    }
    public function store(Request $request)
    {
      try {
        $page=Custom::findOrfail($request->custom_id);
        $gallery = array();
        $slider = array();
        $contentStr = array();
        $data=$request->all();
        foreach($data as $key=>$val){
            $files=request()->file($key);
            if($files && $key=='gallery'&&$data['type']=='gallery'){
                foreach ($files as $file){
                    $name = $this->repo->storeFile($file,$this->modelName);
                    $gallery[] = $name;
                }
                $contentStr = $gallery;
            }
            elseif($files && $key=='slider'&&$data['type']=='slider'){
                foreach ($files as $file){
                    $name = $this->repo->storeFile($file,$this->modelName);
                    $slider[] = $name;
                }
                $contentStr = $slider;//implode(',',$slider);
            }elseif($files){
                $data[$key] = $this->repo->storeFile($files,$this->modelName);
            }
        }
        if (isset($data['gallery']))
            unset($data['gallery']);
        if (isset($data['slider']))
            unset($data['slider']);

        $data['content'] = $contentStr;
        $section = $this->repo->create($data);
        $page->sections()->save($section);
        session()->flash('Add', __('admin/app.success_message'));
        return redirect()->route('page-sections-get',$request->custom_id);

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
    public function update(Request $request,$id)
    {
//        try {
            $gallery = array();
            $slider = array();
            $contentStr = array();
            $data=$request->all();
            $item=$this->repo->findOrFail($id);
            foreach($data as $key=>$val){
                $files=request()->file($key);
                if($files && $key=='gallery'&&$item->type=='gallery'){
                    foreach ($item->content as $image){
//
                         FacadesFile::delete('storage/'.$this->modelName.'/' . $image);                    }
                    foreach ($files as $file){
                        $name = $this->repo->storeFile($file,$this->modelName);
                        $gallery[] = $name;
                    }
                    $contentStr = $gallery;
                }
                elseif($files && $key=='slider'&&$item->type=='slider'){
                    foreach ($item->content as $image){
                        FacadesFile::delete('storage/'.$this->modelName.'/' . $image);
                    }
                    foreach ($files as $file){
                        $name = $this->repo->storeFile($file,$this->modelName);
                        $slider[] = $name;
                    }
                    $contentStr = $slider;
                }elseif($files){
                    FacadesFile::delete('storage/'.$this->modelName.'/' . $item->photo);
                    $data[$key] = $this->repo->storeFile($files,$this->modelName);
                }
            }

        if (isset($data['gallery']))
            unset($data['gallery']);
        if (isset($data['slider']))
            unset($data['slider']);

        $data['content'] = $contentStr;
            $this->repo->update($data,$item);
            session()->flash('Edit', __('admin/app.success_message'));
            return redirect()->route('page-sections-get',$item->custom_id);
//        } catch (\Exception $e) {
//            DB::rollback();
//            session()->flash('danger', __('admin/app.some_thing_error'));
//
//            return redirect()->back()
//                ->with('error',__('app.some_thing_error'));
//        }
    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $data=$this->repo->bulkDelete([$id]);
        if (!$data ) {
            return __('app.users.cannotdelete');
        }
        return 1;
    }

}


