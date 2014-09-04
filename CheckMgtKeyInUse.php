<?php

include 'common.php';

echo '관리번호 사용여부 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $CashbillService->CheckMgtKeyInUse('1231212312','123123');
	echo $result ? '사용중' : '미사용중';
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
