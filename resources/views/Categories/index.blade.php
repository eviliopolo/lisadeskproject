@extends('templates.material.main')
@push('after-scripts')

    <!-- This is data table -->
    <script src="/vendor/wrappixel/material-pro/4.1.0/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
@endpush

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Administra tus Categorias</h4>

                @if (session('status'))
                <div class="alert alert-success">
                  {{session('status')}}
                </div>
            @endif
            
            @if($categories->isEmpty())
                <p>No existen categorias configuradas. Inicia tu configuracion</p>
            @else

                <h6 class="card-subtitle">Copia y pega. Exporta a archivos CSV, Excel, PDF e Imprime</h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Activo</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Activo</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($categories as $category)
                              <tr>
                                <td>{!! $category->id !!}</td>
                                  <td>
                                      <a href="{!! action('CategoriesController@show', $category->id) !!}">
                                          {!! $category->description !!}
                                      </a>                            
                                  </td>                                                              
                                  <td><span class="label label-success">{!! $category->visible ? 'Activo': 'Inactivo' !!}</span></td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection