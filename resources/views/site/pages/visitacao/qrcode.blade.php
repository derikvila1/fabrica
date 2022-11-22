<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Inscrição</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        #div-principal {
            padding-right: 70px;

            padding-left: 70px;
            padding-bottom: 20px;

 
            margin: auto;

        }

        #div-infos {
            padding-right: 60px;
            padding-left: 60px;
            color: rgb(45, 71, 63);
        }

        #descricao-page-comprovante-text {

            color: rgb(53, 95, 81);
        }

        #texto-comprovacao {
            color: rgb(73, 110, 98);
            font-size: 15px;
            margin-top: -10px;
        }

        .divider {

            height: 1px;
        }

        .div-transparent:before {
            position: absolute;
            top: 0;
            width: 100%;
            height: 1px;
            background-color: rgb(106, 202, 138);
        }

        #place-qr {
            border: 1px;
            border-color: chocolate;
            border-style: solid;
            margin-top: 24px;
            width: 130px;
            height: 130px;
            float: right;
        }

        .wrap-all {

            margin: auto;
            background-color: white;
         padding-right: 20px;
         padding-left: 20px;
        }

        #label-espaco-comprovante {
            font-size: 15px;
        }

        #label-data-comprovante {
            font-size: 15px;
        }

        #label-horario-comprovante {
            font-size: 15px;
        }

        #infos-espaco-visitacao {

            color: rgb(45, 71, 63);
        }

        #texto-title {
            color: rgb(73, 110, 98);
            font-size: 17px;

        }

        /* 
        #infos-visitante {
            padding-right: 60px;
            padding-top: 30px;
            padding-left: 60px;
        } */

        #label-documento-comprovante {}

        #label-nome-comprovante {

            margin-bottom: 0px;
        }

        #label-contato-comprovante {
            font-size: 15px;
        }

        #label-deficiencia-comprovante {
            font-size: 15px;
        }

        #infos-visitante-visitacao {
            color: rgb(45, 71, 63);

        }

        #div-importantes-observacoes {

            color: rgb(45, 71, 63);
        }

        #label-nome-dependente-comprovante {
            font-size: 15px;

        }

        #label-data-dependente-comprovante {
            font-size: 15px;
        }

        #infos-visitante-dependente-visitacao {
            color: rgb(45, 71, 63);

        }

        .imprimir-comprovante-btn {
            padding: 10px;
            border: none;
            font-family: Poppins, sans-serif;
            border-radius: 9px;


        }

        .imprimir-comprovante-btn:hover {

            background-color: rgb(253, 173, 173);
            color: rgb(117, 30, 30);
            cursor: pointer;
        }

        #infos-visitante {}

        .observacoes-importantes {
         padding-top: 30px;
            margin: auto;

        }

        .info-inscricao {}

        @media (max-width: 700px) {
            .column-1 {
                width: 100%;
            }

            .img-biscoito-pc {
                display: none;

            }
        }

        @media (min-width: 700px) {
            .column-1 {
                float: left;
                width: 33.33%;
                padding: 10px;

            }

            .column-2 {
                float: left;
                width: 33.33%;
                padding: 10px;


            }
            .column-3 {
                float: left;
                width: 33.33%;
                padding: 10px;


            }

            .img-biscoito-cell {
                /*display: none;*/
            }

        }

        

        .info-inscrito {}

        #label-documento-comprovante {}



        .logos-imgs {
            display: flex;
        }



        /* Clear floats after the columns */
    </style>
</head>

<body>

    <div class="wrap-all">
        <div class="row">
            <div class="column-1">
                <div class="logos-imgs">

                    <div class="img-natal-1" style="margin: auto; text-align: center;"><img src="\logonatalpng.png"
                            style="width: 90%; max-width: 200px; text-align: center; margin-top: 20px;"></div>

                    <div class="img-biscoito-cell" style="margin: auto; text-align: center;"><img
                            src="\noel-logo.png"
                            style="width: 90%; max-width: 250px; text-align: center;">
                    </div>
                </div>

                <div style="text-align: center;" id="div-principal">

                    <div class="div-qr">
                        <img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl='{{$code}}'">

                    </div>


                    <div>

                        <p id="descricao-page-comprovante-text" style="margin-left:10px; margin-bottom: 30px;">Salve
                            este
                            comprovante, você vai precisar apresentar (impresso ou na tela do celular) na entrada do
                            evento
                            junto com o documento de
                            identificação cadastrado.</p>
                        <button type="button" class="imprimir-comprovante-btn" style="margin-bottom: 25px;"
                            onclick="imprimir()">Imprimir
                            comprovante</button>
                    </div>

                    {{-- <div style="text-align: center; height: 300px;">
                        <div class="divider div-transparent"></div>
                        <div id="infos-espaco-visitacao">
                            {{-- <h1 class="ui header" id="texto-title">Informações do Evento</h1>
                            <div style="padding-bottom: 10px;"></div>
                            {{-- <p id="label-espaco-comprovante"><b>Título:</b> {{ $event->name }}</p>
                            <p id="label-espaco-comprovante"><b>Local:</b> {{ $place->name }}</p>
                            <p id="label-horario-comprovante"><b>Data:</b> {{ $DataEspecifica->format('d/m/Y \à\s
                                H\hi\m\i\n') }}
                            </p>
                            {{-- <p id="label-espaco-comprovante"><b>Descrição: </b>{{ $event->information }}</p>
                        </div>
                    </div> --}}


                </div>
            </div>
            <div class="column-2">

                <div>
                    <h1 class="ui header" style="color: rgb(202, 60, 60); font-size: 14px; padding-top:20px ;">
                        COMPROVANTE DE INSCRIÇÃO
                    </h1>
                    <h1 class="ui header" style="color: rgb(202, 60, 60); font-size: 14px;">ESTAÇÃO CASA DO BISCOITO
                    </h1>

                    {{-- <p id="descricao-page-comprovante-text" style="color: rgb(60, 145, 202);"></p>
                    <h1 class="ui header" id="texto-comprovacao"></h1> --}}

                    <h1 class="ui header" id="texto-comprovacao">Inscrição realizada para
                        {{$row->horario_visitacao_data}} - {{$row->horario_visitacao_hora_inicio}}
                    </h1>
                    {{-- <h1 class="ui header" id="texto-comprovacao">
                        Importante! Chegar com antecedência na estação, <br> neste horário:
                        <b>{{$row->horario_visitacao_hora_chegada_estacao}}</b>
                    </h1> --}}

                    <h1 class="ui header" id="texto-comprovacao">Endereço: Rua José Clemente - 564, esquina com a
                        Rua
                        Barroso
                    </h1>
                </div>

                <div class="info-inscrito" style="padding-bottom: 30px;">
                    <h1 class="ui header" id="texto-title">Informações do Inscrito</h1>
                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->nome_completo }}</b> </p>
                    <p id="label-documento-comprovante"><b>Deficiência: {{ $visitante_cadastrato->nome_deficiencia ??
                            ''}}</b>
                    </p>

                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{
                            $visitante_cadastrato->dependente_data_nascimento
                            ?? ''}}</b> </p>

                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente2_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{
                            $visitante_cadastrato->dependente2_data_nascimento ?? ''}}</b> </p>

                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente3_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{
                            $visitante_cadastrato->dependente3_data_nascimento ?? ''}}</b> </p>

                    <p id="label-nome-comprovante"><b>Nome: {{ $visitante_cadastrato->dependente4_nome }}</b> </p>
                    <p id="label-documento-comprovante"><b>Data Nascimento: {{
                            $visitante_cadastrato->dependente4_data_nascimento ?? ''}}</b> </p>
                </div>



            </div>




        </div>


        
        










</div>



<div class="observacoes-importantes" id="column-3">
    <h1 class="ui header" id="texto-title">INFORMAÇÕES AO VISITANTE</h1>
    <div class="divider div-transparent"></div>
    <div id="div-importantes-observacoes" style="padding-bottom:30px ;">
        <b>


            <p id="label-documento-comprovante"> ● É necessário chegar com 20 minutos de antecedência no
                local citado acima;</p>


            <p id="label-documento-comprovante"> ● A entrada do público será feita no horário marcado do
                agendamento. Não haverá tolerância no horário de chegada.
                Após o tempo expirado, será necessário realizar novo agendamento;</p>

            <p id="label-documento-comprovante"> ● O comprovante de agendamento só é válido para o dia e
                horário presentes no mesmo, não sendo permitido a
                utilização dele em dias e horários diferentes;</p>

            <p id="label-documento-comprovante"> ● Eu AUTORIZO a Secretaria de Estado de Cultura e Economia
                Criativa do Amazonas a utilizar a imagem do menor feita
                para o passaporte de Natal, assim como as demais imagens capturadas durante a visita, em
                todo e
                qualquer material entre imagens de vídeo, fotos e voz. A presente autorização é concedida a
                título gratuito, abrangendo o uso da imagem
                acima mencionada, das seguintes formas: folhetos em geral, anúncios em revistas, jornais e
                TV; sites e portais; e redes sociais
                (facebook, instagram, twitter, youtube e demais plataformas digitais de streaming e
                compartilhamento de dados).</p>

            <h1 class="ui header" id="texto-title">ATENÇÃO:</h1>
            <p id="label-documento-comprovante"> ● Informamos que o espaço desenvolverá atividades voltadas
                para o público de 1 a 5 anos, como
                oficinas, brincadeiras e apresentações artísticas. Durante 50 minutos as crianças serão
                acompanhadas
                pelos recreadores nas atividades e o responsável pelo menor, deverá permanecer no espaço
                durante
                a realização da ação. </p>


    </div>
</div>




        <script>
            function imprimir() {
                window.print();
            }
        </script>
</body>

</html>