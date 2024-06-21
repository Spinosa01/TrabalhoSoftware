<nav class="navbar navbar-expand-lg  bg-dark mb-3" data-bs-theme="dark">
  <div class="container">
    <?=anchor("Home/index","biblioteca",['class' => 'navbar-brand'])?>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../usuario/index">Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../autor/index">Autor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../editora/index">Editora</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../aluno/index">Aluno</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../obra/index">Obra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../livro/index">Livro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../emprestimo/index">Emprestimo</a>
        </li>
      </ul>
      <button class="btn btn-outline-danger pull-left position-absolute end-0" onclick="location.href='<?php echo base_url('login/logout') ?>'">
          <i class="fas fa-sign-out-alt"></i> Sair
        </button>
    </div>
  </div>
</nav>