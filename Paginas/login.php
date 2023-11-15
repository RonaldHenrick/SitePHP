<div>
<center><h1>Login</h1></center>
<br>
<form action="receberForm.php" method="post" style="font-size: 20px;">
    <label for="name">Nome</label>
    <input type="text" name="nameCliente" id="nameCliente">
    <br>
    <label for="senha">Senha</label>
    <input type="text" name="senhaCliente" id="senhaCliente">
    <br>
    <label for="user_type">Usuário:</label>
        <select name="user_type">
            <option value="aluno">Aluno</option>
            <option value="administrador">Administrador</option>
            <option value="professor">Professor</option>
        </select><br>
    <button type="submit"style="border-radius: 10px">Enviar</button>
  </form>
</div>