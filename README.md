popbill.cashbill.example.php
==============================

팝빌 현금영수증 SDK Example for PHP 5
####Requirements
+ php 5.2+
+ curl
+ openssl 1.0.1g+ (don't forget about heartbleed.)

####예제 목록
+ common.php  - 공통부분
+ JoinMember.php  - 연동회원 가입
+ GetBalance.php  - 연동회원 잔여포인트 확인
+ GetPartnerBalance.php - 파트너 잔여 통합포인트 확인
+ GetPopbillURL.php - 팝빌 기본 URL 확인
+ GetURL.php  - 팝빌 현금영수증 관련 URL 확인
+ CheckMgtKeyInUse  - 관리번호 사용여부 확인
+ Register.php  - 임시저장
+ Update.php  - 임시저장 수정
+ Issue.php - 발행
+ CancelIssue.php - 발행취소
+ SendEmail.php - 알림메일 재전송 요청
+ SendSMS.php - 알림문자 재전송 요청
+ SendFAX.php - 문서 팩스 재전송
+ GetInfo.php - 문서 요약정보/상태정보 확인
+ GetDetailInfo.php - 문서 상세정보 확인
+ GetLogs.php -  문서 이력 목록 확인
+ GetInfos.php  - 문서 요약정보 다량 확인(최대 1000건)
+ GetPopUpURL.php - 현금영수증 뷰팝업 URL 확인
+ GetPrintURL.php - 현금영수증 출력 팝업 URL 확인
+ GetEPrintURL.php - 현금영수증 공급받는자용 출력 팝업 URL 확인
+ GetMassPrintURL.php - 현금영수증 다량 인쇄 팝업 URL 확인
+ GetMailURL.php  - 공급받는자용 팝업(메일링크와 동일) URL 확인
+ GetUnitCost.php - 발행단가 확인