<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Samarqand</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">
   <!-- Javascript file link -->
   <script src="js/registon.js"></script>

   <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
</head>
<body>


<?php include 'components/user_header.php'; ?>

<div class="registon"> 
  <div class="tillarone">
         <a href="../index.php" class="tillartwo">O'zbekcha</a>
         <a href="index.php" class="tillartwo">English</a>
         <a href="../rus/index.php" class="tillartwo">Русский</a>
  </div>
</div>


<div class="home-bg">

<section class="home">


   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>



<section class="category">

   <h1 class="heading">Historical monuments of Samarkand</h1>
   <b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>
   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="registonmaydoni.php" class="swiper-slide slide">
      <img src="images/icon15-15.png" alt="">
      <h3>Registan</h3>
   </a>

   <a href="shohizinda.php" class="swiper-slide slide">
      <img src="images/icon13-13.png" alt="">
      <h3>Shahizinda</h3>
   </a>

   <a href="bibixonim.php" class="swiper-slide slide">
      <img src="images/icon11-11.png" alt="">
      <h3>Bibikhonim</h3>
   </a>

   <a href="al-buxoriy.php" class="swiper-slide slide">
      <img src="images/icon12-12.png" alt="">
      <h3>Al-Bukhari</h3>
   </a>

   <a href="al-motrudiy.php" class="swiper-slide slide">
      <img src="images/icon2-2.png" alt="">
      <h3>Al-Motrudiy</h3>
   </a>

   <a href="doniyor-ota.php" class="swiper-slide slide">
      <img src="images/icon3-3.png" alt="">
      <h3>Father Daniel</h3>
   </a>

 
   <a href="amir-temur.php" class="swiper-slide slide">
      <img src="images/icon4-4.png" alt="">
      <h3>Amir Temur</h3>
   </a>

   <a href="afrosiyob.php" class="swiper-slide slide">
      <img src="images/icon14-14.png" alt="">
      <h3>Afrosiyob</h3>
   </a>

   <a href="shop.php" class="swiper-slide slide">
      <img src="images/icon9-9.png" alt="">
      <h3>All</h3>
   </a>
   
   
   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!-- Effectli rasmdstur kodi boshlandi -->

  
<div class="containercon">
        <div class="section-title">
           
        </div>

        <div class="rowcon">

            <div class="columncon">
                
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/reg2.png" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Registan area</h2>
                            <p>Registon area itself is divided into several parts. These are the following: Tillakori, Sherdor and Ulugbek madrasas. </p>
                            <div class="effect-btn">
                                <a href="registonmaydoni.php" class="btncon"><i class="fa fa-eye"></i>  Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/3reg400.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Tillakori madrasa</h2>
                            <p>Initially, it was called "Nalangtoshbi small madrasa". Later, because the amount of gold used in the decoration of the mosque was enough to build another monument, it was called "goldsmith" (worked with gold).</p>
                            <div class="effect-btn">
                                <a href="3tamadrasalar.php" class="btncon"><i class="fa fa-eye"></i>  Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/2reg400.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Sherdar madrasa</h2>
                            <p>Sherdar madrasa is an architectural monument in Samarkand. As part of the Registan ensemble. Yalangtosh Bahadir was built instead of Mirzo Ulugbek's house. It is located opposite the Ulugbek madrasa.</p>
                            <div class="effect-btn">
                                <a href="3tamadrasalar.php" class="btncon"><i class="fa fa-eye"></i> Read more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/bibixonim9.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Madrasah Bibikhanim</h2>
                            <p>Bibikhanim Jame Mosque (Amir Temur Jame Mosque) is an architectural monument in Samarkand. Amir Temur's eldest wife is related to the name of Bibikhanim (originally Khanim Saraymulk).</p>
                            <div class="effect-btn">
                                <a href="bibixonim.php" class="btncon"><i class="fa fa-eye"></i>  Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/shoxizinda4.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2> Shahizinda </h2>
                            <p>The architectural complex of Shahizinda was founded by the Karakhanid dynasty. The oldest of them is the mausoleum of Qusam ibn Abbas, popularly known as Shahizinda (tomb of the kings).</p>
                            <div class="effect-btn">
                                <a href="shohizinda.php" class="btncon"><i class="fa fa-eye"></i> Read more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Telefon/Home/amir400.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Gori Amir</h2>
                            <p>Gori Amir or Amir Temur mausoleum is an architectural monument in Samarkand. Popularly known as Gori Amir or Gori Mir (Mir Sayyid Baraka).</p>
                            <div class="effect-btn">
                                <a href="amir-temur.php" class="btncon"><i class="fa fa-eye"></i>  Read more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- Effectli rasmdstur kodi tugadi -->





<section class="home-products">

   <h1 class="heading">Information about historical monuments</h1>
<!-- 
   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <input type="submit" value="For travel" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">Information about historical sites is not included!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

</div> -->

</section>


<!-- Sariqli rasm content dastur kodi boshlandi -->

    <div class="wrappermalumot1">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
         <h2 style="font-size: 18px; color: white;">Mausoleum of Imam al-Bukhari</h2>
         <p>Mausoleum of Imam al-Bukhari19583 Imam al-Bukhari, one of the famous founders of the Muslim world, was born in Bukhara on July 21, 810, died in 870 in the village of Khartang, located 25 km from Samarkand (now Chelak district of Samarkand province), and was buried there. In the mausoleum of Imam al-Bukhari, a memorial complex was built according to the architectural traditions of Central Asia. The total area of land allocated for the monument is 10 hectares.
         </p>
         <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="al-buxoriy.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
         </div>
      </div>
    </div>  

     
    <div class="wrappermalumot2">
        <div class="boxmalumot">
          <span><i class="fa fa-bars"></i></span>
          <div class="contentmalumot">

              <h2 style="font-size: 18px; color: white;">Mausoleum of Khoja Daniyor</h2>
          <p>The mausoleum of Khoja Daniyor is an architectural monument in Samarkand. The mausoleum of Khoja Daniyor is one of the most prestigious and famous places of pilgrimage in Samarkand. Representatives of three religions - Islam, Christianity and Judaism - visit Khoja Daniyor's mausoleum as equally sacred and blessed. Daniyor, Daniil, Daniel is the name of a saint in Muslim, Christian and Jewish literature.He came four hundred years before the birth of Amir Temur
          </p>
          <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="doniyor-ota.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
          </div>
       </div>
     </div> 


     <div class="wrappermalumot3">
        <div class="boxmalumot">
          <span><i class="fa fa-bars"></i></span>
          <div class="contentmalumot">

              <h2 style="font-size: 18px; color: white;">  Mausoleum of Amir Temur</h2>
          <p>Mausoleum  of Amir Temur, Gori Amir (end of 14th century - 1405) is an architectural monument in Samarkand. People call him Gori Amir or Gori Mir (Mir Sayyid Baraka). People belonging to the Timurid dynasty were buried in the mausoleum (Amir Temur, his elder Mir Sayyid Baraka, sons Umar-sheikh, Mironshah and Shahrukh, grandsons Muhammad Sultan, Ulugbek, etc.) . Gori Amir is recognized as a unique work of Central Asian architecture.
          </p>
     
          <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="amir-temur.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
          </div>
       </div>
     </div> 


     <div class="wrappermalumot4">
        <div class="boxmalumot">
          <span><i class="fa fa-bars"></i></span>
          <div class="contentmalumot">

              <h2 style="font-size: 18px; color: white;">Statue of Amir Temur</h2>
          <p>Magnificent statues of Amir Temur are located in the cities of Tashkent, Shahrisabz and Samarkand of our country... Tashkent - opened on August 31, 1994 on the eve of independence. Samarkand and Shahrisabz - on October 18, 1996, statues of Amir Temur were ceremonially opened in both cities. 23 of 1996 On October 26, an international conference on "Amir Temur and his place in world history" was organized by UNESCO.
          </p>
       
          <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="#"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
          </div>
       </div>
     </div> 




     <div class="wrappermalumot5">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
            
             <h2 style="font-size: 18px; color: white;">Mirzo Ulugbek Observatory</h2>
         <p>Ulugbek Observatory is one of the rare examples of 15th century architecture in Samarkand, an old astronomical observatory. There were more than ten different astronomical devices and instruments in it. The most important of them is a quadrant device consisting of a double arc with a radius of 40.2 m. There were small instruments in the observatory:  measuring instruments with 2, 4 and 7 rings, and star clocks,and others.
         </p>
         <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="m-rasadxonasi.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
         </div>
      </div>
    </div>  

    <div class="wrappermalumot6">
       <div class="boxmalumot">
         <span><i class="fa fa-bars"></i></span>
         <div class="contentmalumot">
             <h2 style="font-size: 18px; color: white;">Siyab bazar</h2>
         <p>Bibikhanim on one side and Hazrat Khizr mosques on the other, located between Registan and Shahizinda complexes, this market is also a favorite place for tourists. About 2,000 stalls are active in the heat of summer and in the cold of winter. The entrance to the market is through a three-sided arched gate, decorated with blue tiles in the style of craftsmanship that has been preserved for centuries.
         </p>
         <p class="socialmalumot">
             <a href="#"><i class="fa-brands fa-youtube"></i></a>
             <a href="#"><i class="fa-brands fa-facebook"></i></a>
             <a href="#"><i class="fa-brands fa-telegram"></i></a>
             <a href="diqqatsj.php"><i class="fa-solid fa-arrow-right fa-fade"></i></a>
         </p>
         </div>
      </div>
    </div>   
    


<!-- Sariqli rasm content dastur kodi tugadi -->

<div class="section-title"></div>


<!-- CARUCELLLLLLLLLLLLL -->
<div id="container">
    
    
    <input hidden type="radio" name="carousel-control" id="button_a" checked/>
    <input hidden type="radio" name="carousel-control" id="button_b"/>
    <input hidden type="radio" name="carousel-control" id="button_c"/>
    <input hidden type="radio" name="carousel-control" id="button_d"/>            
            
    
    <div id="carousel">
        <div class="p-wrapper">
                    
            <section class="panel_a">
            <span class="bibi">Afrosiyab Castle</span>
              <div  class="bibi2">Afrosiyab is an ancient ruin of Samarkand. This name appears in historical sources in relation to ancient Samarkand only from the 17th century. Ancient Samarkand was called Smarakanve in Sughd sources. Mil. av. After the conquest of Samarkand by the troops of Alexander Maqsuni in the 4th century, Greek authors mentioned it as Marokanda in their diaries. Greek translation of Smarakanve in Morocco. After the Samanids came to power in Movarounnahr, the ancient Smarakanve was called Samarkand from the 9th century. Afrosiab is a vast empty hill adjacent to the northern border of modern Samarkand, its area is 219 ha. Pants of the hill. It is bounded by the Siyob stream. Jean. on the other hand, it was joined to Samarkand, which was called the "old city". Information about the early history of the city is very rare in written sources. Archeological excavations in the old city provide more such information.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Afrosiyob/afrosiyob8.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/Afrosiyob/afrosiyob2.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Archeological excavations allow us to see what cultural layers were several meters thick, to identify the houses of the rich and the poor, workshops of artisans, shops of merchants, streets and squares, royal palaces and temples, mosques and madrasas, defense structures, the city's water supply system, etc. The archaeological materials found in Afrosiab show that Samarkand was established as the central city of Sugdiyona in the 8th-5th centuries BC. In 329 BC, the city was destroyed by the troops of Alexander the Great, traces of which are still well preserved in the city's defense structures. In the 3rd - 1st centuries BC, during the Kushan dynasty, there was a rise in the life of the city.
              </div>
              <div class="bibi3">
               <span><img src="images/Desktop/Afrosiyob/afrosiyob10.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/Afrosiyob/afrosiyob12.webp" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/Afrosiyob/afrosiyob9.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/Afrosiyob/afrosiyob11.webp" alt="Rasm topilmadi" ></span>
              </div>
               <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/search/Afrosiyob+qalasi,+Samarqand/@39.6732965,66.9780477,1853m/data=!3m1!1e3">
                              Map location<i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
               
            </section>
                    
            <section class="panel_b">
            <span class="bibi">Gori Amir mausoleum</span>
              <div  class="bibi2">Tomb of Amir Temur, Gori Amir (end of 14th century - 1405) is an architectural monument in Samarkand. People call him Gori Amir or Gori Mir (Mir Sayyid Baraka). People belonging to the Timurid dynasty (Amir Temur, his elder Mir Sayyid Baraka, sons Umar-sheikh, Mironshah and Shahrukh, grandsons Muhammad Sultan, Ulugbek, etc.) are buried in the mausoleum. Babur said that at first Temur's grandson Muhammad Sultan Mirza built a madrasa in the vicinity of the Samarkand fortress, Tashkurgan. When Muhammad Sultan died (1403), Amir Temur ordered the construction of a mausoleum in his memory. The mausoleum is built in the courtyard of the Madrasah.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/A-Temur/7A-Temur.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/A-Temur/2A-Temur.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/A-Temur/3A-Temur.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/A-Temur/4A-Temur.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              A courtyard with a gate and a mausoleum building have been preserved. As a result of archeological research, the remains of Madrasa and Khanaqah, built by Muhammad Sultan, were found on both sides of the mausoleum courtyard. Madrasa and khanakah chorsi occupied the eastern and western sides of the courtyard. There is a domed mausoleum on the south side of the yard. Go to the mausoleum. from, it is entered through the corridor built by Ulugbek (1424). The shrine hall of the mausoleum has a high ceiling, an arch, and the top is covered with inscription borders and an inner dome. The outer dome is placed on a high plinth with 64 ribs (diameter - 15 m, height 12.5 m). Rows of tombstones are placed in the murabba khazira, which is surrounded by a marble fence in the middle of the shrine. On the upper (net) is the shrine of Mir Sayyid Baraka, who accompanied Amir Temur in his military campaigns and won his high respect. Amir Temur himself was buried at the foot of Sayyid Baraka's grave. There are tombs of Muhammad Sultan, Mironshah, Omarshaikh on three sides of it.
              </div>
              <div class="bibi3">
              <span><img src="images/Desktop/A-Temur/8A-Temur.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/A-Temur/5A-Temur.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/A-Temur/6A-Temur.jpg" alt="Rasm topilmadi" ></span>

                <span><img src="images/Desktop/A-Temur/1A-Temur.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div>
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/Go'r+Amir+Maqbarasi/@39.6485509,66.9646358,604m/data=!3m1!1e3!4m14!1m7!3m6!1s0x3f4d18cc761ff98f:0x8a218422bc21edfa!2sGo'r+Amir+Maqbarasi!8m2!3d39.6485469!4d66.9692492!16zL20vMDRkcmYz!3m5!1s0x3f4d18cc761ff98f:0x8a218422bc21edfa!8m2!3d39.6485469!4d66.9692492!16zL20vMDRkcmYz">
                              Map location <i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
            <section class="panel_c">
                <span class="bibi">Bibikhanim mausoleum</span>
              <div  class="bibi2">Bibikhanim Madrasah is a madrasah built by Amir Temur's elder wife Bibikhanim (Khonim Saraymulk) "in honor of her mother" (Claviho) in Samarkand at the end of the 14th century. Tourist, scientist A. Vamberi said that about 1000 students studied in this madrasa. But it was built before the mosque. This is evidenced by the information of the palace historian Giyosiddin Ali that "Amir Temur stopped at the madrasa on May 10, 1399". Historian Fasih Hawafi (1375-1442) stated that when Amir Temur saw the construction of the Jame Mosque, he was angry because the proportions of the architectural complex were broken - the Madrasa porch and porch were higher and steeper than the Jame Mosque, and he punished the architects (Khoja Mahmud Davud and Muhammad Jald). . Archaeological excavations also confirm this disproportion. No matter how majestic the facade of the building is, it is noticeable that it does not match the building in front of it. According to the requirements of the architectural style, the roof of the Madrasa, which fell inappropriately, was condemned to be demolished. That is why the remains of the Madrasa were demolished in the following years.</div>
              <div class="bibi3">
              <span><img src="images\Desktop\Bibixonim/bibixonim1.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images\Desktop\Bibixonim/bibixonim9.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images\Desktop\Bibixonim/bibixonim10.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images\Desktop\Bibixonim/bibixonim16.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div class="bibi2">
              Next to the madrasa of Bibikhanim, a Tuman ogo house was built for her in the "double" style. Historical sources indicate that this house was built before 1399. It is connected with a large vaulted room with a high dome. The walls are decorated with beautiful flowers and beautiful decorations. The room is very well lit by wide windows on 4 sides, windows and doors. The basement-cistern below is smaller, and the walls are decorated with large gray stones. Several stone coffins are kept in the basement. As a result of the earthquake of 1875, the dome of the basement collapsed, and it became known that there are stones below. From that moment on, a rumor spread among the residents that one of these coffins belonged to Bibikhanim. Archaeological research conducted in 1941 seemed to confirm this story. For this reason, until recently, this room was called Bibikhanim's mausoleum. Subsequent studies clarified this problem. Bibikhanim (Mrs. Saraymulk) was poisoned to death during the crisis years after the death of Amir Temur. The body of the woman in this building was embalmed (so it was brought from a far away place), and according to an anthropologist, it was a middle-aged woman with black and curly hair.
              </div>
              <div class="bibi3">
               <span><img src="images\Desktop\Bibixonim/Bibi-Khanym.webp" alt="Rasm topilmadi" ></span>
               <span><img src="images\Desktop\Bibixonim/bibixonim9.jpg" alt="Rasm topilmadi"></span>
               <span><img src="images\Desktop\Bibixonim/bibixonim14.jpg" alt="Rasm topilmadi"></span>
               <span><img src="images\Desktop\Bibixonim/bibixonim11.jpg" alt="Rasm topilmadi" ></span>
              </div>
              <div>
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/%D0%91%D0%B8%D0%B1%D0%B8+%D0%A5%D0%BE%D0%BD%D1%83%D0%BC+%D0%9C%D0%B0%D1%81%D0%B6%D0%B8%D0%B4%D0%B8/@39.6598724,66.9801815,406m/data=!3m1!1e3!4m6!3m5!1s0x3f4d18b96f1a8c49:0x710d9f233b69199e!8m2!3d39.660748!4d66.9800816!16zL20vMGJzOWsz">
                                 Map location<i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
            <section class="panel_d">
      
                <span class="bibi">mausoleum of Hazrat Khizr</span>
              <div  class="bibi2">Hazrat Khizr Mosque is one of the holy shrines of Samarkand city. It is recognized as the first Muslim mosque and architectural monument in Samarkand. The mosque was built by Qutayba ibn Muslim and named after Hazrat Khizr. According to information, there was a place of worship at first. In the 8th century, Arabs destroyed the temples of fire worshipers. Instead of the temple on this hill, the first mosque building was built by Qutayba ibn Muslim and named after Hazrat Khizr. Our opinion is proved by the inscriptions of 1274 Hijri (1854 Melodic year) and 1302 Hijri year (1884 Melodic year) on the minaret. It was cleaned again and returned to its ancient state.</div>
              <div class="bibi3">
               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir2.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir5.jpg" alt="Rasm topilmadi" ></span>

               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir1.jpg" alt="Rasm topilmadi" ></span>
               
               <span><img src="images/Desktop/Hazrati-Xizr/hazratixizir4.jpg" alt="Rasm topilmadi" ></span>
              </div>
              
              <div class="xarita1">
                        <div class="xarita">
                              <a href="https://www.google.com/maps/place/Hazrati+Xizr+masjidi/@39.6634436,66.9806549,603m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3f4d18bc7a6409bb:0x57e481af408fac1a!8m2!3d39.6634395!4d66.9832298!16s%2Fg%2F11h1st3ym">
                              Map location<i class="fa-sharp fa-solid fa-location-dot"></i>
                              </a>
                     </div>
               </div>
            </section>
                    
        </div> <!-- // .p-wrapper -->
    </div> <!-- // #carousel -->            
            
    
    <div id="navigation">
        <label for="button_a" class="label_a"> <span>1</span> </label>
        <label for="button_b" class="label_b"> <span>2</span> </label>
        <label for="button_c" class="label_c"> <span>3</span> </label>
        <label for="button_d" class="label_d"> <span>4</span> </label>
    </div> <!-- // #navigation -->               
            
    </div> <!-- // #container -->  
<!-- CARUCELLLLLLLLLLLLL tugadi-->

<div class="orqafon">


<p>
    Historical written sources contain information about the antiquity of the age of Samarkand. In the works of Muhammad al-Nasafi "al-Qand fiy zikri ulamoi", Haydar al-Samarkandi (XII century) "Qandiyai Khurd", Abu Tahirkhoja Samarkandi "Samaria", Chinese historian Zhang Xiang, Greek and Roman historians Arrian, Kursi Ruf and many other authors. written about it. Samarkand and Rome were named "Eternal Cities" in reference to their great services to the fate of mankind. The folk saying "Samarkand saikali royi zamin ast" means that Samarkand is the polish of the earth. Amir Temur cherished Samarkand with love and made it the world's jewel.</p>


</div>


<div class="load-more"> <a href="orders.php">More information<i class="fa-solid fa-arrow-right fa-beat-fade"></i></a> </div>

<!-- carusel 1 malumot  boshlandi-->

<div class="container-allbox">
<div class="containerbox">
  <img src="images/Desktop/Hazrati-Xizr/hazratixizir6.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white; font-size:25px;">Hazrat Khizr Mosque</a></span>
</div>
<div class="containerbox">
  <img src=" images/Desktop/Mirzo-U/mirzo-u1.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Mirzo Ulugbek Observatory</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/Shohizinda/shoxizinda9.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Shahizinda</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/Arab-ota/ota1.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Mausoleum of the Arab father</a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/A-Temur-haykali/haykal5.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Mausoleum of the Amir Temur </a></span>
   
</div>
<div class="containerbox">
  <img src="images/Desktop/Afrosiyob/afrosiyob5.jpg" alt="">
  <span class="titlebox"><a href="orders.php" style="text-decoration:none; color:white;  font-size:25px;">Afrosiyab castle</a></span>
   
</div>
</div>
<!-- carusel 1 malumot tugadi-->

<!--  BIRINCHI progresning boshlanish kodi  CIRCLE-->
<div class="samuzbar">
      <b>Statistics of travelers arriving in Samarkand</b>
      <i class="fa fa-line-chart" aria-hidden="true"></i>
   </div>   
    <!--chart start-->
    <div class="chart">
      <ul class="numbers">
        <li><span class="belgisamuz1">100%</span></li>
        <li><span class="belgisamuz2">50%</span></li>
        <li><span class="belgisamuz3">0%</span></li>
      </ul>
      <ul class="bars">
        <li><div class="bar" data-percentage="74"></div><span>March 2020</span></li>
        <li><div class="bar" data-percentage="65"></div><span>April 2020</span></li>
        <li><div class="bar" data-percentage="45"></div><span>March 2021</span></li>
        <li><div class="bar" data-percentage="50"></div><span>April 2021</span></li>
        <li><div class="bar" data-percentage="72"></div><span>March 2022</span></li>
        <li><div class="bar" data-percentage="80"></div><span>Aprel 2022</span></li>
        <li><div class="bar" data-percentage="85"></div><span>May 2023</span></li>
      </ul>
    </div>
    <!--chart end-->

    <script type="text/javascript">
    $(function(){
      $('.bars li .bar').each(function(key, bar){
        var percentage = $(this).data('percentage');
        $(this).animate({
          'height' : percentage + '%'
        },5000);
      });
    });
    </script>
<!--  BIRINCHI progresning tugash kodi BAR-->

<div class="containercon">
        <div class="section-title">
            <h1>Sights of Samarkand</h1>
        </div>

        <div class="rowcon">

            <div class="columncon">
                
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/city/city04.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Samarkand: Silk road</h2>
                            <p>Although the ancient city is not included in the historical site, it is now becoming a very popular place for tourists. Various handicrafts are also found in this city</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/Siyob-bozor/01.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>Siyab bazar</h2>
                            <p>Bibikhanim on one side and Hazrat Khizr mosques on the other, located between Registan and Shahizinda complexes, this market is also a favorite place for tourists.</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i>  Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columncon">
                <div class="effect">
                    <div class="effect-img">
                        <img src="images/Desktop/afrosiyob-muzeyi/muzey11.jpg" alt="">
                    </div>
                    <div class="effect-text">
                        <div class="innercon">
                            <h2>«Afrosiyob» museum</h2>
                            <p>The museum contains rich collections of ceramics, glass, stone, metal, bone, corapilastika, and architectural patterns that illuminate the material culture of Samarkand. These are more than 20,000 artifacts.</p>
                            <div class="effect-btn">
                                <a href="diqqatsj.php" class="btncon"><i class="fa fa-eye"></i> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
           

          
        </div>
    </div>


<!-- tez tez so'raladigan savollar dastur kodi boshlanishi -->
<div class="oftenqs">
    <h1>Frequently asked questions</h1>
    
</div>
<!-- tez tez so'raladigan savollar dastur kodi tugadi -->

<!-- According to ya'ni tez tez beriladigan savollar dastur kodi boshlanishi -->
<div>
<ul class="accordion-menu">
<li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-bounce"></i>
               
                In which regions of the Republic of Uzbekistan are famous ancient historical monuments?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                <li><a href="#">There are famous historical monuments in all regions of the Republic of Uzbekistan, we will list some of them! </a></li>
                     <li><a href="#">Samarkand region: Registan Square, Shahizinda Shrine, Bibikhanim Mosque, Gori Amir Mausoleum, Daniyor Father Shrine, Imam al-Bukhari Mausoleum, Imam al-Moturudi Mausoleum and Ulugbek Observatory.</a> </li>
                     <li><a href="#">Bukhara region: Ismail Samoni mausoleum, Chor Bakr, Bahauddin Naqshband complexes, Magoki Attar mosque, Poi-Kalon ensemble, remains of the ancient city of Poykent and Toshsarai madrasas. <b>These historical monuments were included in the list of Islamic World Heritage of ICYeSCO.</b> </a></li>

                     <li><a href="#">Khorazm region: Khiva city, Ichon-Kal'a Earthen Castle, Frost Castle, Sheep Killed Castle, Guldursun Castle, Pil Castle, It consists of Anka Castle, Lead Castle, Janbas Castle.</a></li>
                     <li><a href="#">Surkhandarya region: Kyrgyz castle, Hakim at-Tirmizi complex, Kokildar father's house, Sultan Saodat complex, Said Waqqos mausoleum, Sayrob sycamore, Teshiktash cave, Khoja Gur Gur Ota district, Sangardak waterfall, Dalvarzintepa monument, Kampirtepa castle, Jarkurgan tower</a></li>
                     <li><a href="#">Kashkadarya region: Abu Ubayd ibn al-Jarrah memorial complex, Karshi bridge, Blue Dome mosque, Qilichboy madrasa, Khoja Abdulaziz madrasa, </a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></ li>
                     <li>
                     <li>
                     <li><a href="#">Namangan region: Bibiona monument in Chust, Sultan Uvais Karani shrine in Chortok, Khoja Amin mausoleum</a></li>
                </ul>
            </li>



            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                How many historical monuments are there in Samarkand region?<b> <i class="fa-solid fa-question fa-beat-fade"></i></b> 
                    
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                <li><a href="#">Samarkand is one of the oldest cities in the world - it has more than 2700 years of history. There are more than 600 buildings of historical significance in the city of Samarkand. Historical written sources contain information about the antiquity of the age of Samarkand. In the works of Muhammad al-Nasafi "al-Qand fiy zikri ulamoi", Haydar al-Samarkandi (XII century) "Qandiyai Khurd", Abu Tahirkhoja Samarkandi "Samaria", Chinese historian Zhang Xiang, Greek and Roman historians Arrian, Kursi Ruf and many other authors. written about it. </a></li>
                     <li><a href="#">Samarkand is one of the oldest cities in the world, equal to Rome, Athens and Babylon. The poets and historians of the past gave it beautiful similes such as "Paradise Garden of the East", "Earth", "Priceless Jewel of the Eastern World", "Ornament of the World Countries", "Rome-like City of the East" etc. they did not give it for nothing. Samarkand received the name "Eternal Cities" in reference to their great services to the fate of mankind. It is not for nothing that the folk saying "Samarkand saikali royi zamin ast" - Samarkand is the polish of the earth's surface. Amir Temur cherished Samarkand with love and made it the center of the world. </a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                        Is there any general information about «Samarkand saikali roi zamin ast»?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                <li><a href="#">Samarkand was part of the Turkish khanate in the 6th century and was governed by local governors. During this period, Samarkand traded with India, Iran, Egypt and Byzantium. In its time, it was known as "10 Arrows Khaganate".</a></li>
                     <li><a href="#">Representatives of the local zamindar population, who actively participated in the suppression of rebellions against the Arabs, were involved in the management of Movarounnahr and its regions from the 20s of the 9th century, for example, the management of Samarkand passed into the hands of the Samanids. From that time, Samarkand became the capital of the Somani state. Since 887, Samanid silver coins were minted in Samarkand for the first time. Even after the transfer of the Samanid capital to Bukhara (889), Samarkand remained one of the largest craft and trade centers of Movarunnahr. Since the 11th century, Samarkand has been a part of the Karakhanid state. During the Karakhanid era, the unification of different countries allowed the development of science and culture. During this period, the importance of Samarkand as an administrative and cultural center increased, expanded and developed.</a></li>
                     <li><a href="#"> 1220 Genghis Khan's troops invaded Samarkand, set fire to the city and killed most of the population, the rest left the city and survived. After a few years, Samarkand began to recover. Marco Polo, a Venetian tourist who came to Samarkand in the second half of the 13th century, wrote that "Sonmarkon is a great and famous city". During the reign of the Mongols, Samarkand was part of the Chigatoi ulus.</a></li>
                     <li><a href="#">In the middle of the 14th century, people's movements against the Mongols took place in Movarounnahr. As a result of the warlords' rebellion, people's power was established in the city for several months. At the end of the 14th century and in the 15th century, the economic, political and cultural life of Samarkand improved considerably. As the capital of Amir Temur's kingdom, Samarkand became world famous. The capital of the Sultanate, Samarkand, flourished during the reign of Amir Temur. Palaces, mosques, madrasahs, mausoleums are built in the city by the hands of architects and builders from Isfahan, Shiraz, Aleppo, Khorezm, Bukhara, Karshi and Kesh. </a></li>
                     <li><a href="#"> In particular, Shodimulk Ago mausoleum, Shirinbeka Ago mausoleum and others will be built belonging to Shahi Zinda architectural complex. Bibikhanim Jame Mosque, Amir Temur's residence Koksaroy and Bostonsaroys rise in the city. In general, the city of Samarkand was completely rebuilt during the reign of Amir Temur. The city was surrounded by a strong fortress wall, and 6 gates named as Ohanin, Shaikhzada, Chorsu, Korizgoh, Sozangaron and Feruza were installed. In the agricultural oases of Movarounnahr, in particular, in the Zarafshan valley, dozens of irrigation networks were built and agricultural areas were expanded.</a></li>
                     <li><a href="#"> "Declaration on the establishment of the Soviet Socialist Republic of Uzbekistan" was adopted at the first founding congress of All-Uzbek Soviets held in Bukhara on February 17, 1925. . The city of Bukhara was chosen as the first capital of the republic. According to the information in the book "Important Dates of the History of Uzbekistan" published by "Uzbekistan" publishing house in 2012, in April 1925, it was moved from the capital of the country, Bukhara, to Samarkand. In 1930, the capital was moved to Tashkent, and until August 31, 1991, it was the capital of the UzSSR, and then of the Republic of Uzbekistan.</a></li>
                     <li><a href="#"> Thanks to its ancient history and architectural monuments, Samarkand has become a real museum city recognized by the whole world. Therefore, by the decision of the government of the republic, in 1982, the "Samarkand State United Historical-Architecture Museum-Reserve" was established based on the Afrosiyob city of Samarkand, architectural monuments built in the Middle Ages and buildings in the "New City" built in the 19th-20th centuries, history and local history museums. In that year, the limits of protection of the historical part of the city were determined.</a></li>
                     <li><a href="#"> The architectural and historical monuments of Samarkand were included in the World Heritage List at the 25th session of UNESCO held in Finland in 2001.</a></li>
                     <li><a href="#">Samarkand is one of the oldest and central cities of world development, a city that has made a great contribution to the treasury of world culture and science. Under the leadership of the President of the Republic of Uzbekistan and the government of the Republic of Uzbekistan, great works were carried out on the restoration and repair of the architectural monuments of the city of Samarkand, especially the reconstruction, repair, and beautification of the old part of the city. The architectural monuments created by the Timurid dynasty are no different from the architectural monuments created in countries such as Egypt, China, India, Greece, and Italy. </a></li>
                     <li><a href="#">Now it belongs to the category of famous cities in the world. Extensive work is being done to improve the condition of historical monuments and preserve them. Samarkand is becoming a beach-friendly city, and tourists from different parts of the world are coming to see the great historical monuments</a></li>
                 </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                <i class="fa-solid fa-question fa-beat-fade"></i>
                What are the most famous historical monuments in Samarkand and which historical monuments do tourists visit?
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems">
                    <li><a href="#">There are many famous historical monuments in Samarkand, and conditions have been created to visit all of them. Among them, the most visited historical monuments are the following:</a></li>
                    <li><a href="registonmaydoni.php">Registon area </a></li>
                    <li><a href="shohizinda.php">Shahizinda </a></li>
                    <li><a href="bibixonim.php">Bibixonim mosque (1399-1404)</a></li>                  
                    <li><a href="3tamadrasalar.php">Tillakori Mausoleum (1647-1659/6</a></li>
                    <li><a href="3tamadrasalar.php">Sherdor Mausoleum (1619-1635/36)</a></li>
                    <li><a href="3tamadrasalar.php">Ulugbek Mausoleum (1417-1420)</a></li>
                    <li><a href="amir-temur.php">Goʻri Amir Mausoleum (1404)</a></li>
                    <li><a href="doniyor-ota.php">Doniyor ota Mausoleum</a></li>
                    <li><a href="al-buxoriy.php">Imom al-Buxoriy Mausoleum</a></li>
                    <li><a href="al-motrudiy.php">Imom al-Moturudiy Mausoleum</a></li>
                    <li><a href="m-rasadxonasi.php">Ulugbek observatory(1428-1429)</a></li>
                </ul>
            </li>
           
        </ul>
        </div>
    <script >let listElements = document.querySelectorAll('.link');

        listElements.forEach(listElement => {
            listElement.addEventListener('click', ()=>{
                if (listElement.classList.contains('active')){
                    listElement.classList.remove('active');
                }else{
                    listElements.forEach (listE => {
                        listE.classList.remove('active');
                    })
                    listElement.classList.toggle('active');
                }
            })
        });</script>


<!-- According to ya'ni tez tez beriladigan savollar dastur kodi tugashi -->

<div class="lavha1">Location of Samarkand on the map</div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d669974.0111500308!2d66.1740052527628!3d39.85124753676018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d192105ad6575%3A0x3dd6eaee02d96aa6!2sSamarqand%20viloyati%2C%20O%60zbekiston!5e1!3m2!1suz!2s!4v1684938018621!5m2!1suz!2s" width="100%" height="450" style="border:0; repeat:no-repeat;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


  

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>