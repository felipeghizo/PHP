<?php

		require 'vendor/autoload.php';

		use PhpOffice\PhpSpreadsheet\Spreadsheet;
		use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

        // Criando a tabela:
		$spreadsheet = new Spreadsheet();
		$tabela = $spreadsheet->getActiveSheet();	    # Tabela atual.
		$tabela->setCellValue('A1', 'Hello World !');	# Set o valor de determinada célula.
		$tabela->setCellValue('A2', 'Welcome!');	    # Set o valor de determinada célula.
		$writer = new Xlsx($spreadsheet);
		$writer->save('tabela_teste.xlsx');		        # Salva o arquivo em "tabela_teste.xlsx".

        //Modificando e lendo células:
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('tabela_teste.xlsx');
        $tabela1 = $spreadsheet->getActiveSheet();
		$tabela1->getCell('A1')->setValue('John');	# Muda o valor da célula.
        $tabela1->getCell('A1');                    # Lê a célula.
?>