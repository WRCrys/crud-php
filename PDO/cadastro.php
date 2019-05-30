<?php
include("Includes/Header.php");
?>
<div class="ContentMain">

    <div class="Resultado"></div>
    <div class="Formulario">
        <h1 class="Center">Cadastro</h1>

        <form name="FormCadastro" id="FormCadastro" method="POST" action="Controller/Cadastro.php">

            <div class="FormularioInput">
                Nome: <br>
                <input type="text" id="Nome" name="Nome">
            </div>
            <div class="FormularioInput">
                Sexo: <br>
                <input type="text" id="Sexo" name="Sexo">
            </div>
            <div class="FormularioInput">
                Cidade: <br>
                <input type="text" id="Cidade" name="Cidade">
            </div>
            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</div>
<?php
include("Includes/Footer.php");
?>