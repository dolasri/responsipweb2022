<html>
    <head>
        <title>Dessert Box Yummy</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Dessert Box Yummy</h1>
            <h3>HAPPY SHOPPING</h3>
        </div>

        <div class="hero">
            <div class="container">
                <div class="indicator">
                    <span class="btn active"></span>
                    <span class="btn"></span>
                    <span class="btn"></span>
                </div>
                <div class="testimonial">
                <div class="slide-row" id="slide">
                <div class="slide-col">
                    <div class="user-img">
                        <img src="dessert.jpg">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <h3>MENU DESSERT BOX YUMMY</h3>
                        <P>Cheesecake Choco Crunchcy Rp. 43.000</P>
                        <P>Cheesecake Biscof Rp. 45.000</P>
                        <P>Cheesecake Oreo Rp. 38.000</P>
                        <P>Banoffe Caramel Rp. 50.000</P>
                    </div>
                    <div class="user-img">
                        <img src="menu.jpg">
                    </div>
                </div>
                <div class="slide-col" >
                                <!--data-diri-->
                       <form name="form1" method="post" action="prosespweb.php">
                <p>Silahkan Lengkapi Pesanan Anda</p>
                <table width="58%" border="0" align="center">

                    <tr>
                        <td>Nama </td>
                        <td><input name="nama" type="text" id="nama"></td>
                    </tr>

                    <tr>
                        <td>Pesanan</td>
                        <td>
                            <select name="pesanan" type="text" id="pesanan">
                                <option>Cheesecake Choco Crunchcy Rp. 43.000</option>
                                <option>Cheesecake Biscof Rp. 45.000</option>
                                <option>Cheesecake Oreo Rp. 38.000</option>
                                <option>Banoffe Caramel Rp. 50.000</option>
                            </select> </td>
                    </tr>

                    <tr>
                        <td>Jumlah Pesanan</td>
                        <td>
                            <input type="number" type="text" name="number">
                        </td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="alamat"></textarea></td> </textarea>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Pesan">
                    </td>
                    </tr>
                </table>
            </form>
        <div align="center"><strong><a href="lihatpweb.php">Klik Disini Untuk Melihat Pesanan Anda
        </a></strong></div>

                </div>
                </div>
            </div>
            </div>
        </div>

        <script language="JavaScript" src="pweb1.js"></script>
        <div class="footer">
            Copyright by Dola Sri Rejeki
         </div>
    </body>
</html>
