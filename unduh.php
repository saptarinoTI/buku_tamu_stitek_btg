<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buku Tamu Kunjungan STITEK Bontang</title>
  <link rel="shortcut icon" href="logo/facivon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <section class="abovefold overflow-hidden">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
      @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap');

      * {
        font-family: 'Inter', sans-serif !important;
      }

      body ::-webkit-input-placeholder {
        color: #989DB1 !important;
      }

      body :-ms-input-placeholder {
        color: #989DB1 !important;
      }

      body ::-ms-input-placeholder {
        color: #989DB1 !important;
      }

      body ::placeholder {
        color: #989DB1 !important;
      }

      body .font-red-hat-display {
        font-family: 'Red Hat Display', sans-serif !important;
      }

      body .cl-light-blue {
        color: #34b3ff;
      }

      body nav .navbar-brand {
        font-family: 'Red Hat Display', sans-serif !important;
        font-size: 26px;
        font-weight: 700 !important;
      }

      @media screen and (min-width: 768px) {
        body nav .navigation {
          margin-left: 80px;
        }
      }

      body nav .navigation li {
        margin-right: 32px;
      }

      body nav .navigation a {
        font-size: 16px;
        font-weight: 400 !important;
        color: #16171C !important;
      }

      body nav .authentication li {
        margin-right: 38px;
      }

      body nav .authentication a {
        font-size: 16px;
        font-weight: 700 !important;
      }

      @media screen and (min-width: 768px) {
        body nav .authentication .cl-white {
          color: #FFFFFF !important;
        }
      }

      @media screen and (max-width: 768px) {
        body nav .authentication .login {
          width: 100%;
        }
      }

      @media screen and (max-width: 768px) {
        body nav .authentication .login a {
          background: #518CFF;
          border-radius: 8px;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          color: #FFFFFF !important;
          padding: 14px 14px 14px 14px !important;
        }
      }

      body nav .authentication .signup {
        background: #FFFFFF;
        border-radius: 8px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #518CFF !important;
        padding: 14px 14px 14px 14px !important;
      }

      body .abovefold {
        background: -webkit-gradient(linear, left top, left bottom, from(#F9FAFE), to(#FFFFFF));
        background: linear-gradient(180deg, #F9FAFE 0%, #FFFFFF 100%);
      }

      body .abovefold .header {
        margin-top: 85px;
        margin-bottom: 115px;
      }

      body .abovefold .img-header {
        position: absolute;
        top: 0;
        right: -230px;
      }

      body .abovefold .headline {
        font-family: 'Red Hat Display', sans-serif !important;
        font-weight: 700 !important;
        line-height: 46px;
        color: #16171C;
        font-size: 38px;
      }

      @media screen and (max-width: 768px) {
        body .abovefold .headline {
          font-size: 54px;
          line-height: 80px !important;
        }
      }

      body .abovefold .sub-headline {
        font-family: 'Red Hat Display', sans-serif !important;
        font-weight: 400 !important;
        font-size: 20px;
        line-height: 38px;
        color: #494C57;
        margin-top: 48px;
        width: 75%;
      }

      @media screen and (min-width: 768px) {
        body .abovefold .sub-headline {
          width: 373px;
        }
      }

      body .abovefold .four-point {
        margin-top: 80px;
      }

      body .abovefold .card {
        background: #FFFFFF;
        -webkit-box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);
        box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);
        border-radius: 12px;
        padding: 52px 52px 40px;
        border: none;
      }

      @media screen and (min-width: 768px) {
        body .abovefold .card {
          width: 464px;
        }
      }

      body .abovefold .card .form-control {
        background: #F8F8FC;
        border-radius: 8px;
        border: none;
        padding: 16px 20px;
        height: 56px;
        font-weight: 600 !important;
      }

      body .abovefold .card .input-title {
        color: #494C57;
        font-size: 16px;
        margin-bottom: 12px;
      }

      body .abovefold .card .btn-card {
        margin-top: 36px;
        background: #00B67A;
        border-radius: 8px;
        height: 56px;
        padding: 10px;
        color: #FFFFFF;
        font-size: 16px;
        font-weight: 700 !important;
      }

      body .abovefold .card .award {
        font-size: 12px;
        line-height: 18px;
        color: #8D8F98;
      }
    </style>

    <center>
      <div class="container header">
        <div class="row">
          <div class="col-lg-6 px-md-0 my-auto position-relative">
            <div class="w-100">
              <img src="logo/logo-dark.png" alt="" width="220px" class="mb-5">
            </div>
            <h2 class="headline">
              BUKU TAMU KUNJUNGAN <br>
              <span class="cl-light-blue fw-bolder">STITEK</span> BONTANG
            </h2>
            <img src="logo/qr-code.png" alt="" width="300">
            <div class="sub-headline" style="margin-top: 0 !important">
              Silahkan scan QR Code lalu buka website sesuai dengan link yang tersedia.
            </div>
          </div>
        </div>
      </div>
    </center>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script>
    window.print();
  </script>
</body>

</html>