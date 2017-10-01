<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand"><img src="resources/img/indexicon.png" class="logo"></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-right">
        <!-- added the bootstrap navbar classes here -->
        <?php nav_main($db_conn); ?>
  </ul>
  </div>
</nav>
