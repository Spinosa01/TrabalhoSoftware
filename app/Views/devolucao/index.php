

<div class="container p-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-dark text-white p-4" data-bs-theme="dark">
        <?=form_open('Emprestimo/salvardev')?>
    <input value='<?=$Emprestimo['id']?>'class='form-control' type="hidden" id='id' name='id'>
    <input value='<?=$Emprestimo['id_livro']?>'class='form-control' type="hidden" id='id_livro' name='id_livro'>
    <div class="row p-2">
        <div class="col-2">
            <label for="data_fim">Data do Fim:</label>
        </div>
        <div class="col-10">
            <input value='<?=$Emprestimo['data_fim']?>'class='form-control' type="date" id='data_fim' name='data_fim'>
        </div>
    </div>
    <div class="row p-4">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <a href='http://localhost:8080/index.php/Emprestimo/index'class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </div>
    </div>
    <?=form_close()?>
            
        </div>  
    </div>
</div>