@props(['title' => ''])
<div class="row">
    <div class="col-12">
        <x-admin.alert/>
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
            </div>
            <div class="card-body col-sm-12 col-md-12 col-lg-6 col-xl-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
