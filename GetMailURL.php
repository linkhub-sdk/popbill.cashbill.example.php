<?php

include 'common.php';


echo '현금영수증 공급받는자용 URL(메일링크와 동일) 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $CashbillService->GetMailURL('1231212312','123123','userid');
	echo substr( $result,0,40) . ' ...생략...';
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
