<?php

namespace App\Http\Controllers\Admin;
use App\Models\add_faqs;
use App\Models\insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class addfaqController extends Controller
{
    /* @return \Illuminate\Http\Response
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
       return view('admin.Add_faq.faqs')->with($viewData);
   }

   public function tabledata(Request $request) {
       $input = $request->all();
       $query = new add_faqs();
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
           $faq->actions = '<a class="edit_faq" href="'.route('admin.faqs.edit', ['id' => $faq->id]).'">
                       <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                   </a>
                   <a class="deleteprocess" data-type="faq" data-id="'.$faq->id.'" href="javascript:;">
                       <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                   </a>
                   <form class="deleteformfaq'. $faq->id.'" method="POST" action="'.route('admin.faqs.destroy', ['id' => $faq->id]).'">
                     <input type="hidden" name="_token" value="'.csrf_token().'">
                     <input type="hidden" name="_method" value="DELETE">
                   </form>';
       }
       $data = [
           'draw' => $input['draw'],
           'recordsTotal' => add_faqs::count(),
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
           'pageName' => 'Add Faqs',
           'breadCrumbs' => array(
               (object)array(
                   'name' => 'Dashboard',
                   'class' => '',
                   'url' => route('admin.dashboard')
               ),
               (object)array(
                   'name' => 'Faq',
                   'class' => '',
                   'url' => route('admin.faqs.index')
               ),
               (object)array(
                   'name' => 'Add New Faqs',
                   'class' => 'active',
                   'url' => 'javascript:;'
               )
           )
       );
       $insurance = insurance::get();
       $viewData['insurance']= $insurance;
       return view('admin.add_faq.addeditfaqs')->with($viewData);
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
       $faqs = new add_faqs;
       $faqs->insurance_id = $request->option;
       $faqs->question = $request->question;
       $faqs->answer = $request->answer;
      $faqs->title = $request->title;

       $faqs->save();

       return Redirect()->route("admin.faqs.index")->with('success', 'Page added successfully');
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
    // $viewData = array(
    //     'pageName' => 'Update Page',
    //     'insurance' => $insurance,
    //     'category' => $category,
    //     'breadCrumbs' => array(
    //         (object)array(
    //             'name' => 'Dashboard',
    //             'class' => '',
    //             'url' => route('admin.dashboard')
    //         ),
    // return $id;die;
       $faq = add_faqs::findOrFail($id);
       $insurance = insurance::get();
    //    $addfaqs = add_faqs::get();
       $viewData = array(
           'pageName' => 'Update Faq',
           'insurance' => $insurance,
           'faqs' => $faq,
        //    'faq' => $faq,
           'breadCrumbs' => array(
               (object)array(
                   'name' => 'Dashboard',
                   'class' => '',
                   'url' => route('admin.dashboard')
               ),
               (object)array(
                   'name' => 'Faq',
                   'class' => '',
                   'url' => route('admin.faqs.index')
               ),
               (object)array(
                   'name' => 'Update Faq',
                   'class' => 'active',
                   'url' => 'javascript:;'
               )
           )
       );
    //    $viewData['insurance']= $insurance;
       return view('admin.Add_faq.addeditfaqs')->with($viewData,);
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
      $faqs =  add_faqs::findOrFail($id);
      $faqs->insurance_id = $request->option;
      $faqs->question = $request->question;
      $faqs->title = $request->title;
      $faqs->answer = $request->answer;
       $faqs->save();
           return Redirect()->route("admin.faqs.index")->with('success', 'Faq updated successfully');
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
    add_faqs::destroy($id);
       return Redirect()->back()->with('success', 'Faq deleted successfully');
   }
}

