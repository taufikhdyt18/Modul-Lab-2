<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script>
        function validateForm() {
            
            var nama = document.forms["input"]["nama"].value;


            if (nama.trim() === "") {
                alert("Nama harus diisi!");
                return false; 
            }

            
            return true;
        }
    </script>
</head>
<body>
    <form action="proses.php" method="POST" name="input" onsubmit="return validateForm()">
        <label for="nama">Nama Anda:</label>
        <input type="text" id="nama" name="nama">
        <br>
        <input type="submit" name="Input" value="Input">
    </form>
</body>
</html>
