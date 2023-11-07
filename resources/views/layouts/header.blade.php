<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <title>Header</title>
</head>
<body>
  <!-- 헤더 -->
  <div class="container mt-2">
    <!-- 상단 로고 검색 로그인 가입 -->
    <div class="d-flex" style="height: 60px;">
      <!-- 로고 -->
      <div class="col-2 bg-light d-flex align-items-center justify-content-center">
        logo
      </div>
      <!-- 검색창 -->
      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="input-group w-75">
          <input type="text" class="form-control w-75" placeholder="굿노트 다이어리를 검색해보세요!" style="background-color: #fff9f9;">
          <a href="#" class="input-group-text"><i class="bi bi-search"></i></a>
        </div>
        
      </div>

      <!-- 장바구니 마이페이지 -->
      <div class="col-2 d-flex">
        <div>
          <div class="d-flex justify-content-center">
            <i class="bi bi-cart4 fs-3"></i>
          </div>
          <div class="d-flex justify-content-center">
            <span style="font-size: 8px;">장바구니</span>
          </div>
        </div>
        <div class="ms-3">
          <div class="d-flex justify-content-center">
            <i class="bi bi-person fs-3"></i>
          </div>
          <div class="d-flex justify-content-center">
            <span style="font-size: 8px;">마이페이지</span>
          </div>
        </div>
      </div>
      <!-- 로그인 회원가입 -->
      <div class="col-3 d-flex align-items-center fs-6  ">
        <a href="" class="text-decoration-none text-reset">로그인</a>
        <a href="" class="text-decoration-none text-reset ms-4">회원가입</a>
      </div>
    </div>
    <hr class="mb-1">
    <!-- navbar -->
    <div class="d-flex">
      <div class="d-flex justify-content-center align-items-center ms-2">
        <a href="" class="d-flex text-decoration-none text-reset align-items-center" >
          <i class="bi bi-list fs-4 me-1"></i>
          전체상품
        </a>
      </div>
      <div class="d-flex justify-content-center align-items-center ms-5">
        <a href="" class="d-flex text-decoration-none text-reset align-items-center">
          노트
        </a>
      </div>
      <div class="d-flex justify-content-center align-items-center ms-5">
        <a href="" class="d-flex text-decoration-none text-reset align-items-center">
          다이어리/플래너
        </a>
      </div>
      <div class="d-flex justify-content-center align-items-center ms-5">
        <a href="" class="d-flex text-decoration-none text-reset align-items-center">
          스티커
        </a>
      </div>
    </div>
    <hr class="my-1">
  </div>
</body>
<style>
  body {
    margin: 0;
  }
  div {
    box-sizing: border-box;
  }
</style>
</html>