<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">ingrese un numero</span>
        <input id="numero1" type="number" class="form-control" placeholder="Ingrese el numero" aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Ingrese el 2do numero</span>
        <input id="numero2" type="number" class="form-control" placeholder="Ingrese el numero" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div>
            <button id="btn-sumar" type="button" class="btn btn-secondary">Sumar</button>
            <p id="resp-sumar" class="text-lowercase"></p>
            <button type="button" class="btn btn-warning">Warning</button>
        </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

</body>
<script src="/app/Views/vistaContenido/funciones.js"></script>
</html>