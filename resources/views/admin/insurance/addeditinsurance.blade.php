{{-- @php
    echo $category;die;
@endphp --}}



<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs" />
    </x-slot>
    <div class="dealership-form">
        <form class="myform" method="POST"
            action="{{ !empty($insurance) ? route('admin.insurance.update', ['id' => $insurance->id]) : route('admin.insurance.store') }}"
            enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Question</label>
                    <input type="text" name="title" class="form-control" placeholder="Question" value="}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Order #</label>
                    <input type="number" name="order_no" class="form-control" placeholder="Order #" min="1" value="o }}" required>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12">
                    <label>Answer</label>
                    <textarea name="description" class="form-control" placeholder="Answer" required>tion }}</textarea>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="cus-btn text-right">
                        <a href="{{ url()->previous() }}" class="cancle-btn">Back</a>
                        <button type="submit" class="send-btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div> --}}
            <div class="card" style="border:2px solid grey">
                <legend><u>Section 1</u></legend>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>section1(h1)</label>
                        {{-- <input maxlength="255" type="text" name="s1h1" class="form-control"
                            placeholder="section 1 (heading1)" value="{{ @$insurance->s1h1 }}" required> --}}

                            {{-- <select class="form-control"name="option" id="option">
                                <option value="{{@$insurance->s1h1}}">{{@$insurance->s1h1}}</option>
                                @foreach($categories as $option)
                                  <option value="{{$option->id}}">{{ $option->category_title }}</option>
                                 <!-- You can access other columns from the "categorycms" table as needed -->
                                 @endforeach
                                </select> --}}
                                <select class="custom-select" name="option" id="insurance_category_id">
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}"
                                            @if(isset($insurance) && $insurance->insurance_id == $category->id)
                                                selected
                                            @endif
                                        >{{ $category->category_title }}</option>
                                    @endforeach
                                </select>
                                {{-- <select class="form-control" name="s1h1" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if(isset($insurance) && $insurance->s1h1 == $category->id) selected @endif>{{ $category->category_title }}</option>
                                    @endforeach
                                </select> --}}


                    </div>
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input maxlength="255" type="text" name="title" class="form-control"
                            placeholder="section 1 (heading1)" value="{{ @$insurance->title }}" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>section 1 (paragraph)</label>
                        <textarea type="text" name="s1p1" class="form-control" required placeholder="Add paragraph" rows="5"
                            required>{{ @$insurance->s1p1 }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section1(btn)</label>
                        <input maxlength="255" type="text" name="s1btn" class="form-control"
                            placeholder="section 1 (heading1)" value="{{ @$insurance->s1btn }}" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Section 1 img<a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image8');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s1img" id="featured_image8" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image8');"
                                src="{{ asset('banner/img/' .@$insurance->s1img)}}"
                                alt="">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-6 ">
                        <label>Submit for Section 1</label>
                        <button type="submit" class="send-btn mt-2">Submit</button>
                    </div>
                </div>
            </div>

            <div class="card mt-2" style="border:2px solid grey">
                <legend><u>Section 2</u></legend>
                <div class="row">
                    {{-- <div class="form-group col-md-6">
                        <label>section2(small h1)</label>
                        <input maxlength="255" type="text" name="s2sh1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s2sh1 }}" required>
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label>section2(h1)</label>
                        <input maxlength="255" type="text" name="s2h1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s2h1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Section 2 card 1 img<a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image9');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s2c1img" id="featured_image9" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image9');"
                                src="{{ asset('banner/img/' .@$insurance->s2c1img)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(card 1h)</label>
                        <input maxlength="255" type="text" name="s2c1h" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s2c1h }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Section 2 card 2 img<a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image3');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s2c2img" id="featured_image3" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image3');"
                                src="{{ asset('banner/img/' .@$insurance->s2c2img)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(card 2h)</label>
                        <input maxlength="255" type="text" name="s2c2h" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s2c2h }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Section 2 card 3 img<a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image5');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s2c3img" id="featured_image5" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image5');"
                                src="{{ asset('banner/img/' .@$insurance->s2c3img)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(card 3h)</label>
                        <input maxlength="255" type="text" name="s2c3h" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s2c3h }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Section 2 card 4 img <a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image6');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s2c4img" id="featured_image6" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image6');"
                                src="{{ asset('banner/img/' .@$insurance->s2c4img)}}"
                                alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(card 4h)</label>
                        <input maxlength="255" type="text" name="s2c4h" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s2c4h }}" required>
                    </div>
                    <div class="col-md-6 ">
                        <label>Submit for Section 2</label>
                        <button type="submit" class="send-btn mt-2">Submit</button>
                    </div>
                </div>
            </div>
            <div class="card mt-2" style="border:2px solid grey">
                <legend><u>Section 3</u></legend>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>section3(h1)</label>
                        <input maxlength="255" type="text" name="s3h1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s3h1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3( para1)</label>
                        <input maxlength="255" type="text" name="s3p1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s3p1 }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Section 3 img <a href="javascript:;" id="selectimage" class="edit-logo"
                                onclick="selectImage('featured_image0');"><img class="img-fluid"
                                    src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                        <div style="display: none">
                            <input type="file" name="s3img" id="featured_image0" />
                        </div>
                        <div class="update-logo">
                            <img class="img-thumbnail" style="height: 100px;cursor: pointer"
                                onclick="selectImage('featured_image0');"
                                src="{{ asset('banner/img/' .@$insurance->s3img)}}"
                                alt="">
                        </div>
                    </div>


                    <div class="form-group col-md-6">
                        <label>section3(btn)</label>
                        <input maxlength="255" type="text" name="s3btn" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s3btn }}" required>
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
                    {{-- <div class="form-group col-md-6">
                        <label>section4(Small Heading)</label>
                        <input maxlength="255" type="text" name="s4sh1" class="form-control" required
                            placeholder="Meta Description" value="{{@$about->s4sh1 }}" required>
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label>section4(h1)</label>
                        <input maxlength="255" type="text" name="s4h1" class="form-control" required
                            placeholder="Meta Description" value="{{@$insurance->s4h1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section4(btn)</label>
                        <input maxlength="255" type="text" name="s4btn" class="form-control" required
                            placeholder="Meta Description" value="{{ @$insurance->s4btn }}" required>
                    </div>
                </div>
            </div>
            <div class="card" style="border:2px solid grey">
                <legend><u>Section 5</u></legend>
                <div class="row">
                <div class="form-group col-md-6">
                    <label>section5(h1)</label>
                    <input maxlength="255" type="text" name="s5h1" class="form-control" required
                        placeholder="Meta Description" value="{{@$insurance->s5h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section5(h2)</label>
                    <input maxlength="255" type="text" name="s5h2" class="form-control" required
                        placeholder="Meta Description" value="{{@$insurance->s5h2 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section5(btn)</label>
                    <input maxlength="255" type="text" name="s5btn" class="form-control" required
                        placeholder="Meta Description" value="{{@$insurance->s5btn }}" required>
                </div>
                <div class="col-md-6 pb-2">
                    <label>Submit for Section 6</label>
                    <button type="submit" class="send-btn mt-2">Submit</button>
                </div>
            </div>
                </div>

            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="cus-btn text-right mt-3">
                    <a href="{{ route('admin.insurance.index') }}" class="cancle-btn">Back</a>
                    <button type="submit" class="send-btn">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>

    <x-slot name="pluginCss"></x-slot>
</x-admin-layout>
