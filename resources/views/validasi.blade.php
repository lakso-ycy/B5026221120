<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="myscript2.js"></script>
            <link rel="stylesheet" href="style.css">
            <title>Javascript</title>
            <script>
                function validateForm(){
                    var nrp = document.getElementById("nrp");
                    var msg =  document.getElementById("msg");

                    if(nrp.value ==""){
                        nrp.focus();
                        alert("NRP HARUS DIICI")
                        return false;
                    }
                    if(nrp.value.length != 10){
                        alert("Salah tel, harus 10 digit, kon mek " + nrp.value.length);
                        return false;
                    }
                    if(isNaN(nrp.value) == true){
                        nrp.focus();
                        alert("kudu angka tel");
                        return false;
                    }
                }

            </script>
        </head>

        <body>
            <div class="container">
                <div class="jumbotron">Form Validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai constraint database
                <script>
                    function validate(){
                        console.log("baris 23");
                        return false;
                        console.log("baris 25");
                        return ture;
                        console.log("baris 27");
                        return false;

                    }
                </script>
                </div>
                <form action="https://animasu.info/" method="get" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="nrp">NRP :</label>
                        <input type="text" class="form-control" id="nrp">
                        <div id="msg" class="text-warning"></div>
                    </div>
                    <input type="submit" value="DAFTAR" class="btn btn-primary">
                    <input type="reset" value="ULANGI" class="btn btn-warning">
                </form>
            </div>
        </body>

        </html>
    </div>
</body>

</html>
