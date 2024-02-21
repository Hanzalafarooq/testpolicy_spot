<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs" />
    </x-slot>
    <div class="dealership-form">
        <form class="myform" method="POST"
            action="{{ !empty(@$faqs) ? route('admin.faqs.update', ['id' => $faqs->id]) : route('admin.faqs.store') }}"
            enctype="multipart/form-data">
            @csrf

            {{-- <select class="custom-select" name="option" id="insurance_category_id">
                @foreach ($category as $category)
                    <option value="{{ $category->id }}" @if (isset($insurance) && $insurance->insurance_id == $category->id) selected @endif>
                        {{ $category->category_title }}</option>
                @endforeach

            </select> --}}


            <div class="card" style="border:2px solid grey">
                <legend><u>Add Faqs</u></legend>
                <div class="form-group col-md-6">
                    <label>Add Insurance</label>

                    <select class="custom-select" name="option" id="insurance_category_id">
                        @foreach ($insurance as $insurances)
                            <option value="{{ $insurances->id }}"
                                @if (isset($insurance) && $insurances->id == @$faqs->insurance_id)
                                    selected
                                @endif
                            >{{ $insurances->title }}</option>
                        @endforeach
                    </select>
                    
{{-- @dd($insurance, $faq->insurance_id) --}}

                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input maxlength="255" type="text" name="title" class="form-control" required
                            placeholder="Title" value="{{ @$faqs->title }}" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label> Question</label>
                        <textarea type="text" name="question" class="form-control" required placeholder="Add Question" rows="5"
                            required>{{ @$faqs->question }}</textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label> Answer</label>
                        <textarea type="text" name="answer" class="form-control" required placeholder="Add Answer" rows="5" required>{{ @$faqs->answer }}</textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 ">
                        <label>Submit</label>
                        <button type="submit" class="send-btn mt-2">Submit</button>
                    </div>
                </div>
            </div>





    </div>









    <div class="clearfix"></div>
    <div class="col-md-12">
        <div class="cus-btn text-right mt-3">
            <a href="{{ route('admin.faqs.index') }}" class="cancle-btn">Back</a>
            <button type="submit" class="send-btn">Submit</button>
        </div>
    </div>
    </div>
    </form>
    </div>

    <x-slot name="pluginCss"></x-slot>
</x-admin-layout>
