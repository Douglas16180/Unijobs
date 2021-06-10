<!DOCTYPE html>
    <html lang="pt-br">
    <title>Unijops</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar,
    h1,
    button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor,
    .fa-coffee {
        font-size: 200px
    }
</style>

<body>
   <!--Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-yellow w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-yellow" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#inicio" class="w3-bar-item w3-button w3-padding-large w3-black">Inicio</a>
            <a href="#sobre" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sobre</a>
            <a href="#formulario" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cadastre-se</a>
            <a href="#contato" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contato</a>
        </div>

   <!--Navbar on small screens -->
        <div class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#sobre" class="w3-bar-item w3-button">Sobre</a>
            <a href="#formulario" class="w3-bar-item w3-button w3-padding-large">Cadastre-se</a>
            <a href="#contato" class="w3-bar-item w3-button w3-padding-large">Contato</a>
        </div>
    </div>

   <!--Cabesalho -->
    <header id="inicio" class="w3-container w3-yellow w3-center" style="padding:60px 16px">
        <img src="imagens/logo.png" alt="Logo" width="400" height="400">
        <h2 class="w3-margin w3-jumbo">BEM-VINDO(A) !</h2>
        <a href="https://wa.me/5511980246380?text=Olá%20🙋‍♂️">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top ">Entre em Contato</button>
    </header>

   <!--Sobre -->
    <div id="sobre" class="w3-row-padding w3-black w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <h1 class="w3-text-white">Quem Somos</h1>
                <h5 class="w3-padding-32 w3-text-white">Unijobs é uma plataforma de oportunidades profissionais e busca de talentos que oferece
                    ferramentas avançadas para gerir os processos seletivos das empresas e facilitam o aos candidatos
                    a vantagem de cadastrarem seus currículos de forma gratuita, contemplando profissionais de todos os perfis.</h5>

                <p class="w3-text-grey"> Seu objetivo é promover o encontro entre candidatos que buscam oportunidades de trabalho e empresas
                    que desejam selecionar profissionais qualificados. Para isso, contam com ferramentas rápidas e eficientes de busca
                    de vagas e de currículos, assim como formulários adequados para publicação de um bom anúncio de vaga de
                    emprego e de currículo. A Unijobs não participa diretamente no processo seletivo das empresas anunciantes
                    e não interfere em qualquer etapa deste processo.</p>
            </div>

            <div class="w3-third w3-center">
                <img src="imagens/sobre.png" alt="Moto" width="400" height="400"></a>
            </div>
        </div>
    </div>

   <!--Formularios -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">

        <div id="formulario" class="container-fluid text-center bg-grey">
            <h2>Formularios</h2><br>
            <h4>Areas Pretendidas</h4>
            <div class="row text-left slideanim">
                <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="imagens/cadastro.png" alt="Baba" width="400" height="300" onclick="document.getElementById('id01').style.display='block'">
                            <!--modal-->
                            <div class="w3-container">
                                <div id="id01" class="w3-modal">
                                    <div class="w3-modal-content">
                                        <div class="w3-container">
                                            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                            <p>
                                                <h2 class="w3-center">Forms</h2>
                                                <div class="w3-row-padding ">
                                                    <div id="corpoform">
                                                        <form class="w3-container w3-card-4" method="POST" action="processa.php">

                                                            <h2>Dados Pessoais</h2>                                 

                                                                                            
                                                            
                                                            <label for="nome">Nome completo:</label><br>
                                                            <input type="text" class="w3-input" name="nome" value=""><br><br>

                                                            <label for="idade">Data de Nascimento:</label><br>
                                                            <input type="date" class="w3-input" name="idade" value=""><br><br>

                                                            <label for="civil">Estado Civil:</label>
                                                            <select class="w3-input" name="civil">
                                                                <option value="Casado">Casado</option>
                                                                <option value="Solteiro">Solteiro</option>
                                                            </select><br><br>

                                                            <div class="w3-half">
                                                                <label for="tel">Telefone:</label>
                                                                <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="tel"><br><br>
                                                            </div>

                                                            <div class="w3-half">
                                                                <label for="cel">Celular:</label>
                                                                <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="cel"><br><br>
                                                            </div>

                                                            <div class="w3-half">
                                                                <label for="rec">Contato para recado:</label>
                                                                <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="rec">
                                                            </div>

                                                            <div class="w3-half">
                                                                <label for="recname">Falar com:</label>
                                                                <input type="text" name="recname" class="w3-input"><br><br>
                                                            </div>

                                                            <label for="email">Email</label>
                                                            <input type="email" placeholder="nome@exemplo.com" name="email" class="w3-input"><br><br>

                                                            <label>Cep:
                                                                <input class="w3-input" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);"></label><br><br>

                                                            <div class="w3-half">
                                                                <label>Rua:
                                                                    <input class="w3-input" name="rua" type="text" id="rua" size="60" /></label><br><br>
                                                            </div>

                                                            <div class="w3-half">
                                                                <label>Bairro:
                                                                    <input class="w3-input" name="bairro" type="text" id="bairro" size="40" /></label><br><br>
                                                            </div>

                                                            <div class="w3-half">
                                                                <label>Cidade:
                                                                    <input class="w3-input" name="cidade" type="text" id="cidade" size="40" /></label><br><br>
                                                            </div>

                                                            <div class="w3-half">
                                                                <label>Estado:
                                                                    <input class="w3-input" name="uf" type="text" id="uf" size="2" /></label><br><br>
                                                            </div>

                                                            <label for="escolaridade">Grau de escolaridade:</label>
                                                            <select name="escolaridade" class="w3-input">
                                                                <option value=""></option>
                                                                <option value="pgi">Primeiro grau incompleto</option>
                                                                <option value="pgc">Primeiro grau completo</option>
                                                                <option value="sgi">Segundo grau incompleto</option>
                                                                <option value="sgc">Segundo grau completo</option>
                                                                <option value="ti">Tecnico incompleto</option>
                                                                <option value="tc">Tecnico Completo</option>
                                                                <option value="si">Superior incompleto</option>
                                                                <option value="sc">Superior completo</option>
                                                                <option value="e">Especialização</option>
                                                                <option value="m">Mestrado</option>
                                                                <option value="d">Doutorado</option>
                                                            </select><br><br>

                                                            <label for="fumante">Fumante:</label>
                                                            <select name="fumante" class="w3-input">
                                                                <option value="NULO"></option>
                                                                <option value="fuma">Sim</option>
                                                                <option value="Nfuma">Não</option>
                                                            </select><br><br>

                                                            <div class="w3-half">
                                                                <p>Filhos:</p>
                                                                <input class="w3-radio" type="radio" name="filho" value="FilhosS">
                                                                <label for="filho">Sim</label>
                                                                <input class="w3-radio" type="radio" name="filho" value="FilhosN">
                                                                <label for="filho">Não</label><br><br>
                                                            </div>

                                                            <div class="w3-half">
                                                                <p>Se "SIM":</p>
                                                                <label for="quantF">Quantos:</label>
                                                                <input class="w3-input" type="number" name="quantF">
                                                            </div>

                                                            <label for="guarda">Com quem ficam:</label>
                                                            <input type="text" name="guarda" class="w3-input"><br><br>

                                                            <label for="ultimosalario">Ultimo salário</label>
                                                            <input class= w3-input type="int" name="ultimosalario">
                                                            
                                                            <br>

                                                            <input class="w3-input" type="submit" value="Cadastrar"><br><br>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="imagens/cadastro.png" alt="Baba" width="400" height="300" onclick="document.getElementById('id01').style.display='block'">
                        <!--modal-->
                        <div class="w3-container">
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content">
                                <div class="w3-container">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                    <p>
                                        <h2 class="w3-center">Forms</h2>
                                        <div class="w3-row-padding ">
                                            <div id="corpoform">
                                                <form class="w3-container w3-card-4" method="POST" action="processa.php">

                                                    <h2>Dados Pessoais</h2>                                 

                                                                                    
                                                    
                                                    <label for="nome">Nome completo:</label><br>
                                                    <input type="text" class="w3-input" name="nome" value=""><br><br>

                                                    <label for="idade">Data de Nascimento:</label><br>
                                                    <input type="date" class="w3-input" name="idade" value=""><br><br>

                                                    <label for="civil">Estado Civil:</label>
                                                    <select class="w3-input" name="civil">
                                                        <option value="Casado">Casado</option>
                                                        <option value="Solteiro">Solteiro</option>
                                                    </select><br><br>

                                                    <div class="w3-half">
                                                        <label for="tel">Telefone:</label>
                                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="tel"><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label for="cel">Celular:</label>
                                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="cel"><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label for="rec">Contato para recado:</label>
                                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="rec">
                                                    </div>

                                                    <div class="w3-half">
                                                        <label for="recname">Falar com:</label>
                                                        <input type="text" name="recname" class="w3-input"><br><br>
                                                    </div>

                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="nome@exemplo.com" name="email" class="w3-input"><br><br>

                                                    <label>Cep:
                                                        <input class="w3-input" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);"></label><br><br>

                                                    <div class="w3-half">
                                                        <label>Rua:
                                                            <input class="w3-input" name="rua" type="text" id="rua" size="60" /></label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label>Bairro:
                                                            <input class="w3-input" name="bairro" type="text" id="bairro" size="40" /></label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label>Cidade:
                                                            <input class="w3-input" name="cidade" type="text" id="cidade" size="40" /></label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label>Estado:
                                                            <input class="w3-input" name="uf" type="text" id="uf" size="2" /></label><br><br>
                                                    </div>

                                                    <label for="escolaridade">Grau de escolaridade:</label>
                                                    <select name="escolaridade" class="w3-input">
                                                        <option value=""></option>
                                                        <option value="pgi">Primeiro grau incompleto</option>
                                                        <option value="pgc">Primeiro grau completo</option>
                                                        <option value="sgi">Segundo grau incompleto</option>
                                                        <option value="sgc">Segundo grau completo</option>
                                                        <option value="ti">Tecnico incompleto</option>
                                                        <option value="tc">Tecnico Completo</option>
                                                        <option value="si">Superior incompleto</option>
                                                        <option value="sc">Superior completo</option>
                                                        <option value="e">Especialização</option>
                                                        <option value="m">Mestrado</option>
                                                        <option value="d">Doutorado</option>
                                                    </select><br><br>

                                                    <label for="fumante">Fumante:</label>
                                                    <select name="fumante" class="w3-input">
                                                        <option value="NULO"></option>
                                                        <option value="fuma">Sim</option>
                                                        <option value="Nfuma">Não</option>
                                                    </select><br><br>

                                                    <div class="w3-half">
                                                        <p>Filhos:</p>
                                                        <input class="w3-radio" type="radio" name="filho" value="FilhosS">
                                                        <label for="filho">Sim</label>
                                                        <input class="w3-radio" type="radio" name="filho" value="FilhosN">
                                                        <label for="filho">Não</label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <p>Se "SIM":</p>
                                                        <label for="quantF">Quantos:</label>
                                                        <input class="w3-input" type="number" name="quantF">
                                                    </div>

                                                    <label for="guarda">Com quem ficam:</label>
                                                    <input type="text" name="guarda" class="w3-input"><br><br>

                                                    <label for="ultimosalario">Ultimo salário</label>
                                                    <input class= w3-input type="int" name="ultimosalario">
                                                    
                                                    <br>

                                                    <input class="w3-input" type="submit" value="Cadastrar"><br><br>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="imagens/cadastro.png" alt="Baba" width="400" height="300" onclick="document.getElementById('id01').style.display='block'">
                        <!--modal-->
                        <div class="w3-container">
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content">
                                <div class="w3-container">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                    <p>
                                        <h2 class="w3-center">Forms</h2>
                                        <div class="w3-row-padding ">
                                            <div id="corpoform">
                                                <form class="w3-container w3-card-4" method="POST" action="processa.php">

                                                    <h2>Dados Pessoais</h2>                                 

                                                                                    
                                                    
                                                    <label for="nome">Nome completo:</label><br>
                                                    <input type="text" class="w3-input" name="nome" value=""><br><br>

                                                    <label for="idade">Data de Nascimento:</label><br>
                                                    <input type="date" class="w3-input" name="idade" value=""><br><br>

                                                    <label for="civil">Estado Civil:</label>
                                                    <select class="w3-input" name="civil">
                                                        <option value="Casado">Casado</option>
                                                        <option value="Solteiro">Solteiro</option>
                                                    </select><br><br>

                                                    <div class="w3-half">
                                                        <label for="tel">Telefone:</label>
                                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="tel"><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label for="cel">Celular:</label>
                                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="cel"><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label for="rec">Contato para recado:</label>
                                                        <input type="tel" placeholder="(__) 12345-6789" class="w3-input" name="rec">
                                                    </div>

                                                    <div class="w3-half">
                                                        <label for="recname">Falar com:</label>
                                                        <input type="text" name="recname" class="w3-input"><br><br>
                                                    </div>

                                                    <label for="email">Email</label>
                                                    <input type="email" placeholder="nome@exemplo.com" name="email" class="w3-input"><br><br>

                                                    <label>Cep:
                                                        <input class="w3-input" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);"></label><br><br>

                                                    <div class="w3-half">
                                                        <label>Rua:
                                                            <input class="w3-input" name="rua" type="text" id="rua" size="60" /></label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label>Bairro:
                                                            <input class="w3-input" name="bairro" type="text" id="bairro" size="40" /></label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label>Cidade:
                                                            <input class="w3-input" name="cidade" type="text" id="cidade" size="40" /></label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <label>Estado:
                                                            <input class="w3-input" name="uf" type="text" id="uf" size="2" /></label><br><br>
                                                    </div>

                                                    <label for="escolaridade">Grau de escolaridade:</label>
                                                    <select name="escolaridade" class="w3-input">
                                                        <option value=""></option>
                                                        <option value="pgi">Primeiro grau incompleto</option>
                                                        <option value="pgc">Primeiro grau completo</option>
                                                        <option value="sgi">Segundo grau incompleto</option>
                                                        <option value="sgc">Segundo grau completo</option>
                                                        <option value="ti">Tecnico incompleto</option>
                                                        <option value="tc">Tecnico Completo</option>
                                                        <option value="si">Superior incompleto</option>
                                                        <option value="sc">Superior completo</option>
                                                        <option value="e">Especialização</option>
                                                        <option value="m">Mestrado</option>
                                                        <option value="d">Doutorado</option>
                                                    </select><br><br>

                                                    <label for="fumante">Fumante:</label>
                                                    <select name="fumante" class="w3-input">
                                                        <option value="NULO"></option>
                                                        <option value="fuma">Sim</option>
                                                        <option value="Nfuma">Não</option>
                                                    </select><br><br>

                                                    <div class="w3-half">
                                                        <p>Filhos:</p>
                                                        <input class="w3-radio" type="radio" name="filho" value="FilhosS">
                                                        <label for="filho">Sim</label>
                                                        <input class="w3-radio" type="radio" name="filho" value="FilhosN">
                                                        <label for="filho">Não</label><br><br>
                                                    </div>

                                                    <div class="w3-half">
                                                        <p>Se "SIM":</p>
                                                        <label for="quantF">Quantos:</label>
                                                        <input class="w3-input" type="number" name="quantF">
                                                    </div>

                                                    <label for="guarda">Com quem ficam:</label>
                                                    <input type="text" name="guarda" class="w3-input"><br><br>

                                                    <label for="ultimosalario">Ultimo salário</label>
                                                    <input class= w3-input type="int" name="ultimosalario">
                                                    
                                                    <br>

                                                    <input class="w3-input" type="submit" value="Cadastrar"><br><br>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!--informativo dos forms-->
        <div class="w3-content">
            <div class="w3-third w3-center">
                <img src="imagens/cadastro.png" alt="Moto" width="300" height="300"></a>
            </div>
            <div class="w3-twothird">
                <h1>Lorem Ipsum</h1>
                <h5 class="w3-padding-32">bhsgbsgbshgysgysgshf</h5>
                <p class="w3-text-grey">sgsgfsuhghisifhuihsifhsiufhigsh</p>
            </div>
        </div>
    </div>
   <!--Contato-->
    <div id="contato" class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTATO</h2>
            <div class="row">
                <div class="col-sm-5">
                    <img src="imagens/contato.png" alt="Moto" width="300" height="200">
                    <p>Contate-nos de Seg a Sex das 9h as 16h.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> São Paulo, SP</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +00 (11)900000000</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Menssagem" rows="7"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--Roda pé -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
        <div class="w3-xlarge w3-padding-32">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by <a href="" target="_blank">Grupo7</a></p>
    </footer>
   <!--javaScript-->
    <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
   <!--javaScriptFormEndereço-->
    <script type="text/javascript">
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
            }
            //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                }
                //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");

                }

            }
            //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    </script>


</body>

</html>