<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>TP-5-LARAVEL</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container text-center">
            <div class="row">
                <div class="col s12">
                    <h1>TP-5-LARAVEL</h1>
                    <hr/>
                    {{-- <a href="/ajouter2" class="btn btn-primary"
                    >Ajouter un tuteur</a> --}}
                    <a href="/ajouter" class="btn btn-primary"
                        >Ajouter un etudiant</a>
                        <a href="/tuteur" class="btn btn-primary">Revenir à liste des tuteurs</a>
                        <a href="/etudiant" class="btn btn-danger">Ajoute un POST</a>
                        <a href="/etudiant" class="btn btn-danger">Ajoute un TAG</a>
                    <hr/>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session("status") }}
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Classe</th>
                                <th>Images</th>
                                <th>Ville</th>
                                <th>Nationalite</th>
                                <th>Groupe sanguin</th>
                                <th>Tuteur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                             @foreach ($etudiants as $etudiant)
                            <tr>
                                <td>{{ $etudiant->id }}</td>
                                <td>{{ $etudiant->nom }}</td>
                                <td>{{ $etudiant->prenom }}</td>
                                <td>{{ $etudiant->classe }}</td>
                                <td> <img src="/images/{{ $etudiant->images }}" alt="" style="width: 60px; height:60px; border-raduis:50px;"> </td>
                                <td>{{ $etudiant->ville->ville  }}</td>
                                <td>{{ $etudiant->nationalite->nationalite }}</td>
                                <td>{{ $etudiant->groupe->groupe }}</td>
                                <td>{{ $etudiant->tuteur->nom}} {{$etudiant->tuteur->prenom}}</td>
                                
                                <td>
                                    <a
                                        href="/update-etudiant/{{ $etudiant->id }}"
                                        class="btn btn-info"
                                        >Update</a
                                    >
                                    <a
                                        href="/delete-etudiant/{{ $etudiant->id }}"
                                        class="btn btn-danger"
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
