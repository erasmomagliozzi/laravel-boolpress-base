<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
      </div>
    @endif

  <form action=" {{(!empty($post)) ? route('posts.update', $post->id) : route('posts.store')}}" method='post'>

      @csrf
      @if(!empty($post))
       @method('PATCH')
       @else
       @method('POST')
      @endif
      <div class="">
        <input type="text" name="title" value="{{(!empty($post)) ? $post->title : ''}}" placeholder="title">
      </div>
      <div class="">
        <input type="text" name="subtitle" value="{{(!empty($post)) ? $post->subtitle : ''}}" placeholder="subtitle">
      </div>
      <div class="">
        <input type="text" name="description" value="{{(!empty($post)) ? $post->description : ''}}" placeholder="description">
      </div>
      <div class="">
        <input type="text" name="author" value="{{(!empty($post)) ? $post->author : ''}}" placeholder="author">
      </div>
      <div class="">
        <input type="date" name="date" value="{{(!empty($post)) ? $post->date : ''}}" placeholder="date">
      </div>

      @if(!empty($post))
      <input type="hidden" name="id" value="{{$post->id}}">
      @endif
      <button type="submit" name="button">
          Modifica
      </button>
  </form>

  </body>
</html>
