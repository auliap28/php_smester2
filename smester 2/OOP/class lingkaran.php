<?php
    class lingkaran 
    {
        private ($jari);
        const PHI = 3.14;
        function __construct ($r)
        {
            $thin->jari = $r;
        }
        function getluas ()
        {
            return self: :PHI * $thin->jari * $thin->jari;
        }
        function getkeliling ()
        {
            return 2 * self: :PHI * $thin->jari;
        }
    }
?>