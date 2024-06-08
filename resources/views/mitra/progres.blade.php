<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progres Vertikal</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
}

#progress-table {
    margin-bottom: 20px;
    border-collapse: collapse;
    width: 300px;
}

#progress-table th, #progress-table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.progress-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    position: relative;
}

.progress-line {
    width: 4px;
    background-color: #ccc;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
}

.steps-container {
    display: flex;
    flex-direction: column;
    margin-left: 20px;
}

.step {
    width: 150px;
    padding: 10px;
    margin: 20px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
    background-color: #f0f0f0;
}

.step.completed {
    background-color: #d4edda;
    border-color: #28a745;
    color: #155724;
}

    </style>
</head>
<body>
    <table id="progress-table">
        <tr>
            <th>Langkah</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>Menanam 1 Hari</td>
            <td id="status1">Belum Selesai</td>
        </tr>
        <tr>
            <td>Menanam 2 Hari</td>
            <td id="status2">Belum Selesai</td>
        </tr>
        <tr>
            <td>Menanam 3 Hari</td>
            <td id="status3">Belum Selesai</td>
        </tr>
        <tr>
            <td>Menanam 4 Hari</td>
            <td id="status4">Belum Selesai</td>
        </tr>
    </table>

    <div class="progress-container">
        <div class="progress-line"></div>
        <div class="steps-container">
            <div class="step" id="step1">Menanam 1 Hari</div>
            <div class="step" id="step2">Menanam 2 Hari</div>
            <div class="step" id="step3">Menanam 3 Hari</div>
            <div class="step" id="step4">Menanam 4 Hari</div>
        </div>
    </div>

    <script src="scripts.js"></script>
    <script>
 function updateProgress() {
    // Mendapatkan semua elemen langkah
    const steps = document.querySelectorAll('.step');
    // Mendapatkan status dari setiap langkah
    const statuses = [
        document.getElementById('status1').innerText,
        document.getElementById('status2').innerText,
        document.getElementById('status3').innerText,
        document.getElementById('status4').innerText
    ];

    // Memeriksa apakah setidaknya satu langkah sudah selesai
    const isCompleted = statuses.includes('Selesai');

    // Mendapatkan elemen garis progres
    const progressLine = document.querySelector('.progress-line');

    // Jika ada setidaknya satu langkah yang selesai, ubah warna garis progres menjadi hijau; jika tidak, tetap abu-abu
    if (isCompleted) {
        progressLine.style.backgroundColor = '#28a745'; // Hijau jika setidaknya satu langkah selesai
    } else {
        progressLine.style.backgroundColor = '#ccc'; // Abu-abu jika belum ada langkah yang selesai
    }

    // Memperbarui visualisasi progres
    for (let i = 0; i < statuses.length; i++) {
        // Jika status "Selesai", tambahkan kelas 'completed' ke langkah tersebut
        if (statuses[i] === 'Selesai') {
            steps[i].classList.add('completed');
        } else {
            // Jika tidak, hapus kelas 'completed'
            steps[i].classList.remove('completed');
        }
    }
}

function updateStatus(stepNumber) {
    // Mendapatkan elemen status untuk langkah tertentu
    const statusElement = document.getElementById(`status${stepNumber}`);
    // Mengubah teks status menjadi "Selesai"
    statusElement.innerText = 'Selesai';
    // Memperbarui visualisasi progres
    updateProgress();
}



    </script>
</body>
</html>
