<?php
 include "header.php";
?>	

		<div class="view intro-2" style="">
			<div class="full-bg-img">
				<div class="mask rgba-purple-light flex-center">
					<div class="container text-center white-text wow fadeInUp">
						<h1 class="display-1 primary" style="margin-bottom: 35px;">CORNout VIAGENS</h1>
						
						<div class="pesquisa_lugar">

							<div class="input-group container-fluid rounded hoverable" style="max-width: 90%;">
								<select class="custom-select rounded" id="local" aria-label="Local" style="margin: auto 1%">
									<option selected>Local</option>
									<option value="1">Rio de Janeiro</option>
									<option value="2">Manaus</option>
									<option value="3">Salvador</option>
								</select>
								<select class="custom-select rounded" id="local" aria-label="Mês" style="margin: auto 1%">
									<option selected>Mês</option>
									<option value="1">Outobro</option>
									<option value="2">Novembro</option>
									<option value="3">Dezembro</option>
								</select>
								<select class="custom-select rounded" id="local" aria-label="Pessoas" style="margin: auto 1%">
									<option selected>Pessoas</option>
									<option value="1">1 adulto</option>
									<option value="2">2 adultos</option>
									<option value="3">1 adulto com crianças</option>
									<option value="3">2 adultos com crianças</option>

								</select>
								<button class="input-group-text btn-primary" id="basic-addon2" style="margin: auto 1%">Montar Roteiro</span>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!--<div class="container-fluid img-fluid" style="margin-top: 15px;">
			<div class="jumbotron card card-image " style="background-image: url(Banner_linguagens.jpg);">
				<div class="text-white text-center py-5 px-4">
					<div>
						<h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><br><br><br><br><strong></strong></h2>
						<p class="mx-5 mb-5"></p>
						<a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i>Quiz CORNouT</a>
					</div>
				</div>
			</div>
		</div>-->
			


		<hr>
		<div class="container-fluid ">

			<div class="card-deck">
				<!-- Card -->
				<div class="card mb-4">
					<!--Card image-->
					<div class="view overlay zoom hoverable">
						<img class="card-img-top" src="imgs/card-rio.jpg" alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--Card content-->
					<div class="card-body">
						<!--Title-->
						<h4 class="card-title">Rio de Janeiro</h4>
						<!--Text-->
						<p class="card-text" style="text-align: justify">O Rio de Janeiro é uma grande cidade brasileira à beira-mar, famosa pelas praias de Copacabana e Ipanema, pela estátua de 38 metros de altura do Cristo Redentor, no topo do Corcovado, e pelo Pão de Açúcar, um pico de granito com teleféricos até seu cume. O empolgante Carnaval, com carros alegóricos, fantasias extravagantes e sambistas, é considerado o maior do mundo.</p>
						<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
						<button type="button" class="btn btn-light-blue btn-md">Ler Mais</button>
					</div>
				</div>
				<!-- Card -->

				<!-- Card -->
				<div class="card mb-4">
					<!--Card image-->
					<div class="view overlay zoom hoverable">
						<img class="card-img-top" src="imgs/card-manaus.jpg" alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--Card content-->
					<div class="card-body">
						<!--Title-->
						<h4 class="card-title">Manaus</h4>
						<!--Text-->
						<p class="card-text" style="text-align: justify">Manaus, nos bancos do Rio Negro no noroeste do Brasil, é a capital do vasto estado do Amazonas. Trata-se de um ponto de partida importante próximo à Floresta Amazônica. A leste da cidade, o Rio Negro, escuro, converge para o Rio Solimões, barrento, resultando em um fenômeno visual incrível chamado de "Encontro das Águas".</p>
						<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
						<button type="button" class="btn btn-light-blue btn-md">Ler Mais</button>
					</div>
				</div>
				<!-- Card -->

				<!-- Card -->
				<div class="card mb-4">
					<!--Card image-->
					<div class="view overlay zoom hoverable">
						<img class="card-img-top" src="imgs/card-salvador.jpg" alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>
					<!--Card content-->
					<div class="card-body">
						<!--Title-->
						<h4 class="card-title">Salvador</h4>
						<!--Text-->
						<p class="card-text" style="text-align: justify">Salvador, a capital do estado da Bahia no nordeste do Brasil, é conhecida pela arquitetura colonial portuguesa, pela cultura afrobrasileira e pelo litoral tropical. O bairro do Pelourinho é seu coração histórico, com vielas de paralelepípedo terminando em praças grandes, prédios coloridos e igrejas barrocas, como São Francisco, com trabalhos em madeira revestidos com ouro.</p>
						<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
						<button type="button" class="btn btn-light-blue btn-md">Ler Mais</button>
					</div>
				</div>
				<!-- Card -->

			</div>
		<!-- Card deck -->
		</div>

<!--Main Layout-->



<!-- Modal de LOGIN E CADASTRO -->
		<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog cascading-modal" role="document">
				<!--Content-->
				<div class="modal-content">

					<!--Modal cascading tabs-->
					<div class="modal-c-tabs">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
							<li class="nav-item">
								<a style="color: #000 !important;" class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
									Entrar</a>
							</li>
							<li class="nav-item">
								<a style="color: #000 !important;" class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
									Cadastro</a>
							</li>
						</ul>

						<!-- Tab panels -->
						<div class="tab-content">
							<!--Panel 7-->
							<div class="tab-pane fade in show active" id="panel7" role="tabpanel">

								<!--Body-->
								<div class="modal-body mb-1">
									
									<div class="md-form form-sm mb-5">
										<i class="fas fa-envelope prefix"></i>
										<input type="email" id="inputLogEmail" name="inputLogEmail" required="" class="form-control form-control-sm validate">
										<label data-error="wrong" data-success="right" for="inputLogEmail">Seu E-mail</label>
										</div>

									<div class="md-form form-sm mb-4">
										<i class="fas fa-lock prefix"></i>
										<input type="password" id="inputLogSenha" name="inputLogSenha" required="" class="form-control form-control-sm validate">
										<label data-error="wrong" data-success="right" for="inputLogSenha">Sua Senha</label>
									</div>
									<div class="text-center mt-2">
										<button id="btnLogin" name="btnLogin" class="btn btn-info">Entrar<i class="fas fa-sign-in ml-1"></i></button>
									</div>
									
								</div>
								<!--Footer-->
								<div class="modal-footer">
									<div class="options text-center text-md-right mt-1">
										<p>Não Tem Cadastro? <a data-toggle="tab" href="panel8" role="tab" class="blue-text" >Cadastrar-se</a></p>
										<p>Esqueceu a <a href="#" class="blue-text">Senha?</a></p>
									</div>
									<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Cancelar</button>
								</div>

							</div>
							<!--/.Panel 7-->

							<!--Panel 8-->
							<div class="tab-pane fade" id="panel8" role="tabpanel">

								<!--Body-->
								<div>
									<?php
										/* MENSAGEM CASO POSSUA ALGUM ERRO NO CADASTRO */
										if(isset($_SESSION['msg_erro_cadastro'])){
											echo $_SESSION['msg_erro_cadastro'];
											unset($_SESSION['msg_erro_cadastro']);
										}
									?>
								</div>
								<form method="POST" action="cadastrar.php">
									<div class="modal-body">
										<div class="md-form form-sm mb-5" style="margin-top: -3%">
											<i class="fas fa-user prefix"></i>
											<input type="text" id="inputCadNome" name="inputCadNome" class="form-control form-control-sm validate">
											<label data-error="Erro!" data-success="Ok!" for="inputCadNome">Seu nome</label>
										</div>

										<div class="md-form form-sm mb-5" style="margin-top: -5%">
											<i class="fas fa-envelope prefix"></i>
											<input type="email" id="inputCadEmail" name="inputCadEmail" class="form-control form-control-sm validate">
											<label data-error="Erro!" data-success="Ok!" for="inputCadEmail">Seu e-mail</label>
										</div>

										<div class="md-form form-sm mb-5" style="margin-top: -5%">
											<i class="fas fa-lock prefix"></i>
											<input type="password" id="inputCadSenha" name="inputCadSenha" class="form-control form-control-sm validate">
											<label data-error="Erro!" data-success="Ok!" for="inputCadSenha">Sua Senha</label>
										</div>

										<div class="md-form form-sm mb-4" style="margin-top: -5%">
											<i class="fas fa-lock prefix"></i>
											<input type="password" id="inputCadCSenha" name="inputCadCSenha" class="form-control form-control-sm validate">
											<label data-error="Erro!" data-success="Ok!" for="inputCadCSenha">Confirme a senha</label>
										</div>

										<input type="hidden" id="validador" name="validador" value="1">

										<div class="text-center form-sm mt-2" style="margin-top: -5%">
											<button type="submit" id="btnCadastro" class="btn btn-info">Cadastrar <i class="fas fa-sign-in ml-1"></i></button>
										</div>

									</form>
								</div>
								<!--Footer-->
								<div class="modal-footer">
									<div class="options text-right">
										<p class="pt-1">Já Tem conta ? <a href="#" class="blue-text">Entrar</a></p>
									</div>
									<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Cancelar</button>
								</div>
							</div>
							<!--/.Panel 8-->
						</div>

					</div>
				</div>
				<!--/.Content-->
			</div>
		</div>

		<!-- FIM DO MODAL LOGIN E CADASTRO -->

<script>
	alertify.alert('Ready!');
</script>

<?php
	include "footer.php";
?>