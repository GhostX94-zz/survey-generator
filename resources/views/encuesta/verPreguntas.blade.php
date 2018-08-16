@include('helper.header')
@include('helper.sidebar')


<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-hea der">
<h2 class="header-title">Ver Respuestas</h2>
<div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
</nav>
 </div>
 </div>
 <div class="card">
<div class="card-header border bottom">
 <h4 class="card-title"></h4>

<div class="card-body">
<div class="row">
 <div class="col-sm-12" id="main">
 <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($encuestas as $encuesta)
                                <tr>
                                    <td><strong>{{$encuesta->titulo}}</strong></td>
                                    <td>
                             <form action="editEncuesta/{{$encuesta->titulo}}">
                                <input type="submit"  value="Editar" class="btn btn-warning" />
                                </form>
                                </td>
                            <td>
                            <form action="deleteEncuesta/{{$encuesta->titulo}}">
                            <input type="submit"  value="Eliminar" class="btn btn-danger" />
                            </form>
                            </td> 
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
  </div>
    </div>
     </div>
       </div>
        </div>
   </div>
   @include('helper.footer')