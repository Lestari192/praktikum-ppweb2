<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
    $nilai_uts = isset($_POST['nilai_uts']) ? floatval($_POST['nilai_uts']) : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? floatval($_POST['nilai_uas']) : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? floatval($_POST['nilai_tugas']) : 0;
    $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
    $status = status ($nilai_akhir);
    $grade = grade ($nilai_akhir);
    $predikat = predikat ($grade);

    function status ($nilai_akhir) {
        if ($nilai_akhir >= 80) {
            return "Lulus";
        }
        else {
            return "Tidak Lulus";
        }
    }
        
    // MENENTUKAN GRADE NILAI MENGGUNAKAN SYNTAX IF ELSEIF MULTIKONDISI

    function grade($nilai_akhir) {
        if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
            return "A";
        } elseif ($nilai_akhir >= 70) {
            return "B";
        } elseif ($nilai_akhir >= 56) {
            return "C";
        } elseif ($nilai_akhir >= 36) {
            return "D";
        } elseif ($nilai_akhir >= 0) {
            return "E";
        } else {
            return "I";
        }
    }

    // MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SYNTAX SWITCH
    function predikat($grade) {
        switch ($grade) {
            case "A":
                return "Sangat Memuaskan";
            case "B":
                return "Memuaskan";
            case "C":
                return "Cukup";
            case "D":
                return "Kurang";
            case "E":
                return "Sangat Kurang";
            default:
                return "Tidak Ada";
        }
    }

    // MENCETAK HASIL
        echo 'Proses : ' . htmlspecialchars($proses);
        echo '<br/>Nama : ' . htmlspecialchars($nama);
        echo '<br/>Mata Kuliah : ' . htmlspecialchars($matkul);
        echo '<br/>Nilai UTS : ' . htmlspecialchars($nilai_uts);
        echo '<br/>Nilai UAS : ' . htmlspecialchars($nilai_uas);
        echo '<br/>Nilai Tugas Praktikum : ' . htmlspecialchars($nilai_tugas);
        echo '<br/>Nilai Akhir : ' . htmlspecialchars($nilai_akhir);
        echo '<br/>Status : ' . htmlspecialchars($status);
        echo '<br/>Grade : ' . htmlspecialchars($grade);
        echo '<br/>Predikat : ' . htmlspecialchars($predikat);
    // }
?>