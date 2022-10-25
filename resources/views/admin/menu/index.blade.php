@extends('layouts.admin.master')

@section('title')Menu
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable-extension.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>MENU</h3>
		@endslot
		<li class="breadcrumb-item">Setting</li>
		<li class="breadcrumb-item">Menu</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>PAGE</h5>
						<a href="{{route('menu.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i>Tambah</a>
	                </div>
	                <div class="card-body">
	                    <div class="dt-ext table-responsive">
	                        <table class="display" id="responsive">
	                            <thead>
	                                <tr>
	                                    <th>NAMA</th>
										<th>SLAG</th>
										<th>PARENT</th>
										<th>AKSI</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                                   @foreach ($data as $u)
	                                <tr>
	                                    <td>{{ $u->name }}</td>
										<td>{{ $u->slag }}</td>
	                                    <td>{{ $u->parent }}</td>
	                                    <td><a href="{{url('menu/edit')}}/{{$u->id}}" class="btn btn-warning" >Edit</a> | <a href="{{url('menu/delete')}}/{{$u->id}}"  onclick="deleteContact()" class="btn btn-danger" >Delete</a></td>
									</tr>
									@endforeach
									 
	                            </tbody>
								
							
	                            <tfoot>
	                                <tr>
                                        <th>NAMA</th>
										<th>SLAG</th>
										<th>PARENT</th>
										<th>AKSI</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>
	<script src="{{asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>    
	<script src="{{asset('assets/js/contacts/custom.js')}}"></script>
	@endpush

@endsection