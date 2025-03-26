<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MEÜ BIDB Yazılım Geliştirme Talep Formu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      padding: 40px 20px;
      background-color: #f8f9fa;
    }
    
    .table-bordered th, .table-bordered td {
      border: 1px solid #ddd;
    }
    .header {
      background-color: #f0f0f0;
      text-align: center;
      font-weight: bold;
    }
    .grey-bg {
      background-color: #f0f0f0 !important;
    }
    .form-container {
      max-width: 1000px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    table input, table select {
      width: 100%;
    }
  </style>
</head>
<body>





  <div class="form-container">
  <div class="text-center">
    <!--sağ logo-->
    <img src="imgs/k-q-tse-iso-en-9000-logo.png" alt="ISO Logo" width="100" class="float-end">
    <!--sol logo -->
    <img src="meu_logo.svg" alt="MEÜ Logo" width="100" class="float-start">
    <!-- Başlık -->
    <div class="d-flex align-items-center mb-3">
    <div class="text-center d-flex flex-column align-items-center w-100">
    <h5 class="fw-bold mb-2">T.C.</h5>
    <h5 class="fw-bold mb-2">MERSİN ÜNİVERSİTESİ</h5>
    <h6 class="fw-bold mb-2">Bilgi İşlem Daire Başkanlığı</h6>
  

</div>

      
    
</div>

    
</div>

<ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="home-tab" data-bs-toggle="tab" onclick="changeForm('network')" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Ağ Hizmetleri Arıza ve Talep Formu</h3></button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="profile-tab" onclick="changeForm('donanim')" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Donanım Arıza ve Talep Formu</h3></button>
						</li>
						<li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" onclick="changeForm('donanim')" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Donanım Arıza ve Talep Formu</h3></button>          
            </li>           
					</ul>

    <h4 class="text-center mb-3">MEÜ BIDB YAZILIM GELİŞTİRME TALEP FORMU</h4>

    <table class="table table-bordered">
      <tr>
        <td class="grey-bg">Kampüs / Yerleşke</td>
        <td>
          <select class="form-select">
            <option selected disabled>Seçiniz</option>
            <option>Anamur</option>
            <option>Mersin</option>
            <option>Erdemli</option>
            <option>Tarsus</option>
            <option>Yenişehir</option>
            <option>Mut</option>
            <option>Gülnar</option>
          </select>
        </td>
        <td class="grey-bg">Fakülte / YO / MYO</td>
        <td>
          <div class="row g-2">
            <div class="col">
              <select class="form-select" id="birimTipi" onchange="guncelleAltBirim()">
                <option selected disabled>Seçiniz</option>
                <option value="fakulte">Fakülte</option>
                <option value="yo">Yüksekokul</option>
                <option value="myo">Meslek Yüksekokulu</option>
              </select>
            </div>
            <div class="col" id="altBirimContainer" style="display: none;">
              <select class="form-select" id="altBirim">
                <!-- Dinamik olarak doldurulacak -->
              </select>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="grey-bg">Bölüm / Birim</td>
        <td><input type="text" class="form-control" /></td>
        <td class="grey-bg">Sorumlu Adı Soyadı</td>
        <td><input type="text" class="form-control" /></td>
      </tr>
      <tr>
        <td class="grey-bg">Cep Telefonu</td>
        <td><input type="text" class="form-control" placeholder="(   )         " /></td>
        <td class="grey-bg">E-Posta</td>
        <td><input type="text" class="form-control" value="@mersin.edu.tr" /></td>
      </tr>
    </table>

    <h5 class="header p-2">TALEP EDİLEN YAZILIMLA İLGİLİ BİLGİLER</h5>
    <table class="table table-bordered">
      <tr>
        <td class="grey-bg">Talep Türü</td>
        <td colspan="3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="yeniYazilim" value="Yeni Yazılım">
            <label class="form-check-label" for="yeniYazilim">Yeni Yazılım</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ilaveDegisiklik" value="İlave / Değişiklik">
            <label class="form-check-label" for="ilaveDegisiklik">Mevcut yazılıma ilave / değişiklik</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="diger" value="Diğer">
            <label class="form-check-label" for="diger">Diğer</label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="grey-bg">Planlanan Tarih</td>
        <td colspan="3"><input type="date" class="form-control"></td>
      </tr>
    </table>

    <h5 class="header p-2 mt-4">Mevcut BIDB Yazılımları</h5>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox"> Web Sayfası Otomasyonu<br>
        <input type="checkbox"> Faaliyet Bilgi Sistemi (FBS)<br>
        <input type="checkbox"> Kurumsal İç Değerlendirme Bilgi Sistemi (KIDBIS)<br>
        <input type="checkbox"> Toplantı Bilgi Sistemi (TBS)<br>
        <input type="checkbox"> Kartlı Geçiş Sistemi (KGS)<br>
        <input type="checkbox"> Destek Sistemi (Ticket)<br>
        <input type="checkbox"> Lisans Tanımlama Sistemi<br>
        <input type="checkbox"> Bilişim Malzeme Talep Sistemi<br>
        <input type="checkbox"> VDIP Sunucusu<br>
        <input type="checkbox"> Kalite Yönetim Sistemi<br>
        <input type="checkbox"> Denizcilik Kalite Yönetim Sistemi<br>
        <input type="checkbox"> İş Sağlığı ve Güvenliği Eğitim Otomasyonu (MİSAM)<br>
        <input type="checkbox"> MEİTAM Stok Takip Programı<br>
        <input type="checkbox"> İş Takip Programı<br>
        <input type="checkbox"> İşçi Maaş Programı<br>
      </div>
      <div class="col-md-6">
        <input type="checkbox"> Analitik Harcama Programı<br>
        <input type="checkbox"> Adres Etiket Programı<br>
        <input type="checkbox"> İşkur İşçi Maaş Programı<br>
        <input type="checkbox"> Kitap Satış Sistemi<br>
        <input type="checkbox"> Mail Sistemi<br>
        <input type="checkbox"> Sticker Takip Programı<br>
        <input type="checkbox"> Araç Bilgi Sistemi<br>
        <input type="checkbox"> Fotokopi/Yazıcı Takip Programı<br>
        <input type="checkbox"> İMİD Taşınır ve Depo Yönetim Sistemi<br>
        <input type="checkbox"> ÖYP Bütçe ve Harcama Takip Programı<br>
        <input type="checkbox"> Güzel Sanatlar ve Takı Online Başvuru<br>
        <input type="checkbox"> Takı Teknoloji Sınav Programı<br>
        <input type="checkbox"> Güzel Sanatlar Sınav Programı<br>
        <input type="checkbox"> Beden Eğitimi Giriş Sınavı<br>
      </div>
    </div>

    <h5 class="header p-2 mt-4">Mevcut BAUM Yazılımları</h5>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox"> Akademik Personel Bilgi Sistemi (APBS)<br>
        <input type="checkbox"> Bilimsel Araştırma Projeleri Sistemi (BAP)<br>
        <input type="checkbox"> Bilimsel Etkinlikleri Araştırma Projeleri Sistemi (BEDS)<br>
        <input type="checkbox"> Kadro Talep Sistemi<br>
        <input type="checkbox"> Kontenjan Bilgi Sistemi<br>
        <input type="checkbox"> Enstitü Süreç Takip Sistemi<br>
        <input type="checkbox"> İdari Personel Bilgi Sistemi<br>
      </div>
      <div class="col-md-6">
        <input type="checkbox"> Dinamik Web Portalı (www.mersin.edu.tr)<br>
        <input type="checkbox"> Mersin Üniversitesi Web Portalı<br>
        <input type="checkbox"> Mersin Üniversitesi Hastanesi Web Portalı<br>
        <input type="checkbox"> Mersin Üniversitesi Tanıtım Portalı<br>
        <input type="checkbox"> Uluslararası Öğrenci Ofisi<br>
        <input type="checkbox"> Akademik Metin Dil Destek Birimi<br>
        <input type="checkbox"> Bilimsel Etkinliklere Katılım Desteği (BEKAP)<br>
      </div>
    </div>

    <h5 class="header p-2 mt-4" style="font-size: 16px;">
      Yazılımda istediğiniz özellik veya değişiklikleri aşağıda nedenleriyle beraber detaylı olarak belirtiniz.
    </h5>
    <div class="mb-3">
      <textarea class="form-control" rows="5"></textarea>
    </div>
  </div>

  <script>
    function guncelleAltBirim() {
      const secim = document.getElementById("birimTipi").value;
      const altBirimContainer = document.getElementById("altBirimContainer");
      const altBirim = document.getElementById("altBirim");

      altBirim.innerHTML = "";

      if (secim === "fakulte") {
        altBirim.innerHTML = `
          <option selected disabled>Fakülte Seçiniz</option>
          <option>Denizcilik Fakültesi</option>
          <option>Diş Hekimliği Fakültesi</option>
          <option>Eczacılık Fakültesi</option>
          <option>Eğitim Fakültesi</option>
          <option>Fen Fakültesi</option>
          <option>Güzel Sanatlar Fakültesi</option>
          <option>Hemşirelik Fakültesi</option>
          <option>İktisadi ve İdari Bilimler Fakültesi</option>
          <option>İlahiyat Fakültesi</option>
          <option>İletişim Fakültesi</option>
          <option>İnsan ve Toplum Bilimleri Fakültesi</option>
          <option>Mimarlık Fakültesi</option>
          <option>Mühendislik Fakültesi</option>
          <option>Müzik ve Sahne Sanatları Fakültesi</option>
          <option>Sağlık Bilimleri Fakültesi</option>
          <option>Spor Bilimleri Fakültesi</option>
          <option>Su Ürünleri Fakültesi</option>
          <option>Tıp Fakültesi</option>
          <option>Turizm Fakültesi</option>
          
        `;
        altBirimContainer.style.display = "block";
      } else if (secim === "yo") {
        altBirim.innerHTML = `
          <option selected disabled>Yüksekokul Seçiniz</option>
          <option>Anamur Uygulamalı Teknoloji ve İşletmecilik Yüksekokulu</option>
          <option> Devlet Konservatuvarı</option>
          <option> Erdemli Uygulamalı Teknoloji ve İşletmecilik Yüksekokulu</option>
          <option> Silifke Uygulamalı Teknoloji ve İşletmecilik Yüksekokulu</option>
          <option> Takı Teknolojisi ve Tasarımı Yüksekokulu</option>
          <option> Yabancı DillerYüksekokulu</option>
        `;
        altBirimContainer.style.display = "block";
      } else if (secim === "myo") {
        altBirim.innerHTML = `
          <option selected disabled>MYO Seçiniz</option>
          <option>Anamur MYO</option>
          <option>Aydıncık MYO</option>
          <option>Denizcilik MYO</option>
          <option>Erdemli MYO</option>
          <option>Gülnar Mustafa Baysal MYO</option>
          <option>Mersin MYO</option>
          <option>Mut MYO</option>
          <option>Sağlık Hizmetleri MYO</option>
          <option>Silifke MYO</option>
          <option>Sosyal Bilimler MYO</option>
          <option>Teknik Bilimler MYO</option>
        `;
        altBirimContainer.style.display = "block";
      } else {
        altBirimContainer.style.display = "none";
      }
    }
  </script>
</body>
</html>