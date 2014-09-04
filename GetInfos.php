<?php

include 'common.php';

echo '현금영수증 요약정보 대량 확인 테스트'.chr(10).'처리결과 : ' ;

$MgtKeyList = array(
		'123123',
		'123123123',
		'123123123123',
		'1',
		'2'
);
try {
	$result = $CashbillService->GetInfos('1231212312',$MgtKeyList);
	echo chr(10);
	var_dump($result);
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>