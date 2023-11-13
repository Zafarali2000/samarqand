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
   <title>Photos</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/registon.css">
   <script src="js/registon.js"></script>
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">

<!-- gallariya -->
<div class="containeruzsam">
        <div class="full-view"></div>
        <div class="preview-list">
            <ul>
                <li>
                    <input type="radio" id="tab-1" name="gallery-group">
                    <label for="tab-1">
                        <div class="tab">
                            <img src="images/Desktop/city/city9.jpeg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/A-Temur/5A-Temur.jpg" alt="Rasm topilamdi" />
                       
                    </div>
                </li>
                
                <li>
                    <input type="radio" id="tab-2" name="gallery-group">
                    <label for="tab-2">
                        <div class="tab">
                        <img src="images/Desktop/Shohizinda/shoxizinda8.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Shohizinda/shoxizinda3.jpg" alt="Rasm topilamdi" />
                    </div>
                </li>

                <li>
                    <input type="radio" id="tab-3" name="gallery-group">
                    <label for="tab-3">
                        <div class="tab">
                        <img src="images/Desktop/Al-Buxoriy/buxoriy4.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Al-Buxoriy/al-buxoriy.jpg" alt="Rasm topilamdi" />
                    </div>
                </li>

                <li>
                    <input type="radio" id="tab-4" name="gallery-group" checked>
                    <label for="tab-4">
                        <div class="tab">
                        <img src="images/Desktop/A-Temur/2A-Temur.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/city/city4.png" alt="Rasm topilamdi" />
                    
                    </div>
                </li>
                
                <li>
                    <input type="radio" id="tab-5" name="gallery-group">
                    <label for="tab-5">
                        <div class="tab">
                        <img src="images/Desktop/Siyob-bozor/siyob1.jpeg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Siyob-bozor/siyob4.jpg" alt="Rasm topilamdi" />
                        </div>
                </li>

                <li>
                    <input type="radio" id="tab-6" name="gallery-group">
                    <label for="tab-6">
                        <div class="tab">
                        <img src="images/Desktop/Mirzo-U/mirzo-u3.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Mirzo-U/mirzo-u5.jpg" alt="Rasm topilamdi" />
                        </div>
                </li>

                <li>
                    <input type="radio" id="tab-7" name="gallery-group">
                    <label for="tab-7">
                        <div class="tab">
                        <img src="images/Desktop/Registon/registon6.jpg" alt="Rasm topilamdi" />
                        </div>
                    </label>
                    <div class="content">
                    <img src="images/Desktop/Registon/registon7.jpg" alt="Rasm topilamdi" />
                        </div>
                </li>

            </ul>
        </div>
    </div>
<!-- gallariya -->


   <h2 class="heading">Historical monuments in Samarkand</h2>
   <b style="color:#FFFFFF; font-size:5px">Zafarali Daminov</b>
   <div class="box-container">

         <!-- <?php
         $select_products = $conn->prepare("SELECT * FROM `products`"); 
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
         ?>
         <form action="" method="post" class="box">
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
            echo '<p class="empty">No information about historical monuments has been uploaded yet!</p>';
         }
         ?> -->

   </div>


<!-- shop shahifasidagi rasm va malumot dastur kodi boshlanishi-->
   


<div class="containerzedalfa">

	<div class="box-containerzedalfa">
	
	   <div class="boxzedalfa">
		  <div class="imagezedalfa">
			 <a href="registonmaydoni.php"><img src="images/Desktop/Registon/registon10.jpg" alt=""></a>
		  </div>
		  <div class="contentzedalfa">
        <h3>Registon area</h3>
         <p>Registon Square In 2001, these three madrasas were included in the list of UNESCO world monuments.Registon is a place of ancient science and educational institutions, and it is one of the most visible examples of the art of city construction in the East. The Timurids proudly said about him: "Whoever doubts our power, let him come and see the buildings we built." In 2001, these three madrasahs were included in the UNESCO World Heritage List. Registan square was historically the center of science, politics and religion of the city. The word "Registan" means "sandy place".</p>
			 
		  </div>
	   </div>
	
	   <div class="boxzedalfa">
		  <div class="imagezedalfa">
			 <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda7.jpg" alt=""></a>
		  </div>
		  <div class="contentzedalfa">
        <h3>In Shahizin</h3>
<p>Shahizin is included in the UNESCO World Heritage List under the name "Samarkand - Crossroads of Cultures". Tourists who have visited Afrosiyab, the ancient place of Samarkand, walk to its south side and come across the Shahizind ansanbml, which is located on a slope and whose blue domes shine in the sunlight. This great monument, which has become a sacred place of pilgrimage for the people of Samarkand, is always a favorite place of pilgrimage for tourists from far and near.

</p>
			 
		  </div>
	   </div>
	
	   <div class="boxzedalfa">
		  <div class="imagezedalfa">
			<a href="3tamadrasalar.php"> <img src="images/Desktop/Tillakori-madrasasi/tillakori4.jpg" alt=""></a>
		  </div>
		  <div class="contentzedalfa">
			 <h3>Tillakori madrasasi</h3>
			 <p>Tilakori madrasa was built in the 17th century during the reign of Timurid ruler and astronomer Ulugbek. It is part of Registan square. Tillakori madrasa is an architectural monument in Samarkand. In place of the Mirzoyi caravanserai (15th century) built during the reign of Registan ensemble, the governor of Samarkand, Yalangtoshbi Bahadir, built a madrasa and a mosque (1641-46). On the base of the Caravanserai is a Madrasa (in the north-eastern part), and in place of the cells is a mosque with a gabled dome (in the west).</p>
			
		  </div>
	   </div>
	
	   <div class="boxzedalfa">
		  <div class="imagezedalfa">
			<a href="3tamadrasalar.php"> <img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt=""></a>
		  </div>
		  <div class="contentzedalfa">
        <h3>Sherdar Madrasah</h3>
<p>One of the famous buildings of the 17th century in Samarkand - the Sherdar madrasa is part of the Registan architectural ensemble. One of the famous buildings of the 17th century in Samarkand - the Sherdar madrasa is part of the Registan architectural ensemble. For several centuries, the madrasa was a famous Islamic educational institution, famous philosophers and theologians studied in its rooms. The madrasa was built in 1619-1636 on the site of the dismantled house of Ulugbek by the order of Ashtarkhani Yalantoshbi Bahadir.</p>
			
		  </div>
	   </div>
	
	   <div class="boxzedalfa">
		  <div class="imagezedalfa">
		   <a href="3tamadrasalar.php">  <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona6.jpg" alt=""></a>
		  </div>
		  <div class="contentzedalfa">
        <h3>Ulugbek madrasah</h3>
<p> Later, because the amount of gold used in the decoration of the mosque was enough to build another monument, it was called "goldsmith". In the middle of the 15th century, the grandson of Amir Temurn, Mirza Ulugbek (1409-1449), came to power in Samarkand. It was Ulugbek who actively built educational institutions in Bukhara, Samarkand, Shahrisabz and Gijduvan. The Ulugbek madrasa in Samarkand is a classic example of the Islamic higher educational institutions of the East.</p>
		  </div>
	   </div>
	
	   <div class="boxzedalfa">
		  <div class="imagezedalfa">
			 <a href="afrosiyob.php"><img src="images/Desktop/Afrosiyob/afrosiyob8.jpg" alt=""></a>
		  </div>
		  <div class="contentzedalfa">
        <h3>Afrosiab Castle</h3>
<p>Archaeological excavations conducted in Afrosiyab until the 1930s yielded very little material on the history of ancient Samarkand.Afrosiab is an ancient ruin of Samarkand. This name appears in historical sources in relation to ancient Samarkand only from the 17th century. Ancient Samarkand was called Smarakanve in Sughd sources. Mil. av. After the conquest of Samarkand by the troops of Alexander Maqsuni in the 4th century, Greek authors mentioned it as Marokanda in their diaries. Greek translation of Smarakanve in Morocco.</p>
			 
		  </div>
	   </div>
	
	<!-- ................ -->

	
	<div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy2.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
      <h3>Mausoleum of Imam al-Bukhari</h3>
<p>Imam al-Bukhari, also known as Abu Abdullah Muhammad ibn Ismail al-Bukhari, was an Islamic scholar and collector of hadith. Bukhari, Imam al-Bukhari (real name Abu Abdullah Muhammad ibn Ismail ibn Ibrahim al-Bukhari) (810.21.7, Bukhara - 870.31.8, Hartang village near Samarkand) is a great thinker of the Islamic world. He is also known as the Imam of Muhaddis, the Sultan of Hadith science. His father Ismail was one of the most accomplished Muhaddis of his time, a student and close friend of Malik ibn Alas, and was engaged in commercial affairs. His mother was a pious, devout, intelligent woman. </p>
		   
		</div>
	 </div>
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="al-motrudiy.php"><img src="images/Desktop/Al-Motrudiy/motrudiy6.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
      <h3>Mausoleum of Imam al-Moturudi</h3>
<p>They are named Muhammad, nicknamed "Moturidi" because they were born in the village of Moturid in Samarkand. The founder of the Moturid movement in the science of theology, the great theologian, jurist, Sheikh Muhammad ibn Mahmud al-Hanafi al-Moturidi, known in the Islamic world as Imam-ul-Huda (Imam of Guidance), was born in 870 in the Moturid region of Samarkand. At first, he was literate at school, and then he received madrasa education. Imam al-Moturidi lived at the same time as Imam Ash'ari, Rudaki, Abul Hasan Balkhi, Farabi, and considered Imam Muhammad al-Bukhari as his spiritual teacher. </p>
		   
		</div>
	 </div>
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="amir-temur.php"><img src="images/Desktop/A-Temur/9A-Temur.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
      <h3>Gori Amir Mausoleum</h3>
<p>Amir Temur Mausoleum or Gori Amir Mausoleum is an architectural monument in Samarkand. People call him Gori Amir or Gori Mir. Amir Temur Mausoleum, Gori Amir (end of 14th century - 1405) is an architectural monument in Samarkand. People call him Gori Amir or Gori Mir (Mir Sayyid Baraka). People belonging to the Timurid dynasty (Amir Temur, his elder Mir Sayyid Baraka, sons Umar-sheikh, Mironshah and Shahrukh, grandsons Muhammad Sultan, Ulugbek, etc.) are buried in the mausoleum. Babur said that at first Temur's grandson Muhammad Sultan Mirza built a madrasa in Tashkurgan - Chakar, south of the Samarkand fortress.

</p>
		  
		</div>
	 </div>
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="arab-ota.php"><img src="images/Desktop/Arab-ota/ota10.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
      <h3>Arab father shrine</h3>
<p>Arab father's mausoleum is an architectural monument in the village of Tim, Samarkand region, which was built in 976-977 AD. The tomb of the Arab father is an architectural monument in the village of Tim, Samarkand region, mil. 977/8 (367 AH). The architect is unknown. The foundation is made of stone, and the walls are made of brick (23X23X4 cm) with ganchkhok. The general meaning of bi-no is murabba. It is covered with a dome. 4 kunjak between the wall and the dome are in the form of large muqarnas bowls. The columns are patterned. These elegant pillars give the room a cozy and majestic look. The beauty of the mausoleum is its majestic facade.</p>
		</div>
	 </div>
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		  <a href="bibixonim.php"> <img src="images/Desktop/Bibixonim/bibixonim18.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
		   <h3>Bibikhanim mausoleum</h3>
		   <p>Bibikhanim's mausoleum was very luxurious and majestic at the time of its construction, its walls were decorated with colorful tiles, patterns, and inscriptions with verses from the Qur'an. The interior structure of the mausoleum, like the Gori Amir mausoleum, was two-story, with a hall below and a shrine on top. After the collapse of the dome of the mausoleum, snow and rain fell into it, and the roof of the saghana collapsed. In 1941, scientists under the leadership of archaeologist Yahya Fulomov conducted excavations in the mausoleum and discovered many things that were unknown until now.</p>
		  
		</div>
	 </div>
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota8.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
		   <h3>Khoja Daniyor mausoleum</h3>
		   <p>Khoja Daniyor's mausoleum is one of the most prestigious and famous shrines in Samarkand. Daniyor, Daniil, Daniel is the name of a saint in Muslim, Christian and Jewish literature. Father Daniel was born in Jerusalem in 603 BC and belongs to the descendants of King David and Solomon (Solomon). A part of the burial ground of Daniel was brought to Samarkand in compliance with established regulations. The mausoleum has the longest grave in the world - 18 meters. The mausoleum building was built at the beginning of the 20th century. Until then, there is information about the tomb of Khoja Daniyor and a mosque here.</p>
		   
		</div>
	 </div>
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="hazrati-dovud.php"><img src="images/Desktop/city/city19.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
		   <h3>The Eternal City (Silk road)</h3>
		   <p>Of course, the main destination of today's visit will be the "Eternal City Complex" of the International Tourism Center located in the territory of Samarkand district. The total area is equal to 7 hectares. All this is done to create comfort for tourists and increase the flow of tourists in Samarkand. All this was created on the basis of the order of the private "Samarkand Touristic Center" LLC.Newly opened "Great Silk Road" international tourism center in Samarkand can serve 2 million tourists a year. The construction of the complex began in 2019 on an area of 212 hectares along the rowing canal in Samarkand district. </p>
		  
		</div>
	 </div>
  
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir7.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
		   <h3>Hazrat Khizr Mosque </h3>
		   <p>Hazrati Khizr Mosque is an architectural monument in Samarkand (mid-19th century) associated with the legendary immortal person Hazrat Khizr. The building is located on the hill opposite the Shahizinda complex, built on the foundation of the mosque (1855 according to the inscription on the altar). The mosque consists of a room, 2 adjacent rooms, additional rooms, a storehouse, a minaret, and later an additional porch (1899) and a gatehouse (1919) were built. At the beginning, a steep staircase leads to the gatehouse, and a small room is entered. </p>
		   
		</div>
	 </div>
  
  
  
	 <div class="boxzedalfa">
		<div class="imagezedalfa">
		   <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi1.jpg" alt=""></a>
		</div>
		<div class="contentzedalfa">
		   <h3>Mirzo Ulugbek observatory </h3>
		   <p>Was it possible to predict that the great scientist of the 15th century, the grandson of Amir Temur, Ulugbek (1394-1449), many works and researches for many centuries will have a significant impact on the development of world science? The achievements of the Ulugbek School of Astronomy had a great impact on the development of the exact sciences of the West and the East, India and China. In 1428-1429, Ulugbek built one of the largest medieval observatories in the world in Samarkand. The plan of the observatory is a circular three-story building with a cave-like depth, containing a marble quadrant with a diameter of 46.4 m and a height of at least 30 m. </p>
		   
		</div>
	 </div>
  
	
	</div>
	
	<div id="load-morealfa"> More information <i class="fa-solid fa-arrow-down fa-bounce"></i></div>
	
	</div>
	
	<script>
	let loadMoreBtnalfa = document.querySelector('#load-morealfa');
	let currentItemalfa = 3;
	
	loadMoreBtnalfa.onclick = () =>{
	let boxes = [...document.querySelectorAll('.containerzedalfa .box-containerzedalfa .boxzedalfa')];
	for (var i = currentItemalfa; i < currentItemalfa + 3; i++){
	   boxes[i].style.display = 'inline-block';
	}
	currentItemalfa += 3;
	
	if(currentItemalfa >= boxes.length){
	   loadMoreBtnalfa.style.display = 'none';
	}
	}
	
	
	</script>
	
	
	
<!-- shop shahifasidagi rasm va malumot dastur kodi tugashi -->





   <div class="containerzed">
   <div class="section-title">
            <h1>A collection of pictures about historical monuments</h1>
        </div>

<div class="box-containerzed">

   <div class="boxzed">
      <div class="imagezed">
         <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi8.webp" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="bibixonim.php"><img src="images/Desktop/Bibixonim/3bibi400.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
     <a href="m-rasadxonasi.php"> <img src="images/Desktop/Mirzo-U/mirzo-u5.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="bibixonim.php"><img src="images/Desktop/Bibixonim/1bibi800.webp" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy5.jpeg" alt=""></a>
      </div>
   </div>
 
   <div class="boxzed">
      <div class="imagezed">
    <a href="3tamadrasalar.php">  <img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="diqqatsj.php"><img src="images/Desktop/city/city7.jpg" alt=""></a>
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota6.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="amir-temur.php"><img src="images/Desktop/A-Temur/18A-Temur.jpg" alt=""></a>
      </div>
   </div>
<!-- *******************1 -->
<div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori7.jpg" alt="rasm topilmadi"></a>
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori1.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher3.jpg" alt="rasm topilmadi"></a>
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher7.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher10.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona5.jpg" alt="rasm topilmadi"></a>
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona6.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
     <a href="3tamadrasalar.php"> <img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
     <a href="3tamadrasalar.php"> <img src="images/Desktop/Tillakori-madrasasi/tillakori6.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>
   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona3.webp" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda14.jpg" alt="rasm topilmadi"></a>
         
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda11.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

  
    <div class="boxzed">
         <div class="imagezed">
           <a href="diqqatsj.php"><img src="images/Desktop/city/city21.jpg" alt="rasm topilmadi"></a>
          </div>
   </div>             

   <div class="boxzed">
      <div class="imagezed">
         <a href="shohizinda.php"> <img src="images/Desktop/Shohizinda/shoxizinda16.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="shohizinda.php"> <img src="images/Desktop/Shohizinda/shoxizinda15.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/ulugbek-madrasasi/u-rasadxona2.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>


<!-- ************* -->
   <div class="boxzed">
      <div class="imagezed">
      <a href=""><img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt="rasm topilmadi"></a>     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher11.jpg" alt="rasm topilmadi"></a>
     
      </div>
   </div>



<!-- *********************2 -->


<div class="boxzed">
      <div class="imagezed">
      <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy3.jpg" alt=""></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/buxoriy8.jpg" alt="">  </a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/buxoriy3.webp" alt=""></a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/buxoriy7.jpg" alt="">  </a>   
      </div>    
   </div>

   <div class="boxzed">
      <div class="imagezed">
     <a href="al-buxoriy.php"> <img src="images/Desktop/Al-Buxoriy/al-buxoriy.jpg" alt=""></a>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota14.webp" alt="rasm topilmadi"></a>        
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota12.jpg" alt="rasm topilmadi"> </a>       
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota13.jpg" alt="rasm topilmadi"> </a>       
     
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
          <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir13.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir7.jpg" alt="rasm topilmadi"></a>   
       </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir10.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

 

   
   <div class="boxzed">
      <div class="imagezed">
      <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi5.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>


   <div class="boxzed">
      <div class="imagezed">
      <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi6.jpg" alt="rasm topilmadi"></a>
     
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="m-rasadxonasi.php"><img src="images/Desktop/Mirzo-U/mirzo-u7.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="registonmaydoni.php"> <img src="images/Desktop/Registon/registon7.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher5.jpg" alt="rasm topilmadi"> </a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher4.jpg" alt="rasm topilmadi"> </a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
         <a href="3tamadrasalar.php"><img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt="rasm topilmadi"></a>   
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
      <a href="3tamadrasalar.php"><img src="images/Desktop/Tillakori-madrasasi/tillakori2.jpg" alt="rasm topilmadi"></a>
      </div>
   </div>

   <div class="boxzed">
      <div class="imagezed">
       <a href="diqqatsj.php"><img src="images/Desktop/city/city18.jpg" alt="rasm topilmadi"></a>
      </div>
    </div>








</div>

<div id="load-more"> More information <i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

</div>

<script>
let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
let boxes = [...document.querySelectorAll('.containerzed .box-containerzed .boxzed')];
for (var i = currentItem; i < currentItem + 3; i++){
   boxes[i].style.display = 'inline-block';
}
currentItem += 3;

if(currentItem >= boxes.length){
   loadMoreBtn.style.display = 'none';
}
}


</script>
</section>



<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>


</body>
</html>