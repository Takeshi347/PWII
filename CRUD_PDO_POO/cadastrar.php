<?php
    include './usuario.php';

     //Criar uma instãncia da classe usuário
     //$usuario = new Usuario();
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4 d-flex justify-content-center align-items-center altura">
                <div class="card">
                    <div class="card-shadow d-flex content-center align-items flex-column"></div>
                    <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-group-512.png"  width="100px" alt="">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="text" name="email" id="email" class="label-control">
                            </div>
                            <div class="mb-3">
                                <label for="senha">Senha</label>
                                <input type="text" name="senha" id="senha">
                            </div>
                            <div class="mb-3">
                                <label for="confimar-senha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confimar-senha" id="senha">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                            <div class="mb-3">
                                <p>Já possui conta? <a href="Realize o Login"></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '.footer.php'; ?>