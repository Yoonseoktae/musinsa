
＊형상관리
  - Git 
    GitHub(master) : https://github.com/Yoonseoktae/musinsa/tree/master
    GitHub(dev) : https://github.com/Yoonseoktae/musinsa/tree/dev

  - versioning
    GitFlow

＊AWS 스펙
  - EC2 (프리티어)
    유형 : t2.nano
    EndPoint : ec2-3-38-252-196.ap-northeast-2.compute.amazonaws.com
  
  - RDS (프리티어)
    유형 : db.t3.micro
    EndPoint : db-musinsa-test.czigkq9mkg4m.ap-northeast-2.rds.amazonaws.com
    Port : 3306
    ID : yst

＊Server 스펙
  - Apache : 2.4.53
  - PHP : 7.4.29
  - Mysql : 8.0.28

＊사용 툴
  - VSCODE 
  - NaviCat 
  - putty
  - GitHub
  - GitDesktop
  - YARC (REST API test - Chrome extension)

＊테스트
    1. 상품조회 (GET)
      - http://3.38.252.196/api/goods/1 (단일상품조회)
      - http://3.38.252.196/api/goods (전체상품조회)

    2. 상품등록 (POST)
      - http://3.38.252.196/api/goods (상품등록)
payload : {
  "goods_nm":"aa",
  "goods_cont":"dd",
  "com_id":"33"
}

＊이슈 
    1. LAMP 설치
      - 이슈 없음.
      
    2. CI4 설치
      - 수동 설치 후 설정중 연속된 에러. (해결)
        => 수동설치 삭제 후 composer 설치.
      - CI Call to undefined function CodeIgniter\locale_set_default() 에러.  (해결)
        => php intl 설치 및 적용 후 아파치 재시작
      - 디버깅 화면 미노출 (해결)
        => env > .env 변경 후 CI_ENVIRONMENT = development 변경

    3. Git관련 연동 
      - GitFlow 개념을 사용할 예정, 
        버저닝 관리는 작업볼륨이 크지않기에 릴리즈 브랜치방식 사용하지 않고 dev -> master로 머지 커밋명에 명시 예정. 
      - master브랜치 생성 후 ci소스 연결.
      - dev브랜치를 master기준으로 생성.

    4. VScode Remote SSH 연결 
      - Window OpenSSH서버, 클라이언트 설치 후 VSCODE remote ssh에서 키방식으로 서버에 연결시도하였으나 계속된 권한거부. (해결)
      => 서버 내 sshd설정 및 권한세팅 완료 후 권한거부 메세지가 달라지긴했으나 여전히 접근이 거부됨.
      => 클라이언트 ssh config파일의 pem키 위치설정값(IdentityFile) 삭제 후 정상 접근됨.

    5. REST API 개발
      - 이슈 없음.
