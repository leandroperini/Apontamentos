

<body>

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>
    
    <h1 class="login_content" id="login">
        .:: SGA - Sistema de Gerenciamento de Apontamentos ::.
    </h1>
    
    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
            <form method="POST">
            <h1>Login</h1>
            <div>
                <input type="text" name="user" id="user" class="form-control" placeholder="Usuário" required="" />
            </div>
            <div>
              <input type="password" name="password" id="password" class="form-control" placeholder="Senha" required="" />
            </div>
            <div>
              <button type="submit" name="submit" id="submit" class="btn btn-success">Acessar</button>
              <a href="#toregister" class="to_register"> Recuperar senha </a>
            </div>
          </form>
            
          <!-- form -->
        </section>
        <!-- content -->
      </div>
        
      <div id="register" class="animate form">
        <section class="login_content">
            <form method="POST">
            <h1>Recuperar Senha</h1>
            <div>
              <input type="text" class="form-control" placeholder="Usuário" required="" />
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Código" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Nova Senha" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Redigite a senha" required="" />
            </div>
            <div>
              <button class="btn btn-danger submit" >Resetar</button>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>

