<div class="card">
    <div class="card-body">
        <h3 class="mb-1">Unit Launch</h3>
        <p class="mb-0 text-justify text-muted">
            When you embark on a new real estate project, you're not just building structures; you're creating opportunities, shaping communities and crafting dreams into reality.
        </p>



        <form class="contact-form repeater" id="getInTouch" method="post" action="{{ route('units.store') }}">
            @csrf
            <div class="flex-none w-100 mt-3 ">
                <a href="{{ route('units.index') }}" class="btn btn-sm btn-outline-dark mt-3 my-auto">
                    <i class="bx bx-arrow-back"></i>
                    Back
                </a>
                <button
                    type="submit"
                    class="btn btn-sm btn-dark my-auto">
                    Submit to Draft
                </button>
            </div>
            <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button style="width: auto" class="nav-link active" id="home-tab" data-toggle="tab" data-target="#general" type="button" role="tab" aria-controls="home" aria-selected="true">General</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button style="width: auto" class="nav-link" id="location-tab" data-toggle="tab" data-target="#paymentplan" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment Plan</button>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-4" id="general" role="tabpanel" aria-labelledby="home-tab">
                    @include('unit.create.form.general')
                </div>

                <div class="tab-pane fade  p-4" id="paymentplan" role="tabpanel" aria-labelledby="paymentplan-tab">
                    @include('unit.create.form.paymentplan')
                </div>

            </div>
        </form>

    </div>
    <!-- end card body -->
</div>
