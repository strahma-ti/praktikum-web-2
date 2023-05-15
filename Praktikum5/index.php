<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <title>Sistem Informasi Perpustakaan</title>
    <style>
    /* Reset CSS */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Warna biru elegan */
    :root {
      --blue-color: #3366CC;
    }

    /* Tampilan body */
    body {
      font-family: 'Poppins', sans-serif;
      background-image: url("gambar/bg-perpustakaan.jpg");
      background-size: cover;
      color: var(--blue-color);
    }

    /* Tampilan header */
    header {
      background-color: var(--blue-color);
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    /* Tampilan nav */
    nav {
      background-color: #fff;
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
      padding: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    nav a {
      color: var(--blue-color);
      text-decoration: none;
      margin: 0 10px;
      padding: 10px;
      border-radius: 5px;
      background-color: #fff;
      transition: background-color 0.3s ease-in-out;
    }

    nav a:hover {
      background-color: var(--blue-color);
      color: #fff;
    }

    /* Tampilan main */
    main {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
      margin: 0 auto;
      max-width: 1200px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      background-color: #fff;
    }

    main img {
            display: block;
            height: auto;
            margin: 0 auto;
            max-width: 100%;
            transition: all 0.3s ease-in-out;
    }

    main img:hover {
            transform: scale(1.1);
    }

    main h3 {
            margin: 1px 0 0;
            text-align: center;
            font-size: 24px;
            letter-spacing: 1px;
            color: #2B8DC6;
    }

    .bottom-paragraph {
        text-align: center;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin-bottom: 20px;
        color: #2B8DC6;
    }

    
  </style>
</head>
<body>
    <header>
        <h1>Sistem Informasi Perpustakaan</h1>
        <p>Selamat Datang di e-library TI FT ULM</p>
    </header>
    <nav>
        <a href="Buku.php">Buku</a>
        <a href="Member.php">Member</a>
        <a href="Peminjaman.php">Peminjaman</a>
    </nav>
    <div class="container">
        <main>
            <section>
                <a href="Buku.php"><img src="gambar/buku.png.png" alt="Buku" width="200" height="250"></a>
                <h3>Buku</h3>
            </section>
            <section>
                <a href="Member.php"><img src="gambar/member.png" alt="Member" width="200" height="250"></a>
                <h3>Member</h3>
            </section>
            <section>
                <a href="Peminjaman.php"><img src="gambar/pinjam.png" alt="Peminjaman" width="200" height="250"></a>
                <h3>Peminjaman</h3>
            </section>
        </main>
    </div>
    <<div class="bottom-paragraph">
        <p>Developed by Siti Rahmah (2110817120011)</p>
    </div>
</body>
</html>
