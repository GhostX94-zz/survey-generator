@include('helper.header')
@include('helper.sidebar')
<div class="main-content">
<div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">Ver Usuarios</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Configuración</a>
                                    <span class="breadcrumb-item active">Ver Usuarios</span>
                                </nav>
                            </div>
                        </div>
<div class="card">
    <div class="card-header border bottom">
        </div>
        <div class="card-body">
             <table class="table">
            <thead>
             <tr>
             <th scope="col">#</th>
             <th scope="col">Nombre</th>
             <th scope="col">Correo Electrónico</th>
             <th scope="col">Contraseña</th>
        </tr>
        </thead>
           <tbody>
           @foreach($usuarios as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->password}}</td>
       </tr>
        @endforeach
      </tbody>
       </table>
       </div>  
    </div>
    </div>
    </div>
@include('helper.footer')