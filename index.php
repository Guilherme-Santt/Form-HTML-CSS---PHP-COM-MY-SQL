<<?php
$titulo = $_POST['tittle'];
$preco = $_POST['price'];
$descricao = $_POST['description'];
$marca = $_POST['brand'];
$modelo = $_POST['model'];
$km = $_POST['mileage'];
$data_compra = $_POST['purchase_date'];
$cambio = $_POST['gear'];
$opcionais = $_POST['optional[]'];
//$images = $_FILES['images']


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncie seu veiculo</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <div class="container">
        <!-- DIVISÃO DO HEADER -->
        <div class="header">
            <h3>Anuncie aqui as informações de seu veículo</h3>
        </div>
        <!-- DIVISÃO DO CONTAINER -> FORMULÁRIO-->
        <div class="form-container">
            <!-- TITULO FORMULÁRIO -->
            <div class="form-header"> 
                <p>Formulário</p>
            </div>
            <!-- BODY DO FORMULÁRIO, TITULO & FORMULÁRIO -->
            <div class="form-body">
                <h1 class="form-tittle">Anuncie aqui sua motocicleta!</h1>
                <p>
                    Descreva informações de sua motocicleta 
                </p>
                <form method="POST" action="">    
                    <!-- DIV INPUT TITULO -->
                    <div class="box-input">
                        <label for="Tittle">Anúncio <span class="required-filed">*</span></label>
                        <input
                        type="text" 
                        name="tittle" 
                        id="tittle" 
                        class="block" 
                        placeholder="Um titulo para anunciar seu veículo"
                        minlength="1"
                        maxlength="30"
                        required
                        >
                    </div>
                    <!-- DIV INPUT PREÇO -->
                    <div class="box-input">
                        <label for="price">Preço <span class="required-filed">*</span></label>
                        <input
                        type="number" 
                        name="price" 
                        id="price" 
                        class="block" 
                        placeholder="Defina um preço"
                        required
                        >
                    </div>
                    <!-- DIV INPUT DESCRIÇÃO -->
                    <div class="box-input">
                        <label for="description">Descrição <span class="required-filed">*</span></label>
                        <textarea 
                            name="description" 
                            id="description" 
                            class="block"
                            placeholder="Aqui você coloca os detalhes do veiculo, por exemplo: Se ele tem algum aranhão"
                        ></textarea>
                    </div>
                    <!-- DIV INPUT MARCA -->
                    <div class="box-input">
                        <label for="brand">Marca <span class="required-filed">*</span></label>
                        <input
                        type="text" 
                        name="brand" 
                        id="brand" 
                        class="block" 
                        placeholder="Digite a marca do veículo"
                        required
                        >
                    </div>
                    <!-- DIV INPUT MODELO -->
                    <div class="box-input">
                        <label for="model">Modelo <span class="required-filed">*</span></label>
                        <input
                        type="text" 
                        name="model" 
                        id="model" 
                        class="block" 
                        placeholder="Digite o modelo do veículo"
                        required
                        >
                    </div>
                    <!-- DIV INPUT KILOMETRAGEM -->
                    <div class="box-input">
                        <label for="mileage">Kilometragem <span class="required-filed">*</span></label>
                        <input
                        type="number" 
                        name="mileage" 
                        id="mileage" 
                        class="block" 
                        placeholder="Digite a kilometragem do veículo"
                        required
                        >
                    </div>
                    <!-- DIV INPUT DATA DE COMPRA -->
                    <div class="box-input">
                        <label for="purchase_date">Data de compra <span class="required-filed">*</span></label>
                        <input
                        type="date" 
                        name="purchase_date" 
                        id="purchase_date" 
                        class="block" 
                        required
                        >
                    </div>
                    <!-- DIV INPUT TIPO DE CÂMBIO-->
                    <div class="box-input">
                        <p>Tipo do freio</p>
                        <input type="radio" id="manual" name="gear" velue="Disco">
                        <label for="manual">Disco</span></label>

                        <input type="radio" id="auto" name="gear" velue="ABS">
                        <label for="auto">ABS</span></label>

                        <input type="radio" id="auto" name="gear" velue="Tambor">
                        <label for="auto">Tambor</span></label>
                    </div>
                    <!-- DIV CHECK BOX OPCIONAIS -->
                    <div class="optional-box">
                        <p>Opcionais</p>
                        <ul class="option-list">
                            <li>
                                <!-- CHECK BOX AIRBAG ->  -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Protetor de carenagem"
                                id="Protetor_carenagem"
                                >
                                <label for="airbag">Protetor de carenagem</label>
                            </li>
                            <li>
                                <!-- CHECK BOX ALARME -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Imobilizador de moto"
                                id="Imobolizador"
                                >
                                <label for="alarme">Imobilizador de moto</label>
                            </li>
                            <li>
                                <!-- CHECK BOX AR CONDICIONADO -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Protetor de manete"
                                id="Protetor_manete"
                                >
                                <label for="Ac">Protetor de manete</label>
                            </li>
                            <li>
                                <!-- CHECK BOX CÂMERA DE RÉ -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Suporte para GPS"
                                id="SuporteGPS"
                                >
                                <label for="reverse_camera">Suporte para GPS</label>
                            </li>
                            <li>
                                <!-- CHECK BOX ASSISTENTE DE PÍSTA -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Carregador solar"
                                id="carregador_solar"
                                >
                                <label for="reverse_camera">Carregador solar</label>
                            </li>
                            <li>
                                <!-- CHECK BOX KEYLESS -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Baú"
                                id="bau"
                                >
                                <label for="reverse_camera">Baú</label>
                            </li>
                            <li>
                                <!-- CHECK BOX SMARTPHONE -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Bolsa magnética "
                                id="Bolsa_magnetica"
                                >
                                <label for="reverse_camera">Bolsa magnética </label>
                            </li>
                            <li>
                                <!-- CHECK BOX BANCO DE COURO -->
                                <input type="checkbox"
                                name="optional[]"
                                value="Cavalete de moto"
                                id="cavalete"
                                >
                                <label for="banco">Cavalete de moto</label>
                            </li> 
                        </ul>
                    </div>
                    <!-- INPUT FILE DE IMAGES -->
                    <div class="box-input">
                        <input 
                        type="file"
                        multiple 
                        accept="image/png, image/jpg"
                        id="images"
                        name="images"
                        >
                    </div>
                        <input type="submit" class="btn-submit" value="Enviar" /> 
                </form>    
            </div>
        </div>
    </div>
    
</body>
</html>