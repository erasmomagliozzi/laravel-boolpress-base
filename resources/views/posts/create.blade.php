<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1>Inserisci il tuo articolo di giornale</h1>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

    </header>

    <main>
      <form class="" action="{{route("posts.store")}}" method="post">
       @csrf
       @method('POST')
         <input type="text" name="title" value="" placeholder="title">
         <input type="text" name="subtitle" value="" placeholder="subtitle">
         <input type="text" name="description" value="" placeholder="description">
         <input type="text" name="author" value="" placeholder="author">
         <input type="date" name="date" value="" placeholder="date">

         <input type="submit" name="" value="INSERT">
      </form>
    </main>

  </body>
</html>
