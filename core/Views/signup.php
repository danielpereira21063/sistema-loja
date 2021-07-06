<div class="container pt-5 mt-5" id="form-signup">
    <h3 class="text-center mt-4">Cadastro de usuário</h3>
    <form method="POST" action="<?=BASE_URL?>/index.php?a=signup">
        <div class="row text-center d-none" id="signup-erro">
            <div class="col-12 col-md-6 p-1 mx-auto mt-3 text-danger">
                <h6>Preencha todos os campos obrigatórios</h6>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12 col-md-6 mx-auto mb-2">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="txt-name" name="txtName" placeholder="Nome" v-model="name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mx-auto mb-2">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="txt-email" name="txtEmail" placeholder="E-mail" v-model="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mx-auto mb-2">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="txt-password" name="txtPassword" placeholder="Senha" v-model="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mx-auto mb-2">
                <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="text-telefone" name="txtTelefone" placeholder="Telefone" v-model="telefone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mx-auto mb-2 mt-3">
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success w-100" v-on:click="signup">Cadastrar</button>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-6 mx-auto mb-2 mt-3">
                <span class=" text-dark">Já tem uma conta? <a href="<?= BASE_URL ?>/index.php?a=login">Faça login</a></span>
            </div>
        </div>
    </form>
</div>
<script src="<?=BASE_URL?>/public/js/forms/signup.js"></script>