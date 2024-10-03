<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | PET HAVENT</title>
    <link rel="stylesheet" href="css/bootstrap.in.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
rel="stylesheet">
   <style>
      /* header */
        .navbar {
            background-color: #f8f9fa; 
            padding: 10px 0;
        }
        .navbar-brand img {
            max-height: 120px; 
        }
        .nav-link {
            font-size: 16px;
line-height: 36px;
            color: #787878; 
            font-weight: 700;
            transition: all 0.3s ease;
            font-family: "Quicksand", sans-serif;
        }
        .navbar-nav .nav-link:hover {
            color: #f28500;
        }
        .search-input {
            display: flex;
            align-items: center;
            max-width: 300px;
        }
        .search-input input {
            border-radius: 20px;
            border: 1px solid #ddd;
            padding: 5px 10px;
            width: 100%;
            outline: none;
        }
        .shopping-cart-items-count {
    position: absolute;
    right: 28px;
    top: calc(50% - 18px);
    width: 16px;
    height: 16px;
    line-height: 16px;
    font-size: 11px;
    display: block;
    border-radius: 50%;
    text-align: center;
    background-color: #ff642f;
    color: #fff;
    font-weight: 600;
    transition: all 0.3s ease;
    z-index: 10;
    pointer-events: auto; 
}
/* header */
.slide-brand{
    max-height: 400px;
}

.custom-section{
  margin-top: 40px;
}
        .custom-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #3d1e1e;
        }
        .custom-description {
            color: #6f4c4c;
            font-size: 1rem;
            margin: 20px 0;
        }
        .custom-button {
            
            border: none;
           
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .custom-button:hover {
            background-color: #e55330;
        }
        .custom-rounded {
    border-radius: 22px;
}
.custom-button{
    background-color: #FF642F;
    color: #fff;
    font-family: "Quicksand", sans-serif;
    transition: all 0.3s ease;
}
.custom-title{
font-size: 84px;
line-height: 92px;
letter-spacing: -4px;
font-family: "Quicksand", sans-serif;
}
.custom-description{
    font-family: "Quicksand", sans-serif;
}


.pet-services {
    background-color: #5a585818; 
    margin-top: 20px;
}

.service-card {
 height: 100%;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.service-card img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border: 4px solid #f8f9fa;
}

.service-card:hover {
    transform: translateY(-10px);
}

.stat-card {
    background-color: #008BA7; 
    border-radius: 5px;
    color: #fff;
}
.start-card{
    border-radius: 5px;
    color: #fff;
    background-color: #FCB900;
}
.stat-card:nth-child(2) {
    background-color: #ffc107;
}

.stat-card i {
    font-size: 30px;
}
.content-service{
    font-size: 24px;
    line-height: 1.25;
    font-family: "Quicksand", sans-serif;
    font-weight:700;
}
.content-description{
    font-size: 16px;
    color: #222222a3;
    font-weight: 400;
    font-family: "Quicksand", sans-serif;
}
.main-heading{
    font-size: 50px;
    letter-spacing: -0.02em;
    line-height: 1.2;
    font-family: "Quicksand", sans-serif;
    font-weight: 700;
}

.banner {
      background-color: #f9f9f9;
      padding: 50px 0;
      position: relative;
    }
    .banner img {
      border-radius: 15px;
      width: 100%;
      height: 400px;
    }
    .banner-content {
      padding: 20px;
    }
    .dashed-border {
      border-top: 3px dashed orange;
      margin-top: 20px;
    }
    .highlight {
      color: #f47c2e;
      font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 30px;
    letter-spacing: 2.7px;
      font-family: "Quicksand", sans-serif;
    }
    .cta-btn {
      background-color: #f47c2e;
      color: white;
      border-radius: 30px;
      padding: 10px 20px;
      border: none;
      font-family: "Quicksand", sans-serif;
      font-weight: 700;
    }
.image-banner{
    max-height: 600px;
}
.pet-gallery {
      padding: 50px 0;
      background-color: #f9f9f9;
    }
    .pet-gallery img {
      border-radius: 15px;
      width: 100%;
      height: 300px; /* Adjust the height of the images */
      object-fit: cover; /* Makes sure the images fit the area without being distorted */
    }
    .gallery-item {
      padding: 15px;
    }

      .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      cursor: pointer;
    }
    .gallery-item img {
      width: 100%;
      height: 300px; 
      border-radius: 8px;
      object-fit: cover;
      transition: transform 0.3s ease-in-out;
    }
    .gallery-item:hover img {
      transform: scale(1.1); 
    }
    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 87, 34, 0.8); /* Lớp phủ màu cam bán trong suốt */
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .gallery-item:hover .overlay {
      opacity: 1;
    }
    .plus-circle {
      width: 50px;
      height: 50px;
      background-color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: black;
    }

    .customer-review {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .customer-img {
            border-radius: 50%;
            height: 80px;
            width: 80px;
            object-fit: cover;
        }

        .quote-mark {
            font-size: 50px;
            color: #f39c12;
        }

        .review-text {
            font-style: italic;
            color: #555;
        }

        .customer-name {
            font-weight: bold;
        }

        .review-role {
            color: #27ae60;
        }

        .stars {
            color: #f39c12;
        }

        .side-img img {
            border-radius: 20px;
            object-fit: cover;
            width: 100%;
            height: auto;
        }

        .expert-card {
      text-align: center;
      border-radius: 50%;
      padding: 20px;
    }

    .expert-card img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }

    .expert-container {
      margin-top: 70px;
    }

    .expert-title {
      font-size: 24px;
      font-weight: bold;
    }

    .expert-role {
      color: #ff6347;
      font-size: 18px;
    }

    .social-icons a {
      margin: 0 10px;
      font-size: 20px;
    }

    .news-card {
      border-radius: 15px;
      overflow: hidden;
      transition: box-shadow 0.3s;
      height: 100%;
    }

    .news-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .news-card:hover {
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }

    .news-card .badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background-color: #4CAF50;
      color: white;
      font-size: 14px;
      padding: 8px 12px;
      border-radius: 5px;
    }

    .news-meta {
      font-size: 14px;
      color: #777;
      font-family: "Quicksand", sans-serif;
      
    }

    .news-meta i {
      margin-right: 5px;
    }

    .read-more-btn {
      background-color: #f5f5f5;
      padding: 10px 20px;
      border-radius: 25px;
      font-weight: bold;
      color: #333;
      text-decoration: none;
      transition: background-color 0.3s;
       font-family: "Quicksand", sans-serif;
       text-decoration: none;
    }

    .read-more-btn:hover {
      background-color: #f39c12;
      list-style: none;
      text-decoration: none;
      color: #fff;
    }
   .footer{
    background-color: #222222;
    font-family: "Quicksand", sans-serif;
    color: #fff;
   }
   .comment-service{
    margin-top: 70px;
   }



    </style>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
     
     <div class="logo">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{ asset('assets/pethaven/public/img/Red & Orange Simple Petshop Logo.png')}}" alt="Pet Planet Logo"> <!-- Thay thế src với đường dẫn logo của bạn -->
        </a>
     </div>
   
     
        <div class="collapse navbar-collapse">
            <ul class="col-8 navbar-nav mr-auto w-100 justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">dk</a>

                </li> --}}
            </ul>

       <div class="row">
        <ul class="col-3 navbar-nav justify-content-around">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-shopping-cart fa-xl" style="color: #222222;"></i>
                <span class="shopping-cart-items-count">0</span>
                </a>
            </li>
            
            <li class="nav-item">
              @if (!Auth::check())
                <a href="{{route('register')}}" class="nav-link"><i class="fas fa-user fa-xl" style="color: #222222;"></i></a>
          
              </li>
              @else
            {{-- <li class="nav-item">
              <a href="{{route('register')}}" class="nav-link" data-toggle="modal" data-target="#registerModal">
                  <i class="fas fa-user fa-xl" style="color: #222222;"></i>
              </a>
          </li> --}}
          <li class="nav-item">
            <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">Xin chao,{{Auth::user()->name}}</a>
                {{-- lay du lieu nguoi dung da dang nhap trong user --}}
            <ul class="sub-menu collapse" id="submenu-1-2">
                <li class="nav-item"><a href="{{route('logout')}}">Dang xuat</a></li>
               
            </ul>
        </li>
       
  
   
        @endif
          
        </ul>

      
        <form class="search-input ml-3">
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
        </form>
       </div>
           
        </div>
    </div>
</nav>
</header>


@yield('body')



<script src="js/bootstrap.bundle.min.js"></script>

<footer class="footer pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row">
      
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
        <h5 class="mb-4 font-weight-bold">
          <img src="{{ asset('assets/pethaven/public/img/Red & Orange Simple Petshop Logo.png')}}" alt="Pet Planet Logo" style="height: 40px;">
          PET HAVEN MEDIA
        </h5>
        <p>Họ tiêu diệt kẻ thù không bằng những mũi tên dễ dàng. Một cách khôn ngoan, bây giờ chúng ta sẽ phải chịu đau đớn.</p>
        <div>
          <a href="#"><i class="fab fa-twitter fa-lg text-white mr-3"></i></a>
          <a href="#"><i class="fab fa-facebook fa-lg text-white mr-3"></i></a>
          <a href="#"><i class="fab fa-pinterest fa-lg text-white mr-3"></i></a>
          <a href="#"><i class="fab fa-instagram fa-lg text-white"></i></a>
        </div>
      </div>

  
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Danh mục</h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">Giới thiệu</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Dịch vụ</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Sản phẩm</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Tin tức</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Liên hệ</a></p>
      </div>

   
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Phòng trưng bày</h5>
        <div class="row">
          <div class="col-4 mb-3"><img src="{{ asset('assets/pethaven/public/img/pet1.jpg')}}" class="img-fluid" alt=""></div>
          <div class="col-4 mb-3"><img src="{{ asset('assets/pethaven/public/img/pet2.jpg')}}" class="img-fluid" alt=""></div>
          <div class="col-4 mb-3"><img src="{{ asset('assets/pethaven/public/img/pet3.jpg')}}" class="img-fluid" alt=""></div>
          <div class="col-4 mb-3"><img src="{{ asset('assets/pethaven/public/img/pet4.jpg')}}" class="img-fluid" alt=""></div>
          <div class="col-4 mb-3"><img src="{{ asset('assets/pethaven/public/img/pet5.jpg')}}" class="img-fluid" alt=""></div>
         
        </div>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold">Liên hệ</h5>
        <p><i class="fas fa-map-marker-alt mr-3"></i> 1073/23 Cách Mạng Tháng 8, P.7, Q.Tân Bình, TP.HCM</p>
        <p><i class="fas fa-phone mr-3"></i> (+84) 0313728397</p>
        <p><i class="fas fa-clock mr-3"></i> Thứ 2 - Thứ 6: 09:00 - 18:00</p>
        <p><i class="fas fa-envelope mr-3"></i> info@pethaven.global</p>
      </div>
    </div>

  
  </div>
</footer>

</body>
<script>
    function xemChiTiet(imageUrl) {
  
      document.getElementById('modalImage').src = imageUrl;
      var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
      myModal.show();
    }
  </script>
</html>