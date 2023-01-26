@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les actualités</h1>
    <p class="mb-4">Actualité des membres de l'association monde rural (AMR)</p>
    <div class="mb-2">
            <button class="btn btn-success fw-bold my-2 me-2">Nouvelles actualités</button>
            <button class="btn btn-danger fw-bold my-2 me-2">Anciennes actualités</button>
        </div>
    <!-- DataTales Example Liste des anciennes actualités -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des nouvelles actualités</h6>
            <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal" data-bs-target="#actu"><i class="bi bi-plus-circle-fill"></i> Ajouter une actualité</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Catégorie</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Catégorie</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>Lorem ipsum dolor</td>
                            <td>Ouedraogo Ali</td>
                            <td>Acitvité associative</td>
                            <td>12/01/2023</td>
                            <td>
                                <span class="d-inline-block"><i class="bi bi-eye-fill"></i></span>
                                <span class="d-inline-block" data-bs-toggle="modal"
                                data-bs-target="#editactu{{ $data }}"><i class="bi bi-pencil-square"></i></span>
                                <span class="d-inline-block"><i class="bi bi-trash"></i></span>
                            </td>
                        </tr>
                        <div class="modal fade" id="editactu{{ $data }}">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modification de l'actualité</h4>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body mb-3">
                                        <form action="">
                                            <div class="mb-3 mt-3">
                                                <label for="titre-edt" class="form-label">Titre</label>
                                                <input type="text" class="form-control" id="titre-edt" placeholder="Entrer le titre de l'actualité"
                                                    name="titre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="categorie-edt" class="form-label">Catégorie:</label>
                                                <select class="form-control" name="categorie" id="categorie-edt">
                                                    <option value="">Sélectionnez une catégorie</option>
                                                    <option value="">Acitvité associative</option>
                                                    <option value="">Acitvité non associative</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date-edt" class="form-label">Date:</label>
                                                <input type="date" class="form-control" id="date-edt" name="date">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="img-edt" class="form-label">Ajouter une image:</label>
                                                <input type="file" class="form-control" id="img-edt" name="img">
                                            </div>
                        
                                            <div class="mb-3">
                                                <label for="description-edt" class="form-label">Description de l'actulité:</label>
                                                <textarea class="form-control" id="description" name="description-edt" id="" cols="30" rows="3"></textarea>
                                            </div>
                        
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                            <button  class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="actu">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Création d'une nouvelle actualité</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body mb-3">
                <form action="">
                    <div class="mb-3 mt-3">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="titre" placeholder="Entrer le titre de l'actualité"
                            name="titre">
                    </div>
                    <div class="mb-3">
                        <label for="categorie" class="form-label">Catégorie:</label>
                        <select class="form-control" name="categorie" id="categorie">
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="">Acitvité associative</option>
                            <option value="">Acitvité non associative</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    
                    <div class="mb-3">
                        <label for="img" class="form-label">Ajouter une image:</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description de l'actulité:</label>
                        <textarea class="form-control" id="description" name="description" id="" cols="30" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button  class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </form>
            </div>



        </div>
    </div>
</div>
@endsection