<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="10">
    <thred>
        <tr>
            <th></th>
            <th>Titulo</th>
            <th>Preço</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Km</th>
        </tr>
    </thred>
    <tbody>
    <?php 
    include('conexao/conexao.php');
    $sql_code = "SELECT * FROM informacoesmotocicleta";
    $query_infos = $mysqli->query($sql_code);    
    $contagem = $query_infos->num_rows;
    $infos = $query_infos->fetch_assoc();
    var_dump($infos);

if( $contagem == 0){ ?>
        <tr>
            <td colspan="6">Nenhum anúncio encontrado</td>
        <tr>
    <?php }else{
        while($infos = $query_infos->fetch_assoc()) { ?>  
        <tr>
            <td><img class="img_tbody" href="arquivos/<?php $query_infos['path'];?>"></td>
            <td><?php $info['titulo'];  ?></td>
            <td><?php $info['preco'];  ?></td>
            <td><?php $info['modelo']; ?> </td>
            <td><?php $info['marca'];  ?></td>
            <td><?php $info['data_compra'];?></td>
            <td><?php $info['km'];?></td>
        </tr>
    <?php } 
            }?> 
    </tbody>
</table>
</body>
</html>
