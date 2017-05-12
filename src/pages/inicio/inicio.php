<ion-header>
 <cabecalho [title]="'PromoGO'"></cabecalho>
</ion-header>

<ion-content padding>

 	<ion-grid>

    <!-- Inicio do butao flutuante search -->
     <ion-fab id="butao-flutuante">
       <button ion-fab>  <ion-icon name="add"></ion-icon> </button>
       <ion-fab-list side="left">
         <button ion-fab> <ion-icon name="search" color="primary" id="icon-flut"></ion-icon> </button>
         <button ion-fab> <ion-icon name="basket" color="primary" id="icon-flut"></ion-icon> </button>
         <button ion-fab> <ion-icon name="cart" color="primary" id="icon-flut"></ion-icon> </button>
       </ion-fab-list>
       <ion-fab-list side="top">
         <button ion-fab> <ion-icon name="home" color="primary" id="icon-flut"></ion-icon> </button>
       </ion-fab-list>

     </ion-fab>
    <!-- Fim do butao flutuante search -->



 		<!-- Inicio do Slider -->
		<ion-row>
			<div id="slide">
			    <ion-slides pager="true" autoplay="4500" loop="true">
			      <ion-slide>
			        <img src="img/bretas.png">
			      </ion-slide>
			      <ion-slide>
			        <img src="img/bernadao.png">
			      </ion-slide>
			      <ion-slide>
			        <img src="img/martminas.png">
			      </ion-slide>
			      <ion-slide>
			        <img src="img/smart.png">
			      </ion-slide>
			      <ion-slide>
			        <img src="img/extra.png">
			      </ion-slide>
			      <ion-slide>
			        <img src="img/abc.png">
			      </ion-slide>
			    </ion-slides>
			</div>
		</ion-row>
		<!-- Final do Slider -->

		<!-- Inicio dos butoes opcoes -->
	 	<ion-row>
	 		<ion-col col-4>
				<button ion-button round id="opcoes">Destaques</button>
			</ion-col>
			<ion-col col-4>
				<button ion-button round id="opcoes">Categorias</button>
			</ion-col>
			<ion-col col-4>
				<button ion-button round id="opcoes">Comercios</button>
			</ion-col>
		</ion-row>
		<!-- Fim -->

			<!-- Inico dos destaques ( bebidas ) -->

			<h5>Bebidas</h5>
			<span id="subtitulo-ofertas">Destaques do Mês</span><br>

		<ion-row>
	 		<ion-col col-4>
	 			<?php echo "teste PHP"; ?>
				<ion-img width="65" height="110" src="img/produtos/bebida1.png" id="img-itens"></ion-img>
				 <strong>R$2,59</strong>
			</ion-col>
			<ion-col col-4>
				Brahma
				<ion-img width="65" height="110" src="img/produtos/bebida2.png" id="img-itens"></ion-img>
				<strong>R$2,65</strong>
			</ion-col>
			<ion-col col-4>
				Heineken
				<ion-img width="65" height="110" src="img/produtos/bebida3.png" id="img-itens"></ion-img>
				<strong>R$2,78</strong>
			</ion-col>
		</ion-row>

			<!--  Fim	 -->

		<ion-img src="img/linha.png" id="linha"></ion-img> <!--  Linha de separação dos itens -->

		<!-- Inicio dos destaques ( Arroz ) -->

			<h5>Arroz</h5>
			<span id="subtitulo-ofertas">Destaques do Mês</span><br>

			<ion-row>
		 		<ion-col col-4>
		 			Urbano
					<ion-img width="80" height="95" src="img/produtos/arroz1.png" id="img-itens"></ion-img>
					 <strong>R$10,59</strong>
				</ion-col>
				<ion-col col-4>
					Pileco
					<ion-img width="80" height="95" src="img/produtos/arroz2.png" id="img-itens"></ion-img>
					<strong>R$11,17</strong>
				</ion-col>
				<ion-col col-4>
					Super Ecco
					<ion-img width="80" height="95" src="img/produtos/arroz3.png" id="img-itens"></ion-img>
					<strong>R$10,43</strong>
				</ion-col>
			</ion-row>

			<!-- Fim -->

			<ion-img src="img/linha.png" id="linha"></ion-img> <!--  Linha de separação dos itens -->

			<!-- Inicio dos destaques ( Linguiças ) -->

				<h5>Linguiças</h5>
				<span id="subtitulo-ofertas">Destaques do Mês</span><br>

				<ion-row>
			 		<ion-col col-4>
			 			S.Toscana
						<ion-img width="85" height="95" src="img/produtos/ling1.png" id="img-itens"></ion-img>
						 <strong>R$24,59</strong>
					</ion-col>
					<ion-col col-4>
						A.Frango
						<ion-img width="85" height="95" src="img/produtos/ling2.png" id="img-itens"></ion-img>
						<strong>R$22,17</strong>
					</ion-col>
					<ion-col col-4>
						S.Frango
						<ion-img width="85" height="95" src="img/produtos/ling3.png" id="img-itens"></ion-img>
						<strong>R$21,43</strong>
					</ion-col>
				</ion-row>

				<!-- Fim -->

	</ion-grid>

</ion-content>>
