<!-- Gerekli dosyaları çağır. -->
<?php require_once('getir.php'); ?>

<!-- id bilgisine göre ilgili notu getiren sorgu çalıştır. -->
<?php
   $id = $_GET['id'];
   $sql ="SELECT * FROM icerik WHERE id=$id";
   $sonuc = $db->query($sql);
   $kayit = $sonuc->fetchArray(SQLITE3_ASSOC);
?>

<?php
   $title = "İçerik Düzenle" . $kisaltma;
   require_once('header.php');
?>

<div class="container">
   <div class="row">
      <div class="col">
         <!-- Form Alanı Başlangıç -->
         <form action="icerik-guncelle.php" method="post">
         
            <!-- Üst Başlık Ve Yönlendirme -->
            <h1 class="page-title text-dark">
               <?php echo $title; ?>
               <div class="btn-group float-right" role="group" aria-label="Kayıt Ve Görüntüleme">
                  <!-- <button class="btn btn-dark float-right">Kaydet</button> -->
                  <!-- <a href="icerik-goruntule.php?id=<?php //echo $id; ?>" target="_blank" class="btn btn-warning float-right mr-1">⌖</a> -->
               </div>
            </h1>
            
            <!-- id Bilgisi -->
            <input type="hidden" name="id" value="<?php echo $kayit['id']; ?>">


            <!-- Hızlı Menü -->
            <?php require_once("kalip/element-listesi-standart.php"); ?><br>
            <?php require_once("kalip/element-listesi-ozel.php"); ?><hr>


            <div class="row">
               <div class="col-lg-9">
                  <!-- Başlık -->
                  <div class="form-group">
                     <input id="baslik" type="text" class="form-control text-monospace bg-gri mb-1" name="baslik" placeholder="Başlık" value="<?php echo htmlspecialchars($kayit['baslik']); ?>" onblur="baglantiMetniniYazdir();">
                     <!-- Baglanti -->
                     <input id="baglanti" type="text" class="form-control bg-gri textarea-fokus mb-1" name="baglanti" placeholder="Bağlantı" value="<?php echo $kayit['baglanti']; ?>">
                  </div>

                  <!-- İçerik Tab Alanı -->
                  <ul class="nav nav-tabs bg-gri" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="icerik-html-tab-baslik" data-toggle="tab" href="#icerik-html-tab-alan" role="tab" aria-controls="icerik-html" aria-selected="true">İçerik (HTML)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="icerik-sade-tab-baslik" data-toggle="tab" href="#icerik-sade-tab-alan" role="tab" aria-controls="icerik-sade" aria-selected="false">İçerik (Sade)</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="icerik-html-tab-alan" role="tabpanel" aria-labelledby="icerik-html-tab">
                     <!-- İçerik HTML -->
                     <div class="form-group">
                        <textarea class="form-control text-monospace bg-gri textarea-fokus" name="icerik-html" placeholder="İçerik (HTML)" id="icerik-html" rows="30"><?php echo htmlspecialchars($kayit['icerik_html'], ENT_SUBSTITUTE); ?></textarea>
                     </div>
                    </div>
                    <div class="tab-pane fade" id="icerik-sade-tab-alan" role="tabpanel" aria-labelledby="icerik-sade-tab">
                     <!-- İçerik Sade -->
                     <div class="form-group">
                        <textarea class="form-control text-monospace bg-gri textarea-fokus" name="icerik-sade" placeholder="İçerik (Sade)" id="icerik-sade" rows="30" onmousemove="ltgtDonustur(true);"><?php echo $kayit['icerik_sade']; ?></textarea>
                     </div>
                    </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <!-- Kaydetme Butonu Ve Bağlantı -->
                  <div class="btn-group btn-block float-right mb-1" role="group" aria-label="Kayıt Ve Görüntüleme">
                     <button class="btn btn-dark float-right btn-block">Kaydet</button>
                     <a href="icerik-goruntule.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-warning float-right ml-1">⌖</a>
                  </div>

                  <!-- Kategori -->
                  <input type="text" class="form-control bg-gri textarea-fokus mb-1" name="kategori" placeholder="Kategori" value="<?php echo $kayit['kategori']; ?>">

                  <!-- Etiket -->
                  <textarea id="hizli-konu-etiket" type="text" class="form-control bg-gri textarea-fokus mb-1" name="etiket" placeholder="Etiketler" rows="6"><?php echo $kayit['etiket']; ?></textarea>

                  <!-- İçerik Tür -->
                  <input id="icerik-tur" type="text" class="form-control bg-gri mb-1" name="icerik-tur" placeholder="İçerik Türü" value="<?php echo $kayit['icerik_tur']; ?>">

                  <?php require_once('kalip/hizli-konu-etiket.php'); ?>
                  <?php require_once('kalip/arac-listele-sidebar.php'); ?>
               </div>
            </div>
         </form>
         <!-- Form Alanı Bitiş -->         
      </div>
   </div>
</div>

<!-- Emmet Script Başlangıç -->
<script src="js/emmet.min.js"></script>
<script>
   emmet.require('textarea').setup({
   pretty_break: true, // enable formatted line breaks (when inserting 
                       // between opening and closing tag) 
   use_tab: true       // expand abbreviations by Tab key
   });
</script>
<!-- Emmet Script Bitiş -->

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>