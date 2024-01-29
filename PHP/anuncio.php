<?php
$id = intval($_GET['id']);

include('conexao/conexao.php');
$sql_code = "SELECT * FROM informacoesmotocicleta WHERE id = '$id'";
$query_infos = $mysqli->query($sql_code);    
$contagem = $query_infos->num_rows;
$infos = $query_infos->fetch_assoc();

$data = $infos['data_compra'];
// FUNÇÃO FORMATAR DATA AMERICAN PARA PADRÃO BR
function formatar_data($data){
    return implode('/', array_reverse(explode('-', $data)));
};
// ALTERANDO PADRÃO DATA COM FUNÇÃO NATIVA DO PHP DATE
$data_anuncio = date("d/m/y H:i:s", strtotime($infos['data']));    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../css/style.css">
<body>
<div class="container">
        <!-- DIVISÃO DO HEADER -->
        <div class="header">
            <h3>Este é o seu anuncio</h3>
        </div>
        <!-- DIVISÃO DO CONTAINER -> ANUNCIO -->
        <div class="form-container">
            <div class="form-body">
                <h1><?php echo $infos['titulo'] ?></h1>
                <h2>R$<?php echo number_format($infos['preco'],2,",",".") ?></h2>
                <p>Descrição: <?php echo $infos['descricao'] ?></p>
                <p>Marca: <?php echo $infos['marca'] ?></p>
                <p>Modelo: <?php echo $infos['modelo'] ?></p>
                <p>Km: <?php echo number_format($infos['km'],3,".") ?></p>
                <p>Ano: <?php echo formatar_data($data) ?></p>
                <p>Freio: <?php echo $infos['freio'] ?></p>
                <p>Opcionais: <?php echo $infos['opcionais'] ?></p>
                <p>Data anúncio: <?php echo $data_anuncio ?></p>
                <div class="">
                    <img class="img_anuncio" src="<?php echo $infos['path'] ?>">
                </div>
                <p>Visualizar mensagens de possíveis compradores</p>
                <button class="btn-submit">Visualizar mensagens</button>
            </div>
        </div>
</body>
</html>
