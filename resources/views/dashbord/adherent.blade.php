@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les adhérents</h1>
    <p class="mb-4">Tableau de données des demandes d'adhésion à l'association monde rural (AMR)</p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des demandes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prenom</th>
                            <th>numero</th>
                            <th>email</th>
                            <th>Date de la demande</th>
                            <th>Etat de la demande</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prenom</th>
                            <th>numero</th>
                            <th>email</th>
                            <th>Date de la demande</th>
                            <th>Etat de la demande</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>SAWADOGO Salif</td>
                            <td>+226 74 85 96 12</td>
                            <td>salif@gmail.com</td>
                            <td>12/01/2023</td>
                            <td>En cours</td>
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