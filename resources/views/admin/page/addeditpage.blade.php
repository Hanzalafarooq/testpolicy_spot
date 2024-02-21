<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs"/>
    </x-slot>
    <div class="dealership-form">
        <form class="myform" method="POST" action="{{ !empty($page)? route('admin.page.update', ['id' => $page->id]) : route('admin.page.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
            <legend ><u> Top Header </u></legend>
                <div class="form-group col-md-6">
                    <label>Title</label>
                    <input maxlength="255" type="text" name="title" class="form-control" required placeholder="title" value="{{ @$page->title }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Header(phone)</label>
                    <input maxlength="255" type="text" name="hphone" class="form-control" required placeholder="phone" value="{{ @$page->hphone }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Header(email)</label>
                    <input maxlength="255" type="text" name="hemail" class="form-control" required placeholder="Email" value="{{ @$page->hemail }}" required>
                    <div class="col-md-6 ">
                        {{-- <div class="cus-btn text-right"> --}}
                            <button type="submit" class="send-btn mt-3">Submit</button>
                        </div>
                    {{-- </div> --}}
                </div>
                <legend><u>Section 1</u></legend>
                <div class="form-group col-md-6">
                    <label>section1(h1)</label>
                    <input maxlength="255" type="text" name="s1h1" class="form-control" required placeholder="section 1 (heading1)" value="{{ @$page->s1h1 }}" required>
                </div>
                {{-- <div class="form-group col-md-6">
                    <label>Featured Image <a href="javascript:;" id="selectimage" class="edit-logo" onclick="selectImage('featured_image');"><img class="img-fluid" src="{{ asset('img/pen.svg') }}" alt="Select Image"> Select File</a></label>
                    <div style="display: none">
                        <input type="file" name="featured_image" id="featured_imag              </div>
                    <div class="update-logo">
                        <img class="img-thumbnail" style="height: 100px;cursor: pointer" onclick="selectImage('featured_image');" src="{{ !empty($page)? $page->featured_image : asset('img/placeholder-img.png') }}" alt="">
                    </div>
                </div> --}}
                <div class="form-group col-md-6">
                    <label>Section 1 img</label>
                    <input type="file" name="featured_image" class="form-control"  placeholder="Add image" value="{{ @$page->featured_image }}">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label>section1(h2)</label>
                    <input maxlength="255" type="text" name="s1h2" class="form-control" required placeholder="section 1 (heading2)" value="{{ @$page->s1h2 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section1(btn)</label>
                    <input maxlength="255" type="text" name="s1btn" class="form-control" required placeholder="Meta Description" value="{{ @$page->s1btn}}" required>
                </div>
                    <div class="col-md-6 ">
                    <label>Submit for Section 1</label>
                            <button type="submit" class="send-btn mt-2">Submit</button>
                        </div>
                <legend><u>Section 2</u></legend>
                <div class="form-group col-md-6">
                    <label>section2(h1)</label>
                    <input maxlength="255" type="text" name="s2h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s2h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section2(h2)</label>
                    <input maxlength="255" type="text" name="s2h2" class="form-control" required placeholder="Meta Description" value="{{ @$page->s2h2}}" required>
                </div>
                <div class="col-md-6 ">
                    <label>Submit for Section 2</label>
                            <button type="submit" class="send-btn mt-2">Submit</button>
                        </div>
                <legend><u>Section 3</u></legend>
                <div class="form-group col-md-6">
                    <label>Section 3 card1 img</label>
                    <input type="file" name="s3img1" class="form-control" requiredlder="Add image" value="{{ @$page->s3img1 }}" >
                </div>
                <div class="form-group col-md-6">
                    <label>Section 3 card2 img</label>
                    <input type="file" name="s3img2" class="form-control" requiredlder="Add image" value="{{ @$page->s3img2 }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Section 3 card3 img</label>
                    <input type="file" name="s3img3" class="form-control" requiredlder="Add image" value="{{ @$page->s3img3 }}" >
                </div>

                <div class="form-group col-md-6">
                    <label>section3(h1)</label>
                    <input maxlength="255" type="text" name="s3h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3h1}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section3(Discription)</label>
                    <input maxlength="255" type="text" name="s3disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3disc }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section3(card 1 h1)</label>
                    <input maxlength="255" type="text" name="s3c1h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3c1h1}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section3(card 1 disc)</label>
                    <input maxlength="255" type="text" name="s3c1disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3c1disc}}" required>
                </div> <div class="form-group col-md-6">
                    <label>section3(card 2 h1)</label>
                    <input maxlength="255" type="text" name="s3c2h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3c2h1}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section3(card 2 disc)</label>
                    <input maxlength="255" type="text" name="s3c2disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3c2disc}}" required>
                </div> <div class="form-group col-md-6">
                    <label>section3(card 3 h1)</label>
                    <input maxlength="255" type="text" name="s3c3h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3c3h1}}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section3(card 3 disc)</label>
                    <input maxlength="255" type="text" name="s3c3disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s3c3disc}}" required>
                    <div class="col-md-6 ">
                        <label>Submit for Section 3</label>
                                <button type="submit" class="send-btn mt-2">Submit</button>
                            </div>
                </div>

                <legend><u>Section 4</u></legend>
                <div class="form-group col-md-6">
                    <label>section4(h1)</label>
                    <input maxlength="255" type="text" name="s4h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section4(Discription)</label>
                    <input maxlength="255" type="text" name="s4disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4disc }}" required>
                </div>

                    <div class="form-group col-md-6">
                        <label>Section 4 card1 img</label>
                        <input type="file" name="s4c1img" class="form-control" requireolder="Add image" value="{{ @$page->s4c1img }}" >
                    </div>

                <div class="form-group col-md-6">
                    <label>section4(card 1 h1)</label>
                    <input maxlength="255" type="text" name="s4c1h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c1h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section4(card 1 disc)</label>
                    <input maxlength="255" type="text" name="s4c1disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c1disc }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Section 4 card2 img</label>
                    <input type="file" name="s4c2img" class="form-control" requireolder="Add image" value="{{ @$page->s4c2img}}" >
                </div>
                   <div class="form-group col-md-6">
                    <label>section4(card 2 h1)</label>
                    <input maxlength="255" type="text" name="s4c2h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c2h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section4(card 2 disc)</label>
                    <input maxlength="255" type="text" name="s4c2disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c2disc }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Section 4 card3 img</label>
                    <input type="file" name="s4c3img" class="form-control" requireolder="Add image" value="{{ @$page->s4c3img }}" >
                </div>
                   <div class="form-group col-md-6">
                    <label>section4(card 3 h1)</label>
                    <input maxlength="255" type="text" name="s4c3h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c3h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section4(card 3 disc)</label>
                    <input maxlength="255" type="text" name="s4c3disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c3disc }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Section4 img4:</label>
                       <input type="file" id="image" name="s4c4img" accept="image/*" >
                       <div id="imagePreview" ></div>
                   </div>
                   <div class="form-group col-md-6">
                    <label>section4(card 4 h1)</label>
                    <input maxlength="255" type="text" name="s4c4h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c4h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section4(card 4 disc)</label>
                    <input maxlength="255" type="text" name="s4c4disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s4c4disc }}" required>

                </div>
                <div class="col-md-6 pb-2">
                    <label>Submit for Section 3</label>
                            <button type="submit" class="send-btn mt-2">Submit</button>
                        </div>
                <legend><u>Section 5</u></legend>
                <div class="form-group col-md-6">
                    <label>section5(h1)</label>
                    <input maxlength="255" type="text" name="s5h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s5h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section5(Discription)</label>
                    <input maxlength="255" type="text" name="s5disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s5disc }}" required>
                </div>
                <div class="col-md-6 pb-2">
                    <label>Submit for Section 5</label>
                            <button type="submit" class="send-btn mt-2">Submit</button>
                        </div>
                <legend><u>Section 6</u></legend>
                <div class="form-group col-md-6">
                    <label>section6(h1)</label>
                    <input maxlength="255" type="text" name="s6h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s6h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section6(Discription)</label>
                    <input maxlength="255" type="text" name="s6disc" class="form-control" required placeholder="Meta Description" value="{{ @$page->s6disc }}" required>
                </div>
                <div class="col-md-6 pb-2">
                    <label>Submit for Section 6</label>
                            <button type="submit" class="send-btn mt-2">Submit</button>
                        </div>
                <legend><u>Section 7</u></legend>
                <div class="form-group col-md-6">
                    <label>section7(h1)</label>
                    <input maxlength="255" type="text" name="s7h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s7h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section7(btn)</label>
                    <input maxlength="255" type="text" name="s7btn" class="form-control" required placeholder="Meta Description" value="{{ @$page->s7btn }}" required>
                </div>
                <div class="col-md-6 pb-2">
                    <label>Submit for Section 7</label>
                            <button type="submit" class="send-btn mt-2">Submit</button>
                        </div>
                <legend><u>Section 8</u></legend>
                <div class="form-group col-md-6">
                    <label>section8(h1)</label>
                    <input maxlength="255" type="text" name="s8h1" class="form-control" required placeholder="Meta Description" value="{{ @$page->s8h1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section8(h2)</label>
                    <input maxlength="255" type="text" name="s8h2" class="form-control" required placeholder="Meta Description" value="{{ @$page->s8h2 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>section8(btn)</label>
                    <input maxlength="255" type="text" name="s8btn" class="form-control" required placeholder="Meta Description" value="{{ @$page->s8btn }}" required>
                    <div class="col-md-6 pb-2">
                        <label>Submit for Section 8</label>
                                <button type="submit" class="send-btn mt-2">Submit</button>
                            </div>
                </div>

                <legend><u>Footer</u></legend>
                <div class="form-group col-md-6">
                    <label>Footer(Discription)</label>
                    <input maxlength="255" type="text" name="fdisc" class="form-control" required placeholder="Meta Description" value="{{ @$page->fdisc }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Email)</label>
                    <input maxlength="255" type="text" name="femail" class="form-control" required placeholder="Meta Description" value="{{ @$page->femail }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(phone)</label>
                    <input maxlength="255" type="text" name="fphone" class="form-control" required placeholder="Meta Description" value="{{ @$page->fphone }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(h1)</label>
                    <input maxlength="255" type="text" name="fh1" class="form-control" required placeholder="Meta Description" value="{{ @$page->fh1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link1)</label>
                    <input maxlength="255" type="text" name="fl1" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link2)</label>
                    <input maxlength="255" type="text" name="fl2" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink2 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link3)</label>
                    <input maxlength="255" type="text" name="fl3" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink3 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link4)</label>
                    <input maxlength="255" type="text" name="fl4" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink4 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link5)</label>
                    <input maxlength="255" type="text" name="fl5" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink5 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link6)</label>
                    <input maxlength="255" type="text" name="fl6" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink6 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link7)</label>
                    <input maxlength="255" type="text" name="fl7" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink7 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link8)</label>
                    <input maxlength="255" type="text" name="fl8" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink8 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(Link9)</label>
                    <input maxlength="255" type="text" name="fl9" class="form-control" required placeholder="Meta Description" value="{{ @$page->flink9 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(h2)</label>
                    <input maxlength="255" type="text" name="fh2" class="form-control" required placeholder="Meta Description" value="{{ @$page->fh2 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(h2 Link1)</label>
                    <input maxlength="255" type="text" name="fh2l1" class="form-control" required placeholder="Meta Description" value="{{ @$page->fh2link1 }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Footer(h2 Link2)</label>
                    <input maxlength="255" type="text" name="fh2l2" class="form-control" required placeholder="Meta Description" value="{{ @$page->fh2link2 }}" required>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-12">
                    <label>Details</label>
                    <textarea name="description" class="form-control tinymceeditor" rows="5">{{ @$page->description }}</textarea>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="cus-btn text-right">
                        <a href="{{ route('admin.page.index') }}" class="cancle-btn">Back</a>
                        <button type="submit" class="send-btn">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>




    <x-slot name="pluginCss"></x-slot>
    <x-admin.tinymce/>
</x-admin-layout>
<script>
const productForm = document.getElementById('productForm');
const imageInput = document.getElementById('image');
// const galleryInput = document.getElementById('gallery');
const imagePreview = document.getElementById('imagePreview');
// const galleryPreview = document.getElementById('galleryPreview');

// Function to preview the selected image
function previewImage(input, previewContainer) {
  previewContainer.innerHTML = '';
  if (input.files) {
    const files = Array.from(input.files);
    files.forEach((file) => {
      const reader = new FileReader();
      reader.onload = function (event) {
        const imageElement = document.createElement('img');
        imageElement.src = event.target.result;
        imageElement.classList.add('preview-image');
        previewContainer.appendChild(imageElement);

        // Add a button to remove the image
        const removeButton = document.createElement('button');
        removeButton.innerHTML = 'Remove';
        removeButton.classList.add('remove-button');
        removeButton.addEventListener('click', () => {
          previewContainer.removeChild(imageElement);
          previewContainer.removeChild(removeButton);
          input.value = ''; // Clear the file input value
        });
        previewContainer.appendChild(removeButton);
      };
      reader.readAsDataURL(file);
    });
  }
}

// Listen for changes in the file inputs and call the preview functions
imageInput.addEventListener('change', () => previewImage(imageInput, imagePreview));
// galleryInput.addEventListener('change', () => previewImage(galleryInput, galleryPreview));

</script>
<style>
    .preview-image {
    max-width: 200px;
    max-height: 200px;
    margin-top: 10px;
  }
</style>
