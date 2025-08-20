@extends('layouts.panel')
@section('title','Incidencia/Show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">

            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa_newspaper"></i>Ver Incidencia</h3>
                    </div>
                    <div class="col-4 text-right">
                            <a href="{{ route('incidences.index')}}" class= "btn btn-sm btn-primary">
                                <i class="fas fa-list"></i> Volver
                            </a>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Información de la Incidencia</h6>
            <div class="pl-lg-4">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="date_end">
                                <i class="fas fa-user"></i>Fecha de la ausencia
                            </label>
                            <p>{{ $incidences->name_departament }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="location">
                                <i class="fas fa-user"></i>Locacion del departamento
                            </label>
                            <p>{{ $departaments->location }}</p>
                        </div>
                    </div>
                </div>

                   <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label" for="description">
                                <i class="fas fa-user"></i>Descripcion del departamento
                            </label>
                            <p>{{ $departaments->description }}</p>
                        </div>
                    </div>
                </div>

@endsection
