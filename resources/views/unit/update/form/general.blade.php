
<div class="row mt-4">

    <div class="col-md-12">
        <div class="mb-3">
            <label for="basicpill-title-input">Unit Name &#40;<span id="property_title_chars">60</span> characters remaining &#41;</label>
            <input
                type="text"
                name="unit_name"
                placeholder="203"
                id="unit_name"
                maxlength="60"

                class="form-control
                @error('unit_name') border border-solid border-danger  @enderror"
                value="{{ $unit->name }}"
            >
        </div>
    </div>

</div>




<div class="row mt-4">

    <div class="col-md-12">
        <div data-select2-id="15">
            <label class="form-label">Project</label>

            <select
                class="form-control select2-search-disable select2-hidden-accessible
                @error('emirates') border border-solid border-danger  @enderror"
                data-select2-id="basicpill-status-input"
                tabindex="-1"
                aria-hidden="true"
                name="project"
            >
                <option selected value="">Choose ...</option>
                @if(isset($projects))
                    @foreach($projects as $data)
                        @if($data->id == $unit->project_id)
                            <option value="{{$data->id}}" selected>{{ $data->name }}</option>
                        @else
                            <option value="{{$data->id}}">{{ $data->name }}</option>
                        @endif
                    @endforeach
                @endif
            </select>
            @error('project')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror

        </div>
    </div>

</div>




<div class="row mt-4">

    <div class="col-md-6">
        <div class="mb-3">
            <label for="basicpill-units-input">Floor<span></span></label>
            <input
                type="number"
                name="floor"
                class="form-control
                @error('units') border border-solid border-danger  @enderror"
                id="floor"
                placeholder="ex: 10"
                value="{{ $unit->floor }}"
            >
            @error('floor')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="bedrooms">Bedrooms <span></span></label>
            <input
                type="text"
                name="bedrooms"
                class="form-control
                @error('bedrooms') border border-solid border-danger  @enderror"
                id="bedrooms"
                placeholder="ex: 4"
                value="{{ $unit->bedroom }}"
            >
            @error('bedrooms')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>



<div class="row mt-4">

    <div class="col-md-6">
        <div class="mb-3">
            <label for="basicpill-title-input">Unit Size <span class="text-muted">&#40;ex: &nbsp; 5,500.00 Sq.Ft. &#41;</span></label>
            <input
                type="text"
                name="unit_size"
                placeholder="1,753 sq.ft"
                id="unit_size"

                class="form-control
                @error('unit_size') border border-solid border-danger  @enderror"
                value="{{ $unit->unit_size_range }}"
            >
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label for="outdoor_area_range">Balcony Area (Sq.Ft) <span class="text-muted">&#40;ex: &nbsp; 5,500.00 Sq.Ft. &#41;</span></label>
            <input
                type="text"
                name="outdoor_area_range"
                class="form-control
                @error('outdoor_area_range') border border-solid border-danger  @enderror"
                id="outdoor_area_range"
                placeholder="743 sq.ft"
                value="{{ $unit->outdoor_area }}"
            >
            @error('outdoor_area_range')
                <div class="text-danger text-xs">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>

