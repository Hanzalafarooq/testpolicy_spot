<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\insurance;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class insuranceController extends Controller
{
    //
    public function index()
    {
        $viewData = array(
            'pageName' => 'insurance',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'insurance',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.insurance.insurance')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        $query = insurance::query();
        if($request->search['value']) {
            $searchStrings = explode(' ', $request->search['value']);
            foreach($searchStrings as $searchString) {
                $query->where(function ($query) use ($searchString) {
                    $query->orWhere('name', 'like', '%' . $searchString . '%');
                    $query->orWhere('slug', 'like', '%' . $searchString . '%');
                });
            }
        }
        if($request->order) {
            $orderableColumns = array('name', 'slug', '');
            $query->orderBy($orderableColumns[$request->order['0']['column']], $request->order['0']['dir']);
        }else {
            $query->orderBy('id', 'DESC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']);
        $query->limit($input['length']);
        $filteredPages = $query->get();
        foreach($filteredPages as $insurance) {
            $insurance->actions = '<a class="edit_page" href="'.route('admin.insurance.edit', ['id' => $insurance->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>';
            if($insurance->id > 5) {
                $insurance->actions .= '<a class="deleteprocess" data-type="page" data-id="'.$insurance->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformpage'. $insurance->id.'" method="POST" action="'.route('admin.insurance.destroy', ['id' => $insurance->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';
            }
        }
        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => insurance::count(),
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
                    'url' => route('admin.insurance.index')
                ),
                (object)array(
                    'name' => 'Add New Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        $category = category::get();
        $viewData['category']= $category;
        return view('admin.insurance.addeditinsurance')->with($viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


{

// return $request;die;
    $insurance = new insurance;


   $insurance->insurance_id = $request->insurance_id;
   $insurance->insurance_id = $request->option;



//    $insurance->s1h1 = $request->option;
   $insurance->title = $request->title;
   $insurance->slug = str::slug($request->title);
   $insurance->s1p1 = $request->s1p1;
   $insurance->s1btn = $request->s1btn;
   $insurance->s1img = $request->s1img;
    if($request->hasFile("s1img")){
        $file = $request->file("s1img");
        $filename = uniqid().".".$file->getClientOriginalExtension();
        $file->move('banner/img',$filename );
        $insurance->s1img = $filename;
     }
    //  $insurance->s2sh1 = $request->s2sh1;
     $insurance->s2h1 = $request->s2h1;
    $insurance->s2c1img = $request->s2c1img;
    if($request->hasFile("s2c1img")){
        $file = $request->file("s2c1img");
        $filename = uniqid().".".$file->getClientOriginalExtension();
        $file->move('banner/img',$filename );
        $insurance->s2c1img = $filename;
     }
   $insurance->s2c1h = $request->s2c1h;
   $insurance->s2c2img = $request->s2c2img;
   if($request->hasFile("s2c2img")){
       $file = $request->file("s2c2img");
       $filename = uniqid().".".$file->getClientOriginalExtension();
       $file->move('banner/img',$filename );
       $insurance->s2c2img = $filename;
    }
   $insurance->s2c2h = $request->s2c2h;
   $insurance->s2c3img = $request->s2c3img;
   if($request->hasFile("s2c3img")){
       $file = $request->file("s2c3img");
       $filename = uniqid().".".$file->getClientOriginalExtension();
       $file->move('banner/img',$filename );
       $insurance->s2c3img = $filename;
    }
   $insurance->s2c3h = $request->s2c3h;
   $insurance->s2c4img = $request->s2c4img;
   if($request->hasFile("s2c4img")){
       $file = $request->file("s2c4img");
       $filename = uniqid().".".$file->getClientOriginalExtension();
       $file->move('banner/img',$filename );
       $insurance->s2c4img = $filename;
    }
   $insurance->s2c4h = $request->s2c4h;

   $insurance->s3h1 = $request->s3h1;
   $insurance->s3p1 = $request->s3p1;
   $insurance->s3img = $request->s3img;
   if($request->hasFile("s3img")){
       $file = $request->file("s3img");
       $filename = uniqid().".".$file->getClientOriginalExtension();
       $file->move('banner/img',$filename );
       $insurance->s3img = $filename;
    }
   $insurance->s3btn = $request->s3btn;

   $insurance->s4h1 = $request->s4h1;
   $insurance->s4btn = $request->s4btn;
   $insurance->s5h1 = $request->s5h1;
   $insurance->s5h2 = $request->s5h2;
   $insurance->s5btn = $request->s5btn;
   $insurance->save();


        return Redirect()->route("admin.insurance.index")->with('success', 'Page added successfully');
}


    // {
    //     $validator = Validator::make($request->all(), [
    //     //     'name' => 'required|max:255',
    //     //     'description' => 'required',
    //         'featured_image' => 'required|file|mimes:jpg,jpeg,png|max:5120',
    //     //     'meta_name' => 'required|max:255',
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
    //     $page->name = $request->name;
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
        $insurance = insurance::findOrFail($id);
        $category = category::get();
        $viewData = array(
            'pageName' => 'Update Page',
            'insurance' => $insurance,
            'category' => $category,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'page',
                    'class' => '',
                    'url' => route('admin.insurance.index')
                ),
                (object)array(
                    'name' => 'Update Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        // $category = category::get();
        // $viewData['category'] = $category;
        return view('admin.insurance.addeditinsurance')->with($viewData);
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
        // return $request;die;
        $insurance = insurance::findOrFail($id);

        $insurance->insurance_id = $request->insurance_id;
        // $insurance->category_id = $request->category_id;

   $insurance->title = $request->title;
   $insurance->slug = str::slug($request->title);
        $insurance->insurance_id = $request->option;
        $insurance->s1p1 = $request->s1p1;
        $insurance->s1btn = $request->s1btn;
        // $insurance->s1img = $request->s1img;
         if($request->hasFile("s1img")){
             $file = $request->file("s1img");
             $filename = uniqid().".".$file->getClientOriginalExtension();
             $file->move('banner/img',$filename );
             $insurance->s1img = $filename;
          }
         //  $insurance->s2sh1 = $request->s2sh1;
          $insurance->s2h1 = $request->s2h1;
        //  $insurance->s2c1img = $request->s2c1img;
         if($request->hasFile("s2c1img")){
             $file = $request->file("s2c1img");
             $filename = uniqid().".".$file->getClientOriginalExtension();
             $file->move('banner/img',$filename );
             $insurance->s2c1img = $filename;
          }
        $insurance->s2c1h = $request->s2c1h;
        // $insurance->s2c2img = $request->s2c2img;
        if($request->hasFile("s2c2img")){
            $file = $request->file("s2c2img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $insurance->s2c2img = $filename;
         }
        $insurance->s2c2h = $request->s2c2h;
        // $insurance->s2c3img = $request->s2c3img;
        if($request->hasFile("s2c3img")){
            $file = $request->file("s2c3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $insurance->s2c3img = $filename;
         }
        $insurance->s2c3h = $request->s2c3h;
        // $insurance->s2c4img = $request->s2c4img;
        if($request->hasFile("s2c4img")){
            $file = $request->file("s2c4img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $insurance->s2c4img = $filename;
         }
        $insurance->s2c4h = $request->s2c4h;

        $insurance->s3h1 = $request->s3h1;
        $insurance->s3p1 = $request->s3p1;
        // $insurance->s3img = $request->s3img;
        if($request->hasFile("s3img")){
            $file = $request->file("s3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $insurance->s3img = $filename;
         }
        $insurance->s3btn = $request->s3btn;

        $insurance->s4h1 = $request->s4h1;
        $insurance->s4btn = $request->s4btn;
        $insurance->s5h1 = $request->s5h1;
        $insurance->s5h2 = $request->s5h2;
        $insurance->s5btn = $request->s5btn;


   $insurance->update();


        return Redirect()->route("admin.insurance.index")->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        insurance::destroy($id);
        return Redirect()->route("admin.insurance.index")->with('success', 'Page deleted successfully');
    }
}


