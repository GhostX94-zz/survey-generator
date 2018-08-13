@include('usuarios.header')
@include('usuarios.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Usuario</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Configuración</a>
                                    <span class="breadcrumb-item active">Actualizar Usuario</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Actualizar Usuario</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                    {!!Form::open(['route'=>'actualizar.update','method'=>'POST','class'=>'"m-t-15'])!!}
                                        @csrf
                                    <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Requerido *" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Correo</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Requerido *" value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" id="id" name="id" value="{{$user->id}}">
                                            <button type="submit" class="btn btn-gradient-success">Actualizar</button>
                                    {!!Form::close()!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <!-- Content Wrapper END -->
                @include('usuarios.footer')