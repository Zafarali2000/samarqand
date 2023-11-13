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
   <title>Фотографии</title>
   
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


   <h2 class="heading">Исторические памятники в Самарканде</h2>
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

<!-- ******************* ****************************************************-->


<div class="containerrex">


   <div class="box-containerrex">

      <div class="boxrex">
         <div class="imagerex">
         <a href="registonmaydoni.php"><img src="images/Desktop/Registon/registon10.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Площадь Регистан</h3>
            <p>Регистон – Это Место Древней Науки И Образовательных Учреждений, А Также Один Из Самых Заметных Примеров Искусства Градостроительства На Востоке. Тимуриды С Гордостью Говорили О Нем: «Кто Сомневается В Нашей Мощи, Пусть Придет И Увидит Построенные Нами Здания». В 2001 Году Эти Три Медресе Были Включены В Список Всемирного Наследия ЮНЕСКО. Площадь Регистан Исторически Была Центром Науки, Политики И Религии Города. Слово «Регистан» Означает «Песчаное Место».</p>
            
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="shohizinda.php"><img src="images/Desktop/Shohizinda/shoxizinda7.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Шахизинды</h3>
            <p>Туристы, Посетившие Афросиаб, Древнее Место Самарканда, Идут В Его Южную Сторону И Натыкаются На Расположенный На Склоне Ансанбмл Шахизинд, Чьи Голубые Купола Сияют На Солнце. Этот Великий Памятник, Ставший Священным Местом Паломничества Самаркандцев, Всегда Остается Излюбленным Местом Паломничества Туристов Из Дальних И Ближних Стран.Комплекс Шахизинда — Исторический Некрополь И Святыня, Расположенный В Самарканде, Узбекистан. </p>
            
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="3tamadrasalar.php"> <img src="images/Desktop/Tillakori-madrasasi/tillakori4.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Медресе Тиллакори</h3>
            <p>Изначально Оно Называлось «Малый Медресе Налангтошби». Позже, Поскольку Количества Золота, Использованного При Отделке Мечети, Хватило На Строительство Другого Памятника, Она Получила Название «Тиллакори» (Обработанная Золотом). Т.М. Использовался Как Городская Мечеть И Медресе. Именно Поэтому Мечеть (63х22 М) Большая И Роскошная, Она Отличается От Других Медресе. Вход В Медресе (70х70 М) Осуществляется Через Западное Крыльцо. </p>
            
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="3tamadrasalar.php"> <img src="images/Desktop/Sherdor-madrasasi/sher13.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Медресе Шердар</h3>
            <p>Одно Из Известных Зданий XVII Века В Самарканде - Медресе Шердар Входит В Состав Архитектурного Ансамбля Регистан. На Протяжении Нескольких Столетий Медресе Было Известным Исламским Учебным Заведением, В Его Помещениях Учились Известные Философы И Богословы.Медресе Было Построено В 1619-1636 Годах На Месте Разобранного Дома Улугбека По Приказу Аштархани Ялантошби Бахадира. К Строительству Привлекался Самаркандский Архитектор Абдулжаббар, А Отделочные Работы Выполнял Мастер Мухаммад Аббас.</p>
            
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="3tamadrasalar.php">  <img src="images/Desktop/ulugbek-madrasasi/u-rasadxona6.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Медресе Улугбека</h3>
            <p>Медресе Было Построено В 1417-1420 Гг. В Художественном Отношении Оно Не Уступало Постройкам, Построенным Тимуром, И В То Же Время Значительно Превосходило Их По Прочности.Первоначально Медресе Состояло Из 50 Комнат, И В Нем Обучалось Более Сотни Учеников В Год. . По Сведениям Историков, В Медресе Преподавал Сам Улугбек. Здесь Жил И Творил Знаменитый Персидский Поэт Джами. Среди Слушателей Джами Были Шейх Ходжа Ахрар Вали, Один Из Самых Известных Представителей Секты Накшбандия, И Великий Поэт Алишер Навои.</p>
           
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="afrosiyob.php"><img src="images/Desktop/Afrosiyob/afrosiyob8.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Афросиаб</h3>
            <p>Афросиаб — Древние Руины Самарканда. Это Название Появляется В Исторических Источниках Применительно К Древнему Самарканду Только С XVII Века. Древний Самарканд В Согдийских Источниках Назывался Смараканве. Мил. Средний. После Завоевания Самарканда Войсками Александра Максуни В IV Веке Греческие Авторы Упоминают Его В Своих Дневниках Как Мароканда. Греческий Перевод Смараканве В Марокко. После Прихода К Власти В Мовароуннахре Соманитов Древний Смараканве С IX Века Назывался Самаркандом.</p>
            
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="al-buxoriy.php"><img src="images/Desktop/Al-Buxoriy/al-buxoriy2.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3> Имама Аль-Бухари</h3>
            <p>Бухари, Имам Аль-Бухари (Настоящее Имя Абу Абдулла Мухаммад Ибн Исмаил Ибн Ибрагим Аль Бухари) (810.21.7, Бухара - 870.31.8, Село Хартанг Близ Самарканда) - Великий Мыслитель Исламского Мира. Он Также Известен Как Имам Мухаддисов, Султан Хадисоведения.Его Отец, Исмаил, Был Одним Из Самых Совершенных Мухаддисов Своего Времени, Учеником И Близким Другом Малика Ибн Аласа, Занимался Коммерческими Делами. Его Мать Была Набожной, Набожной, Интеллигентной Женщиной.</p>
           
         </div>
      </div>
      <div class="boxrex">
         <div class="imagerex">
         <a href="al-motrudiy.php"><img src="images/Desktop/Al-Motrudiy/motrudiy6.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3> Имама Аль-Мотуруди</h3>
            <p>Основателем Мотуридского Движения В Богословской Науке, Великим Богословом, Правоведом, Шейхом Мухаммадом Ибн Махмудом Аль-Ханафи Аль-Мотуриди, Известным В Исламском Мире Как Имам-Уль-Худа (Имам Руководства), Был Родился В 870 Году В Мотуридском Районе Самарканда. Сначала Он Был Грамотным В Школе, Затем Получил Образование В Медресе.Имам Ал-Мотуриди Жил В Одно Время С Имамом Ашари, Рудаки, Абул Хасаном Балхи, Фараби И Считал Имама Мухаммада Ал-Бухари Своим Духовным Учителем.</p>
           
         </div>
      </div>
      <div class="boxrex">
         <div class="imagerex">
         <a href="amir-temur.php"><img src="images/Desktop/A-Temur/9A-Temur.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3> Гори Амир</h3>
            <p>Мавзолей Амира Темура, Гори Амир (Конец 14 Века - 1405 Год) - Памятник Архитектуры В Самарканде. В Народе Его Называют Гори Амир Или Гори Мир (Мир Сайид Барака). В Мавзолее Захоронены Люди, Принадлежащие К Династии Тимуридов (Амир Темур, Его Старший Мир Сайид Барака, Сыновья Умар-Шейх, Мироншах И Шахрух, Внуки Мухаммед Султан, Улугбек И Др.). Бабур Рассказывает, Что Сначала Внук Темура Мухаммад Султан Мирза Построил Медресе В Ташкургане - Чакаре, К Югу От Самаркандской Крепости.</p>
           
         </div>
      </div>
      <div class="boxrex">
         <div class="imagerex">
         <a href="arab-ota.php"><img src="images/Desktop/Arab-ota/ota10.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Арабского Отца</h3>
            <p>Могила Арабского Отца — Памятник Архитектуры В Селе Тим Самаркандской Области, Мил. 977/8 (367 Г. Хиджры). Архитектор Неизвестен. Фундамент Каменный, Стены Кирпичные (23х23х4 См) С Ганчхоком. Общее Значение Би-Но — Мурабба. Он Накрыт Куполом. 4 Кунджака Между Стеной И Куполом Выполнены В Виде Больших Чаш-Мукарнасов. Колонны Имеют Узор. Эти Изящные Колонны Придают Помещению Уютный И Величественный Вид. Красота Мавзолея Заключается В Его Величественном Фасаде.</p>
           
         </div>
      </div>
      <div class="boxrex">
         <div class="imagerex">
         <a href="bibixonim.php"> <img src="images/Desktop/Bibixonim/bibixonim18.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Бибиханум</h3>
            <p>Мавзолей Бибиханим Был Очень Роскошен И Величественен Во Время Своего Строительства, Его Стены Были Украшены Разноцветными Изразцами, Узорами И Надписями Со Стихами Из Корана. Внутренняя Структура Мавзолея, Как И Мавзолея Амира Гори, Была Двухэтажной, С Залом Внизу И Усыпальницей Наверху. После Обрушения Купола Мавзолея В Него Попали Снег И Дождь, И Обрушилась Крыша Саганы. В 1941 Году Ученые Под Руководством Археолога Яхьи Фуломова Провели Раскопки В Мавзолее И Обнаружили Много Неизвестного До Сих Пор.</p>
           
         </div>
      </div>
      <div class="boxrex">
         <div class="imagerex">
         <a href="doniyor-ota.php"><img src="images/Desktop/Doniyor-ota/doniyor-ota8.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3> Отца Данила</h3>
            <p>Мавзолей Ходжи Данияра – Одна Из Самых Престижных И Известных Святынь Самарканда. Даниер, Даниил, Даниил — Имя Святого В Мусульманской, Христианской И Еврейской Литературе. Отец Даниил Родился В Иерусалиме В 603 Г. До Н.Э. И Принадлежит К Потомкам Царя Давида И Соломона (Соломона).Часть Могильника Даниила Была Привезена В Самарканд С Соблюдением Установленных Правил.В Мавзолее Самая Длинная Могила В Мире - 18 Метров. Здание Мавзолея Было Построено В Начале 20 Века. До Тех Пор Есть Сведения О Могиле Ходжи Даниера И Мечети Здесь</p>
           
         </div>
      </div>
      <div class="boxrex">
         <div class="imagerex">
         <a href="hazrati-dovud.php"><img src="images/Desktop/city/city19.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Сиабский Базар</h3>
            <p>Приехать В Самарканд И Не Посетить Сиабский Базар – Значит Упустить Очень Интересное Приключение. Восточный Базар – Уникальное Место, Где Можно Ощутить Атмосферу Древнего Города. Еще Несколько Лет Назад Базары Служили Главными Стратегическими Торговыми Объектами На Великом Шелковом Пути. Рынок Сийоб В Самарканде – Одна Из Старинных Точек Города, Которую Должен Увидеть Каждый Турист.Атмосфера Рынка: Сиабский Базар Предлагает Яркую И Живую Атмосферу С Лабиринтом Узких Улочек И Оживленных Магазинов. Рынок Известен Своими Яркими Цветами, Ароматами И Энергичным Шумом И Суетой Торговцев, Местных Жителей И Туристов.</p>
           
         </div>
      </div>
   
      
      <div class="boxrex">
         <div class="imagerex">
         <a href="hazrati-xizr.php"><img src="images/Desktop/Hazrati-Xizr/hazratixizir7.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Хазрат Хизр</h3>
            <p>Мечеть Хазрати Хизр — Архитектурный Памятник В Самарканде (Середина XIX Века), Связанный С Легендарным Бессмертным Человеком Хазратом Хизром. Здание Расположено На Холме Напротив Комплекса Шахизинда, Построено На Фундаменте Мечети (1855 Г. По Надписи На Алтаре). Мечеть Состоит Из Комнаты, 2-Х Смежных Комнат, Дополнительных Помещений, Амбара, Минарета, Позже Были Пристроены Дополнительное Крыльцо (1899 Г.) И Сторожка (1919 Г.). В Начале Крутая Лестница Ведет К Сторожке, И Вы Входите В Маленькую Комнату.</p>
           
         </div>
      </div>

      <div class="boxrex">
         <div class="imagerex">
         <a href="m-rasadxonasi.php"><img src="images/Desktop/Rasadxona/rasadxonasi1.jpg" alt=""></a>
         </div>
         <div class="contentrex">
            <h3>Мирзо Улугбека</h3>
            <p>Можно Ли Было Предсказать, Что Великий Ученый 15 Века, Внук Амира Темура, Улугбек (1394-1449), Многими Трудами И Исследованиями На Протяжении Многих Веков Окажет Значительное Влияние На Развитие Мировой Науки? Достижения Школы Астрономии Улугбека Оказали Большое Влияние На Развитие Точных Наук На Западе И Востоке, В Индии И Китае.В 1428-1429 Годах Улугбек Построил В Самарканде Одну Из Крупнейших В Мире Средневековых Обсерваторий. План Обсерватории Представляет Собой Круглое Трехэтажное Здание Пещерообразной Глубины, Содержащее Мраморный Квадрант Диаметром 46,4 М И Высотой Не Менее 30 М.</p>
          
         </div>
      </div>

   </div>

   <div id="load-morerex"> Узнать больше <i class="fa-solid fa-arrow-down fa-bounce"></i></div>

</div>

<script>

let loadMoreBtn = document.querySelector('#load-morerex');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.containerrex .box-containerrex .boxrex')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}

</script>


<!-- ************************************************************************ -->

   
   <div class="containerzed">
   <div class="section-title">
            <h1>Подборка фотографий об исторических памятниках</h1>
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

<div id="load-morezed"> Узнать больше <i class="fa-solid fa-arrow-down fa-bounce"></i> </div>

</div>

<script>
let loadMoreBtn = document.querySelector('#load-morezed');
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