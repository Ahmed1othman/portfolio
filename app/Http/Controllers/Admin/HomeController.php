<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\order;
use App\Models\SliderOption;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['visitors'] = $this->visitors();
        return view('admin.index',$data);
    }

    public function AllOrders()
    {
        $Orders = order::all();
        return view('admin.orders.index', compact('Orders'));

    }
    public function contacts()
    {
        $data = ContactUs::all();
        return view('admin.contacts.index', compact('data'));

    }

    public function deletedOrders(Request $request)
    {
        order::destroy($request->id);
        session()->flash('danger', 'تم الحذف بنجاح ');
        return redirect()->route('AllOrders');
    }
    public function deleteddata(Request $request)
    {
        ContactUs::destroy($request->id);
        session()->flash('danger', 'تم الحذف بنجاح ');
        return redirect()->route('contacts');
    }
    public function showsliderOption()
    {
        $data = SliderOption::all();
        return view('admin.slider-option.index', compact('data'));

    }
    public function updatesliderOption()
    {
        $row = SliderOption::first();
        return view('admin.slider-option.edit', compact('row'));

    }
    public function savesliderOption(Request $request)
    {
        try{
            $data=$request->all();
            $row = SliderOption::first();
            if($row){
                $row->update($data);
            }else{
                SliderOption::create($data);
            }

            session()->flash('Add', __('admin/app.success_message'));
            return redirect('slider-option');

        } catch (\Exception $e) {
              return redirect()->back()
                ->with('error', __('admin/app.success_message'));
        }

    }
    public function getsliderOptions()
    {
        $data=SliderOption::first();

        if($data){

            $result=['word'=>$data->word,'image'=>$data->image];
            return response()->json($result, 200);

        }else{
            $data=['word'=>'x:left','image'=>'slidingoverlayhorizontal'];

            SliderOption::create($data);

            return response()->json($data, 200);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function visitors(){
        $start = date('Y-m-d', strtotime(Carbon::now()->subDays(30)));
        $end = date('Y-m-d');
        return Visitor::whereBetween('created_at', [$start . " 00:00:00", $end . " 23:59:59"])->select(
            DB::raw('count as views'),
            DB::raw('DATE(created_at) as day'),
        )
            ->orderBy('day')
            ->get();
    }

    public function showOrder($id)
    {
        $order = order::findOrFail($id);
        return view('admin.orders.show-details', compact('order'));
    }

    public function showContact($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.contacts.show-details', compact('contact'));
    }
}


