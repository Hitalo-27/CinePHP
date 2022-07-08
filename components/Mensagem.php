<?php

class Mensagem
{
    public static function mostrar()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION["msg"])) {
            $msg = $_SESSION["msg"];
            unset($_SESSION["msg"]);
            return "<script>
                M.toast({
                    html: '$msg'
                });
            </script>";
        }
    }
}
