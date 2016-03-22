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
        <form method="POST" >
            <table>
            <tbody>
                <tr>
                    <td>Por data</td>
                    <td><input type="date" name="date"></td>
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
                    <td><input type="button" value="Home" onclick="location. href='/' "></td>
                    <td><input type="reset" name="Limpar" id="Limpar" value="Limpar" />
                        <input type="submit" name="enviar" id="enviar" value="Consultar" /></td>
                </tr>
            </tbody>
        </table>
        </form>
        
    </body>
</html>