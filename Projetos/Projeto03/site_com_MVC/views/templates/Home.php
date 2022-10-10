<ul>
    <?php

        $clientes = \Models\HomeModel::pegarClientes();
        foreach($clientes as $value){
    ?>
        <li> <?php echo $value["nome"];?> </li>
    <?php
        }
    ?>
</ul>