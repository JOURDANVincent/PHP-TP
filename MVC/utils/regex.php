<?php

    // déclaration des test et REGEX

    define('R_BIRTHDAY', "/^[0-3]{1}[0-9]{1}\/[0-9]{1,2}\/(1?2?){1}[0-9]{3}$/");
    define('R_PHONE', "/^(0|\+33)[1-9]( *[0-9]{2}){4}$/");
    define('R_POSTAL', "/^([0-9][0-5][0-9]{3})|(9[7-8][2-578][0-9]{2})$/");
    define('R_STREET', "/^[a-zA-Z0-9\-\s]{2,}$/");
    define('R_STR_NO_NUMBER', "/^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$/");
    define('R_NUMBER', "/^[0-9]{1,3}$/");
    define('R_TYPE', "/^[a-z]{2,3}$/");
    define('R_POLE', "/^[0-9]{7}[A-Z]$/");

    // ^([1-9]([a-z]){1}[1-9])$



    // include (dirname(__FILE__) . '/../ddddddd.php' );
?>