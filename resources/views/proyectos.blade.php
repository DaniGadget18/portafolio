@extends('Plantilla')
@section('contenido')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info">
                    <h4>Proyectos</h4>
                    <h5>Estos proyectos han sido desarrollados en conjunto y fueron realizados en la escuela como proyecto.</h5>
                </div>
            </div>
            <div class="col-12">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                      <h4 class="card-title">Game Spaces</h>
                      <h5 class="card-subtitle mb-2">Plataforma de ventas de juegos</h5>
                      <h6> Plataforma desarrollada con </h6>
                          <h6 class="text-danger"> Angular </h6> 
                          <h6 class="text-success"> Node JS</h6>
                      <div class="row row-cols-12 row-cols-md-12">
                        <div class="col mb-4">
                          <div class="card h-100">
                            <img src="img/gamespaces.PNG" class="card-img-top" alt="...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 mt-3">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                      <h4 class="card-title">iParty</h4>
                      <h5 class="card-subtitle mb-2">Plataforma de reservaciones antros, bar, etc</h5>
                      <h6> Plataforma desarrollada con </h6>
                          <h6 class="text-danger"> Angular </h6> 
                          <h6 class="text-success"> Node JS - Adonis JS</h6>
                      <div class="row row-cols-12 row-cols-md-12">
                        <div class="col mb-4">
                          <div class="card h-100">
                            <img src="img/iparty.PNG" class="card-img-top" alt="...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 mt-3">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                      <h4 class="card-title">Andys</h4>
                      <h5 class="card-subtitle mb-2">Plataforma punto de venta dulceria</h5>
                      <h6> Plataforma desarrollada con </h6>
                          <h6 class="text-danger"> Laravel 5.0 </h6> 
                      <div class="row row-cols-12 row-cols-md-12">
                        <div class="col mb-4">
                          <div class="card h-100">
                            <img src="img/dulceria.PNG" class="card-img-top" alt="...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 mt-3">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                      <h4 class="card-title">Limpi</h4>
                      <h5 class="card-subtitle mb-2">Plataforma de lavanderia</h5>
                      <h6> Plataforma desarrollada con </h6>
                          <h6 class="text-danger"> Laravel 5.0 </h6> 
                      <div class="row row-cols-12 row-cols-md-12">
                        <div class="col mb-4">
                          <div class="card h-100">
                            <img src="img/limpi.PNG" class="card-img-top" alt="...">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@stop