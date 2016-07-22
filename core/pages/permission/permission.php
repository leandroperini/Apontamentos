<div class="form-group">
    <label class="col-md-3 col-sm-3 col-xs-12 control-label">Selecione o usuário e marque as permissões
      <br>
      
      <div class="form-group">
            
            <div class="col-md-10 col-sm-4 col-xs-12">
                <select id="cargo" name="cargo" class="form-control" required>
                    <option value="">Usuário...</option>
                    <?php foreach ($class->nomeUsuarios as $key => $nomeUsuarios) : ?>
                        <?php echo("<option value='".$nomeUsuarios['id_user']."'>".$nomeUsuarios['nome_user']."</option>"); ?>
            <?php endforeach; ?>
                </select>
            </div>
        </div>
    </label>

    <div class="col-md-9 col-sm-9 col-xs-12">
      <div class="checkbox">
        <label><input type="checkbox" class="flat" > Cadastrar Usuário</label>
        <label><input type="checkbox" class="flat" > Consultar Usuários</label>
        <label><input type="checkbox" class="flat" > Excluir Usuário</label>
      </div>
      <br>
      <div class="checkbox">
        <label><input type="checkbox" class="flat" > Cadastrar Apontamento</label>
        <label><input type="checkbox" class="flat" > Consultar Apontamento</label>
        <label><input type="checkbox" class="flat" > Excluir Apontamento</label>
      </div>
      <br>
      <div class="checkbox">
        <label><input type="checkbox" class="flat" > Cadastrar All Apontamentos</label>
        <label><input type="checkbox" class="flat" > Consultar All Apontamentos</label>
        <label><input type="checkbox" class="flat" > Excluir All Apontamentos</label>
      </div>
      <br><br>
    </div>
    
    <div class="col-md-9 col-sm-9 col-xs-12">
      <div class="checkbox">
        <label><input type="checkbox" class="flat" > Tela Novo Apontamento</label>
        <label><input type="checkbox" class="flat" > Tela Consultar Apontamento</label>
      </div>
      <br>
      <div class="checkbox">
        <label><input type="checkbox" class="flat" > Tela Cadastrar Usuário</label>
        <label><input type="checkbox" class="flat" > Tela Consultar Usuário</label>
      </div>
      <br>
      <div class="checkbox">
        <label><input type="checkbox" class="flat" > Tela Permissões</label>
      </div>
      <br><br>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="reset" name="reset" id="reset" class="btn btn-danger">Cancelar</button>
            <button type="submit" name="submit" id="submit" class="btn btn-success">Salvar</button>
        </div>
      </div>
    </div>
</div>