
angular.module('app_landing').controller('landing_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    var url = new URL(window.location.href);

    $scope.mobile ;

    $scope.screenSizeMob = true

    if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
    ){
        $scope.mobile = true;
    }
    else {
        $scope.mobile = false;
    }

    $scope.scrollSim = function () {

        if(url == base_url) {
            $("#simulador-preco")[0].scrollIntoView({behavior: 'smooth'});
        }else{
            window.location.href = base_url + "#" ;


        }

    }

    $scope.scrollCom = function () {

        if(url == base_url + "home/servico") {
            $("#compra-assistida")[0].scrollIntoView({behavior: 'smooth'});
        }else{
            window.location.href = base_url + "home/servico/" + "#" ;


        }

    }


    $timeout(function(){
        document.getElementById("loading").style.display = "none";
    }, 400);

    if(url == base_url + "#"){
        $timeout(function(){
            $("#simulador-preco")[0].scrollIntoView({behavior: 'smooth'});
        }, 2500);
    }
    if(url == base_url + "home/servico/#"){
        $timeout(function(){
            $("#compra-assistida")[0].scrollIntoView({behavior: 'smooth'});
        }, 2500);
    }

    $scope.valor_plano_1_taxa
    $scope.valor_plano_2_taxa
    $scope.valor_plano_3_taxa



    function getWindowWidth() {
        var windowWidth = 0;
        if (typeof(window.innerWidth) == 'number') {
            windowWidth = window.innerWidth;
        }
        else {
            if (document.documentElement && document.documentElement.clientWidth) {
                windowWidth = document.documentElement.clientWidth;
            }
            else {
                if (document.body && document.body.clientWidth) {
                    windowWidth = document.body.clientWidth;
                }
            }
        }
        return windowWidth;
    }
    if(getWindowWidth() > 769){
        var screenSize = getWindowWidth() / 1920 * 100
        $('html').css({zoom: screenSize/100})
        $scope.screenSizeMob =  false;
    }



    window.onresize=function() {

        if(getWindowWidth() > 769){
            var screenSize = getWindowWidth() / 1920 * 100
            $('html').css({zoom: screenSize/100})
            $scope.screenSizeMob =  false;

        }else{
            $('html').css({zoom: 0})
            $scope.screenSizeMob =  true;

        }

    }

    $scope.range_simulator_home = 0;
    $scope.valor_kg = 0;
    $scope.range_simulator_home_kg = 0;
    $scope.select_lbs_kg = '1';
    function formataDinheiro(n) {
        return "US$" + n.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+\,)/g, "$1.");
    }
    $scope.changeValue = function () {

        if($scope.select_lbs_kg == 1) {
            $scope.range_simulator_home_kg = $scope.range_simulator_home * 0.4536;
            $scope.range_simulator_home_kg = $scope.range_simulator_home_kg.toFixed(1);
        }else{
            $scope.range_simulator_home = $scope.range_simulator_home_kg / 0.4536;
            $scope.range_simulator_home = $scope.range_simulator_home.toFixed(0);
        }
        if ($scope.range_simulator_home < 6) {
            var value1 = parseFloat($scope.range_simulator_home) * 4.35;
            $scope.valor_plano_1 = 62.7 + value1;
            $scope.valor_plano_1 = Number(($scope.valor_plano_1).toFixed(2));
        }
        else {
            var value1 = (parseFloat($scope.range_simulator_home) - 5) * 4.45;
            $scope.valor_plano_1 = 84.45 + value1;
            $scope.valor_plano_1 = Number(($scope.valor_plano_1).toFixed(2));

        }
        if ($scope.range_simulator_home < 11) {
            var value2 = parseFloat($scope.range_simulator_home) * 3.7;
            $scope.valor_plano_2 = 41.25 + value2
            $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));

        } else {
            var value2 = (parseFloat($scope.range_simulator_home) - 10) * 4.05;
            $scope.valor_plano_2 = 78.25 + value2
            $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));


        }
        if ($scope.range_simulator_home < 3) {
            $scope.valor_plano_3 = 23.50

        } else {
            if ($scope.range_simulator_home == 3) {
                $scope.valor_plano_3 = 34.75


            } else {
                $scope.valor_plano_3 = 51.50
            }
        }



        $scope.valor_plano_1_taxa = $scope.valor_plano_1 + 12.90;
        var porcValor_1 = ($scope.valor_plano_1_taxa * 0.05) ;
        $scope.valor_plano_1_taxa =  porcValor_1;

        $scope.valor_plano_2_taxa = $scope.valor_plano_2 + 12.90;
        var porcValor_2 = ($scope.valor_plano_2_taxa * 0.05) ;
        $scope.valor_plano_2_taxa =porcValor_2;

        $scope.valor_plano_3_taxa = $scope.valor_plano_3 + 12.90;
        var porcValor_3 = ($scope.valor_plano_3_taxa * 0.05) ;
        $scope.valor_plano_3_taxa = porcValor_3;


        $scope.total1 = $scope.valor_plano_1_taxa + 12.90 + $scope.valor_plano_1;
        $scope.total2 = $scope.valor_plano_2_taxa + 12.90 + $scope.valor_plano_2;
        $scope.total3 = $scope.valor_plano_3_taxa + 12.90 + $scope.valor_plano_3;


        $scope.valor_plano_1_taxa = Number(($scope.valor_plano_1_taxa).toFixed(2));
        $scope.valor_plano_2_taxa = Number(($scope.valor_plano_2_taxa).toFixed(2));
        $scope.valor_plano_3_taxa = Number(($scope.valor_plano_3_taxa).toFixed(2));

        $scope.total1 = Number(($scope.total1).toFixed(2));
        $scope.total2 = Number(($scope.total2).toFixed(2));
        $scope.total3 = Number(($scope.total3).toFixed(2));

        $scope.valor_plano_1 =formataDinheiro($scope.valor_plano_1)
        $scope.valor_plano_2 =formataDinheiro($scope.valor_plano_2)
        $scope.valor_plano_3 =formataDinheiro($scope.valor_plano_3)

        $scope.total1 =formataDinheiro($scope.total1)
        $scope.total2 =formataDinheiro($scope.total2)
        $scope.total3 =formataDinheiro($scope.total3)

        $scope.valor_plano_1_taxa =formataDinheiro($scope.valor_plano_1_taxa)
        $scope.valor_plano_2_taxa =formataDinheiro($scope.valor_plano_2_taxa)
        $scope.valor_plano_3_taxa =formataDinheiro($scope.valor_plano_3_taxa)

        if ($scope.range_simulator_home == 0){
            $scope.valor_plano_1 = null;
            $scope.valor_plano_2 = null;
            $scope.valor_plano_3 = null;

            $scope.valor_plano_1_taxa= null;
            $scope.valor_plano_2_taxa= null;
            $scope.valor_plano_3_taxa= null;

            $scope.total1 = null;
            $scope.total2 = null;
            $scope.total3 = null;

        }
    }

    $scope.idCliente = url.searchParams.get("id");

    $scope.singIn = {
        user_login: "",
        user_senha: ""
    }
    $scope.login_press = false;

    if ($scope.idCliente !== null && $scope.idCliente !== undefined && $scope.idCliente !== "") {

        $scope.loader_cad2 = false;

        $scope.dataCad = {
            user_telefone: "",
            user_login: "",
            user_senha: "",
            user_confirmar_senha: "",
        }

        $scope.step2 = true;

        $scope.cadastro = function () {

            $scope.loader_cad2 = true;


            $scope.dataCadError = {
                user_senha_error: false,
                user_senha_length: false,
                user_senha_conf: false
            }


            if ($scope.dataCad.user_login !== "") {
                if ($scope.dataCad.user_senha !== "") {
                    if ($scope.dataCad.user_senha.length > 5) {
                        if ($scope.dataCad.user_senha == $scope.dataCad.user_confirmar_senha) {


                            $http({

                                method: 'POST',
                                url: base_url + "home/cadastroFinalizar",
                                data: $.param({id: $scope.idCliente, Data: $scope.dataCad}),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                            }).then(function (response) {

                                    $scope.loader_cad2 = false;

                                    $scope.singIn = {
                                        user_login: $scope.dataCad.user_login,
                                        user_senha: $scope.dataCad.user_senha
                                    }
                                    $http({

                                        method: 'POST',
                                        url: base_url + "home/Login",
                                        data: $.param($scope.singIn),
                                        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                                    }).then(function (response) {
                                            $scope.loader_login = false;

                                            if (response.data.success) {

                                                window.location.href = base_url + "Sistema/system";
                                            }

                                        }
                                    );


                                }
                            );
                        } else {
                            $scope.dataCadError.user_senha_conf = true;
                            $scope.loader_login = false;
                        }
                    } else {
                        $scope.dataCadError.user_senha_length = true;
                        $scope.loader_login = false;
                    }
                } else {
                    $scope.dataCadError.user_senha_error = true;
                    $scope.loader_login = false;
                }
            } else {
                $scope.dataCadError.user_login_error = true;
                $scope.loader_login = false;
            }

        }
    } else {

        $scope.dataCad = {
            user_nome: "",
            user_sobrenome: "",
            user_email: ""
        }

        $scope.loader_cad1 = false;

        $scope.step1 = true;
        $scope.finishCad = false;


        $scope.cadastro = function () {
            $scope.loader_cad1 = true;
            $scope.dataCad_error = {
                user_nome_error: false,
                user_sobrenome_error: false,
                user_email_error: false,
                user_email_exist: false

            }
            if ($scope.dataCad.user_email !== "") {
                if ($scope.dataCad.user_nome !== "") {
                    if ($scope.dataCad.user_sobrenome !== "") {


                        $http({

                            method: 'POST',
                            url: base_url + "home/cadastro_email",
                            data: $.param({Data: $scope.dataCad}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {

                                $scope.loader_cad1 = false;

                                if (response.data == "false") {
                                    $scope.dataCad_error.user_email_exist = true;
                                } else {
                                    $scope.step1 = false;
                                    $scope.finishCad = true;
                                }

                            }
                        );
                    } else {
                        $scope.dataCad_error.user_sobrenome_error = true
                    }
                } else {
                    $scope.dataCad_error.user_nome_error = true;
                }
            } else {
                $scope.dataCad_error.user_email_error = true;
            }
        }
    }

    $scope.login = function () {

        $scope.loader_login = true;

        $http({

            method: 'POST',
            url: base_url + "home/Login",
            data: $.param($scope.singIn),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {
                $scope.loader_login = false;

                if (response.data.success) {


                    window.location.href = base_url + "Sistema/system";
                }else{

                    $scope.Error_login = true;
                    $scope.TextError_Login = response.data.text
                }

            }
        );
    }


    $scope.duvidas = [false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false,
        false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false,
        false, false, false, false, false, false, false, false, false, false, false, false,]

    $scope.openDuvida = function (num) {
        $scope.duvidas[num] = $scope.duvidas[num] ? false : true;
        console.log($scope.duvidas[num]);
    }
    $scope.verifySession = function () {

        $scope.loader_access = true;

        $http({

            method: 'POST',
            url: base_url + "home/verifySession",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data)

                if (response.data.success == true) {
                    window.location.href = base_url + "Sistema/system";

                }
                else {
                    $scope.login_press = true
                }

                $scope.loader_access = false;

            }
        );
    }

    $scope.limitPerguntas = 8;

    $scope.perguntas = [
        {
            id:0,
            pergunta: "Como faço para comprar nos EUA?",
            resposta: "É muito simples! Cadastre-se na KeepBox e receba gratuitamente o seu endereço KeepBox nos EUA. Agora é só realizar suas compras online e pedir para as lojas enviarem tudo para o seu endereço KeepBox. \n" +
            "Atenção: O seu endereço KeepBox é preenchido em Shipping Address nos sites americanos. \n" +
            "Em Billing Adress deve-se inserir o endereço do seu cartão de crédito no Brasil. \n" +
            "Após recebermos suas encomendas, enviaremos tudo para você em seu endereço brasileiro. ",
        },
        {
            id:1,
            pergunta: "O método utilizado pela KeepBox é legal?",
            resposta: "Sim! A KeepBox funciona como um amigo ou parente que mora nos EUA e envia encomendas para você — ou seja, é totalmente legal. Utilizamos o Serviço Postal Nacional dos Estados Unidos (USPS) para o frete das mercadorias ao Brasil por serem extremamente seguros e por praticarem as melhores tarifas de envio do mercado americano.",
        },
        {
            id:2,
            pergunta: "Como efetuo meu cadastro na KeepBox?",
            resposta: "Para se cadastrar gratuitamente na KeepBox é muito fácil. Clique aqui e preencha seu Nome, Sobrenome e e-mail. Simples assim!",
        },
        {
            id:3,
            pergunta: "Pago alguma taxa para me cadastrar na KeepBox?",
            resposta: "O cadastro é totalmente gratuito! Registre-se agora e receba seu endereço KeepBox nos EUA imediatamente!\n",
        },
        {
            id:4,
            pergunta: "Tenho que pagar alguma taxa mensal ou anual à KeepBox depois que me inscrevo?",
            resposta: "Não! Não cobramos taxa de inscrição, mensalidade ou anuidade. \n" +
            "Além disso, seus dados de cartão de crédito não são exigidos para sua inscrição. Quando decidir enviar suas encomendas ao Brasil, você pagará apenas uma taxa única e reduzida pelos serviços da KeepBox",
        },
        {
            id:5,
            pergunta: "Como funciona os serviços da KeepBox?",
            resposta: "A KeepBox disponibiliza um endereço nos EUA para você armazenar suas compras realizadas nas lojas online do EUA. Posteriormente juntamos tudo e enviamos suas encomendas para o endereço que você nos indicar. \n" +
            "Tudo isso sem que você precise sair da sua casa e por uma taxa KeepBox única e reduzida.",
        },
        {
            id:6,
            pergunta: "O endereço KeepBox é um P.O. box (similar a caixa postal do Brasil)?",
            resposta: "O “seu endereço KeepBox” é uma suíte física e real em nosso armazém dedicada às suas encomendas, ou seja, o seu endereço KeepBox não é um P.O. box. \n" +
            "Observação: Muitas lojas não enviam para P.O. box, por isso o seu endereço KeepBox não poderia ser um P.O. box.\n",
        },
        {
            id:7,
            pergunta: "Quais são as vantagens de consolidar encomendas pela KeepBox?",
            resposta: "Quanto mais produtos você envia em uma única caixa, mais barato fica o preço relativo do frete para cada produto. Afinal, se dividimos o valor do frete por uma quantidade maior de produtos, o custo unitário de envio será menor.",
        },
        {
            id:8,
            pergunta: "Quando posso começar a usar os serviços da KeepBox? ",
            resposta: "Imediatamente! Assim que se inscrever, você receberá seu endereço KeepBox nos EUA. \n" +
            "Você usará o seu endereço KeepBox no campo “Shipping Adress” ao finalizar suas compras em qualquer loja online nos EUA. Assim, as lojas enviarão suas compras para o armazém da KeepBox.\n" +
            "Atenção: Em Billing Adress, você deverá inserir o endereço de cobrança do seu cartão de crédito no Brasil, caso contrário sua compra poderá ser recusada pela operadora do cartão.\n" +
            "\n" +
            "Em quais lojas posso comprar utilizando os serviços da KeepBox?\n" +
            "Você pode comprar em qualquer loja online nos EUA. Para sua comodidade, sugerimos algumas lojas que são muito utilizadas pelos nossos clientes, mas fique à vontade para escolher seus estabelecimentos preferidos. ",
        },
        {
            id:9,
            pergunta: "O que é o “meu endereço KeepBox”?",
            resposta: "Ao se cadastrar, você recebe um endereço KeepBox pessoal. Sempre que indicar este endereço ao comprar nas lojas online nos EUA, fisicamente suas compras serão enviadas para o armazém da KeepBox, mas você terá um código só seu que facilitará a identificação de seus objetos e o armazenamento dos mesmos em sua suíte individual. Com seu endereço KeepBox, você pode realizar compras nas lojas online americanas, o que não seria possível sem um endereço nos EUA, afinal muitas lojas americanas não enviam para endereços no Brasil. ",
        },
        {
            id:10,
            pergunta: "O que é Shipping Address (Endereço de Envio)?",
            resposta: "Shipping Address (Endereço de Envio) é o endereço onde suas compras realizadas nas lojas online serão entregues nos EUA. Nos sites das lojas online, Shipping Address é onde você preenche o seu endereço KeepBox. Assim, suas encomendas serão enviadas para nosso armazém e, posteriormente, remetemos para o seu endereço no Brasil.",
        },
        {
            id:11,
            pergunta: "O que é Billing Address (Endereço de Cobrança)? ",
            resposta: "Este é o endereço da fatura do seu cartão de crédito/débito, ou seja, você deve preencher o seu endereço do Brasil que está vinculado ao seu cartão de débito ou crédito. \n" +
            "Atenção: “Billing Address” é diferente de “Shipping Address”.\n" +
            "\n" +
            "Certifique-se de que o Billing Address (Endereço de Cobrança) e o Shipping Address (Endereço de Entrega) estejam corretos antes de pagar seu pedido. Fique à vontade para entrar em contato conosco, caso haja dúvidas.\n" +
            "\n",
        },
        {
            id:12,
            pergunta: "Como saber se vocês receberam a minha compra?",
            resposta: "Ao realizar compras nas lojas online, certifique-se ter recebido, até 24 horas úteis, um código de rastreamento (Tracking number). Confirme, se o endereço do destinatário está preenchido corretamente, ou seja, com o seu endereço KeepBox. Você pode nos informar o tracking number através da sua conta no site KeepBox, ou nos enviar pelo e-mail (keepboxbr@gmail.com) para que possamos acompanhar as entregas junto com você. \n" +
            "Assim que recebermos suas encomendas, te enviaremos um e-mail informando detalhes da sua compra. Além disso, a partir daí você pode acompanhar todo o processamento através da sua conta no site da KeepBox.",
        },
        {
            id:13,
            pergunta: "Serei avisado quando minhas compras chegarem ao armazém KeepBox?",
            resposta: "Sim! Enviaremos um e-mail sempre que suas compras chegam em nosso armazém. Além disso, registraremos todas as encomendas em sua conta KeepBox. Você poderá acompanhar estas operações pelo site da KeepBox.",
        },
        {
            id:14,
            pergunta: "A KeepBox cobra por caixa recebida? ",
            resposta: "Não! A Keepbox não cobra para receber suas encomendas. Com isso, você fica livre para comprar onde e quantas vezes quiser sem se preocupar com o número de encomendas enviadas ao seu endereço KeepBox.",
        },
        {
            id:15,
            pergunta: "Posso comprar na China e pedir para entregarem no meu endereço KeepBox?",
            resposta: "Sim! É um procedimento comum adotado pelos nossos clientes, afinal o tempo de entrega da China aos EUA costuma ser muito menor do que enviar da China diretamente ao Brasil.  ",
        },
        {
            id:16,
            pergunta: "A KeepBox cobra para consolidar/juntar todas minhas compras em um só envio?",
            resposta: "Não! A KeepBox não cobra para consolidar/juntar suas compras em uma só caixa. A vantagem dessa consolidação é que você pode comprar vários produtos, em diversas lojas, e pagar apenas um envio para o Brasil, economizando até 80% no valor do frete.\n",
        },
        {
            id:17,
            pergunta: "O que eu faço depois que meus pacotes forem entregues ao armazém KeepBox?",
            resposta: "Depois que seus pacotes forem processados em nosso armazém, aguardamos sua orientação quanto ao envio ao Brasil. Antes de despacha-los, você receberá uma fatura dos serviços e também precisará preencher o valor dos produtos no formulário de Declaração Aduaneira. Além disso, você pode solicitar todos os serviços extras disponíveis em nosso site para o fechamento de sua caixa. Posteriormente enviaremos seu pacote ao seu endereço no Brasil.\n",
        },
        {
            id:18,
            pergunta: "Minha compra consta como entregue no “meu endereço KeepBox”, mas ainda não a vejo cadastrada em minha conta KeepBox. O que faço?",
            resposta: "Normalmente, as caixas chegam em nosso armazém após às 14:00h. Todas as encomendas serão cadastradas no sistema entre 12 e 24 horas úteis. Caso sua caixa não esteja em sua suíte em até 48 horas, faça um contato conosco por e-mail ou chat para que possamos apurar os fatos.\n" +
            "\n",
        },
        {
            id:19,
            pergunta: "Como é calculada a taxa de envio ao Brasil?",
            resposta: "A taxa de envio para cada encomenda é calculada com base no peso total da caixa final seguindo uma tabela pré-estabelecida pela USPS, que é o correio americano. Você pode usar nossa Calculadora de Envio para estimar as taxas de envio com base nos pesos estimados de suas compras.",
        },
        {
            id:20,
            pergunta: "Se eu não puder efetuar a compra, a KeepBox pode realizar a comprar para mim?",
            resposta: "Sim! A KeepBox realizar as compras para você. Para isso, basta nos enviar o link dos produtos desejados, acompanhado dos detalhes como cor, tamanho, etc. Este serviço é o Compra Assistida.  Veja detalhes no site na aba Compra Assistida. \n" +
            "Observação: Não existe limite de lojas para você nos solicitar a realização de suas compras. \n" +
            "A KeepBox comprará quantos produtos desejar em qualquer loja dos EUA.",
        },
        {
            id:21,
            pergunta: "Algumas lojas não aceitam cartões de crédito do Brasil ou não enviam mercadorias para redirecionadores de encomenda. Como devo proceder?",
            resposta: "Fique tranquilo! A solução é realizar suas compras através da Compra Assistida.",
        },
        {
            id:22,
            pergunta: "Quando e porque devo usar o serviço  Compra Assistida KeepBox?",
            resposta: "Trata-se de um serviço adicional e de baixo custo que viabiliza as suas compras, caso você não tenha cartão de crédito internacional, ou não fale inglês, ou não queira perder tempo com a burocracia das compras.\n",
        },
        {
            id:23,
            pergunta: "Posso comprar em várias lojas no mesmo pedido de Compra Assistida?",
            resposta: "Sim! Ao enviar os links dos produtos desejados em nosso site, você poderá enviar quantos links desejar e de lojas diferentes também.",
        },
        {
            id:24,
            pergunta: "Qual é o processo para fazer uma solicitação de uma Compra Assistida?",
            resposta: "Para colocar uma ordem de Compra Assistida, tenha os links (os URLs) dos itens que deseja adquirir. Na sua conta, vá para a seção \"Compra Assistida\" e clique em \"Nova compra assistida\". Preencha as informações necessárias para identificarmos os produtos. Caso tenha dúvidas, fale conosco por e-mail ou chat no site.",
        },
        {
            id:25,
            pergunta: "O que acontece caso algum item que pedi na Compra Assistida não esteja temporariamente no estoque da loja ou tenha se esgotado?",
            resposta: "Caso algum item do seu pedido não esteja mais disponível, compraremos aqueles que encontramos e enviaremos uma notificação para você informando sobre os itens não adquiridos. Caso 50% ou mais dos itens do seu pedido estiverem indisponíveis, cancelaremos o seu pedido de Compra Assistida para que você possa definir entre manter ou não a compra dos produtos encontrados.",
        },
        {
            id:26,
            pergunta: "Em quanto tempo o pedido de Compra Assistida será concluído?",
            resposta: "Geralmente entre 2 a 5 dias. Tudo dependerá do dia em que você nos enviar a solicitação e a quantidade de produtos solicitados.",
        },
        {
            id:27,
            pergunta: "É possível devolver um item de um pedido feito usando a Compra Assistida?",
            resposta: "Os retornos dependem da política de devolução das lojas onde os itens foram comprados. Você é responsável por todas as eventuais taxas associadas ao retorno.",
        },
        {
            id:28,
            pergunta: "Por quanto tempo a KeepBox armazena minhas encomendas antes de enviar ao Brasil?",
            resposta: "A KeepBox oferece armazenamento gratuito de suas compras por até 60 dias a partir da chegada da sua última compra. Assim, você pode comprar a vontade antes de juntar todas as compras em uma só caixa. ",
        },
        {
            id:29,
            pergunta: "A KeepBox armazena minhas compras por mais de 60 dias? ",
            resposta: "Sim!  O período máximo de armazenamento é de 90 dias a partir da data de chegada da última encomenda, sendo 60 dias gratuitos + 30 dias de armazenamento extra. \n" +
            "O armazenamento extra é oferecido mediante uma taxa de $7 dólares + $1 dólar por dia de armazenamento.  Após 90 dias, os produtos serão doados.\n" +
            "Após emitirmos a fatura dos serviços para você, suas compras poderão ser armazenadas gratuitamente por mais 7 dias. Após este prazo, oferecemos novamente o serviço de armazenamento extra ($1 dólar por dia extra de armazenamento) limitado aos 90 dias a partir do recebimento da última encomenda. \n" +
            "Após 90 dias de armazenamento, os produtos serão doados.",
        },
        {
            id:30,
            pergunta: "Posso retirar os produtos pessoalmente no armazém da KeepBox ou recomendar que uma pessoa de confiança o faça?",
            resposta: "Sim! Neste caso adotamos o serviço Receba e Guarde Para Mim. Este serviço é oferecido mediante taxa de $3 dólares por caixa recebida. O período máximo de armazenamento é de 90 dias a partir da data de chegada da PRIMEIRA encomenda, sendo 60 dias gratuitos + 30 dias de armazenamento extra. O armazenamento extra é oferecido mediante uma taxa de $7 dólares + $1 dólar por dia de armazenamento.  Após 90 dias, os produtos serão doados.",
        },
        {
            id:31,
            pergunta: "Como eu pago a taxa KeepBox e o frete para o Brasil?",
            resposta: "Após as encomendas serem recebidas no armazém KeepBox, elas ficarão disponíveis em sua suíte para serem consolidadas e posteriormente enviadas ao Brasil. Após o fechamento da sua caixa, o valor do frete USPS e a taxa KeepBox serão disponibilizados em sua conta no site KeepBox. O valor da fatura poderá ser pago por PayPal (cartão de crédito) ou depósito bancário no Brasil. Sua caixa será enviada em até 24 horas úteis após confirmação do pagamento. \n" +
            "Caso queira estimar os custos de envio para o Brasil antes mesmo de realizar suas compras, basta simular o preço do frete e taxa KeepBox em nossa Calculadora de Envio. Para isso, você deve estimar o peso dos objetos que deseja comprar.\n" +
            "\n",
        },
        {
            id:32,
            pergunta: "Quanto tempo os pagamentos da taxa KeepBox e Frete USPS demoram para serem processados?",
            resposta: "O tempo de processamento varia de acordo com o método de pagamento. A maioria dos pagamentos via PayPal serão processados imediatamente ou até 15 minutos. Em raras exceções podem demorar algumas horas. A transferência bancária leva de 2 a 4 dias para serem processadas.",
        },
        {
            id:33,
            pergunta: "A KeepBox oferece seguro para as encomendas?",
            resposta: "Sim! Todas as caixas enviadas para o Brasil têm seguro USPS gratuito para valores declarados em até US$200. Além disso, o cliente pode contratar o seguro particular para qualquer valor por um custo adicional de 3% do valor declarado da caixa.",
        },
        {
            id:34,
            pergunta: "Qual o máximo de peso e tamanho de um pacote que posso enviar ao Brasil (peso DIM)?",
            resposta: "Peso máximo permitido: 66lbs, ou seja, 30kg \n" +
            "Volume máximo permitido: Inferior a 79”, ou seja, 197cm, calculados da seguinte forma:\n" +
            "(1 x o lado maior) + (2 x lado menor 1) + (2 x lado menor 2), sendo que o lado maior não pode ultrapassar a medida de 41” (104 cm). ",
        },
        {
            id:35,
            pergunta: "Caso já tenham fechado a minha caixa para envio, posso adicionar mais produtos?",
            resposta: "Sim! Desde que a caixa não tenha sido enviada para o depósito da USPS.\n" +
            "Você pagará uma taxa de US$7 para a KeepBox retornar seus produtos para sua suíte e, com isso, fazermos uma nova composição de carga, acrescentando os itens desejados.",
        },
        {
            id:36,
            pergunta: "Qual é o prazo de entrega dos Estados Unidos para o Brasil?\n",
            resposta: "O prazo de entrega depende do tipo de envio selecionado pelo cliente, mas o prazo médio para chegada ao Brasil é de 5 a 7 dias úteis.",
        },
        {
            id:37,
            pergunta: "Quais são os produtos que não podem ser enviados ao Brasil?",
            resposta: "Os produtos proibidos são definidos pela Polícia Federal Brasileira. \n" +
            "Você tem acesso a essa lista completa no link do Correios ou no site da Policia Federal. \n" +
            "<a href='http://www.correios.com.br/para-voce/correios-de-a-a-z/pdf/importa-facil/Lista_objetos_proibidos.pdf/view'> http://www.correios.com.br/para-voce/correios-de-a-a-z/pdf/importa-facil/Lista_objetos_proibidos.pdf/view</a>",
        },
        {
            id:38,
            pergunta: "Quais as formas de envio a KeepBox oferece?",
            resposta: "A KeepBox utiliza os métodos de envio dos Correios Americanos (USPS). São eles:\n" +
            " Priority Mail International®, Priority Mail Express International™ e o First-Class Package. \n" +
            "Você pode escolher a modalidade mais conveniente consultando a nossa Calculadora de Envio. O Priority Mail é o mais usado em função do melhor custo benefício. Todas as opções geram código de rastreamento (tracking number) para acompanhamento do envio. \n" +
            "Veja detalhes abaixo:\n" +
            "\n" +
            "› USPS First Class: A modalidade de baixo custo e usada apenas para pacotes com até 4 Libras (1,8kg). \n" +
            "Tempo médio de entrega: de 30-50 dias úteis - Serviço com código de rastreamento. \n" +
            "O envio via First Class não oferece a opção de seguro para a encomenda e não permite abrir reclamações no site da USPS no caso de extravio ou roubo.\n" +
            "\n" +
            "› USPS Priority Mail: A modalidade de médio custo (melhor custo benefício). \n" +
            "É o frete mais usado e recomendado.\n" +
            "Tempo médio de entrega: 12-20 dias úteis - Serviço com código de rastreamento. \n" +
            "Pode ser contratado seguro com adicional de 5% sobre o valor declarado.\n" +
            "\n" +
            "› USPS Express Mail: A modalidade mais rápida em solo americano para saída ao destino \n" +
            "(no país de entrega pode ter o mesmo procedimento de tempo de trânsito que o Priority Mail). Tempo médio de entrega é em média 8-10 dias úteis - Serviço com código de rastreamento. \n" +
            "Pode ser contratado seguro com adicional de 5% em cima do valor declarado.\n" +
            "Nesta modalidade o pagamento dos tributos alfandegários são certos de acontecerem. \n" +
            "Nas demais modalidades, eventualmente a sua encomenda pode não ser selecionada pelos profissionais da alfândega.\n" +
            "\n" +
            "O tempo de entrega no endereço final pode variar dependendo do tempo de processamento na fiscalização aduaneira. Além disso, as capitais e cidades mais próximas da entrada das mercadorias no Brasil terão entregas mais eficientes do que naquelas cidades mais distantes geograficamente.\n" +
            "Todos os envios da USPS para o Brasil têm o mesmo preço, ou seja, o valor do frete será o mesmo para qualquer cidade brasileira independente de sua localização. \n",
        },
        {
            id:39,
            pergunta: "Em quantos dias devo receber minha encomenda em meu endereço final?",
            resposta: "Na prática, o prazo de entrega varia de 20 a 40 dias, dependendo de alguns fatores, como a modalidade de envio escolhida, o tempo de processamento na alfândega brasileira e para qual região do país a encomenda é destinada.",
        },
        {
            id:40,
            pergunta: "Como faço para rastrear minhas caixas depois que forem enviadas para o Brasil? ",
            resposta: "Cada caixa consolidada será enviada para o seu endereço no Brasil com um número de rastreio (Tracking Number) fornecido pelos Correios Americanos (USPS). Nós te enviamos esse código de rastreio através do seu e-mail de cadastro. Além disso, você pode acompanhar o andamento das suas importações em sua conta no site KeepBox. Após a chegada da encomenda ao Brasil, recomendamos acompanhar através do site dos Correios, na aba “Minhas Importações”.",
        },
        {
            id:41,
            pergunta: "Como rastrear meu pacote quando ele chega ao Brasil?",
            resposta: "Após a chegada ao Brasil, você deve rastrear o seu pacote de forma online através do site dos Correios na aba “Minhas Importações”. Lá, você se cadastra, acompanha seu produto e paga eventuais tributos de importação. \n" +
            "Importante: Após pagamento dos possíveis tributos, a encomenda é entregue diretamente em seu endereço cadastrado na KeepBox. No passado, você buscaria em uma agência dos Correios. \n" +
            "Maiores dúvidas, veja o PDF do Perguntas e Respostas “Minhas Importações”do Correio do Brasil ",
        },
        {
            id:42,
            pergunta: "Pagarei algum tributo para receber a minha caixa no Brasil?",
            resposta: "Pacotes enviados de pessoa física para pessoa física e declarados até $50 dólares são isentos de impostos segundo a Lei Brasileira. Os envios da KeepBox são feitos de pessoa física para pessoa física.\n" +
            "Pacotes declarados entre $51 a $500 dólares, podem, eventualmente, serem tributados pela Receita Federal em 60% do valor declarado, caso a sua caixa seja selecionada durante a inspeção alfandegária. \n" +
            "O imposto será pago no site dos Correios, na aba “Minhas importações”, sem qualquer formalidade aduaneira. A partir do momento que sua caixa chega ao Brasil é importante acompanha-la pelo site dos Correios na aba “Minhas Importações”. Lá, você pagará eventuais tributos e sua encomenda seguirá diretamente para o seu endereço cadastrado no site da KeepBox.\n" +
            "Pacotes declarados entre $500 a $3.000 dólares seguirão por um modo de importação mais detalhado. \n" +
            "* Em alguns Estados Brasileiros (MG, SC e RS) haverá a tributação também do ICMS que varia entre 17 e 25%.\n" +
            "* Todos os impostos são pagos online no site dos Correios e após o pagamento sua encomenda segue normalmente para o endereço final.\n" +
            "\n" +
            "Maiores informações: http://www.receita.fazenda.gov.br/aduana/rts.htm                                                                                       \n" +
            "\n" +
            "* Mesmo com esses eventuais tributos, muitas mercadorias continuam mais baratas nos EUA, se comparadas aos preços praticados no Brasil. No Instagram da @keepboxbr frequentemente publicamos comparativo de preços de vários artigos. Confira!\n" +
            "\n" +
            "* Produtos como livros, revistas e alguns medicamentos (se atenderem às normas da ANVISA) são isentos de impostos.\n" +
            "\n" +
            "A KeepBox não se responsabiliza pelo pagamento dos eventuais impostos alfandegários emitidos nos países de destino.\n",
        },
        {
            id:43,
            pergunta: "O que acontece se eu não pagar os tributos de importação?",
            resposta: "Caso você não pague os tributos no site dos Correios (aba Minhas Importações) no prazo determinado, suas encomendas serão devolvidas para o endereço de origem, no caso, o endereço da KeepBox nos EUA. Chegando aqui, armazenaremos as suas compras por 30 dias até que você faça o reenvio das mesmas ao Brasil ou que defina um outro destino. \n" +
            "Neste caso, em cortesia, a KeepBox não cobrará a taxa única de envio. Você arcará somente com o valor de frete ao Brasil definido pela USPS.",
        },


    ]

    $scope.hovering = false;
    $scope.searchPergunta;
    $scope.numRowsDuvidas;
    $scope.loaderPesquisa = false;

    $scope.limitplus  = function () {
        $scope.limitPerguntas += 5;
    }

    $scope.inputSearch = function () {

        $scope.loaderPesquisa = true;


        $timeout(function(){
            $scope.loaderPesquisa = false;

        }, 400);
    }

    $scope.changePass = function () {

        $scope.loader_cad2 = true;

        $scope.dataChangePass= {
            user_login: '',
            user_senha: '',
            user_confirmar_senha: ''
        }

        $scope.dataCadError = {
            user_senha_error: false,
            user_senha_length: false,
            user_senha_conf: false
        }

        if ($scope.dataChangePass.user_senha !== "") {
            if ($scope.dataChangePass.user_senha.length > 5) {
                if ($scope.dataChangePass.user_senha == $scope.dataChangePass.user_confirmar_senha) {


                    $http({

                        method: 'POST',
                        url: base_url + "home/changePass",
                        data: $.param({id: $scope.idCliente, Data: $scope.dataChangePass.user_senha}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                    }).then(function (response) {

                            $scope.loader_cad2 = false;

                            $scope.singIn = {
                                user_login: $scope.dataChangePass.user_login,
                                user_senha: $scope.dataChangePass.user_senha
                            }
                            $http({

                                method: 'POST',
                                url: base_url + "home/Login",
                                data: $.param($scope.singIn),
                                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                            }).then(function (response) {
                                    $scope.loader_login = false;

                                    if (response.data.success) {

                                        window.location.href = base_url + "Sistema/system";
                                    }

                                }
                            );


                        }
                    );
                } else {
                    $scope.dataCadError.user_senha_conf = true;
                    $scope.loader_login = false;
                }
            } else {
                $scope.dataCadError.user_senha_length = true;
                $scope.loader_login = false;
            }
        } else {
            $scope.dataCadError.user_senha_error = true;
            $scope.loader_login = false;
        }

    }

}]);
angular.module('app_landing').controller('sistem_ctrl', ['$scope', '$http','$timeout','$window', function ($scope, $http,$timeout,$window) {

    $scope.menuOpen = true;
    $scope.compraAssistida = [
        {
            link_enviado:"",
            link_quantidade: ""
        },

    ];
    angular.element($window).bind('resize', function(){

        if($window.innerWidth > 767){
            $scope.menuOpen = true;
        }else {
            $scope.menuOpen = null;
        }

    })

    function getWindowWidth() {
        var windowWidth = 0;
        if (typeof(window.innerWidth) == 'number') {
            windowWidth = window.innerWidth;
        }
        else {
            if (document.documentElement && document.documentElement.clientWidth) {
                windowWidth = document.documentElement.clientWidth;
            }
            else {
                if (document.body && document.body.clientWidth) {
                    windowWidth = document.body.clientWidth;
                }
            }
        }
        return windowWidth;
    }

    $scope.openMenu = function () {
        if(getWindowWidth() > 767) {
            $scope.menuOpen = $scope.menuOpen ? false : true
            $(".wrapper").toggleClass("active");
        }
    }
    screenSize = getWindowWidth() / 1920 * 100

    if(getWindowWidth() > 767){
        $scope.menuOpen = true;

    }else {
        $scope.menuOpen = null;

    }


    $scope.img_show;
    $scope.errorPlano = false;
    $scope.showPage = 1;
    $scope.PedidoEnvio = {
        pedido_plano: 0,
        pedido_seguro_keep: 0,
        pedido_seguro_basico: 0,
        pedido_etiqueta:0,
        pedido_caixa: 0,
        pedido_fatura:0,
        pedido_adesivar:0,
        pedido_acomodar:0,
        pedido_anuncios:0,
        pedido_comentario: ""
    };
    $scope.TotalFinal;
    $scope.plano_selected;


    $scope.produtosList = [];
    $scope.compraList = [];
    $scope.checkboxProd = [];
    $scope.EnvioSoli = [];


    $scope.range_simulator_home = 0;
    $scope.valor_kg = 0;
    $scope.range_simulator_home_kg = 0;
    $scope.select_lbs_kg = '1';
    function formataDinheiro(n) {
        return "US$" + n.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+\,)/g, "$1.");
    }
    $scope.changeValue = function () {

        if($scope.select_lbs_kg == 1) {
            $scope.range_simulator_home_kg = $scope.range_simulator_home * 0.4536;
            $scope.range_simulator_home_kg = $scope.range_simulator_home_kg.toFixed(1);
        }else{
            $scope.range_simulator_home = $scope.range_simulator_home_kg / 0.4536;
            $scope.range_simulator_home = $scope.range_simulator_home.toFixed(0);
        }
        if ($scope.range_simulator_home < 6) {
            var value1 = parseFloat($scope.range_simulator_home) * 4.35;
            $scope.valor_plano_1 = 62.7 + value1;
            $scope.valor_plano_1 = Number(($scope.valor_plano_1).toFixed(2));
        }
        else {
            var value1 = (parseFloat($scope.range_simulator_home) - 5) * 4.45;
            $scope.valor_plano_1 = 84.45 + value1;
            $scope.valor_plano_1 = Number(($scope.valor_plano_1).toFixed(2));

        }
        if ($scope.range_simulator_home < 11) {
            var value2 = parseFloat($scope.range_simulator_home) * 3.7;
            $scope.valor_plano_2 = 41.25 + value2
            $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));

        } else {
            var value2 = (parseFloat($scope.range_simulator_home) - 10) * 4.05;
            $scope.valor_plano_2 = 78.25 + value2
            $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));


        }
        if ($scope.range_simulator_home < 3) {
            $scope.valor_plano_3 = 23.50

        } else {
            if ($scope.range_simulator_home == 3) {
                $scope.valor_plano_3 = 34.75


            } else {
                $scope.valor_plano_3 = 51.50
            }
        }



        $scope.valor_plano_1_taxa = $scope.valor_plano_1 + 12.90;
        var porcValor_1 = ($scope.valor_plano_1_taxa * 0.05) ;
        $scope.valor_plano_1_taxa =  porcValor_1;

        $scope.valor_plano_2_taxa = $scope.valor_plano_2 + 12.90;
        var porcValor_2 = ($scope.valor_plano_2_taxa * 0.05) ;
        $scope.valor_plano_2_taxa =porcValor_2;

        $scope.valor_plano_3_taxa = $scope.valor_plano_3 + 12.90;
        var porcValor_3 = ($scope.valor_plano_3_taxa * 0.05) ;
        $scope.valor_plano_3_taxa = porcValor_3;


        $scope.total1 = $scope.valor_plano_1_taxa + 12.90 + $scope.valor_plano_1;
        $scope.total2 = $scope.valor_plano_2_taxa + 12.90 + $scope.valor_plano_2;
        $scope.total3 = $scope.valor_plano_3_taxa + 12.90 + $scope.valor_plano_3;

        if($scope.PedidoEnvio.pedido_seguro_keep == true){
            $scope.total1 = $scope.total1 + ($scope.total1 * 0.03)
            $scope.total2 = $scope.total2 + ($scope.total2 * 0.03)
            $scope.total3 = $scope.total3 + ($scope.total3 * 0.03)

        } if($scope.PedidoEnvio.pedido_adesivar == true){
            $scope.total1 = $scope.total1 + 2;
            $scope.total2 = $scope.total2 + 2;
            $scope.total3 = $scope.total3 + 2;

        } if($scope.PedidoEnvio.pedido_acomodar == true){
            $scope.total1 = $scope.total1 + 1;
            $scope.total2 = $scope.total2 + 1;
            $scope.total3 = $scope.total3 + 1;
        }


        $scope.valor_plano_1_taxa = Number(($scope.valor_plano_1_taxa).toFixed(2));
        $scope.valor_plano_2_taxa = Number(($scope.valor_plano_2_taxa).toFixed(2));
        $scope.valor_plano_3_taxa = Number(($scope.valor_plano_3_taxa).toFixed(2));

        $scope.total1 = Number(($scope.total1).toFixed(2));
        $scope.total2 = Number(($scope.total2).toFixed(2));
        $scope.total3 = Number(($scope.total3).toFixed(2));

        $scope.valor_plano_1 =formataDinheiro($scope.valor_plano_1)
        $scope.valor_plano_2 =formataDinheiro($scope.valor_plano_2)
        $scope.valor_plano_3 =formataDinheiro($scope.valor_plano_3)

        $scope.total1 =formataDinheiro($scope.total1)
        $scope.total2 =formataDinheiro($scope.total2)
        $scope.total3 =formataDinheiro($scope.total3)

        $scope.valor_plano_1_taxa =formataDinheiro($scope.valor_plano_1_taxa)
        $scope.valor_plano_2_taxa =formataDinheiro($scope.valor_plano_2_taxa)
        $scope.valor_plano_3_taxa =formataDinheiro($scope.valor_plano_3_taxa)

        if ($scope.range_simulator_home == 0){
            $scope.valor_plano_1 = null;
            $scope.valor_plano_2 = null;
            $scope.valor_plano_3 = null;

            $scope.valor_plano_1_taxa= null;
            $scope.valor_plano_2_taxa= null;
            $scope.valor_plano_3_taxa= null;

        }
        $scope.selectPlano($scope.plano_selected)
    }


    $http({

        method: 'POST',
        url: base_url + "Sistema/getCompra",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {


            console.log(response.data)
            $scope.compraList = response.data;



        }
    );
    $http({

        method: 'POST',
        url: base_url + "Sistema/getProdutos",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

            console.log(response.data)

            $scope.produtosList = response.data;



        }
    );

    $scope.logout = function () {
        $scope.loader_exit = true;
        $http({

            method: 'POST',
            url: base_url + "Logout",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {
                $scope.loader_exit = false;
                window.location.href = base_url;

            }
        );
    }

    $scope.clickPhoto = function (img) {
        $scope.img_show = img;

        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        modal.style.display = "block";
    }
    $scope.closeModal = function () {
        var modal = document.getElementById('myModal');

        modal.style.display = "none";

    }

    $scope.solicitarEnvio = function () {

        $scope.showPage = 2;
        $scope.EnvioSoli = []

        angular.forEach($scope.checkboxProd[0], function(value, key) {


            var indexProd = $scope.produtosList.findIndex(function(obj) { return obj['prod_id'] === key;})
            $scope.EnvioSoli.push( $scope.produtosList[indexProd]);
        })
        angular.forEach($scope.produtosList, function(value, key) {
            value.prod_peso = value.prod_peso.replace(',', '.')
            $scope.produtosList[key] = parseFloat(value.prod_peso);
        });

    }
    $scope.goToStep2 = function () {

        var error = false;
        $scope.quantidadeTotal = 0;
        $scope.ValorDecTotal = 0;

        angular.forEach($scope.EnvioSoli, function(value, key) {


            if (value.quantidade_envio !== undefined && value.quantidade_envio !== null && value.quantidade_envio !== 0 && value.quantidade_envio <= value.prod_quantidade) {
                $scope.EnvioSoli[key].errorQuant = false;

                if (value.quant_decl !== undefined && value.quant_decl !== null && value.quant_decl !== 0) {
                    $scope.EnvioSoli[key].errorQuantD = false;

                    if (value.desc_decl !== undefined && value.desc_decl !== null && value.desc_decl !== "") {
                        $scope.EnvioSoli[key].errorDesc = false;

                        if (value.valor_decl !== undefined && value.valor_decl !== null && value.valor_decl !== 0) {
                            $scope.EnvioSoli[key].errorValor = false;
                            error = false;

                            $scope.quantidadeTotal += (value.quantidade_envio * parseFloat(value.prod_peso));
                            $scope.ValorDecTotal += value.valor_decl;

                        }else{
                            $scope.EnvioSoli[key].errorValor = true;
                            error = true;
                            $scope.quantidadeTotal = 0;
                            $scope.ValorDecTotal = 0;
                        }
                    }else{
                        $scope.EnvioSoli[key].errorDesc = true;
                        error = true;
                        $scope.quantidadeTotal = 0;
                        $scope.ValorDecTotal = 0;
                    }
                }else{
                    $scope.EnvioSoli[key].errorQuantD = true;
                    error = true;
                    $scope.quantidadeTotal = 0;
                    $scope.ValorDecTotal = 0;

                }
            }else {
                $scope.EnvioSoli[key].errorQuant = true;
                error = true;
                $scope.quantidadeTotal = 0;
                $scope.ValorDecTotal = 0;

            }


        });

        if (error == false) {

            $scope.range_simulator_home = $scope.quantidadeTotal;


            $scope.changeValue();
            $scope.showPage = 3;
        }
    }

    $scope.goToStep3 = function () {

        if($scope.PedidoEnvio.pedido_plano == 0)
            $scope.errorPlano = true
        else{

            $http({

                method: 'POST',
                url: base_url + "sistema/FinalizarPedidoEnvio",
                data: $.param({Pedido: $scope.PedidoEnvio, Produto: $scope.EnvioSoli}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

            }).then(function (response) {


                    console.log(response.data)
                    if(response.data == "true"){
                        $scope.showPage = 1;
                        var modal = document.getElementById('myModal2');

                        modal.style.display = "block";


                        $http({

                            method: 'POST',
                            url: base_url + "Sistema/getCompra",
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {


                                console.log(response.data)
                                $scope.compraList = response.data;



                            }
                        );
                        $http({

                            method: 'POST',
                            url: base_url + "Sistema/getProdutos",
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {

                                console.log(response.data)

                                $scope.produtosList = response.data;



                            }
                        );
                    }

                }
            );


        }
    }



    $scope.selectPlano = function (plano) {

        $scope.PedidoEnvio.pedido_plano = plano;

        if (plano == 1){
            $scope.plano_selected = 1
            $scope.TotalFinal = $scope.total1;
        }else
        if(plano ==2){
            $scope.plano_selected = 2
            $scope.TotalFinal = $scope.total2;
        }else{
            $scope.plano_selected = 3
            $scope.TotalFinal = $scope.total3;
        }

    }


    $scope.link_enviado = false;

    $scope.enviarLink = function () {

        $scope.link_enviado = true;
        if ($scope.compraAssistida[0].link_enviado != "" && $scope.compraAssistida[0].link_quantidade != "") {

            $http({

                method: 'POST',
                url: base_url + "Sistema/MandarLink",
                data: $.param({compra: $scope.compraAssistida}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

            }).then(function (response) {

                    $scope.compraAssistida = [
                        {
                            link_enviado: "",
                            link_quantidade: ""
                        },
                    ]
                    var modal = document.getElementById('myModal');
                    modal.style.display = "none";

                    $timeout(function () {
                        $scope.link_enviado = false;
                    }, 3000);


                }
            );

        }
    }

    $scope.goBack = function () {
        $scope.showPage -= 1;

        $http({

            method: 'POST',
            url: base_url + "Sistema/getCompra",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {


                console.log(response.data)
                $scope.compraList = response.data;



            }
        );
        $http({

            method: 'POST',
            url: base_url + "Sistema/getProdutos",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data)

                $scope.produtosList = response.data;



            }
        );
    }

    $scope.rastreamento ={
        codigo: ""
    }
    $scope.ras_enviado = false;


    $scope.setCodigoRast = function () {

        $scope.ras_enviado = true;

        if ($scope.rastreamento.codigo != "") {
            $http({

                method: 'POST',
                url: base_url + "Sistema/CodigoRastreamento",
                data: $.param($scope.rastreamento),
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

            }).then(function (response) {

                    $scope.rastreamento = {
                        codigo: ""
                    }

                    $timeout(function () {
                        $scope.ras_enviado = false;
                    }, 3000);


                }
            );
        }
    }

    $scope.ras_enviado = false;


    $scope.setSolici = function () {

        $scope.prod_enviado = true;

        $http({

            method: 'POST',
            url: base_url + "Sistema/SolicitacaoEstoque",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                $timeout(function(){
                    $scope.prod_enviado = false;
                }, 3000);

            }
        );
    }

    $scope.addMoreLink =  function () {

        $scope.compraAssistida.push( {
            link_enviado:"",
            link_quantidade: ""
        });

        console.log($scope.compraAssistida)
    }

}]);
