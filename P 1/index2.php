<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
<div class="container px-5 my-5">
    <form id="contactForm" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
            <label for="nama">Nama</label>
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" name="mataKuliah" aria-label="Mata Kuliah">
                <option value="Pemrograman Web2">Pemrograman Web2</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
            </select>
            <label for="mataKuliah">Mata Kuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiTugas" type="text" placeholder="Nilai Tugas" data-sb-validations="required" />
            <label for="nilaiTugas">Nilai Tugas</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiTugas:required">Nilai Tugas is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiUts" type="text" placeholder="Nilai UTS" data-sb-validations="required" />
            <label for="nilaiUts">Nilai UTS</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiUts:required">Nilai UTS is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiUas" type="text" placeholder="Nilai UAS" data-sb-validations="required" />
            <label for="nilaiUas">Nilai UAS</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiUas:required">Nilai UAS is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <input class="btn btn-primary btn-lg" id="submitButton" type="submit" value="Submit">Submit</input>
        </div>
    </form>
</div>
<div class="container px5 my-5">
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
        </tr>
        <?php
        if (isset($_POST['nama'])) {
            echo "<tr>";
            echo "<td></td>";
            echo "<td>$_POST[nama]</td>";
            echo "<td>$_POST[mataKuliah]</td>";
            echo "<td>$_POST[nilaiTugas]</td>";
            echo "<td>$_POST[nilaiUts]</td>";
            echo "<td>$_POST[nilaiUas]</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
    </div>
</body>
</html>