<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bilgi İşlem Daire Başkanlığı - Ağ Hizmetleri Arıza ve Talep Formu</title>
		
		<!-- Font Awesome -->
		<link href="./css/all.min.css" rel="stylesheet" />
		<!-- Google Fonts -->
		<link href="./css/css.css" rel="stylesheet" />
		<!-- MDB -->
		<link href="./css/mdb.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="./css/font-awesome.css">
		<link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
		<script src="./js/sweetalert2@11"></script>
		<link href="./css/default-main.css" rel="stylesheet" />
		<style>
			.small-middle-container{
			margin: auto;
			width: 40%;
			}
			h1 { font-size: 2em; }
			h2 { font-size: 1.6em; }
			h3 { font-size: 1.4em; }
			h1,h2,h3 {
			vertical-align:middle;
			}
			
			h1>.badge, h2>.badge, h3>.badge {
			vertical-align:middle;
			margin-top: -0.5em;
			}
			
			body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
			}
			
			.container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1000px;
            margin: 0 auto;
			}
			
			.logo1,
			.logo2 {
            width: 100px;
            height: auto;
			}
			
			.center {
            display: flex;
            flex-direction: column;
            align-items: center;
			}
			
			.center span {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 12px;
			}
			
			hr {
            width: calc(100% - 40px);
            height: 1px;
            background-color: #000000;
            margin-top: 20px;
            border: none;
			}
			
			h1 {
            text-align: center;
			}
			
			.form-container {
            width: 80%;
            margin: 0 auto;
			}
			
			
			.section {
            margin-bottom: 20px;
			}
			
			.section h2 {
            text-align: center;
            margin-bottom: 10px;
			}
			
			
			.form-table {
            width: 100%;
            border-collapse: collapse;
			}
			
			.form-table th,
			.form-table td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
			}
			
			.form-table th {
            background-color: #f2f2f2;
			}
			
			.form-table input[type="text"],
			.form-table select {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            border-radius: 5px;
			}
			
			
			.additional-info {
            font-weight: bold;
            text-decoration: underline;
			}
			
			.additional-table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
			}
			
			.additional-table th,
			.additional-table td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
			}
			
			.additional-table th {
            background-color: #f2f2f2;
			}
			
			.additional-table input[type="text"],
			.additional-table select,
			.additional-table textarea {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            border-radius: 5px;
			}
			
			.additional-table textarea {
            resize: vertical;
			}
			
			
			@media (max-width: 768px) {
            .container {
			flex-direction: column;
			align-items: flex-start;
            }
			
            .center {
			text-align: left;
			margin-top: 20px;
            }
			
            .logo1,
            .logo2 {
			width: 80px;
			height: auto;
			margin-bottom: 10px;
            }
			
            nav {
			padding: 10px;
            }
			
            nav span {
			font-size: 14px;
            }
			}
		</style>
	</head>
	<body>
		<div class="container-sm">
			<div class="row">
				<div class="col-md">
					<nav>
						<div class="container">
							<img src="./imgs/Mersin_University_logo.svg (1).png" alt="Logo 1" class="logo1"> 
							<div class="center">
								<span>T.C.</span>
								<span>MERSİN ÜNİVERSİTESİ</span>
								<span>Bilgi İşlem Daire Başkanlığı</span> 
							</div>
							<img src="./imgs/k-q-tse-iso-en-9000-logo.png" alt="Logo 2" class="logo2">
						</div>
					</nav>
					<ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="home-tab" data-bs-toggle="tab" onclick="changeForm('network')" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Ağ Hizmetleri Arıza ve Talep Formu</h3></button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="profile-tab" onclick="changeForm('donanim')" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Donanım Arıza ve Talep Formu</h3></button>
						</li>

						<li class="nav-item" role="presentation">
							<button class="nav-link" id="profile-tab" onclick="changeForm('yazilim')" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Donanım Arıza ve Talep Formu</h3></button>
						</li>
					</ul>
					
				</div>
			</div>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<form class="repairRequestForm" id="network" autocomplete="off">
						<input type="hidden" name="arizaTuru" value="agAriza"/>
						<div class="row">
							<hr class="hr" />
							<div class="col-md-6 text-center">
								<label for="basic-url" class="form-label">İnternete Giriş Tipi Seçiniz:</label>
								<hr class="hr" />
							<div>
								<a href="yazilim-talep-formu.php">yazılım talep formu</a>
							</div>
								<div class="row">
									<div class="col-md-4">
										<div class="list-group list-group-light" id="list-tab" role="tablist">
											<a class="list-group-item list-group-item-action active px-3 border-0" id="list-home-list"
											data-mdb-list-init href="#list-home" role="tab" aria-controls="list-home">Kablolu<img src="./imgs/eth.png"/></a>
											<a class="list-group-item list-group-item-action px-3 border-0" id="list-profile-list"
											data-mdb-list-init href="#list-profile" role="tab" aria-controls="list-profile">Kablosuz <img src="./imgs/wifi.png"/></a>
										</div>
										
									</div>
									<div class="col-md-8">
										<div class="tab-content" id="nav-tabContent">
											<div class="tab-pane fade show active" id="list-home" role="tabpanel"
											aria-labelledby="list-home-list">
												<div id="kablolu_eklenen"></br>Yerel Ağ bağlantısı üzerinde <img src="./imgs/network_cable.png" width="25"/> veya <img src="./imgs/network_cable_1.png" width="25"/> var mı?
													<div class="row justify-content-center">
														<div class="col-md-6">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" value="0" name="yerelAgVarMi" id="flexRadioDefault1" />
																<label class="form-check-label" for="flexRadioDefault1">Evet</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" value="1" name="yerelAgVarMi" id="flexRadioDefault2" checked/>
																<label class="form-check-label" for="flexRadioDefault2">Hayır</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											
											<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
												<div id="kablosuz_Eklenen"></br>
													<div class="row justify-content-center">
														<div class="col-md-6">
															<div class="form-check">
																<input class="form-check-input" type="checkbox" value="1" name="kablosuzInternetYok" id="flexCheckDefault" />
																<label class="form-check-label" for="flexCheckDefault">
																	Kablosuz Olarak İnternete Giremiyorum
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<hr class="hr" />
								</br>
								<div class="row justify-content-left">
									<div class="col-md-4 d-flex align-items-stretch badge text-wrap" style="vertical-align: middle;">
										<div class="note note-primary h5" style="width:100%;"><span class="align-middle" style="display:block; padding:35px 0;">Arıza Durumu</span></div>
									</div>
									<div class="col-md-8">
										<ul class="list-group list-group-light list-group-small">
											<li class="list-group-item">
												<div class="form-check">
													<input class="form-check-input" type="radio" value="1" name="arizaDurumu" id="ariza1" />
													<label class="form-check-label" for="ariza1">Sadece Ben Giremiyorum</label>
												</div>
											</li>
											<li class="list-group-item">
												<div class="form-check">
													<input class="form-check-input" type="radio" value="2" name="arizaDurumu" id="ariza2" />
													<label class="form-check-label" for="ariza2">Benimle birlikte bazı kullanıcılar da giremiyor</label>
												</div>
											</li>
											<li class="list-group-item">
												<div class="form-check">
													<input class="form-check-input" type="radio" value="3" name="arizaDurumu" id="ariza3" />
													<label class="form-check-label" for="ariza3">Birimin tamamında internet yok</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<hr class="hr" />
								</br>
								<div class="row justify-content-left">
									<div class="col-md-4 d-flex align-items-stretch badge text-wrap">
										<div class="note note-primary h5"  style="vertical-align: middle;">İstenen Bağlantı Türü</div>
									</div>
									<div class="col-md-8">
										<div class="col-md-7">
											<ul class="list-group list-group-light list-group-small">
												<li class="list-group-item">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="1" name="talep" id="kabloluTalep" />
														<label class="form-check-label" for="kabloluTalep">Kablolu</label>
													</div>
												</li>
												<li class="list-group-item">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="2" name="talep" id="kablosuzTalep" />
														<label class="form-check-label" for="kablosuzTalep">Kablosuz</label>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								
								
							</div>
							<div class="col-md-6 text-center">
								<label for="basic-url" class="form-label">Kişisel Bilginizi Giriniz:</label>
								<div class="input-group mb-3">
									<input
									type="text"
									class="form-control"
									id="email"
									name="email"
									placeholder="Mail Adresiniz"
									aria-label="Mail Adresiniz"
									aria-describedby="basic-addon2"
									/>
									<span class="input-group-text" id="basic-addon2">@mersin.edu.tr</span>
								</div>
								<hr class="hr" />
								<div class="input-group mb-3">
									<input
									type="text"
									oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
									class="form-control"
									maxlength="11"
									placeholder="T.C."
									name="tc"
									aria-label="Username"
									aria-describedby="basic-addon1"
									/>
								</div>
								<hr class="hr" />
								<label for="basic-url" class="form-label">Arıza Bildirimi Konumu</label>
								<div class="input-group mb-3">
									<div class="k-w-300" id="location">
										<div class="form-group" id="firstLocation">
											<label for="locationCategory">Kategori:</label>
											<select id="locationCategory" name="locationCategory">
												<option selected disabled></option>
											</select>
										</div>
									</div>
								</div>
								<hr class="hr" />
								<div data-mdb-input-init class="form-outline">
									<textarea class="form-control" id="details" name="details" rows="4"></textarea>
									<label class="form-label" for="textAreaExample">Mesaj</label>
								</div>
								<hr class="hr" />
								<div class="row justify-content-left">
									<div class="col-md-6 d-flex text-wrap">
										<label for="id_start_datetime">Arıza Tarihi:</label>
										<div class="input-group date" id="id_0">
											<input type="text" name="arizaTarih" value="<?=date("dmY")?>" class="form-control" required/>
											<div class="input-group-addon input-group-append">
												<div class="input-group-text">
													<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 d-flex text-wrap">
										
										<label for="id_start_datetime">Arıza Saati:</label>
										<div class="input-group date" id="id_3">
											<input type="text" name="arizaSaat" value="<?=date("h:i:sa")?>" class="form-control" required/>
											<div class="input-group-addon input-group-append">
												<div class="input-group-text">
													<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
												</div>
											</div>
										</div>
									</div>
									
									
								</div>
							</div>
						</div>
						<hr class="hr" />
						<div class="row">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary btn-lg" data-mdb-ripple-init>Gönder</button>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					
					
					<h1>MEÜ. BİDB Teknik Servis Talep Formu</h1>
					
					<div class="form-container">
						<form class="repairRequestForm" id="donanim" method="post">
							<input type="hidden" name="arizaTuru" value="donanim"/>
							<div class="table-wrapper">
								<table class="form-table">
									<tr>
										<th>Kampus/Yerleşke</th>
										<td>
											<select name="kampus" id="kampus">
												<option value="">Seçiniz</option>
												<option value="Anamur">Anamur</option>
												<option value="Mersin">Mersin</option>
												<option value="Erdemli">Erdemli</option>
												<option value="Tarsus">Tarsus</option>
												<option value="Yenişehir">Yenişehir</option>
												<option value="Mut">Mut</option>
												<option value="Gülnar">Gülnar</option>
											</select>
										</td>
										<th>Fakülte/YO/MYO</th>
										<td>
											<input type="text" class="form-control" name="fakulte" id="fakulte" size="50"></td>
										</td>
									</tr>
									<tr>
										<th>Bölüm/Birim</th>
										<td><input type="text" class="form-control" name="bolum" size="50"></td>
										<th>Ofis No</th>
										<td><input type="text" class="form-control" name="ofis" size="5"></td>
									</tr>
									<tr>
										<th>TC Kimlik No</th>
										<td><input type="text"
											oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');"
											class="form-control"
											maxlength="11"
										placeholder="T.C." name="tc" size="11"></td>
										<th>E-Posta</th>
										<td><input
											type="text"
											class="form-control"
											id="email_"
											name="email"
											placeholder="Mail Adresiniz"
											aria-label="Mail Adresiniz"
											aria-describedby="basic-addon2"
											/>
										</td>
									</tr>
									<tr>
										<th>Demirbaş Numarası</th>
										<td><input type="text" class="form-control" name="demirbas" size="20"></td>
										<th>Mühür No</th>
										<td><input type="text" class="form-control" name="muhur" size="10"></td>
									</tr>
									<tr>
										<th>Kullanım Durumu</th>
										<td>
											<select name="kullanim" id="kullanim">
												<option value="">Seçiniz</option>
												<option value="Bireysel">Bireysel</option>
												<option value="Ortak Kullanım">Ortak Kullanım</option>
												<option value="Laboratuvar">Laboratuvar</option>
												<option value="Diğer">Diğer</option>
											</select>
										</td>
										<th>Bilgisayar Türü</th>
										<td>
											<select name="bilgisayar_turu" id="bilgisayar_turu">
												<option value="">Seçiniz</option>
												<option value="Masaüstü">Masaüstü</option>
												<option value="Dizüstü/Laptop">Dizüstü / Laptop</option>
												<option value="Diğer">Diğer</option>
											</select>
										</td>
									</tr>
								</table>
							</div>
							
							<div class="section">
								<table class="additional-table" id="yazilimlar-table">
									<tr>
										<th colspan="3" style="text-align: center;">DONANIM BİRİMİ TARAFINDAN KURULAN YAZILIMLARIN LİSTESİ</th>
									</tr>
									<tr>
										<th colspan="3">Üniversitenin Yüklediği Yazılımlar ve Lisans Türü</th>
									</tr>
									<tr>
										<td colspan="3" class="university-software"></td>
									</tr>
									<tr>
										<th>Lisans Türü</th>
										<th>İşletim Sistemi</th>
									</tr>
									<tr>
										<td>
											<select name="lisans_turu" id="lisans_turu"> 
												<option value="">Seçiniz</option>
												<option value="Kampus Anlaşması">Kampus Anlaşması</option>
												<option value="Üniversite lisansı">Üniversite lisansı</option>
											</select>
										</td>
										<td>
											<select name="isletim_sistemi" id="isletim_sistemi">
												<option value="">Seçiniz</option>
												<option value="Windows">Windows</option>
												<option value="Linux">Linux</option>
												<option value="MacOS">MacOS</option>
											</select>
										</td>
									</tr>
									<tr>
										<th colspan="3">Kullanıcının Sahip Olduğu Yazılımlar ve Lisans Türü</th>
									</tr>
									<tr>
										<td colspan="3">
											<textarea name="kullanici_yazilimlari" rows="4" placeholder="Kullanıcının Sahip Olduğu Yazılımlar"></textarea>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="additional-info">
											<p>
												Bilgi İşlem Daire Başkanlığının Bilgisayarı koruma altına almak için
												koyduğu şifreyi kaldırmak istiyorum. Bundan sonra eklenecek
												yazılımlar kendi sorumluluğumdadır. Şifresiz olarak teslim aldığım
												bilgisayarın, bütün yasal mevzuatlardan doğacak ihtilaflardan
												cezai ve hukuki sorumluluğunun şahsıma ait olduğunu kabul ediyorum.
											</p>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="underline"></td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="checkbox" name="sifre_kaldirma" id="sifre_kaldirma">
											<label for="sifre_kaldirma">Bilgisayar Şifresinin Kaldırılmasını İstiyorum</label>
										</td>
									</tr>
								</table>
							</div>
							
							<div class="button-row">
								<p>* Bütün yazılımlar, 5846 Sayılı Fikir ve Sanat Eserleri Kanunu ile 16 Temmuz 2008 tarihli ve 26938 sayılı Resmi
								Gazetede yayınlanan "Lisanslı Yazılım Kullanılması" açıklayan Genelgede belirtildiği gibi korunma altındadır.</p>
							</div>
							<div class="section">
								<table class="additional-table" id="ariza-bildirimi-table">
									<tr>
										<th colspan="2" style="text-align: center;">KULLANICI ARIZA BİLDİRİMİ</th>
									</tr>
									<tr>
										<th colspan="2">Donanımsal Arıza Açıklaması</th>
									</tr>
									<tr>
										<td colspan="2">
											<textarea name="donanimsal_ariza_aciklama" id="donanimsal_ariza_aciklama" rows="4" placeholder="Donanımsal Arıza Açıklaması"></textarea>
										</td>
									</tr>
									<tr>
										<th colspan="2">Yazılımsal Arıza Açıklaması</th>
									</tr>
									<tr>
										<td colspan="2">
											<textarea name="yazilimsal_ariza_aciklama" id="yazilimsal_ariza_aciklama" rows="4" placeholder="Yazılımsal Arıza Açıklaması"></textarea>
										</td>
									</tr>
								</table>
							</div>
							<div class="section">
								<p style="text-decoration: underline;">
									<strong>Mersin Üniversitesi</strong> Kullanıcısı Olarak; Bilgisayarımdaki bütün yedeklerimi aldım. Bilgisayarın formatlanmasında(sıfırlanmasında) herhangi bir veri kaybolduğunda sorumluluğu kabul ediyorum. Bilgisayardaki Bilişim Teknolojilerini kapsayan yazılım ve kullanımda yasa, yönetmelik, genelge, mevzuat, yönerge ve politikalar ile ilgili bütün sorumlulukları daha sonra hiçbir itiraza mahal vermeyecek şekilde <strong>KABUL ve TAAHHÜT EDİYORUM.</strong>
								</p>
								<hr class="hr" />
								<div class="row">
									<div class="col-md-12 text-center">
										<button type="submit" class="btn btn-primary btn-lg" data-mdb-ripple-init>Gönder</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<script src="./js/jquery-3.7.1.min.js"></script>
	<script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="./js/popper.min.js"></script>
	<script src="./js/kendo.all.min.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="./js/moment-with-locales.min.js"></script>
	<!-- <script src="bootstrap-datepicker.tr.min.js" charset="UTF-8"></script> -->
	<script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>
	<!-- MDB -->
	<script type="text/javascript" src="./js/mdb.umd.min.js"></script>
	<script>
		(function($){
			$(function(){
				$('#id_0').datetimepicker({
					"locale": 'tr',
					"allowInputToggle": true,
					"showClose": true,
					"showClear": true,
					"showTodayButton": true,
					"format": "DD/MM/YYYY",
				});
				$('#id_3').datetimepicker({
					"locale": 'tr',
					"allowInputToggle": true,
					"showClose": true,
					"showClear": true,
					"showTodayButton": true,
					"format": "HH:mm:ss",
				});
			});
		})(jQuery);
		
		var formtoPostName = 'network';
		function changeForm(formname) {
			formtoPostName = formname;
			console.log(formtoPostName);
		}
					
		$(document).ready(function() {
			
			$("#locationCategory").kendoDropDownList();
			var ddl = $("#locationCategory").data("kendoDropDownList");
			ddl.dataSource.add({
				"text": 'Seçiniz!', 
			"value": ''});
			
			var fakulteMi = false;
			
			$.get('./back.php', { unit: true }, function(response) {
				response.forEach(function(faculty) {
					var ddl = $("#locationCategory").data("kendoDropDownList");
					ddl.dataSource.add({
						"text": faculty.name, 
						"value": faculty.id});
				});
			});
			
			
			$('#email').focusout( function ( event ) {
				var ValidationExpression = /^\w+([-+.']\w+)*@mersin.edu.tr$/;
				var result = ValidationExpression.test(this.value);
				//$(event.target).css("color", "white");
				if( result ) {
					//$(event.target).css("background-color", "green");
					//$(event.target).css("color", "white");
					$(event.target).css("background-color","");
				}
				else {
					$(event.target).css("background-color", "red");
				}
			});
			$('#email_').focusout( function ( event ) {
							var ValidationExpression = /^\w+([-+.']\w+)*@mersin.edu.tr$/;
							var result = ValidationExpression.test(this.value);
							//$(event.target).css("color", "white");
							if( result ) {
								//$(event.target).css("background-color", "green");
								//$(event.target).css("color", "white");
								$(event.target).css("background-color","");
							}
							else {
								$(event.target).css("background-color", "red");
							}
						});
			
			$(function () {
				$("#email").keypress(function (e) {
					var keyCode = e.keyCode || e.which;
					
					$("#lblError").html("");
					
					//Regex for Valid Characters i.e. Alphabets and Numbers.
					var regex = /^[A-Za-z0-9]+$/;
					
					//Validate TextBox value against the Regex.
					var isValid = regex.test(String.fromCharCode(keyCode));
					
					return isValid;
				});
			});
			$(function () {
							$("#email_").keypress(function (e) {
								var keyCode = e.keyCode || e.which;
								
								$("#lblError").html("");
								
								//Regex for Valid Characters i.e. Alphabets and Numbers.
								var regex = /^[A-Za-z0-9]+$/;
								
								//Validate TextBox value against the Regex.
								var isValid = regex.test(String.fromCharCode(keyCode));
								
								return isValid;
							});
						});
			
			
			$("#email").click(function (e) {
				const end = $("#email").val().length - 14;
				
				$("#email").get(0).setSelectionRange(end, end);
				$("#email").get(0).focus();
			});
			$("#email_").click(function (e) {
							const end = $("#email_").val().length - 14;
							
							$("#email_").get(0).setSelectionRange(end, end);
							$("#email_").get(0).focus();
						});
						
			(function($) {
				$.fn.setCursorPosition = function(pos) {
					if ($(this).get(0).setSelectionRange) {
						$(this).get(0).setSelectionRange(pos, pos);
						} else if ($(this).get(0).createTextRange) {
						var range = $(this).get(0).createTextRange();
						range.collapse(true);
						range.moveEnd('character', pos);
						range.moveStart('character', pos);
						range.select();
					}
				}
			}(jQuery));
			
			$("#email").keyup(function(){
				
				var value = this.value.substr(0, this.value.indexOf("@") + 2 );
				var values = value.split('@');
				keyedvalue = values[0][ values[0].length - 1 ];
				
				if ($(this).val().slice(-14) !== '@mersin.edu.tr' ) {
					$(this).val($(this).val() + "@mersin.edu.tr");
					$(this).setCursorPosition( $(this).val().length - 14)
				}
			});
			$("#email_").keyup(function(){
							
							var value = this.value.substr(0, this.value.indexOf("@") + 2 );
							var values = value.split('@');
							keyedvalue = values[0][ values[0].length - 1 ];
							
							if ($(this).val().slice(-14) !== '@mersin.edu.tr' ) {
								$(this).val($(this).val() + "@mersin.edu.tr");
								$(this).setCursorPosition( $(this).val().length - 14)
							}
						});
			
			$('#locationCategory').change(function() {
				$('#thirdLocation').remove();
				$('#secondLocation').remove();
				$('#forthLocation').remove();
				//let secondLocation = $('#firstLocation').clone( );
				let secondLocation = document.createElement('div');
				secondLocation.setAttribute('id', 'secondLocation');
				secondLocation.setAttribute('class', 'form-group');
				let label = document.createElement('label');
				let select = document.createElement('select');
				label.setAttribute( 'for', 'subLocation' );
				select.setAttribute( 'id', 'subLocation' );
				select.setAttribute( 'name', 'subLocation' );
				label.innerHTML = $(this).find(":selected").text() + ' Bölüm Seçiniz';
				document.getElementById('location').appendChild( secondLocation  );
				document.getElementById('secondLocation').appendChild( label );
				document.getElementById('secondLocation').appendChild( select );
				
				//console.log(secondLocation);
				//secondLocation.insertAfter( $('#firstLocation') );
				
				
				
				
				
				
				
				//$(this).after( secondLocation );
				var facultyId = $(this).val();
				//console.log(facultyId);
				
				var data = [
				{ name: "Seçiniz!", id: "" }
				];                 
				$("#subLocation").kendoDropDownList({
					//filter: "startswith",
					dataTextField: "name",
					dataValueField: "id",
					dataSource: data
				});
				
				var widget = $("#subLocation").getKendoDropDownList();
				var dataSource = widget.dataSource;
				
				$.get('./back.php', { unit: facultyId }, function(response) {
					response.subCategory.forEach(function(subCategory) {
						//$('#sub3Location').append('<option value="' + subCategory.id + '">' + subCategory.name + '</option>');
						dataSource.add({
							name: subCategory.name,
							id: subCategory.id
						});
					});
					
				});
				
				dataSource.one("sync", function() {
					widget.select(dataSource.view().length - 1);
				});
				
				dataSource.sync();
				
				$('#subLocation').change(function() {
					$('#thirdLocation').remove();
					$('#forthLocation').remove();
					var facultyId = $(this).val();
					var isfaculty;
					var willadd = true;
					//console.log( facultyId );
					if ( facultyId.slice(0,1) == '1' && facultyId.substr(-1) == '1' ) { isfaculty = { "faculty" : true }; fakulteMi = true; }
					else if( facultyId.slice(0,1) == '1' && facultyId.substr(-1) == '2' ) { isfaculty = { "instituteData" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '1' && facultyId.substr(-1) == '3' ) { isfaculty = { "highSchoolData" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '1' && facultyId.substr(-1) == '4' ) { isfaculty = { "vocationalSchoolData" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '1' && facultyId.substr(-1) == '5' ) { isfaculty = { "attachedtoRectorshipData" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '2' && facultyId.substr(-1) == '1' ) { isfaculty = { "rektorlukbirim" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '2' && facultyId.substr(-1) == '2' ) { isfaculty = { "headofDepartments" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '2' && facultyId.substr(-1) == '3' ) { isfaculty = { "otherManagingUnits" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '2' && facultyId.substr(-1) == '4' ) { isfaculty = { "managementsManagingData" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '2' && facultyId.substr(-1) == '5' ) { isfaculty = { "coordinatorshipManagingData" : true }; fakulteMi = false; }
					else if( facultyId.slice(0,1) == '2' && facultyId.substr(-1) == '6' ) { isfaculty = { "committeeManagingData" : true }; fakulteMi = false; }
					else {
						isfaculty = {};
						fakulteMi = false;
						willadd = false;
					}
					if( willadd ) {
						let thirdLocation = document.createElement('div');
						thirdLocation.setAttribute('id', 'thirdLocation');
						thirdLocation.setAttribute('class', 'form-group');
						let label = document.createElement('label');
						let select = document.createElement('select');
						label.setAttribute( 'for', 'sub2Location' );
						select.setAttribute( 'id', 'sub2Location' );
						select.setAttribute( 'name', 'sub2Location' );
						label.innerHTML = $(this).find(":selected").text() + ' Seçiniz';
						
						document.getElementById('location').appendChild( thirdLocation  );
						document.getElementById('thirdLocation').appendChild( label );
						document.getElementById('thirdLocation').appendChild( select );
						//thirdLocation.insertAfter( $('#secondLocation') );
						
						var data = [
						{ name: "Seçiniz!", id: "" }
						];                 
						$("#sub2Location").kendoDropDownList({
							filter: "startswith",
							dataTextField: "name",
							dataValueField: "id",
							dataSource: data
						});
						var widget = $("#sub2Location").getKendoDropDownList();
						var dataSource = widget.dataSource;
						
						//console.log(isfaculty );
						//var sub2Location = $("#sub2Location").kendoDropDownList();
						// $('#sub2Location').append('<option selected disabled>Seçiniz</option>');
						$.get('./back.php', isfaculty, function(response) {
							
							response.forEach(function(subCategory) {
								//$('#sub3Location').append('<option value="' + subCategory.id + '">' + subCategory.name + '</option>');
								
								dataSource.add({
									name: subCategory.name,
									id: subCategory.id
								});
							});
						});
						
						dataSource.one("sync", function() {
							widget.select(dataSource.view().length - 1);
						});
						
						dataSource.sync();
						
						$('#sub2Location').change(function() {
							$('#forthLocation').remove();
							//console.log(fakulteMi)
							if( fakulteMi ) {
								
								let forthLocation = document.createElement('div');
								forthLocation.setAttribute('id', 'forthLocation');
								forthLocation.setAttribute('class', 'form-group');
								let label = document.createElement('label');
								let select = document.createElement('select');
								label.setAttribute( 'for', 'sub3Location' );
								select.setAttribute( 'id', 'sub3Location' );
								select.setAttribute( 'name', 'sub3Location' );
								label.innerHTML = $(this).find(":selected").text() + ' Seçiniz';
								
								document.getElementById('location').appendChild( forthLocation  );
								document.getElementById('forthLocation').appendChild( label );
								document.getElementById('forthLocation').appendChild( select );
								
								//forthLocation.insertAfter( $('#thirdLocation') );
								
								var facultyId = $(this).val();
								//if ( facultyId.slice(0,1) == '1' && facultyId.substr(-1) == '1' ) { isfaculty = { "faculty" : facultyId } }
								//else if( facultyId.slice(0,1) == '2' ) { isfaculty = { "idari" : facultyId } }
								//else isfaculty = {};
								var faculty = { "faculty" : facultyId };
								//console.log("idari birimler sub4- " + facultyId );
								//console.log(isfaculty );
								var sub2Location = $("#sub3Location").kendoDropDownList();
								//$('#sub3Location').append('<option selected disabled>Seçiniz</option>');
								$.get('./back.php', faculty, function(response) {
									$("#sub3Location").kendoDropDownList({
										dataTextField: "name",
										dataValueField: "id",
										dataSource: response.subCategory
									});//console.log(response);
									/*response.subCategory.forEach(function(subCategory) {
										$('#sub3Location').append('<option value="' + subCategory.id + '">' + subCategory.name + '</option>');
									});*/
								});
							}
						});
					}
				});
			});
			
			// form submit with file upload
						$('.repairRequestForm').submit(function(e) {
							e.preventDefault();
							const form = document.getElementById(formtoPostName);
							
							var formData = new FormData(form);
							
							
							// add image files to the form data
							/*var imageFiles = $('#imageUpload')[0].files;
								for (var i = 0; i < imageFiles.length; i++) {
								formData.append('imageUpload[]', imageFiles[i]);
							}*/
							//console.log( $('#locationCategory').find(":selected").val() );
							var hata = 0;
							if( formtoPostName == 'network' ) {
								if(  $('#locationCategory').find(":selected").val() == '' || $('#subLocation').find(":selected").val() == '' || $('#sub2Location').find(":selected").val() == '' || $('#details').val() == '' || (!document.getElementsByName("talep")[0].checked && !document.getElementsByName("talep")[1].checked ) ) {
									Swal.fire({
										icon: "info",
										title: "Tüm Alanları Doldurunuz...",
										confirmButtonText: "Tamam"
									});
									hata = 1;
								}
								else if( $('#sub3Location').find(":selected").val() == 'Seçiniz' ) {
									Swal.fire({
										icon: "info",
										title: "Tüm Alanları Doldurunuz...",
										confirmButtonText: "Tamam"
									});
									hata = 1;
								}
								else {
									for (var i = 0; i < 2; i++) {
										if( document.getElementsByName("talep")[i].checked )
										formData.append('talep'+i, document.getElementsByName("talep")[i].value);
									}
								}
							}
							else if( formtoPostName == 'donanim' ) {
								if(  $('#kampus').find(":selected").val() == '' || $('#lisans_turu').find(":selected").val() == '' || $('#isletim_turu').find(":selected").val() == '' || $('#fakulte').val() == '' || $('#bolum').val() == '' || $('#ofis').val() == '' || $('#kullanim').find(":selected").val() == '' || $('#bilgisayar_turu').find(":selected").val() == '' || document.getElementsByName("demirbas")[0].value == '' || document.getElementsByName("muhur")[0].value == '' ) {
									if( document.getElementsByName("donanimsal_ariza_aciklama")[0].value == '' && document.getElementsByName("yazilimsal_ariza_aciklama")[0].value == '' ) {
										Swal.fire({
											icon: "info",
											title: "Tüm Alanları Doldurunuz...",
											confirmButtonText: "Tamam"
										});
										hata = 1;
									}
								}
								else {
									if( document.getElementsByName("donanimsal_ariza_aciklama")[0].value != '' || document.getElementsByName("yazilimsal_ariza_aciklama")[0].value != '' ) {
										for (var i = 0; i < 2; i++) {
											if( document.getElementsByName("talep")[i].checked )
											formData.append('talep'+i, document.getElementsByName("talep")[i].value);
										}
									}
									else {
										Swal.fire({
											icon: "info",
											title: "Tüm Alanları Doldurunuz...",
											confirmButtonText: "Tamam"
										});
										hata = 1;
									}
								}
							}
							
							
							if( hata == 0 ){
								
								//console.log($( this ).serializeArray());
								$.ajax({
									url: './back.php?repairRequest=true',
									type: 'POST',
									data: formData,
									statusCode: {  
										404: function() {  
											/*implementation for HTTP Status 404 (Not Found) goes here */
											console.log( "not found" );
										},
										401: function() {  
											/*implementation for HTTP Status 401 (Unauthorized) goes here */
											console.log( "401" );
										} 
									},
									async: false,
									success: function(response) {
										Swal.fire({
											icon: response.status,
											title: response.message,
											confirmButtonText: "Tamam"
											}).then(function(isConfirm ) {
											if (isConfirm && response.status == 'success') {
												let timerInterval;
												Swal.fire({
													title: "Otomatik Kapanacaktır",
													html: "<b></b> Saniye içinde yönlendiriliyor.",
													timer: 2000,
													timerProgressBar: true,
													didOpen: () => {
														Swal.showLoading();
														const timer = Swal.getPopup().querySelector("b");
														timerInterval = setInterval(() => {
															timer.textContent = ${Swal.getTimerLeft()};
														}, 100);
													},
													willClose: () => {
														clearInterval(timerInterval);
													}
													}).then((result) => {
													document.getElementsByClassName("repairRequestForm")[0].reset();
													document.getElementsByClassName("repairRequestForm")[1].reset();
													/* Read more about handling dismissals below */
													window.location.href  = "http://mersin.edu.tr";
												});
											}
										});
									},
									error: function(response) {
										Swal.fire({
											icon: "error",
											title: response.message,
											confirmButtonText: "Tamam"
										});
									},
									cache: false,
									contentType: false,
									processData: false
								});
							}
						});
		});
	</script>
	</body>
</html>