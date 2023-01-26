@extends('layouts.dashbord')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Les membres</h1>
    <p class="mb-4">Tableau de données des membres de l'association monde rural (AMR)</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-1 d-flex">
            <h6 class="d-inline-block font-weight-bold text-primary py-2">Liste des membres</h6>
            <button class="btn btn-primary d-inline-block ms-auto fw-bold" data-bs-toggle="modal" data-bs-target="#createMembre"><i class="bi bi-plus-circle-fill"></i> Ajouter un membre</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Position</th>
                            <th>Coordination</th>
                            <th>Status</th>
                            <th>Age</th>
                            <th>Date d'adhesion</th>
                            <th>Contributions spécifiques</th>
                            <th>Cotisation annuel</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nom Prénom</th>
                            <th>Position</th>
                            <th>Coordination</th>
                            <th>Status</th>
                            <th>Age</th>
                            <th>Date d'adhesion</th>
                            <th>Contributions spécifiques</th>
                            <th>Cotisation annuel</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nom ." ".$data->prenom}}</td>
                            <td>{{$data->position}}</td>
                            <td>{{$data->coordination}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                @php
                                    //explode the date to get month, day and year
                                    $birthDate = explode("-", $data->naissance);
                                    //get age from date or birthdate
                                    if(isset($data->naissance)){
                                    //dd($birthDate);

                                        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")
                                    ? ((date("Y") - $birthDate[0]) - 1) : (date("Y") - $birthDate[0]));
                                    echo $age;
                                    }
                                @endphp
                            </td>
                            <td>{{$data->date_adhesion}}</td>
                            <td>320.800 FCFA</td>
                            <!--td>ici on aurra la sommes des cotisation suite à particition atelier de AMR et de PDF</td-->
                            <td>320.800 FCFA</td>
                            <td>
                                <span class="d-inline-block"><i class="bi bi-eye-fill"></i></span>
                                <span class="d-inline-block"><i class="bi bi-pencil-square"></i></span>
                                <span class="d-inline-block" data-bs-toggle="modal" data-bs-target="#deleteMembre">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="createMembre">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Création d'un nouveau membre</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <form class="user" method="POST" action="{{ route('createPersonnel') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user"
                                name="nom" placeholder="Nom">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" 
                                name="prenom"
                                    placeholder="Prénom">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-6">
                                <input type="email" class="form-control form-control-user"
                            name="email"
                                placeholder="Adresse email">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                name="numero"
                                    placeholder="Numéro">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                            name="position"
                                placeholder="Position">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                name="coordination"
                                    placeholder="Coordination">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                
                                <select name="status" class="form-control select-radius1">
                                    <option value="">Sélectionnez le status</option>
                                    <option value="membre">Membre</option>
                                    <option value="agent">Agent</option>
                                    <option value="agent">Partenaire</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="">Date de naissance</label>
                                <input type="date" class="form-control form-control-user"
                                name="naissance" placeholder="Date de naissance" value="1987-01-01">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="">Date d'adhésion</label>
                                <input type="Date" class="form-control form-control-user"
                                name="date_adhesion" placeholder="Date d'adhésion" value="1987-01-01">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Créer un compte
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteMembre">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Suppression du membre</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mb-3">
                    <p>Voulez vous vraiment supprimer le membre ?</p>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Annuler
                    </button>
                    <a class="btn btn-primary" href="{{route('deletePersonnel',$data['slug'])}}">
                        Supprimer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection