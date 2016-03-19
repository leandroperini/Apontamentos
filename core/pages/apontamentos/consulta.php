<!DOCTYPE html>
<!--
Consulta de Apontamentos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Apontamento</title>
    </head>
    <body>
        <form name="consultaapontamentos" action="/apontamentos/consultaResposta">
            <table border="0">
            <tbody>
                <tr>
                    <td>Por data</td>
                    <td><input type="date" name="data"></td>
                </tr>
                <tr>
                    <td>Por período</td>
                    <td><input type="date" name="hrInicial"></td>
                    <td><input type="date" name="hrFinal"></td>
                </tr>
                <tr>
                    <td>Por técnico código</td>
                    <td><input type="number" name="tecnicoCod" step="1" min="1" max="20000"></td>
                </tr>
                <tr>
                    <td>Por técnico nome</td>
                    <td><input type="search" name="TecnicoNome" size="16" maxlength="16"></td>
                </tr>
                <tr>
                    <td>Por gestor nome</td>
                    <td><input type="search" name="GestorNome" size="16" maxlength="16"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="reset" name="Limpar" id="Limpar" value="Limpar" /> 
                        <input type="submit" name="enviar" id="enviar" value="Consultar" /></td>
                </tr>
            </tbody>
        </table>
        </form>
        
    </body>
</html>