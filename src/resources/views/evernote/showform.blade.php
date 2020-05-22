<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('EverNote.store')}}" method="POST" >
    <div class="form-group">
      @csrf
      <label for="titlenote">Note Title</label>
      <input name="title" type="text" class="form-control" id="titlenote" aria-describedby="title for note" placeholder="Enter your title">
    </div>
    <div class="form-group">
      <label for="bodynote">Content for Note</label>
      <textarea id="bodynote" name="body" class="description"></textarea>
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
</script>
</body>
</html>