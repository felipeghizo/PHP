<?php

    require("vendor/autoload.php");

    $phpword = new \PhpOffice\PhpWord\PhpWord();

    $section = $phpword->addSection();

    $section->addText("Olá, Mundo!");

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpword, "Word2007");
    $objWriter->save("arquivo.docx");
?>