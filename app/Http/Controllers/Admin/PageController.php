<?php

namespace App\Http\Controllers\Admin;

use App\Common\FileHandler;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = array(
            'pageName' => 'Page',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.page.page')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        $query = Page::query();
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
        foreach($filteredPages as $page) {
            $page->actions = '<a class="edit_page" href="'.route('admin.page.edit', ['id' => $page->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>';
            if($page->id > 5) {
                $page->actions .= '<a class="deleteprocess" data-type="page" data-id="'.$page->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformpage'. $page->id.'" method="POST" action="'.route('admin.page.destroy', ['id' => $page->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';
            }
        }
        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => Page::count(),
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
                    'url' => route('admin.page.index')
                ),
                (object)array(
                    'name' => 'Add New Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.page.addeditpage')->with($viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


{
    $page = new Page;
    $page->title = $request->title;
        $page->hphone = $request->hphone;
        $page->featured_image = $request->featured_image;
        if($request->hasFile("featured_image")){
           $file = $request->file("featured_image");
           $filename = uniqid().".".$file->getClientOriginalExtension();
           $file->move('banner/img',$filename );
           $page->featured_image = $filename;
        }
        $page->s3img1 = $request->s3img1;
        $page->s3img2 = $request->s3img2;
        $page->s3img3 = $request->s3img3;
        if($request->hasFile("s3img1")){
            $file = $request->file("s3img1");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s3img1 = $filename;
         }
         if($request->hasFile("s3img2")){
            $file = $request->file("s3img2");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s3img2 = $filename;
         }
         if($request->hasFile("s3img3")){
            $file = $request->file("s3img3");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s3img3 = $filename;
         }
        $page->hemail = $request->hemail;
        $page->s1h1 = $request->s1h1;
        $page->s1h2 = $request->s1h2;
        $page->s1btn = $request->s1btn;
        $page->s2h1 = $request->s2h1;
        $page->s2h2 = $request->s2h2;

        $page->s3h1 = $request->s3h1;
        $page->s3disc = $request->s3disc;
        $page->s3c1h1 = $request->s3c1h1;
        $page->s3c1disc = $request->s3c1disc;
        $page->s3c2h1 = $request->s3c2h1;
        $page->s3c2disc = $request->s3c2disc;
        $page->s3c3h1 = $request->s3c3h1;
        $page->s3c3disc = $request->s3c3disc;
        $page->s4h1 = $request->s4h1;
        $page->s4disc = $request->s4disc;
        $page->s5h1 = $request->s5h1;
        $page->s5disc = $request->s5disc;
        $page->s6h1 = $request->s6h1;
        $page->s6disc = $request->s6disc;
        $page->s7h1 = $request->s7h1;
        $page->s7btn = $request->s7btn;
        $page->s8h1 = $request->s8h1;
        $page->s8h2 = $request->s8h2;
        $page->s8btn = $request->s8btn;
        $page->fdisc = $request->fdisc;
        $page->femail = $request->femail;
        $page->fphone = $request->fphone;
        $page->fh1 = $request->fh1;
        $page->flink1 = $request->fl1;
        $page->flink2 = $request->fl2;
        $page->flink3 = $request->fl3;
        $page->flink4 = $request->fl4;
        $page->flink5 = $request->fl5;
        $page->flink6 = $request->fl6;
        $page->flink7 = $request->fl7;
        $page->flink8 = $request->fl8;
        $page->flink9 = $request->fl9;
        $page->fh2 = $request->fh2;
        $page->fh2link1 = $request->fh2l1;
        $page-> fh2link2 = $request->fh2l2;


        // $page->meta_description = $request->meta_description;
        $page->save();
        return Redirect()->route("admin.page.index")->with('success', 'Page added successfully');
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
        $page = Page::findOrFail($id);
        $viewData = array(
            'pageName' => 'Update Page',
            'page' => $page,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Page',
                    'class' => '',
                    'url' => route('admin.page.index')
                ),
                (object)array(
                    'name' => 'Update Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.page.addeditpage')->with($viewData);
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
        $page = Page::findOrFail($id);
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

        if($request->hasFile("featured_image")){
            $delete_img = 'banner/img' . $page->featured_image;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
           $file = $request->file("featured_image");
           $filename = uniqid().".".$file->getClientOriginalExtension();
           $file->move('banner/img',$filename );
           $page->featured_image = $filename;
        }
        // $page->s3img1 = $request->s3img1;
        // $page->s3img2 = $request->s3img2;
        // $page->s3img3 = $request->s3img3;
        if($request->hasFile("s3img1")){
            $delete_img = 'banner/img' . $page->s3img1;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s3img1");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s3img1 = $filename;
         }
         if($request->hasFile("s3img2")){
            $delete_img = 'banner/img' . $page->s3img2;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s3img2");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s3img2 = $filename;
         }
         if($request->hasFile("s3img3")){
            $delete_img = 'banner/img' . $page->s3img3;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s3img3");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s3img3 = $filename;
         }
        // $page->featured_image = $featuredImage;
        $page->hphone = $request->hphone;
        $page->hemail = $request->hemail;
        $page->s1h1 = $request->s1h1;
        $page->s1h2 = $request->s1h2;
        // $page->featured_image = $request->featured_image;
        $page->s1btn = $request->s1btn;
        $page->s2h1 = $request->s2h1;
        $page->s2h2 = $request->s2h2;
        $page->s3h1 = $request->s3h1;
        $page->s3disc = $request->s3disc;
        $page->s3c1h1 = $request->s3c1h1;
        $page->s3c1disc = $request->s3c1disc;
        $page->s3c2h1 = $request->s3c2h1;
        $page->s3c2disc = $request->s3c2disc;
        $page->s3c3h1 = $request->s3c3h1;
        $page->s3c3disc = $request->s3c3disc;

        $page->s4h1 = $request->s4h1;
        $page->s4disc = $request->s4disc;
        // $page->s4c1img = $request->s4c1img;
        if($request->hasFile("s4c1img")){
            $delete_img = 'banner/img' . $page->s4c1img;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s4c1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s4c1img = $filename;
        }
        $page->s4c1h1 = $request->s4c1h1;
        $page->s4c1disc = $request->s4c1disc;
        // $page->s4c2img = $request->s4c2img;
        if($request->hasFile("s4c2img")){
            $delete_img = 'banner/img' . $page->s4c2img;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s4c2img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s4c2img = $filename;
         }
        $page->s4c2h1 = $request->s4c2h1;
        $page->s4c2disc = $request->s4c2disc;
        // $page->s4c3img = $request->s4c3img;
        if($request->hasFile("s4c3img")){
            $delete_img = 'banner/img' . $page->s4c3img;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s4c3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s4c3img = $filename;
         }
        $page->s4c3h1 = $request->s4c3h1;
        $page->s4c3disc = $request->s4c3disc;
        // $page->s4c4img = $request->s4c4img;
        if($request->hasFile("s4c4img")){
            $delete_img = 'banner/img' . $page->s4c4img;
            if (File::exists($delete_img)) {
                File::delete($delete_img);
            }
            $file = $request->file("s4c4img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $page->s4c4img = $filename;
         }
        $page->s4c4h1 = $request->s4c4h1;
        $page->s4c4disc = $request->s4c4disc;

        $page->s5h1 = $request->s5h1;
        $page->s5disc = $request->s5disc;
        $page->s6h1 = $request->s6h1;
        $page->s6disc = $request->s6disc;
        $page->s7h1 = $request->s7h1;
        $page->s7btn = $request->s7btn;
        $page->s8h1 = $request->s8h1;
        $page->s8h2 = $request->s8h2;
        $page->s8btn = $request->s8btn;
        $page->fdisc = $request->fdisc;
        $page->femail = $request->femail;
        $page->fphone = $request->fphone;
        $page->fh1 = $request->fh1;
        $page->flink1 = $request->fl1;
        $page->flink2 = $request->fl2;
        $page->flink3 = $request->fl3;
        $page->flink4 = $request->fl4;
        $page->flink5 = $request->fl5;
        $page->flink6 = $request->fl6;
        $page->flink7 = $request->fl7;
        $page->flink8 = $request->fl8;
        $page->flink9 = $request->fl9;
        $page->fh2 = $request->fh2;
        $page->fh2link1 = $request->fh2l1;
        $page-> fh2link2 = $request->fh2l2;
        $page->save();
        return Redirect()->route("admin.page.index")->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return Redirect()->route("admin.page.index")->with('success', 'Page deleted successfully');
    }
}
