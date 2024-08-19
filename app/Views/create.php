
<form action="<?php echo url_to('post.store'); ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="description"">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>