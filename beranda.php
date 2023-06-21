<?php
include('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Wikrama</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="about">
        <img src="img/logowikrama.jpg" width="70" height="70"> 
    </div>
    <div class="judul">
        <h5>SMK WIKRAMA <br> BOGOR </h5>
    </div>
<div id="header">
        <div class="container">
            <nav>
                <ul id="sidemenu">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#cara">Cara Wakaf</a></li>
                    <li><a href="#data">Data Wakaf</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#">Web Wikrama</a></li>
                    <!-- <i class="fa-solid fa-times" onclick="closemenu()"></i> -->
                </ul>
                <!-- <i class="fa-solid fa-bars" onclick="openmenu()"></i> -->
            </nav>
            <div class="header-text">
                <p> Masjid Besar SMK WIKRAMA BOGOR</p>
                <h1> Mari <span>Tingkatkan <br> Keimanan </span> Masyarakat <br> SMK WIKRAMA BOGOR </h1>
                </div>
            </div>
            <div class="foto">
                <img src="img/logomasjid.png" width="350" height="350" >
            </div>
            <div class="button">
            <a href="bantushadaqoh.php" target="_blank">
            <button class="button">Beri Bantuan Shadaqoh</button></a>
            <!-- <input id="submit-btn" type="submit" name="submit" value="Beri Bantuan Shadaqoh"/> -->
            </div>
            <div class="dana">
                <div class="dana-text"><p>Total Target Dana</p><h5>Rp.40.000,000</h5></div>
                <div class="dana-text2"><p>Total Dana Terkumpul</p><h5>Rp.4.000,000</h5></div>
                <div class="dana-text3"><p>Total Donatur</p><h5>34 Orang</h5></div>
                
                <div class="garis"></div>
                <div class="garis2"></div>
                <div class="garis3"></div>
             
            </div>
            <div class="berjalan">
            <marquee scrolldelay="100"><h5>Muhamad Ridwan - <span>Uang : Rp.2.000,000</span> ∘ Hamba Allah - <span>Barang : Emas</span> ∘ Siti Aisyah - <span>Uang : Rp.2.000,000</span></h5></marquee>
            </div>
            <div class="banner"><h2>Banner</h2></div>
            <div class="manfaat">
                <h1><span>Manfaat</span> Wakaf, infaq <br>shodaqoh.</h1>
                <p>Berikut adalah beberapa keutamaan wakaq, infaq <br> shodaqoh yang akan anda dapatkan.</p>
            </div>
            <div class="manfaat1">
                <div class="manfaat1-icon"> <img src="img/icon1.png" width="50" height="50" ></div>
                <div class="manfaat1-text"><h3>Menjadikan hati <br> lebih tenang</h3></div>
                <div class="manfaat1-text2"><p>Kami memberikan harga <br> yang terbaik dibandingkan <br> dengan Kompetitor kami</p></div>
            </div>
            <div class="manfaat2">
                <div class="manfaat2-icon2"> <img src="img/icon2.png" width="50" height="50" ></div>
                <div class="manfaat2-text"><h3>Terbukanya <br> pintu rezeki</h3></div>
                <div class="manfaat2-text2"><p>Allah SWT akan membuka <br> pintu rezeki dari arah yang <br> tidak dikira sebelumnya.</p></div>
                <div class="manfaat2-tangan"> <img src="img/tangan.jpeg" width="600" header="600"> </div>
            </div>
            <div class="manfaat3">
                <div class="manfaat3-icon3"> <img src="img/icon3.png" width="50" height="50" ></div>
                <div class="manfaat3-text"><h3>Menjauhkan dari <br>bahaya</h3></div>
                <div class="manfaat3-text2"><p>Rasulullah SAW pernah <br> bersabda: “Bersegeralah <br> untuk bersedekah, karena <br> musibah dan bencana tidak <br>bisa mendahului sedekah."</p></div>
            </div>
            <div class="manfaat4">
                <div class="manfaat4-icon4"> <img src="img/icon4.png" width="50" height="50" ></div>
                <div class="manfaat4-text"> <h3>Pahala yang tak <br> terputus</h3></div>
                <div class="manfaat4-text2"> <p>Ini akan menolong kita <br> di akhirat nantinya, juga <br>dapat menyelamatkannya <br> dari api neraka.</p></div>
            </div>
            <div id="cara">
            <div class="cara">
                <h1><span>Cara Melakukan</span> Wakaf, infaq <br> shodaqoh.</h1>
                <p>Berikut adalah Cara melakukan wakaq, infaq shodaqoh untuk <br>membantu pembangunan masjid besar SMK Bogor</p>
            </div>
            <div class="form">
                <div class="form1"><h4>01</h4><h3>Isi Form data diri</h3><h5>Isikan form pengisian yang disediakan di form <br> data diri, isikan dengan data diri anda dengan <br>teliti.</h5></div>
                <div class="form2"><h4>02</h4><h3>Isikan nominal shodaqoh</h3><h5>Isikan nominal yang akan anda shodaqohkan,<br> pastikan isi nominal dengan seiklasnya tanpa ada <br> paksaan apapun.</h5></div>
                <div class="form3"><h4>03</h4><h3>upload bukti pembayaran</h3><h5>Pilih motode pembayaran dan upload bukti <br>pembayaranya.</h5></div>
                <div class="form4"><h4>04</h4><h3>Verifikasi Pembayaran</h3><h5>Pembayaran anda akan di verifikasi oleh admin <br>dan jika terverifikasi nama anda akan tampil.</h5></div>
            </div>
            <div id="data">
            <div class="datadn">
                <h1><span>Data donatur</span> Wakaf, infaq <br> shodaqoh.</h1>
                <p>Berikut adalah data donatur wakaf, infaq shodaqoh untuk <br> masjid besar SMK Wikrama Bogor</p>
            </div>
            <br>
            <center>
            <table class="tbl" border="1" cellspacing="0" width="1000px">
            <tr class="tbl-tr" bgcolor=" #F9FAFB" color="#919191">
                <td class="tbl-td">Nama Donatur</td>
                <td class="tbl-td">Donatur ID</td>
                <td class="tbl-td1">Paket</td>
                <td class="tbl-td1">Kategori</td>
                <td class="tbl-td1">Nominal/Barang</td>
            </tr>
            <?php
                include "koneksi.php";
                $query = "SELECT * FROM masjidinput ORDER BY nama ASC";
                $result = mysqli_query($conn, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
                }

                while ($row = mysqli_fetch_assoc($result)) {

            ?>
            <tr>
                <td class="ata"><?php echo $row['nama']; ?></td>
                <td class="ata"><?php echo $row['nodon']; ?></td>
                <td class="ata"><?php echo $row['paket']; ?></td>
                <td class="ata"><?php echo $row['kategori']; ?></td>
                <td class="ata"><?php echo $row['nominal']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        </center>
            <!-- <div class="table" width="1048px">
            <table class="table1">
		<tr>
			<th>Nama Donatur</th>
			<th>Donatur Id</th>
			<th>Paket</th>
			<th>Kategori</th>
            <th>Nominal/barang</th>
		</tr>
        </table>
        </div> -->
        <div id="gallery">
             <div class="gallery">
               <h1><span>Gallery</span> Masjid Besar SMK <br> Wikrama Bogor.</h1>
               <p>Berikut adalah gallery masjid besar sMK Wikrama Bogor.</p>
              </div>
              <div class="masjid-1"><img src="img/masjid1.jpeg">
              <img src="img/masjid2.jpeg">
              <img src="img/galmasjid3.jpeg">
              <img src="img/galmasjid4.jpeg">
              <img src="img/galmasjid5.jpeg">
              <div class="masjid"><h5>Buka Galeri</h5></div>
            </div>
            <section id ="WebWikrama">
            <div id="web">
<section class="info_section ">
<div class="logo7">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <img src="img/logowikrama.jpg" alt="img" class="img-footer"><br>
            <p class="haha"><b>SMK Wikrama <br>Bogor</b></p> <br>
            <p><b>Alamat</b></p>
            <p>
              Jl. Raya Wangun
              Kelurahan Sindangsari <br>
              Bogor Timur 16723</p> <br>
            <br>
            <p><b>Telepon</b></p>
              <p> 0251-8242411 / <br>
              082221718035 (Whatsapp)</p>
            </div>

            <div class="tentang">
                <p class="tentang-footer"><b>Tentang Wikrama</b></p>
                <ul class="list-tentang">
                    <b>Tentang Wikrama</b>
                    <li>Sejarah</li>
                    <li>Peraturan Sekolah</li>
                    <li>Rencana Strategi & Prestasi</li>
                    <li>Yayasan</li>
                    <li>Struktur Organisasi</li>
                    <li>Cabang</li>
                    <li>Penghargaan</li>
                    <li>Kerjasama</li>
                </ul>
            </div>
</div>

<div class="input-pesan"><p><b>Kirim Pesan</b></p></div>
    <input type="text" id="nama" name="name" placeholder="Nama"><br>
    <input type="text" id="email" name="name" placeholder="Email"><br>
    <input type="text" id="pesan" name="name" placeholder="pesan"> <br>
</div>
    <div class="submit">
    <button class="button-submit">Submit</button>
    
    </div>
</section>
  </section>

        </div>
    </div>
</div>
</body>
</html>