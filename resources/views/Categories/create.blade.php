@extends('templates.material.main')

@section('jquery') {{-- Including this section to override it empty. Using jQuery from webpack build --}} @endsection

@push('before-scripts')
    <script src="{{ mix('/js/home-one.js') }}"></script>
@endpush

@section('content')

    <!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->


<div class="row">
    <div class="col-sm-12">
        <div class="card card-body">
            <h4 class="card-title">Categorias</h4>
            <h6 class="card-subtitle"> Administrar tus categorias </h6>
            <form class="form-horizontal m-t-40" method="post" > 
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                              
                <div class="form-group">
                    <label>Categoria</label>
                    <input type="text" class="form-control" placeholder="Categoria" name="description">
                </div>
               
                <div class="form-group row p-t-20">
                    <div class="col-sm-4">
                        <div class="m-b-10">
                        <div class="demo-switch-title">Estado</div>
                            <div class="switch">
                                <label>
                                    <input name="visible" type="checkbox" checked ><span class="lever switch-col-light-blue"></span>
                                </label>
                            </div>
                        </div>                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Guardar</button>
                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->

<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->

@endsection
