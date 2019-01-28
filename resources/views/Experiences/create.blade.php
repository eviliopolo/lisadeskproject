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
            <h4 class="card-title">Experiencias</h4>
            <h6 class="card-subtitle"> Administra las experiencias </h6>
            <form class="form-horizontal m-t-40" method="post" enctype="multipart/form-data"  > 
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif



                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                              
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" placeholder="Ingresa una descripcion" name="description">
                </div>

                <div class="form-group">
                    <label>Valor</label>
                    <input type="text" class="form-control" placeholder="Ingresa un valor" name="unitValue">
                </div>

                <div class="form-group">
                    <label>Seleccionar imagen</label>
                    <input type="file" name="file" class="form-control" placeholder="Seleccionar archivo">
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
