<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
<div class="container-fluid ps-md-0">
    <div class="content">
        <div class="title">
            <header>
                <h3>Pendaftaran Siswa Baru</h3>
                <h1 class="its-coder">ITS Coder</h1>
            </header>
        </div>
    </div>
</div>

<div class="container">
    <h4 class="menu-text">Menu</h4> 
    <div class="button-container">
        <nav>
            <button id="button">
                <a href="form-daftar.php">Pendaftar Baru</a>
            </button>
            <button id="button">
                <a href="list-siswa.php">List Pendaftar</a>
            </button>
        </nav>
    </div>
</div>

    
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>