@extends('layouts.app')

@section('content')

<div class = 'cadre'>
    <h1>Activités</h1>
   <form  method="get"> 
       <p>
            <label for="nom">Nom</label>
            
            <label for="description">Description</label><br>
           
            <label for="frequence">Fréquence de la manifestation</label><br>
          
            <label for="date">Date</label><br>
            
            <label for="prix">Prix</label><br>
            
            <label for="image">Image</label><br>
        </p>
  </form> 
</div>
@endsection