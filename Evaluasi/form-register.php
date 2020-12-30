<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <form action="form-login.php" method="POST">
        <fieldset>
        <legend>Registrasi</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="Username" />
        </p>
        <p>
           
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password" />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>