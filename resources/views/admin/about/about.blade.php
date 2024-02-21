<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs" />
    </x-slot>
    <div class="dealership-form">
        <form class="myform" method="POST"
            action="{{ !empty($about) ? route('admin.about.update', ['id' => $about->id]) : route('admin.about.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="card" style="border:2px solid grey">
                <legend><u>Section 1</u></legend>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>section1(h1)</label>
                        <input maxlength="255" type="text" name="s1h1" class="form-control" required
                            placeholder="section 1 (heading1)" value="{{ @$about->s1h1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section1(h2)</label>
                        <input maxlength="255" type="text" name="s1h2" class="form-control" required
                            placeholder="section 1 (heading2)" value="{{ @$about->s1h2 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section 1 (paragraph)</label>
                        <textarea type="text" name="s1p1" class="form-control" required placeholder="Add paragraph"
                            rows="5" required >{{ @$about->s1p1 }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Section 1 Image <a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image1');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s1img" id="featured_image1"  />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image1');"
                                src="{{ asset('banner/img/' .$about->s1img)}}"
                                alt="">
                        </div>
                    </div>

                    <div class="clearfix"></div>


                    <div class="form-group col-md-6">
                        <label>section1(btn)</label>
                        <input maxlength="255" type="text" name="s1btn" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s1btn }}" required>
                    </div>
                    <div class="col-md-6 ">
                        <label>Submit for Section 1</label>
                        <button type="submit" class="send-btn mt-2">Submit</button>
                    </div>
                </div>
            </div>

            <div class="card" style="border:2px solid grey">
                <legend><u>Section 2</u></legend>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>section2(h1)</label>
                        <input maxlength="255" type="text" name="s2h1" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s2h1 }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label>section 2 image <a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image2');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s2img" id="featured_image2" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image2');"
                                src="{{ asset('banner/img/' .$about->s2img)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(Para1)</label>
                        <textarea type="text" name="s2p1" class="form-control" required placeholder="Add paragraph"
                            rows="5" required>{{ @$about->s2p1 }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(Para2)</label>
                        <textarea type="text" name="s2p2" class="form-control" required placeholder="Add paragraph"
                            rows="5" required>{{ @$about->s2p2 }}</textarea>
                    </div>

                    <div class="col-md-6 ">
                        <label>Submit for Section 2</label>
                        <button type="submit" class="send-btn mt-2">Submit</button>
                    </div>
                </div>
            </div>
            <div class="card" style="border:2px solid grey">
                <legend><u>Section 3</u></legend>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>section3(Small Heading)</label>
                        <input maxlength="255" type="text" name="s3sh1" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s3sh1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(Heading 1)</label>
                        <input maxlength="255" type="text" name="s3h1" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s3h1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(Para1)</label>
                        <textarea type="text" name="s3p1" class="form-control" required placeholder="Add paragraph"
                            rows="5" required>{{ @$about->s3p1 }}</textarea>
                    </div>
                    {{-- <div class="form-group col-md-6">
        <label>Section 3 card1 img</label>
        <input type="file" name="s3img1" class="form-control" requiredlder="Add image"
            value="{{@$about->s3img1 }}">
    </div> --}}

                    <div class="form-group col-md-3">
                        <label>section 3 image <a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image3');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s3img" id="featured_image3" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image3');"
                                src="{{ asset('banner/img/' .$about->s3img)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(List 1)</label>
                        <input maxlength="255" type="text" name="s3l1" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s3l1 }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>section3(List 2)</label>
                        <input maxlength="255" type="text" name="s3l2" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s3l2 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(List 3)</label>
                        <input maxlength="255" type="text" name="s3l3" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s3l3 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(btn)</label>
                        <input maxlength="255" type="text" name="s3btn" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s3btn }}" required>
                    </div>
                <div class="col-md-6 ">
                    <label>Submit for Section 3</label>
                    <button type="submit" class="send-btn mt-2">Submit</button>
                </div>
            </div>

            </div>
            <div class="card" style="border:2px solid grey">
            <legend><u>Section 4</u></legend>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>section4(Small Heading)</label>
                    <input maxlength="255" type="text" name="s4sh1" class="form-control" required
                        placeholder="Meta Description" value="{{@$about->s4sh1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section4(h1)</label>
                    <input maxlength="255" type="text" name="s4h1" class="form-control" required
                        placeholder="Meta Description" value="{{@$about->s4h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Section 4 img <a href="javascript:;" id="selectimage" class="edit-logo"
                            onclick="selectImage('featured_image4');"><img class="img-fluid"
                                src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                    <div style="display: none">
                        <input type="file" name="s4img" id="featured_image4" />
                    </div>
                    <div class="update-logo">
                        <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                            onclick="selectImage('featured_image4');"
                            src="{{ asset('banner/img/' .$about->s4img)}}"
                            alt="">
                    </div>
                </div>


            <div class="form-group col-md-6">
                <label>section4(Para1)</label>
                <textarea type="text" name="s4p1" class="form-control" required placeholder="Add paragraph"
                  rows="5" required>{{ @$about->s4p1 }}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>section4(List 1)</label>
                <input maxlength="255" type="text" name="s4l1" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s4l1 }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section4(List 2)</label>
                <input maxlength="255" type="text" name="s4l2" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s4l2 }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section4(List 3)</label>
                <input maxlength="255" type="text" name="s4l3" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s4l3 }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section4(btn)</label>
                <input maxlength="255" type="text" name="s4btn" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s4btn }}" required>
            </div>
            <div class="col-md-6 pb-2">
                <label>Submit for Section 4</label>
                <button type="submit" class="send-btn mt-2">Submit</button>
            </div>
        </div>
            </div>
            <div class="card" style="border:2px solid grey">
            <legend><u>Section 5</u></legend>
            <div class="row">
            <div class="form-group col-md-6">
                <label>section5(h1)</label>
                <input maxlength="255" type="text" name="s5h1" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s5h1 }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section5(Para 1)</label>
                <textarea type="text" name="s5p1" class="form-control" required placeholder="Add paragraph"
                rows="5" required>{{ @$about->s5p1 }}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Section 5 card 1 img<a href="javascript:;" id="selectimage" class="edit-logo"
                        onclick="selectImage('featured_image8');"><img class="img-fluid"
                            src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                <div style="display: none">
                    <input type="file" name="s5c1img" id="featured_image8" />
                </div>
                <div class="update-logo">
                    <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                        onclick="selectImage('featured_image8');"
                        src="{{ asset('banner/img/' .$about->s5c1img)}}"
                        alt="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Section 5 card 2 img<a href="javascript:;" id="selectimage" class="edit-logo"
                        onclick="selectImage('featured_image5');"><img class="img-fluid"
                            src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                <div style="display: none">
                    <input type="file" name="s5c2img" id="featured_image5" />
                </div>
                <div class="update-logo">
                    <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                        onclick="selectImage('featured_image5');"
                        src="{{ asset('banner/img/' .$about->s5c2img)}}"
                        alt="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Section 5 card 3 img <a href="javascript:;" id="selectimage" class="edit-logo"
                        onclick="selectImage('featured_image6');"><img class="img-fluid"
                            src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                <div style="display: none">
                    <input type="file" name="s5c3img" id="featured_image6" />
                </div>
                <div class="update-logo">
                    <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                        onclick="selectImage('featured_image6');"
                        src="{{ asset('banner/img/' .$about->s5c3img)}}"
                        alt="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>Section 5 card 4 img <a href="javascript:;" id="selectimage" class="edit-logo"
                        onclick="selectImage('featured_image7');"><img class="img-fluid"
                            src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                <div style="display: none">
                    <input type="file" name="s5c4img" id="featured_image7" />
                </div>
                <div class="update-logo">
                    <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                        onclick="selectImage('featured_image7');"
                        src="{{ asset('banner/img/' .$about->s5c4img)}}"
                        alt="">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card1(Heading)</label>
                <input maxlength="255" type="text" name="s5c1h" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s5c1h }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card1(Para)</label>
                <textarea type="text" name="s5c1p" class="form-control" required placeholder="Add paragraph"
                 rows="5" required>{{ @$about->s5c1p }}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card2(Heading)</label>
                <input maxlength="255" type="text" name="s5c2h" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s5c2h }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card2(Para)</label>
                <textarea type="text" name="s5c2p" class="form-control" required placeholder="Add paragraph"
                 rows="5" required>{{ @$about->s5c2p }}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card3(Heading)</label>
                <input maxlength="255" type="text" name="s5c3h" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s5c3h }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card3(Para)</label>
                <textarea type="text" name="s5c3p" class="form-control" required placeholder="Add paragraph"
             rows="5" required>{{ @$about->s5c3p }}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card4(Heading)</label>
                <input maxlength="255" type="text" name="s5c4h" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s5c4h }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section5 card4(Para)</label>
                <textarea type="text" name="s5c4p" class="form-control" required placeholder="Add paragraph"
                 rows="5" required>{{ @$about->s5c4p }}</textarea>
            </div>
            <div class="col-md-6 pb-2">
                <label>Submit for Section 5</label>
                <button type="submit" class="send-btn mt-2">Submit</button>
            </div>
            </div>
            </div>
            <div class="card" style="border:2px solid grey">
            <legend><u>Section 6</u></legend>
            <div class="row">
            <div class="form-group col-md-6">
                <label>section6(h1)</label>
                <input maxlength="255" type="text" name="s6h1" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s6h1 }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section6(h2)</label>
                <input maxlength="255" type="text" name="s6h2" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s6h2 }}" required>
            </div>
            <div class="form-group col-md-6">
                <label>section6(btn)</label>
                <input maxlength="255" type="text" name="s6btn" class="form-control" required
                    placeholder="Meta Description" value="{{@$about->s6btn }}" required>
            </div>
            <div class="col-md-6 pb-2">
                <label>Submit for Section 6</label>
                <button type="submit" class="send-btn mt-2">Submit</button>
            </div>
        </div>
            </div>

            <div class="form-group col-md-12">
                <label>Details</label>
                <textarea name="description" class="form-control tinymceeditor" rows="5">{{@$about->description }}</textarea>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="cus-btn text-right">
                    <a href="{{ route('admin.about.index') }}" class="cancle-btn">Back</a>
                    <button type="submit" class="send-btn">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>





    <x-slot name="pluginCss"></x-slot>
    <x-admin.tinymce />
</x-admin-layout>

