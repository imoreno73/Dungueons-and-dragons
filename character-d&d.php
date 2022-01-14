<?php
if(isset($_POST["numero"]) && $_POST["numero"]>=4 || $_POST["numero"]=6)
{   
    $numeros=array();
        /* $clase=array();
        $clase=['Barbaro','Bardo','Brujo','Clerigo','Druida','Explorador','Guerrero','Hechicero','Mago','Monje','Paladin','Picaro']; */
        for($i=0;$i<$_POST["numero"];$i++) 
        {
            $numeros[]=rand(12,18); // random determina el lanzamiento del dado de 6 caras
        }
    arsort($numeros); // ordena array numeros de mayor a menor


    /* $pares=0;
    foreach($numeros as $numero) //cuenta numeros que son pares del array
    {
        if($numero%2==0)
            $pares++;
    } */
    ?>

    <br>GENERADOR DE PERSONAJES DUNGUEONS AND DRAGONS<br>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
    Numero de dados a tirar: <input type="number" name="numero" min=4 max=6><br>
    Escojer clase: 
    <select name="clase">
        <option value="Barbaro" selected>Barbaro</option>
        <option value="Bardo">Bardo</option>
        <option value="Brujo">Brujo</option>
        <option value="Clerigo">Clerigo</option>
        <option value="Druida">Druida</option>
        <option value="Explorador">Explorador</option>
        <option value="Guerrero">Guerrero</option>
        <option value="Hechicero">Hechicero</option>
        <option value="Mago">Mago</option>
        <option value="Monje">Monje</option>
        <option value="Paladin">Paladin</option>
        <option value="Picaro">Picaro</option>
    </select><br>
    </form>

    
    <!-- nivel

    raza
    
    dados de golpe

    clase de armadura = 10 + destreza 
 -->
<?php
    
    echo "<br>Tiradas para estadisticas del personaje: ".implode(", ",$numeros);
    echo "<br>La suma de los ".$_POST["numero"]." dados es: ".array_sum($numeros);
    if (array_sum($numeros)>=87)
        echo "<br>resultado por encima de la media";
    else echo "<br>resultado por debajo de la media";
    echo "<br>Clase: "; 
    echo $_POST['clase'];
    
   




}
?>



