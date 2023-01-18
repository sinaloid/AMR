@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les actualités</h1>
    <p class="mb-4">Actualité des membres de l'association monde rural (AMR)</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des actualités</h6>
            <button class="btn btn-primary d-inline-block ms-auto"><i class="bi bi-plus-circle-fill"></i> Ajouter une actualité</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>type</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>type</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Lorem ipsum dolor</td>
                            <td>Ouedraogo Ali</td>
                            <td>événement</td>
                            <td>12/01/2023</td>
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