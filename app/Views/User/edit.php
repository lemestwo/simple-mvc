<div class="container">

  <form id="formUserEdit" method="post" action="/simple-mvc/public/user/<?php echo $user['id'] ?>">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" value="<?php echo $user['name'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>

</div>