<?php
    function token($data){
        return md5($data * 7);
    }
?>