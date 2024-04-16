<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <a href="{{route('headings.index')}}" class="btn btn-primary">Update headlines and pictures</a>
    
    <a href="{{route('mustard.index')}}" class="btn btn-primary">Add Why Mustard</a>
    <a href="{{route('mustard_list')}}" class="btn btn-primary">Why Mustard list</a>
    
    <a href="{{route('safe_food.index')}}" class="btn btn-primary">Add Why Safe Food</a>
    <a href="{{route('safe_food_list')}}" class="btn btn-primary">Why Safe Food List</a>

    <a href="{{route('advantages.index')}}" class="btn btn-primary">Add Advantages</a>
    <a href="{{route('advantages_list')}}" class="btn btn-primary">Advantages List</a>
    
    <a href="{{route('policy.index')}}" class="btn btn-primary">Add Policy</a>
    <a href="{{route('policy_list')}}" class="btn btn-primary">Policy List</a>
    
   
    
    
    <a href="{{route('mustard_oil.index')}}" class="btn btn-primary">Mustard Oil</a>
    
    
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>