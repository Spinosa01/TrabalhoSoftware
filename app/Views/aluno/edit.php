<div class="container p-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-dark text-white p-4" data-bs-theme="dark">
             <?=form_open("Aluno/salvar")?>
                <input type="hidden" name="id" id="id" value='<?=$aluno['id']?>'>
                <div class="row p-2">
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="nome" id="nome" class="form_control" value='<?=$aluno['nome']?>'>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="nome">Email</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="email" id="email" class="form_control" value='<?=$aluno['email']?>'>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="nome">Telefone</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="telefone" id="telefone" class="form_control" value='<?=$aluno['telefone']?>'>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="nome">Turma</label>
                    </div>
                    <div class="col-10">

                    <?php 
                    $turmas = ['1A','1B','1C','1D','2A','2B','2C','2D','3A','3B','3C','3D']   
                     ?>
                        <input type="text" name="turma" id="turma" class="form_control" value='<?=$aluno['turma']?>'>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="btn-group w-100" role="group">
                                <?=anchor("Aluno/index/","Cancelar", ["class"=>"btn btn-outline-secondary"])?>
                                <button type="submit" class="btn btn-outline-success">Salvar</button>
                        </div>
                    </div>
                </div>  
            <?=form_close()?> 
        </div>  
    </div>
</div>