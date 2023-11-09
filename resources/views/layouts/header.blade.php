<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <title>@yield('title')</title>
</head>
<body>
  <!-- 헤더 -->
  <div class="container mt-2 sticky-top" style="background-color: white;">
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
      <div class="col-2 d-flex align-items-center fs-6  ">
        <a href="" class="text-decoration-none text-reset">로그인</a>
        <a href="" class="text-decoration-none text-reset ms-4">회원가입</a>
      </div>
    </div>
    <hr class="mb-1">
    <!-- navbar -->
    <div class="d-flex" id="navbar">
      <div class="d-flex justify-content-center align-items-center ms-2">
        <button class="d-flex align-items-center" >
          <i class="bi bi-list fs-4 me-1"></i>
          전체상품
        </button>
      </div>
      <div class="d-flex justify-content-center align-items-center ms-5">
        <button class="d-flex align-items-center">
          노트
        </button>
      </div>
      <div class="d-flex justify-content-center align-items-center ms-5">
        <button href="" class="d-flex align-items-center">
          다이어리/플래너
        </button>
      </div>
      <div class="d-flex justify-content-center align-items-center ms-5">
        <button class="d-flex text-decoration-none text-reset align-items-center">
          스티커
        </button>
      </div>
    </div>
    <hr class="my-1">
  </div>

  @yield('content')
  
</body>
<style>
  body {
    margin: 0;
  }
  div {
    box-sizing: border-box;
  }

  #navbar div button {
    border: none;
    background-color: rgba(0, 0, 0, 0);
  }
</style>
</html>