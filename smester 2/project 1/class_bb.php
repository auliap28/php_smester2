<?php
class berat_badan
{
    public $Umur;
    public $Tinggi;
    public $Berat;
    public $bmi;
    public $jeniskelamin;
    
    public function __construct()
    {
        session_start();
        $_SESSION['result'] ?? $_SESSION['result'] = [];
    }

    public function status_beratbadan()
    { {
        $total = $this->statusbmi();
            if ($this->Berat < 18.5) {
                return "kekurangan berat badan";
            } elseif ($this->Berat >= 18.5 && $this->Berat < 24.9) {
                return "normal (ideal)";
            } elseif ($this->Berat >= 25.0 && $this->Berat < 29.9) {
                return "kelebihan berat badan";
            } elseif ($this->Berat >= 3.00) {
                return "kegemukan (obesitas)";
            }
        }
    }

    public function statusbmi() {
        $val = [$this->tinggi, $this->berat, $this->umur];
        for($i = 0; $i < count($val); $i++){
            if(!preg_replace('/^[0-9]/','', $val[$i])){
                echo '<script> alert("Silahkan cek di Lihat Data BMI!");
                window.location.href = "daftar_beratbadan.php";
                </script>';
            }
        }
        $tinggi = isset($this->tinggi) ? $this->tinggi/100 : 0;
        $total = isset($this->tinggi) ? substr($this->berat/($tinggi*$tinggi),0 , 5) : 0;
        return $total;
    }
}

?>