<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs" />
    </x-slot>
    <div class="dealership-form">
        <form class="myform" method="POST"
            action="{{ !empty($contact) ? route('admin.contact.update', ['id' => $contact->id]) : route('admin.contact.store') }}"
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
                        <input maxlength="255" type="text" name="s1h1" class="form-control"
                            placeholder="section 1 (heading1)" value="{{ @$contact->s1h1 }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>section 1 (paragraph)</label>
                        <textarea type="text" name="s1p1" class="form-control" required placeholder="Add paragraph" rows="5"
                            required>{{ @$contact->s1p1 }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section1(btn)</label>
                        <input maxlength="255" type="text" name="s1btn" class="form-control"
                            placeholder="section 1 (heading1)" value="{{ @$contact->s1btn }}" >
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
                                {{-- src="{{ asset('banner/img/' .$faq->s1img)}}" --}}
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
                    <div class="form-group col-md-6">
                        <label>section2(small h1)</label>
                        <input maxlength="255" type="text" name="s2sh1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->s2sh1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(h1)</label>
                        <input maxlength="255" type="text" name="s2h1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->s2h1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section2(btn)</label>
                        <input maxlength="255" type="text" name="s2btn" class="form-control"
                            placeholder="section 1 (heading1)" value="{{ @$contact->s2btn }}" required>
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
                        <label>section3(location h1)</label>
                        <input maxlength="255" type="text" name="locationh1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->locationh1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(location para1)</label>
                        <input maxlength="255" type="text" name="locationp1" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->locationp1 }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(location h2)</label>
                        <textarea type="text" name="locationh2" class="form-control" required placeholder="Add paragraph" rows="5"
                            required></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>section3(location para2)</label>
                        <input maxlength="255" type="text" name="locationp2" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->locationp2 }}" required>
                    </div>
                    {{-- <div class="form-group col-md-6">
<label>Section 3 card1 img</label>
<input type="file" name="s3img1" class="form-control" requiredlder="Add image"
    value="{{@$faq->s3img1 }}">
</div> --}}


                    <div class="form-group col-md-6">
                        <label>section3(contact)</label>
                        <input maxlength="255" type="text" name="contact" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->contact }}" required>
                    </div>


                    <div class="form-group col-md-6">
                        <label>section3(btn)</label>
                        <input maxlength="255" type="text" name="s3btn" class="form-control" required
                            placeholder="Meta Description" value="{{ @$contact->s3btn }}" required>
                    </div>
                    <div class="col-md-6 ">
                        <label>Submit for Section 3</label>
                        <button type="submit" class="send-btn mt-2">Submit</button>
                    </div>
                </div>

            </div>




            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="cus-btn text-right mt-3">
                    <a href="{{ route('admin.contact.index') }}" class="cancle-btn">Back</a>
                    <button type="submit" class="send-btn">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>

    <x-slot name="pluginCss"></x-slot>
</x-admin-layout>
