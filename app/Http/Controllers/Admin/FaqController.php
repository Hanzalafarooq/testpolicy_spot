<?php

namespace App\Http\Controllers\Admin;

use Redirect;
use App\Http\Controllers\Controller;
// use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($serviceId = NULL)
    {
        $viewData = array(
            'pageName' => 'Faqs',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Faq',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.faq.faq')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        $query = new Faq();
        if($request->search['value']) {
            $searchStrings = explode(' ', $request->search['value']);
            foreach($searchStrings as $searchString) {
                $query->where(function ($query) use ($searchString) {
                    $query->orWhere('title', 'like', '%' . $searchString . '%');
                });
            }
        }
        if($request->order) {
            $orderableColumns = array('title', 'order_no', '');
            $query->orderBy($orderableColumns[$request->order['0']['column']], $request->order['0']['dir']);
        }else {
            $query->orderBy('order_no', 'ASC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']);
        $query->limit($input['length']);
        $filteredFaqs = $query->get();
        foreach($filteredFaqs as $faq) {
            $faq->actions = '<a class="edit_faq" href="'.route('admin.faq.edit', ['id' => $faq->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>
                    <a class="deleteprocess" data-type="faq" data-id="'.$faq->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformfaq'. $faq->id.'" method="POST" action="'.route('admin.faq.destroy', ['id' => $faq->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';
        }
        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => Faq::count(),
            'recordsFiltered' => $recordsFiltered,
            "data" =>  $filteredFaqs
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viewData = array(
            'pageName' => 'Add Faq',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Faq',
                    'class' => '',
                    'url' => route('admin.faq.index')
                ),
                (object)array(
                    'name' => 'Add New Faq',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.faq.addeditfaq')->with($viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $faqData = $request->all();
        // $validator = Validator::make($faqData, [
        //     'title' => 'required',
        //     'description' => 'required',
        //     'order_no' =>'required|gt:0'
        // ]);

        // if ($validator->fails()) {
        //     return Redirect()->route("admin.faq.create")->with('error', $validator->errors());
        // }
        // unset($faqData['_token']);
        // Faq::create($faqData);
        // if(isset($faqData['service_id_fk'])) {
        //     return Redirect()->route("admin.faq.index")->with('success', 'Faq added successfully');
        // }else {
        //     return Redirect()->route("admin.faq.index")->with('success', 'Faq added successfully');
        // }
        $faq = new faq;
        $faq->s1h1 = $request->s1h1;
        $faq->s1p1 = $request->s1p1;
        $faq->s1img = $request->s1img;
        if($request->hasFile("s1img")){
            $file = $request->file("s1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $$faq->s1img = $filename;
         }
        $faq->s2h1 = $request->s2h1;

        $faq->s3sh1 = $request->s3sh1;
        $faq->s3h1 = $request->s3h1;
        $faq->s3p1 = $request->s3p1;
        $faq->s3l1 = $request->s3l1;
        $faq->s3btn = $request->s3btn;

        $faq->save();

        return Redirect()->route("admin.faq.index")->with('success', 'Page added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        $viewData = array(
            'pageName' => 'Update Faq',
            'faq' => $faq,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Faq',
                    'class' => '',
                    'url' => route('admin.faq.index')
                ),
                (object)array(
                    'name' => 'Update Faq',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            ) 
        );
        return view('admin.faq.addeditfaq')->with($viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $faq =  Faq::findOrFail($id);
        $faq->s1h1 = $request->s1h1;
        $faq->s1p1 = $request->s1p1;
        // $faq->s1img = $request->s1img;
        if($request->hasFile("s1img")){
            $file = $request->file("s1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
        $faq->s1img = $filename;
         }
        $faq->s2h1 = $request->s2h1;
        $faq->s3sh1 = $request->s3sh1;
        $faq->s3h1 = $request->s3h1;
        $faq->s3p1 = $request->s3p1;
        $faq->s3l1 = $request->s3l1;
        $faq->s3btn = $request->s3btn;

        $faq->save();
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        //     'description' => 'required',
        //     'order_no' =>'required|gt:0'
        // ]);
        // if ($validator->fails()) {
        //     return Redirect()->route("admin.faq.update", ['id' =>$id])->with('error', $validator->errors());
        // }

        // $faqData = $request->all();
        // unset($faqData['_token']);
        // Faq::where('id', $id)->update($faqData);
        // if(isset($faqData['service_id_fk'])) {
        //     return Redirect()->route("admin.faq.index")->with('success', 'Faq updated successfully');
        // }else {
            return Redirect()->route("admin.faq.index")->with('success', 'Faq updated successfully');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faq::destroy($id);
        return Redirect()->back()->with('success', 'Faq deleted successfully');
    }
}
