<form>
    <input type="text" name="meuNome">
    <input type="date" name="nascimento">
    <input type="text" name="idade">
    <input type="submit" value="Ok">
</form>

<?php
    if (isset($_GET)) {
        foreach ($_GET as $key) {
            echo "Seu nome é: " . $_GET['meuNome'] . "<br>";
            echo "<hr>";
            echo "Seu nascimento é: ". $_GET['nascimento']. "<br>";
            echo "<hr>";
            echo "Sua idade é: ". $_GET['idade'];
        }
    }
?>