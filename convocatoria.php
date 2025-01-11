<?php
    include('cachitambo.html');
?>
<div class="text-center container-fluid mt-5 fs-1" style="background-image: url(imag1.jpeg);" > 
    
    <h2 class="p-5 text-warning">CONVOCATORIA</h2>
</div>
<div class="container ">
<div class="row">
<?php
    include('submenu.html');
?>
<div class="col-sm-8">
    <div class="row"><h3 class="mt-3">CONVOCATORIA PUBLICA DE CONTRATACION DIRECTA</h3>
        <img src="imag10.jpg" alt="" class="img-fluid">
    </div>
    <form action=""> 
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre (nombres)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo:juan jose">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido (apellidos)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ejemplo:choque mamani">
    </div>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <button type="button" class="btn btn-secondary mb-3">Enviar</button>
    </form>
</div>
</div>
</div>
<?php
    include('foter.html');
?>