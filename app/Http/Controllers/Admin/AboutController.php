<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Testimonial;
use App\Common\FileHandler;
use Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        $viewData = array(
            'pageName' => 'About',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'About',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.About.about')->with($viewData);
    }
    public function fpage(Request $request)
        {
            $viewData = array(
                'pageName' => 'About',
                'breadCrumbs' => array(
                    (object)array(
                        'name' => 'Dashboard',
                        'class' => '',
                        'url' => route('admin.dashboard')
                    ),
                    (object)array(
                        'name' => 'About',
                        'class' => 'active',
                        'url' => 'javascript:;'
                    )
                )
            );
        return view('admin.About.abpage')->with($viewData);
    }
    // public function indexx(Request $request){
    //     // dd($request);
    //     // $aboutUsData = About::all();
    //     // dd($aboutUsData);
    // return view('admin.about.about');
    // }



// namespace App\Http\Controllers\Admin;

// use App\Common\FileHandler;
// use Redirect;
// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Page;
// use Illuminate\Support\Facades\Validator;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tabledata(Request $request) {

// $data = About::get();
// return $data;
// die;

        $input = $request->all();
        $query = About::query();
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
        foreach($filteredPages as $about) {
            $about->actions = '<a class="edit_page" href="'.route('admin.about.edit', ['id' => $about->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>';
            // if($page->id > 5) {
                $about->actions .= '<a class="deleteprocess" data-type="page" data-id="'.$about->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformpage'. $about->id.'" method="POST" action="'.route('admin.about.destroy', ['id' => $about->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';
            // }
        }
        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => About::count(),
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
                    // 'url' => route('admin.page.index')
                    'url' => route('admin.about.index')
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
        // echo "hi";die;
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'featured_image' => 'required|file|mimes:jpg,jpeg,png|max:5120',
        //     'meta_title' => 'required|max:255',
        //     'meta_description' => 'required|max:255',
        // ]);

        // if ($validator->fails()) {
        //     return Redirect()->route("admin.page.create")->with('error', $validator->errors());
        // }
        // $featuredImage = null;
        // if ($request->hasfile('featured_image')) {
        //     $file = $request->file('featured_image');
        //     if ($file->isValid()) {
        //         $featuredImage = FileHandler::uploadImage($file);
        //         if(!$featuredImage) {
        //             return Redirect()->route("admin.page.create")->with('error', 'Something went wrong. Please try again');
        //         }
        //     }else {
        //         return Redirect()->route("admin.page.create")->with('error', 'Featured image is not valid');
        //     }
        // }
        $about = new About;
        $about->s1h1 = $request->s1h1;
        $about->s1img = $request->s1img;
        if($request->hasFile("s1img")){
            $file = $request->file("s1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s1img = $filename;
         }
        $about->s1h2 = $request->s1h2;
        $about->s1p1 = $request->s1p1;
        $about->s1btn = $request->s1btn;
        $about->s2h1 = $request->s2h1;
        $about->s2img = $request->s2img;//img/images
        if($request->hasFile("s2img")){
            $file = $request->file("s2img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s2img = $filename;
         }
        $about->s2p1 = $request->s2p1;
        $about->s2p2 = $request->s2p2;
        $about->s3sh1 = $request->s3sh1;
        $about->s3h1 = $request->s3h1;
        $about->s3p1 = $request->s3p1;
        $about->s3img = $request->s3img;//img/images
        if($request->hasFile("s3img")){
            $file = $request->file("s3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s3img = $filename;
         }
        $about->s3l1 = $request->s3l1;
        $about->s3l2 = $request->s3l2;
        $about->s3l3 = $request->s3l3;
        $about->s3btn = $request->s3btn;
        $about->s4sh1 = $request->s4sh1;
        $about->s4h1 = $request->s4h1;
        $about->s4img = $request->s4img;//image
        if($request->hasFile("s4img")){
            $file = $request->file("s4img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s4img = $filename;
         }
        $about->s4p1 = $request->s4p1;
        $about->s4l1 = $request->s4l1;
        $about->s4l1 = $request->s4l1;
        $about->s4l2 = $request->s4l2;
        $about->s4l3 = $request->s4l3;
        $about->s4btn = $request->s4btn;
        $about->s5h1 = $request->s5h1;
        $about->s5p1 = $request->s5p1;
        $about->s5c1img = $request->s5c1img;//image
        if($request->hasFile("s5c1img")){
            $file = $request->file("s5c1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c1img = $filename;
         }
        $about->s5c2img = $request->s5c2img;//image
        if($request->hasFile("s5c2img")){
            $file = $request->file("s5c2img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c2img = $filename;
         }
        $about->s5c3img = $request->s5c3img;//image
        if($request->hasFile("s5c3img")){
            $file = $request->file("s5c3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c3img = $filename;
         }
        $about->s5c4img = $request->s5c4img;//image
        if($request->hasFile("s5c4img")){
            $file = $request->file("s5c4img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c4img = $filename;
         }
        $about->s5c1h = $request->s5c1h;
        $about->s5c1p = $request->s5c1p;
        $about->s5c2h = $request->s5c2h;
        $about->s5c2p = $request->s5c2p;
        $about->s5c3h = $request->s5c3h;
        $about->s5c3p = $request->s5c3p;
        $about->s5c4h = $request->s5c4h;
        $about->s5c4p = $request->s5c4p;
        $about->s6h1 = $request->s6h1;
        $about->s6h2 = $request->s6h2;
        $about->s6btn = $request->s6btn;
        $about->save();

        return Redirect()->route("admin.about.index")->with('success', 'Page added successfully');
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
        $about = About::findOrFail($id);
        $viewData = array(
            'pageName' => 'Update Page',
            'about' => $about,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Page',
                    'class' => '',
                    'url' => route('admin.about.index')
                ),
                (object)array(
                    'name' => 'Update Page',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.about.about')->with($viewData);
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
        $about = about::findOrFail($id);
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        //     'featured_image' => 'file|mimes:jpg,jpeg,png|max:5120',
        //     'meta_title' => 'required|max:255',
        //     'meta_description' => 'required|max:255',
        // ]);
        // if ($validator->fails()) {
        //     return Redirect()->route("admin.about.update", ['id' =>$id])->with('error', $validator->errors());
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
        // }
        // if($id > 5) {
            // $page->title = $request->title;

        // $page->description = $request->description;
        // $page->meta_title = $request->meta_title;
        // $page->meta_description = $request->meta_description;
        // $page->save();
        $about =  About::findOrFail($id);
        $about->s1h1 = $request->s1h1;
        // $about->s1img = $request->s1img;
        if($request->hasFile("s1img")){
            $file = $request->file("s1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s1img = $filename;
         }
        $about->s1h2 = $request->s1h2;
        $about->s1p1 = $request->s1p1;
        $about->s1btn = $request->s1btn;
        $about->s2h1 = $request->s2h1;
        // $about->s2img = $request->s2img;//img/images
        if($request->hasFile("s2img")){
            $file = $request->file("s2img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s2img = $filename;
         }
        $about->s2p1 = $request->s2p1;
        $about->s2p2 = $request->s2p2;
        $about->s3sh1 = $request->s3sh1;
        $about->s3h1 = $request->s3h1;
        $about->s3p1 = $request->s3p1;
        // $about->s3img = $request->s3img;//img/images
        if($request->hasFile("s3img")){
            $file = $request->file("s3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s3img = $filename;
         }
        $about->s3l1 = $request->s3l1;
        $about->s3l2 = $request->s3l2;
        $about->s3l3 = $request->s3l3;
        $about->s3btn = $request->s3btn;
        $about->s4sh1 = $request->s4sh1;
        $about->s4h1 = $request->s4h1;
        // $about->s4img = $request->s4img;//image
        if($request->hasFile("s4img")){
            $file = $request->file("s4img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s4img = $filename;
         }
        $about->s4p1 = $request->s4p1;
        $about->s4l1 = $request->s4l1;
        $about->s4l1 = $request->s4l1;
        $about->s4l2 = $request->s4l2;
        $about->s4l3 = $request->s4l3;
        $about->s4btn = $request->s4btn;
        $about->s5h1 = $request->s5h1;
        $about->s5p1 = $request->s5p1;
        // $about->s5c1img = $request->s5c1img;//image
        if($request->hasFile("s5c1img")){
            $file = $request->file("s5c1img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c1img = $filename;
         }
        // $about->s5c2img = $request->s5c2img;//image
        if($request->hasFile("s5c2img")){
            $file = $request->file("s5c2img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c2img = $filename;
         }
        // $about->s5c3img = $request->s5c3img;//image
        if($request->hasFile("s5c3img")){
            $file = $request->file("s5c3img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c3img = $filename;
         }
        // $about->s5c4img = $request->s5c4img;//image
        if($request->hasFile("s5c4img")){
            $file = $request->file("s5c4img");
            $filename = uniqid().".".$file->getClientOriginalExtension();
            $file->move('banner/img',$filename );
            $about->s5c4img = $filename;
         }
        $about->s5c1h = $request->s5c1h;
        $about->s5c1p = $request->s5c1p;
        $about->s5c2h = $request->s5c2h;
        $about->s5c2p = $request->s5c2p;
        $about->s5c3h = $request->s5c3h;
        $about->s5c3p = $request->s5c3p;
        $about->s5c4h = $request->s5c4h;
        $about->s5c4p = $request->s5c4p;
        $about->s6h1 = $request->s6h1;
        $about->s6h2 = $request->s6h2;
        $about->s6btn = $request->s6btn;
        $about->save();
        return Redirect()->route("admin.about.front")->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        about::destroy($id);
        return Redirect()->route("admin.about.front")->with('success', 'Page deleted successfully');
    }
}
