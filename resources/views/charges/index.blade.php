@extends('layouts.panel')
@section('title', 'Jefes/Lista')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">

                <div class="card-header border-0">
                    <div class="d-flex justify-content-between algn-items-center">
                        <h3 class="mb-0">Jefes</h3>
                        <a href="{{ route('bosses.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Crear nuevo Jefe
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                th*
