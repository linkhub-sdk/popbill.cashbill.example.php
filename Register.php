<?php

include 'common.php';


echo '현금영수증 임시저장 테스트'.chr(10).'처리결과 : ' ;


//자세한 구성방법은 Reference의 JSON 포맷을 참고.
$Cashbill = new Cashbill();

$Cashbill->mgtKey = '123123';
$Cashbill->tradeType = '승인거래'; // 승인거래 or 취소거래
$Cashbill->franchiseCorpNum = '1231212312';
$Cashbill->franchiseCorpName = '발행자 상호';
$Cashbill->franchiseCEOName = '발행자 대표자명';
$Cashbill->franchiseAddr = '발행자 주소';
$Cashbill->franchiseTEL = '070-1234-1234';
$Cashbill->identityNum = '01041680206';
$Cashbill->customerName = '고객명';
$Cashbill->itemName = '상품명';
$Cashbill->orderNumber = '주문번호';
$Cashbill->email = 'test@test.com';
$Cashbill->hp = '111-1234-1234';
$Cashbill->fax = '777-444-3333';
$Cashbill->serviceFee = '0';
$Cashbill->supplyCost = '10000';
$Cashbill->tax = '1000';
$Cashbill->totalAmount = '11000';
$Cashbill->tradeUsage = '소득공제용'; //소득공제용 or 지출증빙용
$Cashbill->taxationType = '과세'; // 과세 or 비과세

$Cashbill->smssendYN = false;
$Cashbill->faxsendYN = false;

try {
	$result = $CashbillService->Register('1231212312',$Cashbill);
	echo $result->message;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
