<?php

function ConnDB()
{
    return new PDO('mysql:host=localhost;dbname=mspr_rs','root','');
}