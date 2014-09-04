<?php

include 'common.php';


echo '현금영수증 다량인쇄화면 URL(최대 100건) 확인 테스트'.chr(10).'처리결과 : ' ;

$MgtKeyList = array(
		'123123',
		'123123123',
		'123123123123',
		'1',
		'2'
);

try {
	$result = $CashbillService->GetMassPrintURL('1231212312',$MgtKeyList,'userid');
	echo substr( $result,0,40) . ' ...생략...';
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
