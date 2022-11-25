<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<title>Agendamento de Espaço</title>
		<style>
			.modal-dialog {
				width: 100% !important;
				height: 100% !important;
				margin: auto !important;
				padding: 0 !important;
			}
			.modal-content {
				height: 100% !important;
				width: 100% !important;
				min-height: 100% !important;
				border-radius: 0 !important;
			}
		</style>
	</head>
    <body class="bg-light">
        <header class="container d-print-none">
			<div class="row">
				<div class="col-md-12 py-4 text-right">
					<div id="google_translate_element"></div>
					<script type="text/javascript">
						function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE,autoDisplay: false, includedLanguages: ''}, 'google_translate_element');}
					</script>
					<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>
			</div>
			<div class="row">
			<div class="img-natal-1" style="margin: auto; text-align: center;"><img src="\logonatalpng.png"
                style="width: 90%; max-width: 200px; text-align: center; margin-top: 20px; margin-right: 20px;">
				<img
                            src="\noel-logo.png"
                            style="width: 90%; max-width: 250px; text-align: center;">
			</div>

				<!-- <div class="col-md-12">
					<div class="py-5 text-center">
						<h2>Bem vindo</h2>
						<p class="lead pt-2">
							Faça seu agendamento para a Fábrica do Papai Noel 2022
                        </p>
					</div>
				</div> -->
				<div class="col-md-12">
					<div class="py-5 text-center">
						<h2>AGENDAMENTO ESGOTADO</h2>
						<p class="lead pt-2">
							Por favor aguarde a abertura de novas vagas.
                        </p>
					</div>
				</div>

			</div>

		</header>
        <!-- <main class="visitante d-print-none">
			<section class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 class="mb-3">Visitante</h4>
						<hr class="mb-3">
					</div>
				</div>
				<div class="row d-print-none">
					<div class="col-md-12">
						<small class="text-justify text-secondary">
							Para agendar uma visita primeiro precisamos te conhecer melhor, nos informe alguns dados
						</small>
					</div>
				</div>
                <div class="row mt-4 d-print-none">
					<div class="col-md-12">
                        <form action="/agendamento/fabrica/create" method="POST">
                            @csrf
							<div class="row">
								
								<div class="col-md-6">
									<label>Naturalidade</label>
									<select class="custom-select" 
                                        name="naturalidade" placeholder="Naturalidade"
                                        id="naturalidade" required>
                                        <option value="Brasileiro">Brasileiro</option>
                                        <option value="Brasileiro">Sou Estrangeiro</option>
                                    </select> 
								</div>
								<div class="col-md-6">
									<label>Documento</label>
                                    <input type="text" name="cpf" id="cpf" required
                                        class="form-control" placeholder="CPF ou Passaporte" 
                                    >
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Nome completo</label>
									<input type="text" name="nome_completo" 
                                        class="form-control" placeholder="Nome completo" required
                                    >
								</div>
								<div class="col-md-6">
									<label>Data Nascimento</label>
                                    <input type="date" name="data_nascimento" 
                                        class="form-control" placeholder="Data Nascimento" required
                                    >
								</div>
							</div>
						
							<br>
							<div class="row">
								<div class="col-md-6">
                                    <select class="form-control" 
                                        name="deficiente" id="deficiente" required>
                                        <option value="" selected disabled>Você é uma Pessoa com Deficiência?</option>	
                                        <option value="Não">Não</option>
                                        <option value="Sim">Sim</option>
                                    </select> 
								</div>
								<div class="col-md-6">
                                    <input type="text" name="nome_deficiencia" id="nome_deficiencia"
                                    class="d-none form-control" placeholder="Informe o tipo de deficiencia" 
                                    >
								</div>
							</div>
                            <hr class="mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" onclick="addDep()"
									class="btn btn-success" 
									id="btn_dependentes">Adicionar Dependente</button>
                                </div>
                            </div>
							<br>
                            <div class="row" id="dependente01" style="display: none">
								<div class="col-md-3">
									<label>Nome</label>
									<input type="text" name="dependente_nome" 
                                    class="form-control" placeholder="Nome completo" 
                                    >
								</div>
                             
                                <div class="col-md-3">
									<label>Data Nascimento</label>
                                    <input type="date" name="dependente_data_nascimento" 
                                    class="form-control" placeholder="Data Nascimento" 
                                    >
								</div>
							</div>
                            <hr class="mb-3" >
                            <div class="row" id="dependente02" style="display: none">
								<div class="col-md-3">
									<label>Nome</label>
									<input type="text" name="dependente2_nome" 
                                    class="form-control" placeholder="Nome completo" 
                                    >
								</div>
                              
                                <div class="col-md-3">
									<label>Data Nascimento</label>
                                    <input type="date" name="dependente2_data_nascimento" 
                                    class="form-control" placeholder="Data Nascimento" 
                                    >
								</div>
							</div>
							<hr class="mb-3" >
                            <div class="row" id="dependente03" style="display: none">
								<div class="col-md-3">
									<label>Nome</label>
									<input type="text" name="dependente3_nome" 
                                    class="form-control" placeholder="Nome completo" 
                                    >
								</div>
                               
                                <div class="col-md-3">
									<label>Data Nascimento</label>
                                    <input type="date" name="dependente3_data_nascimento" 
                                    class="form-control" placeholder="Data Nascimento" 
                                    >
								</div>
							</div>
							<hr class="mb-3" >
                            <div class="row" id="dependente04" style="display: none">
								<div class="col-md-3">
									<label>Nome</label>
									<input type="text" name="dependente4_nome" 
                                    class="form-control" placeholder="Nome completo" 
                                    >
								</div>
                               
                                <div class="col-md-3">
									<label>Data Nascimento</label>
                                    <input type="date" name="dependente4_data_nascimento" 
                                    class="form-control" placeholder="Data Nascimento" 
                                    >
								</div>
							</div>
                    </div>
				</div>
            </section>
        </main>
		<main id="agendamento d-print-none">
			{{-- <form id="agenda-visita"> --}}
				<section class="container mt-5 d-print-none">
					<div class="row d-print-none">
						<div class="col-md-12">
							<h4 class="mb-3">Agende sua visita</h4>
							<hr class="mb-3">
						</div>
					</div>
					<div class="row d-print-none">
						<div class="col-md-12">
							<small class="text-justify text-secondary">
								Escolha um horário de sua preferência e agende sua visita. 
                                {{-- Seleciona uma data e um horário disponível para marcar --}}
							</small>
						</div>
					</div>
				
					<div class="row mt-4 d-print-none">
						
						<div class="col-md-6 d-print-none">
							<div class="row">
								<div class="col-md-12">
									<label>Agora escolha um horário para visitação</label>
								</div>
							</div>
							<div class="row d-print-none" id="01" style="display: flex">
								<div class="col-md-12">
                                    <select class="form-control" name="horario_visitacao_id" id="horario_visitacao_id">
										@foreach($horarios_visitacao as $horario)
											
												<option value="{{ $horario->id  }}"> 
													{{$horario->horario_visitacao_data}} - 
													{{$horario->horario_visitacao_hora_inicio}} 
													( {{ $horario->horario_visitacao_numero_vagas}} vagas )
												</option>
											
                                        @endforeach
                                    </select> 
								</div>
							</div>
						
							
							
						</div>
					</div>
				</section>
			{{-- </form> --}}    
		</main>
		<main id="acoes" class="container mt-5 d-print-none">
			<section class="row">
				<div class="col-md-12  text-right">
                    <button type="submit" class="btn btn-success">Agendar minha visita</button>
				</div>
			</section>
		</main>
    </form> {{-- fim formulario principal--}} -->
        <footer class="my-5 pt-5 text-muted text-center text-small d-print-none">
			<p class="mb-1">Secretaria de Cultura e Economia Criativa</p>
			<p class="mb-1">Desenvolvimento: Inovação e Tecnologia Audivisual</p>
			<p><small>Navegadores suportados: Google Chrome, Microsoft Edge, Firefox</small></p>				
		</footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
        
		
        <script>
			

		    $(document).ready(() => {

				count = 0;
             
                       
                        $('#deficiente').change(() => {
                            const selectSelecionado = $('#deficiente').children('option:selected').val()
                            if(selectSelecionado === 'Não'){
                                $('#nome_deficiencia').addClass('d-none')
                            }else{
                                $('#nome_deficiencia').removeClass('d-none')
                                // $('#div_tipo_deficiencia').css("display", "block")
                            }
                        })
						$('#btn_dependentes').click(() => {
							count++;
							if(count == 1){
                                $('#dependente01').css("display", "flex")
                            }
							if(count == 2){
                                $('#dependente02').css("display", "flex")
                            }
							if(count == 3){
                                $('#dependente03').css("display", "flex")
                            }
							if(count == 4){
                                $('#dependente04').css("display", "flex")
                            }
                        })                   
            })

// console.log($("#horario_visitacao_data").val());
			$("#horario_visitacao_data").change(function(){
				if($("#horario_visitacao_data").val() == "01/12/2021"){
					$("#01").css('display', 'flex');
					$("#02").css('display', 'none');
					$("#03").css('display', 'none');
					$("#04").css('display', 'none');
					$("#05").css('display', 'none');
				}
				if($("#horario_visitacao_data").val() == "02/12/2021"){
					$("#01").css('display', 'none');
					$("#02").css('display', 'flex');
					$("#03").css('display', 'none');
					$("#04").css('display', 'none');
					$("#05").css('display', 'none');
				}
				if($("#horario_visitacao_data").val() == "03/12/2021"){
					$("#01").css('display', 'none');
					$("#02").css('display', 'none');
					$("#03").css('display', 'flex');
					$("#04").css('display', 'none');
					$("#05").css('display', 'none');
				}
				if($("#horario_visitacao_data").val() == "04/12/2021"){
					$("#01").css('display', 'none');
					$("#02").css('display', 'none');
					$("#03").css('display', 'none');
					$("#04").css('display', 'flex');
					$("#05").css('display', 'none');
				}
				if($("#horario_visitacao_data").val() == "05/12/2021"){
					$("#01").css('display', 'none');
					$("#02").css('display', 'none');
					$("#03").css('display', 'none');
					$("#04").css('display', 'none');
					$("#05").css('display', 'flex');
				}
			})
        </script>


</body>

</html>