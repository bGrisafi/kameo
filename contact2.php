<?php 
include 'include/header3.php';
?>

		


 <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    	<h1 class="text-green">NOUS CONTACTER</h1>
                        <p class="fr">Vous souhaitez un complément d'informations ou nous rencontrer? Rien de plus simple, remplissez ce formulaire et nous vous contacterons dès que possible.</p>
						<p class="en">Would you like more information or simply to meet us? It's easy, fill out this form and we will contact you as soon as possible.</p>
						<p class="nl">Wilt u meer informatie of gewoon ons te ontmoeten? Het is gemakkelijk, vul dit formulier in en we nemen zo snel mogelijk contact met u op.</p>
                        <div class="m-t-30">
                            <form id="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="name" id="fr">Nom</label>
										<label for="name" id="en">Name</label>
										<label for="name" id="nl">Naam</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name">
                                    </div>
                                     <div class="form-group col-sm-6">
                                        <label for="firstName" id="fr">Prénom</label>
										<label for="firstName" id="en">First Name</label>
										<label for="firstName" id="nl">Voornaam</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-firstName" class="form-control required name">

										</div>
                                    <div class="form-group col-sm-6">
                                        <label for="email"  id="fr">Email</label>
										<label for="email"  id="en">Email</label>
										<label for="email"  id="nl">Email</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="phone"  id="fr">Numéro de téléphone</label>
										<label for="phone"  id="en">Phone number</label>
										<label for="phone"  id="nl">Telefoonnumber</label>
                                        <input type="phone" aria-required="true" name="widget-contact-form-phone" class="form-control required phone" placeholder="+32">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="subject"  id="fr">Votre sujet</label>
										<label for="subject"  id="en">Subject</label>
										<label for="subject"  id="nl">Onderwerp</label>
                                        <input type="text" name="widget-contact-form-subject" class="form-control required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message"  id="fr">Message</label>
									<label for="message"  id="en">Message</label>
									<label for="message"  id="nl">Bericht</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Votre message"></textarea>
                                </div>
                                
                                <div class="g-recaptcha" data-sitekey="6LfqMFgUAAAAADlCo3L6lqhdnmmkNvoS-kx00BMi"></div>
                                
                                <input type="text" class="hidden" id="widget-contact-form-antispam" name="widget-contact-form-antispam" value="" />
                                <button  id="fr" class="button effect fill" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Envoyer</button>
								<button  id="en" class="button effect fill" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send</button>
								<button  id="nl" class="button effect fill" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Verzenden</button>
                            </form>
                            <script type="text/javascript">
                                jQuery("#widget-contact-form").validate({
                                    submitHandler: function(form) {

                                        jQuery(form).ajaxSubmit({
                                            success: function(text) {
                                                if (text.response == 'success') {
                                                    $.notify({
                                                        message: "Nous avons <strong>bien</strong> reçu votre message et nous reviendrons vers vous dès que possible."
                                                    }, {
                                                        type: 'success'
                                                    });
                                                    $(form)[0].reset();
                                                    
                                                    gtag('event', 'send', {
                                                      'event_category': 'mail',
                                                      'event_label': 'contact.php'
                                                    });

                                                } else {
                                                    $.notify({
                                                        message: text.message
                                                    }, {
                                                        type: 'danger'
                                                    });
                                                }
                                            }
                                        });
                                    }
                                });

                            </script>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<h1 class="">NOUS TROUVER</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                  <strong>KAMEO Bikes</strong><br>
                                  Boulevard de la Sauvenière 118<br>
                                  4000 Liège<br>
                                  Belgique<br>
                                  </address>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.1842023612126!2d5.563493815738344!3d50.642270079502346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa10dc542751%3A0x26d03b27411f9003!2sBoulevard+de+la+Sauveni%C3%A8re+118%2C+4000+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1548313771584" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
						
						<br>
						
						<div id="slider">
							<div id="slider-carousel">
							
								<img src="images/shopvelo1.jpg" class="img-responsive img-rounded" alt="">
								<img src="images/shopvelo2.jpg" class="img-responsive img-rounded" alt="">
								<img src="images/shopvelo3.jpg" class="img-responsive img-rounded" alt="">
							
							</div>
						</div>

                        

                    </div>
                </div>
            </div>
        </section>
        <!-- END: CONTENT -->
        
        <!-- TEAM -->
		<section id="section5" class="background-grey">
			<div class="container">
				<h1 class="text-green">L'ÉQUIPE</h1>
					<p class="fr">KAMEO Bikes a été créé en 2017 par 4 jeunes désireux de proposer un service complet pour la mobilité en entreprise. Nous constations tous les jours les mêmes problèmes de trafic, retard et ne trouvions pas la solution que nous avions en tête. Nous avons alors décidé de la créer.</p>
					<p class="en">KAMEO Bikes was created in 2017 by 4 young people eager to prove that it is possible to design innovative E-Bikes adapted to the tastes and needs of each.</p>
					<p class="nl">KAMEO Bikes is in 2017 opgericht door 4 jonge mensen die graag willen aantonen dat het mogelijk is om innovatieve elektrische fietsen te ontwerpen die aangepast zijn op de smaken en behoeften van elk. </p>
				<div class="row">
					<div class="col-md-3">
						<div class="image-box circle-image small"> <img class="" src="images/Jams.jpg" alt="Julien - Responsable Technique vélo entretien mobilité"> </div>
						<div class="image-box-description text-center">
							<h4 class="fr">Julien</h4>
							<h4 class="en">Julien</h4>
							<h4 class="nl">Julien</h4>
							<p  class="fr" class="subtitle">Responsable technique</p>
							<p  class="en" class="subtitle">Technical manager</p>
							<p  class="nl" class="subtitle">Technical manager</p>
							<hr class="line">
							<div class="fr">Aussi loin qu'on s'en souvienne, Julien a toujours été passionné de vélo. Habile mécanicien et ingénieur industriel, il se tient au courant de toutes les nouveautés afin de pouvoir vous conseiller le vélo qui répondra au mieux à votre besoin.</div>
							<div class="en">As far as we can go back, Julien has always been passionate about cycling. Skilled mechanic and industrial engineer, he knows inside out the technical details of each of our bikes and constantly strives to improve them. </div>
							<div class="nl">Voor zover we terug kunnen gaan, heeft Julien altijd een passie gehad voor fietsen. Bekwaam mechanicus en industriële ingenieur, hij kent de technische details van elk van onze fietsen en streeft om ze te verbeteren. </div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="image-box circle-image small"> <img class="" src="images/PY.jpg" alt="Pierre-Yves - Responsable stratégique vélo entretien mobilité"> </div>
						<div class="image-box-description text-center">
							<h4 class="fr">Pierre-Yves</h4>
							<h4 class="en">Pierre-Yves</h4>
							<h4 class="nl">Pierre-Yves</h4>
							<p  class="fr" class="subtitle">Responsable stratégique</p>
							<p  class="en" class="subtitle">Business Manager</p>
							<p  class="nl" class="subtitle">Business Manager</p>
							<hr class="line">
							<div class="fr">Quel que soit le sport ou le terrain, Pierre-Yves veut toujours être en mouvement. La monotonie de ses transports urbains lui a donné l'envie de créer KAMEO Bikes. </div>
							<div class="en">Whatever the sport whatever the field, Pierre-Yves always wants to be in motion. The monotony of his urban transports made him want to create KAMEO Bikes. </div>
							<div class="nl">Wat de sport of het terrein betreft, zal Pierre-Yves altijd in beweging zijn. De monotoon van zijn stedelijk vervoer zorgde ervoor dat hij KAMEO Bikes wilde maken. </div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="image-box circle-image small"> <img class="" src="images/Lust.jpg" alt="Antoine - Responsable Financier vélo entretien mobilité"> </div>
						<div class="image-box-description text-center">
							<h4 class="fr">Antoine</h4>
							<h4 class="en">Antoine</h4>
							<h4 class="nl">Antoine</h4>
							<p  class="fr" class="subtitle">Responsable financier</p>
							<p  class="en" class="subtitle">Financial manager</p>
							<p  class="nl" class="subtitle">Financial manager</p>
							<hr class="line">
							<div  class="fr">Peu importe la technologie, Antoine est un éternel curieux qui veut tout comprendre et maitriser. Ingénieur civil, il est en charge des aspects financiers du projet. </div>
							<div  class="en">Challenge him on one something and Antoine will want to understand and master it. As a civil engineer, he is in charge of the financial aspects of the project. </div>
							<div  class="nl">Wat de technologie ook is, Antoine is een eeuwig nieuwsgierig dat alles alles wil begrijpen en beheersen. Hij is verantwoordelijk voor de financiële aspecten van het project. </div>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="image-box circle-image small"> <img class="" src="images/Thib.jpg" alt="Thibaut - Responsable marketing vélo entretien mobilité"> </div>
						<div class="image-box-description text-center">
							<h4 class="fr">Thibaut</h4>
							<h4 class="en">Thibaut</h4>
							<h4 class="nl">Thibaut</h4>
							<p  class="fr" class="subtitle">Responsable marketing</p>
							<p  class="en" class="subtitle">Marketing manager</p>
							<p  class="nl" class="subtitle">Marketing manager</p>
							<hr class="line">
							<div class="fr">En quelques clics sur son ordi, Thibaut transforme n'importe quel schéma en un design simple et élégant. Graphiste, il s'assure que la qualité visuelle de KAMEO Bikes soit à la hauteur de la qualité de son service.</div>
							<div class="en">Just give Thibaut 5 minutes with his computer and he will transform any random sketch in a beautiful and clean design. As graphic designer, he makes sure that the visual quality of our products is as good as their technical quality. </div>
							<div class="nl">Met een paar klikken op zijn computer verandert Thibaut elke schets in een schoon en elegant ontwerp. Als graficus, zorgt hij ervoor dat de visuele kwaliteit van KAMEO Bikes-producten aan hun technische kwaliteit voldoet.</div>
							<br>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<div id="formulaire"">
		</div>
		<!-- END: TEAM -->

		<!-- FOOTER -->
	<footer class="background-dark text-grey" id="footer">
    <div class="footer-content">
        <div class="container">
        
        <br><br>
        
            <div class="row text-center">
                <div class="copyright-text text-center"><ins>Kameo Bikes SPRL</ins> 
					<br>BE 0681.879.712 
					<br>+32 498 72 75 46 </div>
					<br>
                <div class="social-icons center">
							<ul>
								<li class="social-facebook"><a href="https://www.facebook.com/Kameo-Bikes-123406464990910/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								
								<li class="social-instagram"><a href="https://www.instagram.com/kameobikes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
				</div>
				<!--
				<div class="copyright-text text-center"><a href="blog.php" class="text-green text-bold">Le blog</a> | <a href="faq.php" class="text-green text-bold">FAQ</a></div>
				-->
				<br>
				<br>
				
            </div>
        </div>
    </div>
</footer>
		<!-- END: FOOTER -->
	</div>
	<!-- END: WRAPPER -->


	<!-- Theme Base, Components and Settings -->
	<script src="js/theme-functions.js"></script>

	<!-- Custom js file -->
	<script src="js/language.js"></script>



</body>

</html>
