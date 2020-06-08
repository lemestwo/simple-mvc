<div class="container">

  <div class="card">
    <div class="card-header">
      Users List
    </div>
    <ul class="list-group list-group-flush">
      <?php
      foreach ($users as $user) {
        echo ' <li class="list-group-item">';
        echo $user['name'];
        echo ' <a href="#" onClick="deleteFunc(' . $user['id'] . ')">Delete</a>';
        echo ' <a href="/simple-mvc/public/user/' . $user['id'] . '/edit">Edit</a>';
        echo '</li>';
      }
      ?>
    </ul>
  </div>

</div>