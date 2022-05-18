<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Aritmatika | Nilai Mahasiswa</title>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
            color: #D3455B;
        }
        table {
            margin: 5%;
        }
        input, select {
            width: 100%;
            padding: 8px 15px;
        }
        option {
            line-height: 10px !important;
        }
        .space {
            padding-right: 50px; 
        }
        .average {
            padding-right: 800px; 
        }
        table tr td {
            padding-bottom: 10px;
        }
        button {
            background-color: #6558F5;
            border-color: #6558F5;
            border-radius: 2px;
            color: white;
            padding: 8px 15px;
        }
        .div-result {
            display: inline-block;
            height: 0;
            padding-bottom: 20%;
            width: 22%;
            border: 1px solid rgb(118, 118, 118);
        }
        .result {
            font-size: 120px;
            padding: 10px;
        }
        #footer {
            margin: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_POST['count'])){
            $assignments    = $_POST['assignments'];
            $practicum      = $_POST['practicum'];
            $uts            = $_POST['uts'];
            $uas            = $_POST['uas'];

            $average        = ($assignments + $practicum + $uts + $uas) / 4;
            if ( $average > 80 ) {
                $result     = "A";
            } elseif ( $average > 70 ) {
                $result     = "B";
            } elseif ( $average > 60 ) {
                $result     = "C";
            } elseif ( $average > 50 ) {
                $result     = "D";
            } else {
                $result     = "E";
            }
        }
    ?>

    <div>
        <h1><b>Nilai Mahasiswa</b></h1>

        <form method="post" action="index.php">
            <table>
                <tr>
                    <td class="space">Nilai Tugas</td>
                    <td>
                        <input type="number" name="assignments" value="<?= $assignments ?? 0; ?>" tabindex="1">
                    </td>
                    <td class="space"></td>
                    <td class="space"></td>
                    <td class="space">Nilai Rata-rata</td>
                    <td class="average">
                        <input type="text" name="average" value="<?= $average ?? 0; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Nilai Praktikum</td>
                    <td>
                        <input type="number" name="practicum" value="<?= $practicum ?? 0; ?>" tabindex="2">
                    </td>
                    <td class="space"></td>
                    <td class="space"></td>
                    <td class="space">Nilai Akhir</td>
                    <td rowspan="3">
                        <div class="div-result">
                            <div class="result w3-center w3-animate-zoom">
                                <?= $result ?? "-"; ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>
                        <input type="number" name="uts" value="<?= $uts ?? 0; ?>" tabindex="3">
                    </td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>
                        <input type="number" name="uas" value="<?= $uas ?? 0; ?>" tabindex="4">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="count" tabindex="5">Hitung</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        $( "input[type=number]" ).focus((e)=>{
            e.currentTarget.select();
        });
    </script>
</body>
</html>
