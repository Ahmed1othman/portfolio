<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $data=Subscription::all();
        return view('admin.subscriptions.index', compact('data'));
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {

    }

    /**
     * update the Permission for dashboard.
     *
     * @param Request $request
     * @return Builder|Model|object
     */
    public function edit($slider)
    {

    }

    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request,$id)
    {


    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($slider)
    {
     

        $allRows = Subscription::withTrashed()->find([$slider]);
        foreach ($allRows as $row) {
            
            if ($row->trashed()) {
                $row->forceDelete();
            } else {
                $row->delete();
            }
        }
        return 1;
    }



}


