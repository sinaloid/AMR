@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les projets</h1>
    <p class="mb-4">Tableau des projets de l'association monde rural (AMR)</p>
    <div class="mb-2">
    <button class="btn btn-success fw-bold my-2 me-2">Projets terminer</button>
        <button class="btn btn-warning fw-bold my-2 me-2">Projets en cours</button>
    <button class="btn btn-info fw-bold my-2 me-2">Projets à venir</button>
    <button class="btn btn-danger fw-bold my-2 me-2">Projets en suspension</button>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des projets terminés</h6>
            <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-plus-circle-fill"></i> Ajouter un membre</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom du projet</th>
                            <th>Date de début</th>
                            <th>Dure du projet</th>
                            <th>Date de fin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom du projet</th>
                            <th>Date de début</th>
                            <th>Dure du projet</th>
                            <th>Date de fin</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach ($datas as $data)
                        <tr>
                            <td>Lorem ipsum dolor sit</td>
                            <td>12/02/2023</td>
                            <td>3 mois</td>
                            <td>13/05/2023</td>
                            <!--td>ici on aurra la sommes des cotisation suite à particition atelier de AMR et de PDF</td-->
                            <td>
                                <span class="d-inline-block"><i class="bi bi-eye-fill"></i></span>
                                <span class="d-inline-block"><i class="bi bi-pencil-square"></i></span>
                                <span class="d-inline-block"><i class="bi bi-trash"></i></span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection