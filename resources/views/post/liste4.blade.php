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
                    
                    <a href="/ajouter4" class="btn btn-primary"
                        >Ajouter un post</a>
                        <a href="/etudiant" class="btn btn-danger">Revenir à liste des etudiants</a>
                        <a href="/tag" class="btn btn-primary ">Revenir à liste des tag</a>

                        {{-- <a href="/post" class="btn btn-danger">Revenir à liste des post</a> --}}
                        
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
                                <th>contenu</th>
                                <th>Tag</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                             @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->nom }}</td>
                                <td>{{ $post->contenu }}</td>
                               
                                 <td>
                                    @foreach ($post->tags as $tag)
                                        {{ $tag->nom }}</td>
                                        <br>
                                    @endforeach
                                <td>
                                    <a
                                        href="/update-post/{{ $post->id }}"
                                        class="btn btn-info"
                                        >Update</a
                                    >
                                    <a
                                        href="/delete-post/{{ $post->id }}"
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
