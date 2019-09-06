<div class="theme-layout">
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Ti-ASA Service Profesionnel</h4>
										<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="#" title="">Auto-envoie CV par Mail</a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="#" title="">Generateur de CV</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="#" title="">Pages de recrutement</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="#" title="">Reseau Profesionel</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="#" title="">Suggestion Profil/Offre</a>
											</li>
										</ul>
									</div><!-- Shortcuts -->
									<div class="widget">
										<h4 class="widget-title">Publicité Ici</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>Offre</i>
													<span><a href="#" title="">Publicité de 10 Jours</a></span>
													<h6>Pour <a href="time-line.html">Ar 10 000.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>Ofrre</i>
													<span><a href="#" title="">Publicité de 30 Jours</a></span>
													<h6>Pour <a href="time-line.html">Ar 25 000.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>Super Offre</i>
													<span><a href="#" title="">Publicité Illimité.</a></span>
													<h6>"<a href="#"> Sponsoring.</a>"</h6>
												</div>
											</li>
										</ul>
									</div><!-- recent activites -->
									<div class="widget stick-widget">
										<h4 class="widget-title">Publicité Ici</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>Offre</i>
													<span><a href="#" title="">Publicité de 10 Jours</a></span>
													<h6>Pour <a href="time-line.html">Ar 10 000.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>Ofrre</i>
													<span><a href="#" title="">Publicité de 30 Jours</a></span>
													<h6>Pour <a href="time-line.html">Ar 25 000.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>Super Offre</i>
													<span><a href="#" title="">Publicité Illimité.</a></span>
													<h6>"<a href="#"> Sponsoring.</a>"</h6>
												</div>
											</li>
										</ul>
									</div><!-- who's following -->
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
							 
								<div class="central-meta">
									<div class="new-postbox", id='cnt'>
											<figure>

												<img style="border-radius:50%;width:36px;height:36px" src="{% static info_user.profilpic %}" alt="">

											</figure>
											<div class="newpst-input">
										
												<form method="post">
													<textarea id="pub" rows="2" placeholder="Publier un Offre d'emploi ou autre"></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-music"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-file"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<button type="submit">Publier</button>
															</li>
														</ul>
													</div>
												<div id="publication" style="display:none;">
													<div id="f" class="form-group">	
														<input type="text" name="formation"   required="required" />
														<label class="control-label" for="input">Formation</label><i class="mtrl-select"></i>
													</div>
													<div class="form-group">	
														<input type="text" name="experience"   required="required" />
														<label class="control-label" for="input">Experience Minimum</label><i class="mtrl-select"></i>
													</div>
													<div class="form-group">	
														<input type="text" name="competence"   required="required" />
														<label class="control-label" for="input">Competetence</label><i class="mtrl-select"></i>
													</div>
													<div class="form-group">	
														<input type="text" name="Personalite"   required="required" />
														<label class="control-label" for="input">Personalité</label><i class="mtrl-select"></i>
													</div>
													<div class="form-group">	
														<input type="text" name=""   required="required" />
														<label class="control-label" for="input">Langue</label><i class="mtrl-select"></i>
													</div>
													<div class="form-group">
														<fieldset style="border:1px groove !important;padding-top:0.01em !important;padding-bottom:1em !important;padding-left:0.25em !important;">
															<legend style="font-size:15px !important;">  Date limite </legend>
															<div class="form-group half" style="margin-left:1px !important;">
																<select style="color:#088dcd" name='jour'>
																	<option value="">Jour</option>
																	{% for day in days %}
																	<option>{{day}}</option>
																	{% endfor %}
																</select>
															</div>
															<div class="form-group half" style="margin-left:5px !important;">
																<select name='mois'>
																<option value="">Mois</option>
																	<option value=1>Janvier</option>
																	<option value=2>Fevrier</option>
																	<option value=3>Mars</option>
																	<option value=4>Avril</option>
																	<option value=5>Mai</option>
																	<option value=6>Juin</option>
																	<option value=7>Juillet</option>
																	<option value=8>Aout</option>
																	<option value=9>Septembre</option>
																	<option value=10>Octobre</option>
																	<option value=11>Novembre</option>
																	<option value=12>Decembre</option>
																</select>
															</div>
														  </fieldset>
													</div>
													<div class="form-group">	
														<input type="text" name=""   required="required" />
														<label class="control-label" for="input">Lieu</label><i class="mtrl-select"></i>
													</div>
												</div>
												</form>
												<script>
													var x = document.getElementById('pub');
													var cont = document.getElementById('cnt');
													var i = 0;
													x.addEventListener('focus',  function show_pub(){
														if (i < 1){
															dist = document.getElementById('publication');
															dist.style.display = 'block';
															}
														i = i + 1 ;														
															}
														
													)
										
													x.addEventListener('blur', function hide_pub(event){
														dist = document.getElementById('publication');
														if (event.relatedTarget == null){
															dist.style.display = 'none';
															i = 0;
														}			
													}
													)
												
													cnt.addEventListener('click', function hides_pub(event){
														dist = document.getElementById('publication');
														if (event.target.localName == 'div'){
															dist.style.display = 'none';
															i = 0;
														}	
													}
													) 
												</script>
											</div>
										</div>
									</div><!-- add post new box -->
									{% comment %} 
									
									
									
									Ataovy akato publication nareo ooooo 
									
									
									
									 {% endcomment %}
								</div><!-- centerl meta -->
							
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Exemple de Page</h4>	
										<div class="your-page">
											<figure>
												<a href="#" title=""><img src="{% static 'connexion/images/esti.png' %}" alt=""></a>
											</figure>
											<div class="page-meta">
												<a href="#" title="" class="underline">ESTI Antanimena</a>
												<span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a></span>
												<span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
											</div>
											<div class="page-likes">
												<ul class="nav nav-tabs likes-btn">
													<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">Interessés</a></li>
													 <li class="nav-item"><a class="" href="#link2" data-toggle="tab">Vues</a></li>
												</ul>
												<!-- Tab panes -->
												<div class="tab-content">
												  <div class="tab-pane active fade show " id="link1" >
													<span><i class="ti-heart"></i>1144</span>
													  <a> Entreprises s'interessent</a>
											
												  <div class="tab-pane fade" id="link2" >
													  <span><i class="ti-eye"></i>440</span>
													  <a href="#" title="weekly-likes">440 new views this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-1.jpg' %}" alt="">  
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-2.jpg' %}" alt="">  
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-3.jpg' %}" alt="">  
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-4.jpg' %}" alt="">  
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-5.jpg' %}" alt="">  
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-6.jpg' %}" alt="">  
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="{% static 'connexion/images/resources/userlist-7.jpg' %}" alt="">  
														</a>  
													  </div>
												  </div>
												</div>
											</div>
										</div>
										</div>
									</div><!-- page like widget -->
									
									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div class="bg-image" style="background-image: url({% static 'connexion/images/resources/baner-widgetbg.jpg)' %}"></div>
											<div class="baner-top">
												<span><img alt="" src="{% static 'connexion/images/book-icon.png' %}"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													Créer une page d'entreprise pour recruter facilement
												</p>
												<span>@ti-asa</span>
												<a data-ripple="" title="" style="color:#088dcd" href="#">Commencer Maintenant @ti-asa!</a>
											</div>
										</div>											
									</div>
									<div class="widget friend-list stick-widget">
										<h4 class="widget-title">Profil Intéressant</h4>
										<div id="searchDir"></div>
										<ul id="people-list" class="friendz-list">
											<li>
												<figure>
													<img src="{% static info_user.profilpic %}" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Gaetan Jonathan</a>
													<i><a href="#" class="__cf_email__" >gaetan.s118@gmail.com</a></i>
												</div>
											</li>
										
										</ul>
										<div class="chat-box">
											<div class="chat-head">
												<span class="status f-online"></span>
												<h6>Bucky Barnes</h6>
												<div class="more">
													<span><i class="ti-more-alt"></i></span>
													<span class="close-mesage"><i class="ti-close"></i></span>
												</div>
											</div>
											<div class="chat-list">
												<ul>
													<li class="me">
														<div class="chat-thumb"><img src="{% static 'connexion/images/resources/chatlist1.jpg' %}" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="you">
														<div class="chat-thumb"><img src="{% static 'connexion/images/resources/chatlist2.jpg' %}" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="me">
														<div class="chat-thumb"><img src="{% static 'connexion/images/resources/chatlist1.jpg' %}" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
												</ul>
												<form class="text-box">
													<textarea placeholder="Post enter to post..."></textarea>
													<div class="add-smiles">
														<span title="add icon" class="em em-expressionless"></span>
													</div>
													<div class="smiles-bunch">
														<i class="em em---1"></i>
														<i class="em em-smiley"></i>
														<i class="em em-anguished"></i>
														<i class="em em-laughing"></i>
														<i class="em em-angry"></i>
														<i class="em em-astonished"></i>
														<i class="em em-blush"></i>
														<i class="em em-disappointed"></i>
														<i class="em em-worried"></i>
														<i class="em em-kissing_heart"></i>
														<i class="em em-rage"></i>
														<i class="em em-stuck_out_tongue"></i>
													</div>
													<button type="submit"></button>
												</form>
											</div>
										</div>
									</div><!-- friends list sidebar -->
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>
{% endblock %}