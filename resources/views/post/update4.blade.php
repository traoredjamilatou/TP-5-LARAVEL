<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP-5-LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    
    <div class="row">
    
    <div class="col s12">
        <h1>MODIFIER UN POST - TP-5-LARAVEL</h1>
        <hr>
        
        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
        @endif
        
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger"> {{ $error }} </li>
            @endforeach
        </ul>
       
        <form action="/update4/traitement" method="POST" class="form-group">
        @csrf

        <input type="text" name="id" style="display: none;" value="{{$posts->id}}">
        
            <div class="form-group">
              <label for="Nom">Nom</label>
              <input type="text" class="form-control" id="Nom" name="nom" value="{{$posts->nom}}">
            </div>
           
            <div class="form-group">
              <label for="Contenu">Contenu</label>
              <input type="text" class="form-control" id="Contenu" name="contenu" value="{{$posts->contenu}}">
            </div>
              
            <div class="form-floating">
              <div><label for="tag" class="form-label">Tag</label></div>
              <select class="form-select" id="tag" aria-label="Floating label select example" name="tag">
              @foreach($tags as $tag)
              <option value="{{$tag->id}}">{{$tag->nom}}</option>
              @endforeach
              </select>
              </div>
             
                <br> 
            <button type="submit" class="btn btn-primary">MODIFIER UN post</button>
            <br> <br> 
            <a href="/post" class="btn btn-danger">Revenir à liste des post</a>
          </form>

    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>