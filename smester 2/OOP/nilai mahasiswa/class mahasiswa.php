<?php
    class nilai_mahasiswa
    {
        var $matakuliah, $nilai, $nim;

            function __construct($matakuliah, $nilai, $nim)
            {
                $this->Nim = $Nim;
                $this->Nilai = $Nilai;
                $this->Matakuliah = $Matakuliah;
            }
        
            function grade()
            {
                if ($_POST['Nilai'] <= 35){
                    return 'E';
                }
                elseif ($_POST['Nilai'] >= 36 && $_POST['NIlai'] <= 55){
                    return 'D';
                }
                elseif ($_POST['Nilai'] >= 56 && $_POST['NIlai'] <= 69){
                    return 'C';
                }
                elseif ($_POST['Nilai'] >= 70 && $_POST['NIlai'] <= 84){
                    return 'B';
                }
                elseif ($_POST['Nilai'] >= 85 && $_POST['NIlai'] <= 100){
                    return 'A';
                }
            }
        function hasil()
        {
            if ($_POST['Nilai']<=56){
                return 'Tidak Lulus';
            }
            elseif ($_POST['Nilai'] >= 56){
                return 'lulus';
            }
        }
    }
?>