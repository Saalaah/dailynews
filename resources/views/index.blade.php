 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>News</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 </head>
 <body>
    <div class="container"> 
        <a class=" text-decoration-none btn btn-outline-dark btn-sm mt-2" href="/">Home</a>
       {{-- Sorting section --}}
        <h6>Sort By :</h6>
        <div class="dropdown d-inline">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rating
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/rating/false">Ascending</a>
              <a class="dropdown-item" href="/rating/true">Descending</a>
            </div>
          </div>


          <div class="dropdown d-inline">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Date
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/datetime/false">Ascending</a>
              <a class="dropdown-item" href="/datetime/true">Descending</a>
            </div>
          </div>
<br>
        @if (isset($sortby))
            <p class="text-secondary">News Sorted By {{$sortby}} as 
            @if ($order=='true')
                desc
                @else
                asc
            @endif
            </p>
        @endif

 {{-- Cards section --}}

    <div class="row mt-2">
     @foreach ($allNews as $news)
     <div class="col-4 mb-2">
     <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$news['title']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$news['source']}}</h6>
          <p class="card-text">{{$news['content']}}</p>
          <p  class="badge badge-dark">{{gmdate("D M j G:i:s T Y",$news['datetime'] )}}</p>
          <p  class="badge badge-warning">{{$news['rating']}}</p>
        </div>
      </div> 

     </div>

     @endforeach
     </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 </body>
 </html>