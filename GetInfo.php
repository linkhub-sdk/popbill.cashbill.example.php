<?php

include 'common.php';

echo '현금영수증 요약정보 및 상태정보 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $CashbillService->GetInfo('1231212312','123123');
	echo chr(10);
	var_dump($result);
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>