@extends('layouts.admin.master')

@section('title') Page
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tambah Page</h3>
		@endslot
		<li class="breadcrumb-item">Setting</li>
		<li class="breadcrumb-item active">Tambah Page</li>
	@endcomponent

    <div class="form-builder">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Tambah Page</h5>
                </div>
                <div class="card-body form-builder">
                      <div class="col-lg-6 col-xl-6">
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-input" role="tabpanel" aria-labelledby="pills-input-tab">
                            <form method="POST" action="{{ route('permission.store') }}"  class="theme-form">
                              @csrf
                              <div class="mb-3 draggable">
                                <label for="input-text-1">TYPE</label>
                                <input id="type" type="text" class="form-control" name="type" required autocomplete="type" autofocus>
                              </div>
                              <div class="mb-3 draggable">
                                <label for="input-text-1">NAME</label>
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                              </div>
                              
                             
                              <div class="form-group">
                                <button class="btn btn-primary " type="submit" data-original-title="btn btn-dark active" title="">SAVE</button>
                              </div> 
                              </form>
                          </div>
                          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @push('scripts') 
    <script src="{{ asset('assets/js/jquery.ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/beautifyhtml.js') }}"></script>
    <script src="{{ asset('assets/js/form-builder/form-builder-2/form-builder-2.js') }}"></script>
	@endpush

@endsection