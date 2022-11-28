<!DOCTYPE html>
<html>
<head>
    <title>Form_daftar</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran </h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="posisi">posisi: </label>
            <textarea name="posisi"></textarea>
        </p>
        <p>
            <label for="no_punggung">no pungggung</label>
            <select name="no_punggung">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>