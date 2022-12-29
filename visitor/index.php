<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" 
      type="image/png" 
      href="icon-libdeck.png" /> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
        </link>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap/css/style.css" />
    <title>FORM KUNJUNGAN PUSTAKA</title>
</head>
<?php session_start(); ?>
<body>
<div class="wrapper">
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>

</div>
    <div class="panda">
      <div class="ear"></div>
      <div class="face">
        <div class="eye-shade"></div>
        <div class="eye-white">
          <div class="eye-ball"></div>
        </div>
        <div class="eye-shade rgt"></div>
        <div class="eye-white rgt">
          <div class="eye-ball"></div>
        </div>
        <div class="nose"></div>
        <div class="mouth"></div>
      </div>
      <div class="body"></div>
      <div class="foot">
        <div class="finger"></div>
      </div>
      <div class="foot rgt">
        <div class="finger"></div>
      </div>
    </div>

        <form action="simpan-kehadiran.php" method="post">
            
            <div class="hand"></div>
      <div class="hand rgt"></div>
      <h1>Diisi ya gaess!</h1>
        <div class="form-group">
        <input type="text" name="nama" id="nama" placeholder="ketik nama" class="form-control" required>
        <div class="invalid-feedback">kolom harus diisi!</div>
        </div>
        <div class="form-group">
            <select name="asal" id="asal" class="form-control">
                <option value="XIPS1">X-IPS-1</option>
                <option value="XIPS2">X-IPS-2</option>
                <option value="XIPA1">X-IPA-1</option>
                <option value="XIPA2">X-IPA-2</option>
                <option value="XIPA3">X-IPA-3</option>
                <option value="XIPA4">X-IPA-4</option>
                <option value="XIPA5">X-IPA-5</option>
                <option value="XIIPS1">XI-IPS-1</option>
                <option value="XIIPS2">XI-IPS-2</option>
                <option value="XIIPA1">XI-IPA-1</option>
                <option value="XIIPA2">XI-IPA-2</option>
                <option value="XIIPA3">XI-IPA-3</option>
                <option value="XIIPA4">XI-IPA-4</option>
                <option value="XIIPA4">XI-IPA-5</option>
                <option value="XIIIPS1">XII-IPS-1</option>
                <option value="XIIIPS2">XII-IPS-2</option>
                <option value="XIIIPA1">XII-IPA-1</option>
                <option value="XIIIPA2">XII-IPA-2</option>
                <option value="XIIIPA3">XII-IPA-3</option>
                <option value="XIIIPA4">XII-IPA-4</option>
                <option value="gukar">Guru Dan Karyawan</option>
                <option value="umum">Umum</option>
            </select>
        </div>
        <div class="form-group">
            <select name="tujuan" id="tujuan" class="form-control">
                <option value="membaca">Membaca Buku</option>
                <option value="meminjam buku">Meminjam/Kembali Buku</option>
                <option value="diskusi">Belajar</option>
                <option value="diskusi">Diskusi</option>
                <option value="lainnya">Lainnya..</option>
            </select>
        </div>
        
        <button type="submit" name="submit" class="btn btn-success">MASUK</button>
    </form>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
    
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="tampil.js"></script>
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    
        <!-- script panda style -->
        <script src="bootstrap/js/script.js"></script>

        <!-- notif pengunjung baru -->
        

    <!-- session selesai -->
        <?php if(@$_SESSION['sukses']){ ?>
        <script>
            swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
        </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php unset($_SESSION['sukses']); } ?>

    </body>
</html>