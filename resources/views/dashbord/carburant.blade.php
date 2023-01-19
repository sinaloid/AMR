@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Consommations en carburants</h1>
    <p class="mb-4">Tableau des consommations en carburants de l'association monde rural (AMR)</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des consommations</h6>
            <button class="btn btn-primary d-inline-block ms-auto fw-bold"><i class="bi bi-plus-circle-fill"></i> Ajouter une consommation</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Date</th>
                            <th>Destinations</th>
                            <th>Distance A/R Gourcy klm</th>
                            <th>Distances internes klm</th>
                            <th>Distance Totale Sortie</th>
                            <th>Observations</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Date</th>
                            <th>Destinations</th>
                            <th>Distance A/R Gourcy klm</th>
                            <th>Distances internes klm</th>
                            <th>Distance Totale Sortie</th>
                            <th>Observations</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>12/01/2023</td>
                            <td>Ouagadougou</td>
                            <td>120 km</td>
                            <td>61 km</td>
                            <td>181 km</td>
                            <td>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</td>
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