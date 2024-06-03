@extends('layouts.admin.master')

@section('title')Ecommerce
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
  @component('components.breadcrumb')
    @slot('breadcrumb_title')
      <h3>Ecommerce</h3>
    @endslot
    <li class="breadcrumb-item">Pages</li>
    <li class="breadcrumb-item active">Ecommerce</li>
  @endcomponent
  
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header pb-0">
                      <h5>Welcome</h5>
                      <span>the pain itself is very important, it will be followed by the adipiscing of the elit</span>
                  </div>
                  <div class="card-body">
                      <p>
                          "It is important to take care of the patient, to be followed by the patient, but it will happen at such a time that there is a lot of work and pain. For to come to the smallest detail, no one should practice any kind of work except as some of it
                          good luck Do not be angry with the pain in the reprimand in the pleasure he wants to be a hair from the pain in the hope that there is no breeding. Unless they are blinded by lust, they do not come forth; they are in fault who forsake their duties and soften their hearts
                          that's the trouble."
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  
  @push('scripts')
  @endpush

@endsection