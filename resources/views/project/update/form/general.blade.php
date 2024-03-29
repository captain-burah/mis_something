
<div class="row">

    <div class="col-md-6">
        <div data-select2-id="15">
            <label class="form-label">Emirate</label>


            <select
                class="form-control select2-search-disable select2-hidden-accessible
                @error('emirates') border border-solid border-danger @enderror"
                data-select2-id="basicpill-status-input"
                tabindex="-1"
                aria-hidden="true"
                name="emirates"
            >
                <option selected value="">Choose ...</option>
                @if(isset($emirates))
                    @foreach($emirates as $data)
                        @if($project->emirate_id == $data->id)
                            <option selected value="{{$data->id}}">{{ $data->city_name_en }} ({{$data->city_name_ar}})</option>
                        @else
                            <option value="{{$data->id}}">{{ $data->city_name_en }} ({{$data->city_name_ar}})</option>
                        @endif
                    @endforeach
                @endif
            </select>
            @error('emirates')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror

        </div>
    </div>

    
    <div class="col-md-6">
        <div data-select2-id="15">
            <label class="form-label">Off Plan / Ready</label>


            <select
                class="form-control select2-search-disable select2-hidden-accessible
                @error('property_release_id') border border-solid border-danger  @enderror"
                data-select2-id="basicpill-status-input"
                tabindex="-1"
                aria-hidden="true"
                name="property_release_id"
            >
                <option selected value="">Choose ...</option>
                <option selected value="1">Off-plan</option>
                <option selected value="2">Ready</option>

            </select>
            @error('property_release_id')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror

        </div>
    </div>
</div>

{{-- <hr class="my-5 "> --}}

{{-- <hr class="my-5 "> --}}
<div class="row mt-5">
    <div class="col-md-6">
        <div data-select2-id="15">
            <label class="form-label">Community Name</label>
            <input
                type="text"
                name="community"
                class="form-control
                @error('community') border border-solid border-danger  @enderror"
                id="community"
                placeholder="eg: Al Barari"
                value="{{ $project->community }}"
            >
            @error('community')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
            {{-- <select
                class="form-control select2-search-disable select2-hidden-accessible
                @error('community') border border-solid border-danger  @enderror"
                data-select2-id="basicpill-status-input"
                tabindex="-1"
                aria-hidden="true"
                name="community"
            >
                <option selected value="">Choose ...</option>
                @if(isset($communities))
                    @foreach($communities as $data)
                        <option value="{{$data->id}}">{{ $data->title }} ({{$data->title_ar}})</option>
                    @endforeach
                @endif
            </select>
            @error('community')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror --}}

        </div>
    </div>

    <div class="col-md-6" dir="rtl">
        <div data-select2-id="15">
            <label class="form-label">Community Name Ar</label>
            <input
                type="text"
                name="community_ar"
                class="form-control
                @error('community_ar') border border-solid border-danger  @enderror"
                id="community_ar"
                placeholder="eg: Al Barari"
                value="{{ $project->community_ar }}"
            >
            @error('community_ar')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row mt-5">

    <div class="col-md-12">
        <div data-select2-id="15">
            <label class="form-label">Category</label>

            <select
                class="form-control select2-search-disable select2-hidden-accessible
                @error('category') border border-solid border-danger  @enderror"
                data-select2-id="basicpill-status-input"
                tabindex="-1"
                aria-hidden="true"
                name="category"
            >
                <option selected value="">Choose ...</option>
                @if(isset($categories))
                    @foreach($categories as $data)
                        <option value="{{$data->id}}">{{ $data->name_en }} ({{$data->name_ar}})</option>
                    @endforeach
                @endif
            </select>
            @error('category')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror

        </div>
    </div>
</div>


{{-- <hr class="my-5 "> --}}

<div class="row mt-5">
    

    <div class="col-md-6">
        <div data-select2-id="15">
            <label class="form-label">Latitude</label>
            <input
                type="text"
                name="latitude"
                class="form-control
                @error('latitude') border border-solid border-danger  @enderror"
                id="latitude"
                placeholder="24.**"
                value="{{$project->latitude}}"
            >
            @error('latitude')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror

        </div>
    </div>

    <div class="col-md-6">
        <div data-select2-id="15">
            <label class="form-label">Longitude</label>
            <input
                type="text"
                name="longitude"
                class="form-control
                @error('longitude') border border-solid border-danger  @enderror"
                id="longitude"
                placeholder="55.**"
                value="{{$project->longitude}}"
            >
            @error('longitude')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror

        </div>
    </div>
</div>
