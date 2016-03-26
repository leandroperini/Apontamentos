<!DOCTYPE html>
<!--
Tela de Apontamentos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Apontamentos</title>
    </head>
    <body>
        <fieldset>
            <table width="100%">
                <tr>
                    <td>
                        <input type="button" value="Home" onclick="location. href='/' ">
                    </td>
                    
                    <td align="center">
                        <font face="verdana" size="4" color="red">Decreva suas atividades realizadas</font>
                    </td>
                    <td align="right">
                        <span id="clock" ></span>
                        <script>setTimeout("data_hora()",10);</script>
                        <script type="text/javascript" src="../../../webroot/assets/js/data_hora.js"></script>
                        <font face="verdana" size="" color="red">error Java Script time</font>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <div>
            <form action="/apontamentos/apontado" method="POST">
                <!-- DESCRIÇÃO DA ATIVIDADE-->
                <fieldset>
                 <legend>Novo Apontamento</legend>
                    <table cellspacing="10">
                        <tr>
                            <td>
                                <label>Data Apontamento: </label>
                            </td>
                            <td>
                                <input type="date" name="hr">
                            </td>
                            <td>
                                <label>Colaborador: </label>
                            </td>
                            <td>
                                <input type="search" name="colaborador" size="35" maxlength="20" value="922 - Tarcio Lima" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Hora Inicial: </label>
                            </td>
                            <td align="left">
                                <input type="time" name="Hora Inicial">
                            </td>
                             <td>
                                <label>Hora Final: </label>
                            </td>
                            <td align="left">
                                <input type="time" name="Hora Final">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>OS:</label>
                            </td>
                            <td align="left">
                                <input type="search" name="OS" size="16" maxlength="25"> -
                                <select name="ano">
                                    <option>2016</option>
                                    <option>2015</option>
                                    <option>2014</option>
                                    <option>2013</option>
                                </select>
                            </td>
                            <td>
                                <label>Gestor:</label>
                            </td>
                            <td align="left">
                                <select name="gestor">
                                    <option>Anderson</option>
                                    <option>Alex</option>
                                    <option>Maro</option>
                                    <option>André</option>
                                    <option>Gerlan</option>
                                    <option>Henrique</option>
                                    <option>Tárcio</option>
                                    <option>Cláudio</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Site:</label>
                            </td>
                            <td>
                                <input type="search" name="site" size="16" maxlength="16">
                            </td>
                            <td>
                                <label>Evento:</label>
                            </td>
                            <td>
                                <?php
                                "@duvida_perini";
                                // Montar o select apartir com os dados da tabela evento do banco
                                ?>
                                <select name="Evento">
                                    <option>Aguardando Atividades</option>
                                    <option>Deslocamento</option>
                                    <option>Improdutividade Ensel</option>
                                    <option>Improdutividade Cliente</option>
                                    <option>Vistoria</option>
                                    <option>Recebimento de Material</option>
                                    <option>Instalação</option>
                                    <option>Teste</option>
                                    <option>Aceitação</option>
                                    <option>Documentação</option>
                                    <option>Compensação</option>
                                    <option>Falta</option>
                                    <option>Atestado</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Descrição:</label>
                            </td>
                            <td>
                                <textarea name="Descrição" rows="8" cols="40">Detalhe aqui sua atividade....</textarea>
                            </td>
                            <td>
                                <label>Comentário:</label>
                            </td>
                            <td>
                                <textarea name="Comentário" rows="8" cols="40">Acrescente algum comentário....</textarea>
                            </td>
                         </tr>
                         <tr>
                            <td>
                                <label>Veículo:</label>
                            </td>
                            <td>
                                <input type="search" name="site" size="16" maxlength="16">
                            </td>
                             <td></td>
                             <td>
                                <input value="Limpar" type="reset"/>
                                <input value="Registrar Apontamento" type="submit"/>
                             </td>                             
                         </tr>
                    </table>
                </fieldset>
                <br>
                
                <div>
                    <center>
                        <input type="radio" name="classificação" value="Bom" checked> Ótimo
                        <input type="radio" name="classificação" value="Regular"> Regular
                        <input type="radio" name="classificação" value="Ruim"> Ruim
                        <input type="radio" name="classificação" value="Péssimo"> Péssimo <br><br>
                        <input type="submit" value="Finalizar Apontamentos do Dia" name="Enviar" />
                    </center>
                </div>
                
            </form>
        </div>
    </body>
</html>