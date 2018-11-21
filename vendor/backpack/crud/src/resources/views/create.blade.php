@extends('backpack::layout')

@section('header')
	<section class="content-header">
	  <h1>
        <span class="text-capitalize">{{ $crud->entity_name_plural }}</span>
        <small>{{ trans('backpack::crud.add').' '.$crud->entity_name }}.</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
	    <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
	    <li class="active">{{ trans('backpack::crud.add') }}</li>
	  </ol>
	</section>
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Other Sample form</h4>
            </div>
						<!-- Default box -->
						@if ($crud->hasAccess('list'))
							<a href="{{ url($crud->route) }}" class="hidden-print"><i class="fa fa-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a><br><br>
						@endif
						@include('crud::inc.grouped_errors')
            <div class="card-body">
						<form method="post"
									action="{{ url($crud->route) }}"
									@if ($crud->hasUploadFields('create'))
									enctype="multipart/form-data"
									@endif
									>
									{!! csrf_field() !!}									
                    <div class="form-body">
                        <h3 class="card-title">{{ trans('backpack::crud.add_a_new') }} {{ $crud->entity_name }}</h3>
                        <hr>
                        <div class="row p-t-20">
                                    <!-- load the view from the application if it exists, otherwise load the one in the package -->
																		@if(view()->exists('vendor.backpack.crud.form_content'))
																			@include('vendor.backpack.crud.form_content', [ 'fields' => $crud->getFields('create'), 'action' => 'create' ])
																		@else
																			@include('crud::form_content', [ 'fields' => $crud->getFields('create'), 'action' => 'create' ])
																		@endif																                          
                        </div>
                        <!--/row-->
                        
                        <!--/row-->
                        
                        <!--/row-->
                        <!--/row-->
                    </div>
                    <div class="form-actions">
												@include('crud::inc.form_save_buttons')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->




@endsection
