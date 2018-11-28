@extends('templates.material.main')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <h3><b>Codigo Categoria</b> <span class="pull-right">#{!! $category->id !!}</span></h3>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <address>
                            <h3> &nbsp;<b class="text-danger">{!! $category->description !!}</b></h3>
                            <p class="text-muted m-l-5">
                            <p>     Estado:{!! $category->visible ? 'Activo':'inactivo' !!}</p>
                            </p>
                        </address>
                    </div>
                    <div class="pull-right text-right">
                        
                    </div>
                </div>

                <div class="col-md-12">                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="text-right">
                        <a href="{!! action('CategoriesController@edit',$category->id) !!}" class="btn btn-danger">Editar </a>
                        <form method="post" action="{!! action('CategoriesController@destroy',$category->id) !!}" class="btn btn-default btn-outline">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" >
                            <div>
                                <button type="submit" class="btn btn-warning">Eliminar</button>
                            </div>
                        </form>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection