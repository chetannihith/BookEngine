
<!-- fgh  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- External CSS -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Font Awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="icon" type="image/svg"  href="./img/bookfavicon.svg" />
    <title>BookEngine </title>
  </head>
  <body>
<?php

?>

    <!-- Header Start  -->
    <header class="header">
      <!-- Header 1 Start  -->
      <div class="header-1">
        <a href="#" class="logo"><i class="fas fa-book"></i> BookEngine</a>
        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="Search..."
            id="search-box"
          />
          <label for="search-box" type="submit" class="fas fa-search"></label>
        </form>
        <div class="icons">
          <div id="search-btn" class="fas fa-search"></div>
          <a href="#" class="fas fa-heart-circle-check"></a>
          <a href="cart.php" class="fas fa-shopping-cart"></a>
          <a id="login-btn" class="fa-solid fa-user" href="./login.php"></a>
        </div>
      </div>
      <!-- Header 1 End -->

      <!-- Header 2 Start -->
      <div class="header-2">
        <div class="navbar">
          <a class="active" href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#populer">Popular</a>
          <a href="#member">Member</a>
          <a href="#new">New</a>
          <a href="#reviews">Reviews</a>
          <a href="#blogs">Blogs</a>
        </div>
      </div>
      <!-- Header 2 End -->
    </header>
    <!-- Header End -->

    <!-- Bottom Navbar Start -->
    <div class="bottom-navbar">
      <a href="#home" class="fas fa-home"></a>
      <a href="#about" class="fas fa-people-group"></a>
      <a href="#populer" class="fas fa-fire"></a>
      <a href="#member" class="fas fa-user-plus"></a>
      <a href="#new" class="fas fa-book-bookmark"></a>
      <a href="#reviews" class="fas fa-star"></a>
      <a href="#blogs" class="fas fa-newspaper"></a>
    </div>
    <!-- Bottom Navbar End -->

    <!-- Home Section Start -->
    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>Books Feed Your Soul</h3>
          <p>Exercise to the body is the same as reading to the mind.
            Prepare to enter the incredible world of literature.
          </p>
          <a href="#populer" class="btn">Shop Now !</a>
        </div>

        <div class="swiper books-slider">
          <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"
              ><img src="./img/book-1.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="./img/book-2.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="./img/book-3.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="./img/book-4.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="./img/book-5.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="./img/book-6.png" alt=""
            /></a>
          </div>
          <img src="./img/stand.png" class="stand" alt="" />
        </div>
      </div>
    </section>
    <!-- Home Section End -->

    <!-- About Us Start -->
    <section id="about" class="about">
      <div class="container">
        <h1>WHY CHOOSE US?</h1>
        <div class="row">
          <div class="image">
            <img src="./img/img4.svg" alt="" />
          </div>

          <div class="content">
            <h3>best book store in the world</h3>
            <p>We have the books from the best authors of the world with their latest works that will captivate
              your senses to imagine the world writer wants to see.
            </p>
            <p>
              Always be ready to check our latest stock so you don't miss out on the great works of the best seller authors.
            </p>
            <div class="icons-container">
              <div class="icons">
                <i class="fas fa-shield"></i>
                <span>save delivery</span>
              </div>
              <div class="icons">
                <i class="fas fa-wallet"></i>
                <span>easy payments</span>
              </div>
              <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 service</span>
              </div>
            </div>
            <a href="./404Error.php" class="btn">learn more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us End -->

    <!-- Popular Book Start -->
    <section class="populer" id="populer">
      <h1 class="heading"><span> Popular Books </span></h1>
      <div class="swiper populer-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-1.png" alt="" />
            </div>
            <div class="content">
              <h3>A</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-2.png" alt="" />
            </div>
            <div class="content">
              <h3>B</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-3.png" alt="" />
            </div>
            <div class="content">
              <h3>C</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-4.png" alt="" />
            </div>
            <div class="content">
              <h3>D</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-5.png" alt="" />
            </div>
            <div class="content">
              <h3>E</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-6.png" alt="" />
            </div>
            <div class="content">
              <h3>F</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-7.png" alt="" />
            </div>
            <div class="content">
              <h3>G</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-8.png" alt="" />
            </div>
            <div class="content">
              <h3>H</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="icons">
              <a href="#populer" class="fas fa-search"></a>
              <a href="#populer" class="fas fa-heart-circle-plus"></a>
              <a href="#populer" class="fas fa-info"></a>
            </div>
            <div class="image">
              <img src="./img/book-9.png" alt="" />
            </div>
            <div class="content">
              <h3>I</h3>
              <div class="price">Rs.125</div>
              <a href="#populer" class="btn">Add To Cart</a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>
    <!-- Popular Book End -->

    <!-- Member Start -->
    <section id="member" class="member">
      <div class="container">
        <h1>BECOME A MEMBER!</h1>
        <div class="row">
          <div class="content">
            <h3>
              Join Our <span>Member</span> And<br />
              Get Notify For <span>New Updates!</span>
            </h3>
            <p>
              By being a member of our community you will get coupons of upto 40%.  
              You can also refer our website to others and for each successful  referral you will get a coupon of 
              Rs.50 for the purchasing.
            </p>
            <p>
              Get notified when we have offers available for grab and not miss it.
            </p>
            <form action="notify_subscribers.php" method="post"> 
              <input
                type="email"
                name="email"
                placeholder="Enter your email..."
                id=""
                class="box"
                required
              />
              <input type="submit" value="get notify" class="btn" />
              <a href="./member.php" class="btn">Join Member</a>
            </form>
          </div>
          <div class="image">
            <img src="./img/img5.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Member End -->

    <!-- New Book Start -->
    <section class="new" id="new">
      <h1 class="heading"><span>New Books</span></h1>

      <!-- New Books  Section 1 Starts-->
      <div class="swiper new-slider">
        <div class="swiper-wrapper">
          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-1.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-2.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-3.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-4.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-5.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- New Books Section 1 End -->

      <!-- New Books Section 2 Start  -->
      <div class="swiper new-slider-2">
        <div class="swiper-wrapper">
          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-6.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-7.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-8.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-9.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#new" class="swiper-slide box">
            <div class="image">
              <img src="./img/book-10.png" alt="" />
            </div>
            <div class="content">
              <h3>New Books</h3>
              <div class="price">Rs 75 <span>Rs. 90</span></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
      <!-- New Books Section 2 End-->
    </section>
    <!-- New Book End -->

    <!-- Review Start -->
    <section class="reviews" id="reviews">
      <h1>client's reviews</h1>
      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <i class="fas fa-quote-left quote"></i>
            <p>
              One of the best emerging platforms for purchasing books and 3 day delivery if you are living in urban 
              areas.Just excellent service.
            </p>
            <div class="content">
              <div class="info">
                <div class="name">Chetan Vemula</div>
                <div class="job">Web Dev</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="./img/avatar4.png" alt="" />
              </div>
            </div>
          </div>
          <div class="swiper-slide box">
            <i class="fas fa-quote-left quote"></i>
            <p>
              The best ever platform for complaint redressal and return policy, respect for the customers.Hope this will 
              become my go-to site for book purchase.
            </p>
            <div class="content">
              <div class="info">
                <div class="name">Sapare Aravind</div>
                <div class="job">YouTuber</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="./img/avatar2.svg" alt="" />
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-left quote"></i>
            <p>
              This website has not only has the fiction and Novels but also the books on education, entreprenaurship 
              and leadership. Just thought that it is another website with inflated prices, that was far from it.
            </p>
            <div class="content">
              <div class="info">
                <div class="name">Abhinav Vuddagiri</div>
                <div class="job">Programmer</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="./img/avatar5.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="swiper-slide box">
            <i class="fas fa-quote-left quote"></i>
            <p>
              Always with the good recommendation for buying books, when I come to browse I always find at least one book 
              interesting to read. Worth the time spent. 
            </p>
            <div class="content">
              <div class="info">
                <div class="name">Siva Gopal</div>
                <div class="job">Freelancer</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="./img/avatar3.svg" alt="" />
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <i class="fas fa-quote-left quote"></i>
            <p>
              I'm thrilled to be your go-to for book recommendations! There's just something magical about stumbling upon that perfect book, isn't there? Whether it's a captivating story or a mind-blowing non-fiction piece.
            <div class="content">
              <div class="info">
                <div class="name">Nithish Reddy</div>
                <div class="job">Doctor</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
              <div class="image">
                <img src="./img/avatar6.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Review End -->

    <!-- Blogs Start -->
    <section class="blogs" id="blogs">
      <div class="container">
        <h1 class="heading"><span>our daily posts</span></h1>

        <div class="box-container">
          <div class="box">
            <div class="image">
              <img src="./img/blog1.jpg" alt="" />
            </div>
            <div class="content">
              <h3>Experiencing the joy of literature in Nature</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog3.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog2.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog4.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog5.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog6.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog7.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog8.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="image">
              <img src="./img/blog9.jpg" alt="" />
            </div>
            <div class="content">
              <h3>blog title goes here</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod,
                adipisci!
              </p>
              <a href="./404Error.php" class="btn">read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 12st sep, 2022 </span>
                <span> <i class="fas fa-user"></i> by admin </span>
              </div>
            </div>
          </div>
        </div>
        <div id="load-more">load more</div>
      </div>
    </section>
    <!-- Blogs End -->

    <!-- Footer Start -->
    <footer class="footer" id="footer">
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores,
              corporis nostrum? Quam fugiat provident veniam totam rerum eaque
              culpa molestiae ullam eveniet natus incidunt, beatae deleniti
              blanditiis, tempore commodi dolores, tempore commodi dolores.
            </p>
            <br />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              reprehenderit ipsam quas, quasi odio totam vel fuga! Illo sunt
              harum porro excepturi quis culpa atque, soluta est modi omnis
              repellendus.
            </p>
            <div class="social">
              <a href="#footer"><span class="fab fa-facebook-f"></span></a>
              <a href="#footer"><span class="fab fa-twitter"></span></a>
              <a href="#footer"><span class="fab fa-instagram"></span></a>
              <a href="#footer"><span class="fa-brands fa-youtube"></span></a>
            </div>
          </div>
        </div>
        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Gurugram, India</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91 8977906116</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">BookEngineABC@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="">
              <div class="email">
                <div class="text">Email</div>
                <input type="email"placeholder="Email address..." required />
              </div>
              <div class="msg">
                <div class="text">Message</div>
                <input type="text" placeholder="Your message..." required /></input>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
          <span class="credit"
            >Copyright <span class="far fa-copyright"></span
              > 2023
          </span>
          <span> <a href="https://github.com/chetannihith">chetannihith</a> | All rights reserved.</span>
      </div>
    </footer>
    <!-- Footer End  -->

    <!-- Loader Start-->
    <div class="loader-container">
      <!-- Gif Source Link: https://tenor.com/view/gb-notebook-laptop-gif-17733403 -->
      <img src="./img/mainLoader.gif" alt="">
    </div>
    <!-- Loader End -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
