@include('helper.header')
@include('helper.sidebar')
<!-- Content Wrapper START -->
<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Usuario</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Configuración</a>
                                    <span class="breadcrumb-item active">Crear Usuario</span>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border bottom">
                                <h4 class="card-title">Crear Usuario</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                    <form role="form" id="form-validation">
                                    <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Nombre *</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Requerido *">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Usuario *</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Requerido *">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label control-label">Contraseña *</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Requerido *">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-gradient-success">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <!-- Content Wrapper END -->
                @include('helper.footer')