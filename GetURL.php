<?php

include 'common.php';


echo '현금영수증 URL 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $CashbillService->GetURL('1231212312','userid','SBOX');
	echo substr( $result,0,40) . ' ...생략...';
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
