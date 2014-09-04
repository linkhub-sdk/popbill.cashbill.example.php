<?php

include 'common.php';


echo '발행 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $CashbillService->Issue('1231212312','123123','발행 메모');
	echo '['.$result->code.'] '.$result->message;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
