<?php
print_r(PDO::getAvailableDrivers());

try {
    $pdo = new PDO("mysql:host=127.0.0.1", "root", "");

    // Buat Database
    $query = "CREATE DATABASE IF NOT EXISTS kampus";
    $result = $pdo->query($query);
    if ($result !== false) {
        echo "<br>Database <b>'kampus'</b> berhasil dibuat... <br>";
    } else {
        throw new Exception($pdo->errorInfo()[2], $pdo->errorInfo()[1]);
    }

    // Pilih database "ilkoom"
    $query = "USE kampus";
    $result = $pdo->query($query);
    if ($result !== FALSE){
        echo "Database 'kampus' berhasil di pilih <br>";
    }

    // Buat Tabel student
    $query = "
        CREATE TABLE student 
        (nim CHAR(8), 
        name VARCHAR(100), 
        birth_city VARCHAR(50), 
        birth_date DATE, 
        faculty VARCHAR(50), 
        department VARCHAR(50), 
        gpa DECIMAL(3,2), 
        PRIMARY KEY (nim))
    ";
    $result = $pdo->exec($query);
    if ($result !== false) {
        echo "Tabel <b>'student'</b> berhasil dibuat... <br>";
    } else {
        throw new Exception($pdo->errorInfo()[2], $pdo->errorInfo()[1]);
    }

    // Insert data student
    $query = "
        INSERT INTO student 
        VALUES 
        ('12041952', 'Brian Yuko', 'Padang', '1996-11-23', 'FTIB', 'Sistem Informasi', 3.1), 
        ('12042010', 'Safira Yanuar', 'Bandung', '1994-08-22', 'FTIB', 'Sistem Informasi', 3.9), 
        ('12042012', 'Rezja Zalva', 'Jakarta', '1997-12-31', 'FTIB', 'Informatika', 3.5), 
        ('12042034', 'Agha Rizky', 'Jakarta', '1997-06-28', 'FTEIC', 'Sains Data', 3.4), 
        ('12042041', 'Adhiaksa', 'Medan', '1995-04-02', 'FTEIC','Bisnis Digital', 3.7);
    ";
    $result = $pdo->exec($query);
    if ($result !== false) {
        echo "Tabel <b>'student'</b> berhasil diisi... <br>";
    } else {
        throw new Exception($pdo->errorInfo()[2], $pdo->errorInfo()[1]);
    }

    // SELECT QUERY (PREPARED STATEMENT)
    $query = "SELECT * FROM student WHERE birth_city = :city";
    $stmt = $pdo->prepare($query); 
    $stmt->execute(['city'=>"Jakarta"]);

    while ($row = $stmt->fetch(PDO::FETCH_NUM)){
        echo $row[0]." | ".$row[1]. " | ".$row[2]. " | ".$row[3]. " | ".$row[4]. " | ".$row[5]. " | ".$row[6];
        echo "<br>";
    }
}
catch (\PDOException $e) {
    echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
  }
finally {
    $pdo = null;
}