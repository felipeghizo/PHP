<?php
		
	class Cache{

		public function readCache(){

			if(file_exists('cache.txt')){

				$data = json_decode(file_get_contents('cache.txt'));
				if($data->tempo < time()){

					//hora de criar o cache
					echo "Criando novo cache<hr>";
					$data = json_encode(['tempo'=>time()+(1110), 'conteudo'=>"<h2> Nosso site esta em manutenção </h2>"]);
					file_put_contents('cache.txt', $data);
					$data = json_decode($data);

				}
			
			}else{

				echo 'Criando cache pela primeira vez!<hr>';
				$data = json_encode(['tempo'=>time()+(10), 'conteudo'=>"<h2> Nosso site esta em manutenção </h2>"]);
				file_put_contents('cache.txt', $data);
				$data = json_decode($data);
					

			}
			return $data;
		}
	}	
?>