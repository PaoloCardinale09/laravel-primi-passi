 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lista links</title>
 </head>

 <body>
     <h1>Lista dei links</h1>
     <ul>
         @foreach($links as $link)
         <li><a href="{{route('details', ['index' => $loop->index])}}">{{ $link }} </a></li>
         @endforeach
     </ul>
     <a href="{{ route('homepage')}}">
         <p>torna indietro</p>
     </a>

 </body>

 </html>