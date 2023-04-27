
<?php
session_start();
include 'databasecon.php';
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$insertquery = "insert into signupform (email) VALUES ('$email')";
	$iquery = mysqli_query($con, $insertquery);

	if ($iquery) {
			header('location:thanks.html');
			} else {
				echo("error");
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-----Favicon----->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">  

    <!-----Google Fonts-----> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;900&display=swap" rel="stylesheet">

    <!-----Font Awesome----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-----Glidejs----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">

    <!-----Animate Css----->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-----Custom Css----->
    <link rel="stylesheet" href="styles.css">

    <title>SuvidhaKart</title>
</head>
<body class="">
    <!-----Header----->
   <div class="preloader" id="preloader">
       <div class="loader"></div>
   </div>

   <div class="adverts">
       <marquee><span><i style="color: skyblue;" class="fas fa-syringe"></i>
        30% Off For Fully Vacinated People!
        <i style="color: skyblue;" class="fas fa-syringe"></i></span></marquee>
   </div>

    <header class="header" id="home">
        <nav class="navigation">
            <div class="nav-center container">
            <a href="#home" class="logo">
                <h1>SUVIDHA<span>K</span>ART</h1>
            </a>

            <div class="nav-menu">
            <div class="nav-top">
                <div class="logo">
                    <h1>SUVIDHA<span>K</span>ART</h1>
                </div> 
                <div class="close">
                <i class="fas fa-times"></i>

                </div>
               </div>

               <ul class="nav-list">
                   <li class="nav-item">
                       <a href="#home" class="nav-link scroll-link">Home</a>
                   </li>
                <li class="nav-item">
                    <a href="#new" class="nav-link scroll-link">New</a>
                </li>
                <li class="nav-item">
                    <a href="#recent" class="nav-link scroll-link">Recent</a>
                </li>
                <li class="nav-item">
                    <a href="#blog" class="nav-link scroll-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="contact us.html" class="nav-link ">CONTACT US</a>
                </li>

            </ul>
              </div>
              <div class="nav-icons">
                  <a style="color: #f60091;" href="login.php"><span><i class="fas fa-user"></i></span></a>
                  <span style="color: #f60091;"><i class="fas fa-search"></i></span>
                  <a style="color: #f60091;" href="cart.html"><span><i class="fas fa-shopping-cart"></i></span></a>
              </div>
              <div class="hamburger">
                <i class="fas fa-bars"></i>
              </div>
            </div>
        </nav>
    </header>

    <!-----End Header----->

    <!-----Main----->
    <main>
        <!-----Hero----->
        <section class="hero">
            <div class="glide" id="glide1">
                <div class="glide__track" data-glide-el="track">
                  <ul class="glide__slides glide__hero">
                    <li class="glide__slide">
                    <div class="banner">
                        <div class="banner-content">
                            <span>New Inspiration 2021</span>
                            <h1>CLOTHING MADE FOR YOU!</h1>
                            <h3>Trending from men and women style collection</h3>
                            <div class="bottons-group">
                                <button type="button"><a style="color: white;" href="shopping_mens.html">Shop men's</a></button>
                                <button type="button"><a style="color: #f60091;" href="Shopping_western_wear.html">Shop women's</a></button>
                            </div>
                        </div>
                       <img class="special_01" src="hero-1.png" alt="">
                    </div>
                   </li>
                   <li class="glide__slide">
                    <div class="banner">
                        <div class="banner-content">
                            <span>New Inspiration 2021</span>
                            <h1>CLOTHING MADE FOR YOU!</h1>
                            <h3>Trending from men and women style collection</h3>
                            <div class="bottons-group">
                               <button type="button"><a style="color: white;" href="shopping_mens.html">Shop men's</a></button>
                                <button type="button"><a style="color: #f60091;" href="Shopping_western_wear.html">Shop women's</a></button>
                            </div>
                        </div>
                       <img class="special_02" src="menbanner-removebg.png" alt="">
                    </div>
                   </li>
                   <li class="glide__slide">
                    <div class="banner">
                        <div class="banner-content">
                            <span>New Inspiration 2021</span>
                            <h1>CLOTHING MADE FOR YOU!</h1>
                            <h3>Trending from men and women style collection</h3>
                            <div class="bottons-group">
                                <button type="button"><a style="color: white;" href="shopping_mens.html">Shop men's</a></button>
                                <button type="button"><a style="color: #f60091;" href="Shopping_western_wear.html">Shop women's</a></button>
                            </div>
                        </div>
                       <img class="special_03" src="handbag.png" alt="">
                    </div>
                   </li>
                  </ul>
                </div>
    <!-----Glide Arrows----->
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-arrow-right"></i></button>
    </div>
              </div>
        </section>
        <!-----CATEGORY----->
        <section class="section category">
            <h2 class="title">Allow your style to match your ambition!</h2>
            <div class="category-center container">
                <div class="category-box">
                    <img src="cutebag.jpg" alt="">
                    <div class="content">
                        <h2>Shop For Women</h2>
                        <span>20-50% Off</span>
                        <a href="Shopping_saree.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="mencateg.jpg" alt="">
                    <div class="content">
                        <h2>Shop For Men</h2>
                        <span>Starting At ₹1099</span>
                        <a href="shopping_mens.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="Kidswear.jpg" alt="">
                    <div class="content">
                        <h2>Shop For Kids</h2>
                        <span>Flat 50% Off</span>
                        <a href="shopping_kids.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 class="title">Beauty & Personal Care </h2>
            <div class="category-core container">
                <div class="category-box">
                    <img src="perfumes.jpg" alt="">
                    <div class="content">
                        <h2>Perfume & Body Mist</h2>
                        <span>Upto 50% Off</span>
                        <a href="shopping_perfume.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="makeup.jpg" alt="">
                    <div class="content">
                        <h2>Best Makeup</h2>
                        <span>HALF PRICE Store</span>
                        <a href="shopping_makeup.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="skincare.jpg" alt="">
                    <div class="content">
                        <h2>Skin & BodyCare</h2>
                        <span>Flat 40% Off</span>
                        <a href="shopping_skincare.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="haircare.jpg" alt="">
                    <div class="content">
                        <h2>HairCare</h2>
                        <span>Buy 1 Get 1 FREE</span>
                        <a href="shopping_haircare.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 class="title">Jewellery & Accessories </h2>
            <div class="category-core container">
                <div class="category-box">
                    <img src="Jewellery.jpg" alt="">
                    <div class="content">
                        <h2>Jewellery</h2>
                        <span>Starting At ₹999</span>
                        <a href="shopping_jewellary.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="bags.jpeg" alt="">
                    <div class="content">
                        <h2>HandBags</h2>
                        <span>20-50% Off</span>
                        <a href="shopping_bags.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="spectswomen.jpeg" alt="">
                    <div class="content">
                        <h2>EyeWear</h2>
                        <span>Upto 60% Off</span>
                        <a href="shopping_sunglasses.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="Watch.jpeg" alt="">
                    <div class="content">
                        <h2>Watches & Wearables</h2>
                        <span>Flat 10% Off</span>
                        <a href="Shopping_watches.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 class="title">Home Furnishing & Decor </h2>
            <div class="category-axis container">
                <div class="category-box">
                    <img src="sofaimg.jpg" alt="">
                    <div class="content">
                        <h2>Sofaset</h2>
                        <span>Upto 30% Off</span>
                        <a href="shopping_sofaset.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="bedsheetimg.jpg" alt="">
                    <div class="content">
                        <h2>Bedsheets & Cushion</h2>
                        <span>Starting At ₹499/-</span>
                        <a href="shopping_bedsheet.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="homedecor.jpeg" alt="">
                    <div class="content">
                        <h2>Home Decors</h2>
                        <span>Min. 20% Off</span>
                        <a href="shopping_decor.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="curtainsand.jpg" alt="">
                    <div class="content">
                        <h2>Curtains</h2>
                        <span>Buy 1 Get 1 FREE</span>
                        <a href="Shopping_curtain.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="lampsandlights.jpg" alt="">
                    <div class="content">
                        <h2>Lamps & Lights</h2>
                        <span>Starting At ₹299/-</span>
                        <a href="shopping_lamp.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 class="title">Latest Gadgets and Electronics 2021 </h2>
            <div class="category-core container">
                <div class="category-box">
                    <img src="smartwearbles.jpg" alt="">
                    <div class="content">
                        <h2>Smart Wearables</h2>
                        <span>Starting At ₹599/-</span>
                        <a href="shopping_smartwatch.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="JBLSpeakers.jpg" alt="">
                    <div class="content">
                        <h2>Speakers</h2>
                        <span>Min. 10% Off</span>
                        <a href="shopping_speaker.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="headp.jpg" alt="">
                    <div class="content">
                        <h2>Headphones</h2>
                        <span>Buy 1 Get 1 FREE</span>
                        <a href="shopping_headphone.html">Shop Now</a>
                    </div>
                </div>
                <div class="category-box">
                    <img src="phones.jpg" alt="">
                    <div class="content">
                        <h2>Smartphones</h2>
                        <span>First Time On Discount</span>
                        <span>Min. 30% Off</span>
                        <a href="shopping_smartphone.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section sort-category">
            <div class="title-container">
                <div class="section-titles">
                    <div class="section-title active filter-btn" data-id="trend">
                        <span class="dot"></span>
                        <h1 class="primary-title">Trending Products</h1>
                    </div>
                </div>
                <div class="section-titles">
                    <div class="section-title filter-btn" data-id="special">
                        <span class="dot"></span>
                        <h1 class="primary-title">Special Products</h1>
                    </div>
                </div>
                <div class="section-titles">
                    <div class="section-title filter-btn" data-id="featured">
                        <span class="dot"></span>
                        <h1 class="primary-title">Featured Products</h1>
                    </div>
                </div>
            </div>
            <div class="product-center container">
                <div class="product">
                    <div class="product-header">
                        <img src="bestsuits.jpg" alt="">
                    </div>
                    <div class="product-footer">
                        <h3>Kurtas & Suits</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="product-price">
                            <h4>₹299</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="cart.html">
                                  <i class="fas fa-shopping-cart"></i>
                              </a>
                            </li>
                           
                            <li>
                                <a href="wishlist.html">
                                    <i class="far fa-heart"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                              </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-----Featured Categories---->
        <div class="categories">
            <div class="row">
                <div class="col-3">
                    <img src="" alt="">
                </div>
                <div class="col-3"></div>
                <div class="col-3"></div>
            </div>
        </div>
    <!-----Gallary----->

    <section class="gallary container">
        <figure class="gallary-item item-1">
            <img src="bridallahenga.jpg" alt="" class="gallary-img">
            <div class="content">
                <h2>Upto 50% Off on<br> Wedding Season!</h2>
                <a href="Shopping_bridal-lahenga.html">View more</a>
            </div>
        </figure>

        <figure class="gallary-item item-2">
            <img src="summershopping.jpg" alt="" class="gallary-img">
            <div class="content">
                <h2>Summer Collections</h2>
            </div>
        </figure>

        <figure class="gallary-item item-3">
            <img src="Wintercoll.jpg" alt="" class="gallary-img">
            <div class="content">
                <h2>Winter Collections </h2>
            </div>
        </figure>

        <figure class="gallary-item item-4">
            <img src="bestfriendshop.jpg" alt="" class="gallary-img">
            <div class="content">
                <h2>Our Popular Products</h2>
            </div>
        </figure>
    </section>

    <br><br>
    <h2 style="background-color: #d1e2e9; text-align: center; font-weight: 500;">Biggest BRAND On SALE!</h2>
    <section class="section brands container">
        <div class="glide" id="glide2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                    <img src="allensolly.jfif" alt="">
                </li>
                <li class="glide__slide">
                    <img src="tommyhilfiger.png" alt="">
                </li>
                <li class="glide__slide">
                    <img src="peter england.png" alt="">
                </li>
                <li class="glide__slide">
                    <img src="puma.png" alt="">
                </li>
                <li class="glide__slide">
                    <img src="biba.png" alt="">
                </li>
                <li class="glide__slide">
                    <img src="libas.png" alt="">
                </li>
                <li class="glide__slide">
                    <img src="Marks-Spencer.jpg" alt="">
                </li>
              </ul>
            </div>
          </div>
    </section>
    <!-----Latest Products----->
    <section class="section latest-products" id="new">
        <div class="title-container">
            <div class="section-titles">
                <div class="section-title active filter-btn" data-id="latest">
                    <span class="dot"></span>
                    <h1 class="primary-title">New Arrivals</h1>
                </div>
            </div>
        </div>
        <div class="latest-center product-center container">

        </div>

    </section>
    <!-- blog -->
    <section class="section blog" id="blog">
        <div class="title-container">
          <div class="section-titles">
            <div class="section-title active">
              <span class="dot"></span>
              <h1 class="primary-title">Blogs</h1>
            </div>
          </div>
        </div>
  
        <div class="blog-container container">
          <div class="glide" id="glide3">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
                  <div class="blog-card">
                    <div class="card-header">
                      <img src="blog1.jpg" alt="">
                    </div>
                    <div class="card-footer">
                      <h3>Shopping gets you the list of your desires.</h3>
                      <span>By Admin</span>
                      <p>Today the retail Online shopping is a multi-billion dollar industry in the worldwide. 
                          Its allow allows consumers to directly buy goods or services.</p>
                      <a href="https://www.kmslh.com/top-10-customer-experience-blogs-written/"><button>Read More</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="blog-card">
                    <div class="card-header">
                      <img src="family.jpg" alt="">
                    </div>
                    <div class="card-footer">
                      <h3>An exciting place for the whole family to shop.</h3>
                      <span>By Admin</span>
                      <p>Your toddler will feel valued if you ask her to help you shopping. 
                          You can ask her to pick things. 
                          It is also a nice way to teach her many things. </p>
                      <a href="https://beingrubitah.com/shopping-at-the-mall-with-a-toddler/"><button>Read More</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="blog-card">
                    <div class="card-header">
                      <img src="summer.jpg" alt="">
                    </div>
                    <div class="card-footer">
                      <h3>Summer Holiday Destinations For Perfect Family Vacations.</h3>
                      <span>By Admin</span>
                      <p>Family holidays are an essential part of the summer break. Until now, 
                          science has not been able to make any definite statements about
                           how long a relaxing breaks from everyday life.</p>
                      <a href="https://www.bucketlistly.blog/posts/best-travel-blogs-design"><button>Read More</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="blog-card">
                    <div class="card-header">
                      <img src="blogmask.jpg" alt="">
                    </div>
                    <div class="card-footer">
                      <h3>Stay Safe Wear A Mask!</h3>
                      <span>By Admin</span>
                      <p>We appropriate facial covering for all indoor spaces and crowded outdoor spaces. Additionally, 
                          businesses will be held responsible if they allow entry to anyone not wearing a mask.</p>
                      <a href="https://www.orange-business.com/en/blogs/safe-shopping-impact-covid-19-retail"><button>Read More</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="blog-card">
                    <div class="card-header">
                      <img src="pizza.jpg" alt="">
                    </div>
                    <div class="card-footer">
                      <h3>Enjoy pepperoni pizza with mushrooms and spices.</h3>
                      <span>By Admin</span>
                      <p>All the flavor, not on your dreams.Already prepared Habitually on time An oasis of delight As nature prepares us Supreme pizza in the world!</p>
                      <a href="https://www.eliteworldhotels.com.tr/blog-en/food-drink/the-delicious-story-of-the-pizza.4.23.aspx"><button>Read More</button></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    <!-----Recent Products----->
    <section class="section recent-products" id="recent">
        <div class="title-container">
            <div class="section-titles">
              <div class="section-title active filter-btn" data-id="recent">
                <span class="dot"></span>
                <h1 class="primary-title">Recent View</h1>
              </div>
            </div>
          </div>

          <div class="recent-center product-center container">

          </div>
    </section>

    <!-----Facility----->
    <section class="facility section" id="facility">
        <div class="facility-container container">
            <div class="facility-box">
                <div class="facility-icon">
                    <i class="fas fa-plane"></i>
                </div>
                <p>FREE SHIPPING FOR EVERY PURCHASE</p>
            </div>
            <div class="facility-box">
                <div class="facility-icon">
                    <i class="far fa-credit-card"></i>
                </div>
                <p>50% CASKBACK ON ONLINE PAYMENT</p>
            </div>
            <div class="facility-box">
                <div class="facility-icon">
                    <i class="fas fa-truck"></i>  
                </div>
               <p>HOME DELIVERY AVAILABLE</p>
           </div>
           <div class="facility-box">
            <div class="facility-icon">
                <i class="fas fa-lightbulb"></i> 
            </div>
           <p>24/7 ONLINE SUPPORT</p>
          </div>
        </div>
     </div>
    </section>
    <!-----Popup----->
    <div class="popup">
        <div class="popup-content">
            <div class="popup-close">
                <i class="fas fa-times"></i>
            </div>
            <div class="popup-left">
                <div class="popup-img">
                    <img src="popupimg.jpg" alt="popup">
                </div>
            </div>
            <div class="popup-right">
                <div class="right-content">
                    <h1>Get Discount <span>30%</span>Off </h1>
                    <p>SUBSCRIBE to our payletter and save 30% for your next purchase!</p>
                    <form action="#" method="POST" class="form">
                        <input name="email" type="email" placeholder="Enter Your Email..." class="popup-input" required>
                        <button name="submit" type="submit" style="font-size: large; font-weight: 700; border-radius: 3rem; border:1px solid var(--grey2); padding:1.8rem 5rem ;">
                            SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!-----End Main----->

    <!-----Footer----->
    <footer id="footer" class="section footer">
        <div class="container">
          <div class="footer-container">
            <div class="footer-center">
              <h3>EXTRAS</h3>
              <a href="#">Brands</a>
              <a href="#">Gift Certificates</a>
              <a href="#">Affiliate</a>
              <a href="#">Specials</a>
              <a href="#">Site Map</a>
            </div>
            <div class="footer-center">
              <h3>INFORMATION</h3>
              <a href="#">About Us</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">Contact Us</a>
              <a href="#">Site Map</a>
            </div>
            <div class="footer-center">
              <h3>MY ACCOUNT</h3>
              <a href="#">My Account</a>
              <a href="#">Order History</a>
              <a href="#">Wish List</a>
              <a href="#">blogletter</a>
              <a href="#">Returns</a>
            </div>

            <div class="footer-center">
                <h3>FOLLOW US</h3>
                <a href="https://www.facebook.com/profile.php?id=100070055935383"><i style="color: rgb(72, 140, 243);" class="fab fa-facebook"></i>  Facebook Page</a>
                <a href="https://www.instagram.com/suvidhakart/"><i style="color: rgb(236, 38, 147);" class="fab fa-instagram"></i>  Instagram Page</a>
                <a href="https://twitter.com/suvidhakart?s=08"><i  style="color: rgb(42, 179, 233);" class="fab fa-twitter-square"></i>  Twitter</a>
                <a href="https://www.linkedin.com/in/suvidhakart-webpage-9b2590217/"><i style="color: rgb(8, 95, 224);" class="fab fa-linkedin"></i>  Linkedin</a>
                <a href="https://chat.whatsapp.com/LeiW2VfCgxoEsZMzlvuhe8"><i  style="color: rgb(16, 241, 16);" class="fab fa-whatsapp"></i>  Whatsapp</a>
              </div>
                
            <div class="footer-center">
              <h3>CONTACT US</h3>
              <div>
                <span>
                  <i style="color: red;" class="fas fa-map-marker-alt"></i>
                </span>
                42 Dream House, Dreammy street, 7131 Dreamville, USA
              </div>
              <div>
                <span>
                  <i style="color: rgb(255, 166, 0);" class="far fa-envelope"></i>
                </span>
                company@gmail.com
              </div>
              <div>
                <span>
                  <i style="color: rgb(243, 120, 72);" class="fas fa-phone"></i>
                </span>
                456-456-4512
              </div>
              <div>
                <span>
                  <i style="color: rgb(72, 223, 243);" class="far fa-paper-plane"></i>
                </span>
                Dream City, USA
              </div>
            </div>
          </div>
        </div>
        </div>
      </footer>

    <!-----End Footer----->

    <!-----Glidejs----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    
    <!-----Scripts----->
    <script src="./js/index.js"></script>
    <script src="./js/product.js"></script>
    <script src="./js/slider.js"></script>
</body>
</html>