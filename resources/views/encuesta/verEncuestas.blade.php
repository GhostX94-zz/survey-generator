@include('helper.header_')
@include('helper.sidebar_')
<!-- Content Wrapper START -->
<div class="main-content">
   <div class="container-fluid">
     <div class="page-header">
<h2 class="header-title">Ver Encuestas</h2>
<div class="header-sub-title">
<nav class="breadcrumb breadcrumb-dash">
</nav>
 </div>
 </div>
 <div class="card">
<div class="card-header border bottom">
 <h4 class="card-title"></h4>
 <div class="form-check">
    <input type="checkbox" class="form-check-input" id="hombre" name="hombre">
    <label class="form-check-label" for="exampleCheck1">Hombre</label>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="mujer" name="mujer">
    <label class="form-check-label" for="exampleCheck1">Mujer</label>
  </div>
<div class="card-body">
<div class="row">
 <div class="col-sm-12" id="main">
    
  </div>
    </div>
     </div>
       </div>
        </div>
   </div>
   @include('helper.footer')