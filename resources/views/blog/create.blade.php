<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create new post</title>
        </head>
        <body>

     <form method ="POST" action ="{{route('add-post')}}">
     @csrf
     <input type ="text" tittle="title" placeholder="title">
     <input type ="text" body="body" placeholder="body">
 <button type ="submit">Create</button>

     </form>
   
    </body>
</html>
