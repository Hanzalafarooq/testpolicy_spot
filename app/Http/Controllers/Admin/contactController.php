<?php

namespace App\Http\Controllers\Admin;
use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class contactController extends Controller
{
    public function index()
    {
        $viewData = array(
            'pageName' => 'contact',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'contact',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.contact.contact')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        $query = contact::query();
        if($request->search['value']) {
            $searchStrings = explode(' ', $request->search['value']);
            foreach($searchStrings as $searchString) {
                $query->where(function ($query) use ($searchString) {
                    $query->orWhere('title', 'like', '%' . $searchString . '%');
                    $query->orWhere('slug', 'like', '%' . $searchString . '%');
                });
            }
        }
        if($request->order) {
            $orderableColumns = array('title', 'slug', '');
            $query->orderBy($orderableColumns[$request->order['0']['column']], $request->order['0']['dir']);
        }else {
            $query->orderBy('id', 'DESC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']);
        $query->limit($input['length']);
        $filteredPages = $query->get();
        foreach($filteredPages as $contact) {
            $contact->actions = '<a class="edit_page" href="'.route('admin.contact.edit', ['id' => $contact->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>';
            if($contact->id > 5) {
                $contact->actions .= '<a class="deleteprocess" data-type="page" data-id="'.$contact->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformpage'. $contact->id.'" method="POST" action="'.route('admin.contact.destroy', ['id' => $contact->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';
            }
        }
        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => contact::count(),
            'recordsFiltered' => $recordsFiltered,
            "data" =>  $filteredPages
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
            'pageName' => 'Add Page',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Page',
                    'class' => '',
                    'url' => route('admin.contact.index')
                ),
                (object)array(
                    'name' => 'Add New Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.contact.addeditcontact')->with($viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


{
   $contact = new contact;
   $contact->s1h1 = $request->s1h1;
   $contact->s1p1 = $request->s1p1;
   $contact->s1btn = $request->s1btn;
   $contact->s1img = $request->s1img;
    if($request->hasFile("s1img")){
        $file = $request->file("s1img");
        $filename = uniqid().".".$file->getClientOriginalExtension();
        $file->move('banner/img',$filename );
        $contact->s1img = $filename;
     }
     $contact->s2sh1 = $request->s2sh1;
     $contact->s2h1 = $request->s2h1;
     $contact->s2btn = $request->s2btn;
   $contact->locationh1 = $request->locationh1;
   $contact->locationp1 = $request->locationp1;
   $contact->locationh2 = $request->locationh2;
   $contact->locationp2 = $request->locationp2;

   $contact->contact = $request->contact;
   $contact->s3btn = $request->s3btn;

   $contact->save();


        return Redirect()->route("admin.contact.index")->with('success', 'Page added successfully');
}


    // {
    //     $validator = Validator::make($request->all(), [
    //     //     'title' => 'required|max:255',
    //     //     'description' => 'required',
    //         'featured_image' => 'required|file|mimes:jpg,jpeg,png|max:5120',
    //     //     'meta_title' => 'required|max:255',
    //     //     'meta_description' => 'required|max:255',
    //     ]);

    //     // if ($validator->fails()) {
    //     //     return Redirect()->route("admin.page.create")->with('error', $validator->errors());
    //     // }
    //     $page = new Page;
    //     $featuredImage = null;
    //     if ($request->hasfile('featured_image')) {
    //         $file = $request->file('featured_image');
    //         if ($file->isValid()) {
    //             $featuredImage = FileHandler::uploadImage($file);
    //             if(!$featuredImage) {
    //                 // $page->featured_image = $featuredImage;
    //                 $page->featured_image= $request->featured_image;

    //                 return Redirect()->route("admin.page.create")->with('error', 'Something went wrong. Please try again');
    //             }
    //         }else {
    //             return Redirect()->route("admin.page.create")->with('error', 'Featured image is not valid');
    //         }
    //     }
    //     $page->title = $request->title;
    //     $page->hphone = $request->hphone;
    //     $page->hemail = $request->hemail;
    //     $page->s1h1 = $request->s1h1;
    //     $page->s1h2 = $request->s1h2;
    //     $page->s1btn = $request->s1btn;
    //     $page->s2h1 = $request->s2h1;
    //     $page->s2h2 = $request->s2h2;
    //     $page->s3h1 = $request->s3h1;
    //     $page->s3disc = $request->s3disc;
    //     $page->s4h1 = $request->s4h1;
    //     $page->s4disc = $request->s4disc;
    //     $page->s5h1 = $request->s5h1;
    //     $page->s5disc = $request->s5disc;
    //     $page->s6h1 = $request->s6h1;
    //     $page->s6disc = $request->s6disc;
    //     $page->s7h1 = $request->s7h1;
    //     $page->s7btn = $request->s7btn;
    //     $page->s8h1 = $request->s8h1;
    //     $page->s8h2 = $request->s8h2;
    //     $page->s8btn = $request->s8btn;
    //     $page->fdisc = $request->fdisc;
    //     $page->femail = $request->femail;
    //     $page->fphone = $request->fphone;
    //     $page->fh1 = $request->fh1;
    //     $page->flink1 = $request->fl1;
    //     $page->flink2 = $request->fl2;
    //     $page->flink3 = $request->fl3;
    //     $page->flink4 = $request->fl4;
    //     $page->flink5 = $request->fl5;
    //     $page->flink6 = $request->fl6;
    //     $page->flink7 = $request->fl7;
    //     $page->flink8 = $request->fl8;
    //     $page->flink9 = $request->fl9;
    //     $page->fh2 = $request->fh2;
    //     $page->fh2link1 = $request->fh2l1;
    //     $page-> fh2link2 = $request->fh2l2;


    //     // $page->meta_description = $request->meta_description;
    //     $page->save();
    //     return Redirect()->route("admin.page.index")->with('success', 'Page added successfully');
    // }

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
        $contact = contact::findOrFail($id);
        $viewData = array(
            'pageName' => 'Update Page',
            'contact' => $contact,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'page',
                    'class' => '',
                    'url' => route('admin.contact.index')
                ),
                (object)array(
                    'name' => 'Update Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.contact.addeditcontact')->with($viewData);
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
        $contact = contact::findOrFail($id);
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:255',
        //     'description' => 'required',
            // 'featured_image' => 'file|mimes:jpg,jpeg,png|max:5120',
        //     'meta_title' => 'required|max:255',
        //     'meta_description' => 'required|max:255',
        // ]);
        // if ($validator->fails()) {
        //     return Redirect()->route("admin.page.update", ['id' =>$id])->with('error', $validator->errors());
        // }

        // if ($request->hasfile('featured_image')) {
        //     $file = $request->file('featured_image');
        //     if ($file->isValid()) {
        //         $featuredImage = FileHandler::uploadImage($file);
        //         if(!$featuredImage) {
        //             return Redirect()->route("admin.page.update", ['id' =>$id])->with('error', 'Something went wrong. Please try again');
        //         }else {
        //             $page->featured_image = $featuredImage;
        //         }
        //     }else {
        //         return Redirect()->route("admin.page.update", ['id' =>$id])->with('error', 'Featured image is not valid');
        //     }
        // // }
        // if($id > 5) {
        //     $page->title = $request->title;
        // }
        // if ($request->hasFile('s3c2')) {
        //     $delete_img = 'new_frontend_asetts/img/' . $page->s3c2;
        //     if (File::exists($delete_img)) {
        //         File::delete($delete_img);
        //     }
        //     $file = $request->File('s3c2');
        //     $filename = uniqid() . "." . $file->getClientOriginalExtension();
        //     $file->move('new_frontend_asetts/img', $filename);
        //     $page->s3c2 = $filename;
        // }
        // $page->featured_image = $request->featured_image;

        $contact->s1h1 = $request->s1h1;
   $contact->s1p1 = $request->s1p1;
   $contact->s1btn = $request->s1btn;
//    $contact->s1img = $request->s1img;
    if($request->hasFile("s1img")){
        $file = $request->file("s1img");
        $filename = uniqid().".".$file->getClientOriginalExtension();
        $file->move('banner/img',$filename );
        $contact->s1img = $filename;
     }
     $contact->s2sh1 = $request->s2sh1;
     $contact->s2h1 = $request->s2h1;
     $contact->s2btn = $request->s2btn;
   $contact->locationh1 = $request->locationh1;
   $contact->locationp1 = $request->locationp1;
   $contact->locationh2 = $request->locationh2;
   $contact->locationp2 = $request->locationp2;

   $contact->contact = $request->contact;
   $contact->s3btn = $request->s3btn;

   $contact->update();


        return Redirect()->route("admin.contact.index")->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contact::destroy($id);
        return Redirect()->route("admin.contact.index")->with('success', 'Page deleted successfully');
    }
}


