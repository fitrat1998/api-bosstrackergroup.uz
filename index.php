<?php
    include_once 'main.php';
?>
<!DOCTYPE html>
<html lang="<?if($_SESSION['lang']=='uz'){echo "uz";}?><?if($_SESSION['lang']=='ru'){echo "ru";}?>">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Boss Tracker</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="styles/style.css">
      <link rel="stylesheet" href="responsive/responsive.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="styles/css/ionicons.min.css">
      <link rel="stylesheet" href="styles/css/style.css">
   </head>
   <body>
      <div class="container-fluid">
         <div class="header">
            <div class="row">
               <div class="col-12 d-flex d-lg-none d-md-none py-2">
                  <a class="btn btn-dark ms-auto me-3" onclick="changelang('uz')">
                  <img src="img/uzb.png" style="width: 24px;height: 24px;" class="rounded-circle" alt="Uzb Flag"> 
                  Uz
                  </a>
                  <a class="btn btn-dark" onclick="changelang('ru')">
                  <img src="img/ru.png" style="width: 24px;height: 24px;" class="rounded-circle" alt="Ru Flag"> 
                  Ru
                  </a>
               </div>
               
               <div class="col-6"><img class="logo" src="img/logo.png" alt="Logo"></div>
               <div class="col-6">
                  <button>
                     <i class="fa-solid fa-phone"></i>
                     <h1>| +998(97) 390-40-00</h1>
                     <h1><a href="index.php?id=23">test</a></h1>
                  </button>
                  <div class="dropdown ms-3 d-none d-md-block">
                     <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="img/uzb.png" style="width: 24px;height: 24px;" class="rounded-circle" alt="Uzb Flag"> 
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" onclick="changelang('uz')">Uz</a></li>
                        <li><a class="dropdown-item" onclick="changelang('ru')">Ru</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="main">
            <div class="header__bannerIcon1">
               <img src="img/banner-icon1.png" alt="">
            </div>
            <div class="header__wrapper container">
               <div class="header__main">
                  <div class="header__banner">
                     <button class="but" type="button">
                     <?
                        if($_SESSION['lang']=='ru'){
                            ?>
                     Узнайте где находится ваш ребёнок!
                     <?
                        }
                        if($_SESSION['lang']=='uz'){
                            ?>
                     Farzandingiz qayerda ekanligini bilib oling
                     <?
                        }
                        ?>
                     </button>
                  </div>
                  <div class="header__footer">
                     <div class="header__foot">
                        <img src="img/iconpar.jpg" alt="">
                        <button class="btn btn-light shadow-lg" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-brands fa-android"></i>
                        <?
                           if($_SESSION['lang']=='ru'){
                               ?>
                        Скачать
                        <?
                           }
                           if($_SESSION['lang']=='uz'){
                               ?>
                        Yuklash
                        <?
                           }
                        ?>
                        </button>
                        <p>
                           <?
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           Программа для родителей
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           Ota-onalar uchun ilova
                           <?
                              }
                              ?>
                        </p>
                        <img src="img/qqr1.jpg" style="width: 100%;" alt="">
                     </div>
                     <div class="header__foot">
                        <div class="header__footerImg"><img src="img/app_child.png" alt=""></div>
                        <button onclick="linkch()" class="btn btn-light shadow-lg"><i class="fa-brands fa-android"></i>
                        <?
                           if($_SESSION['lang']=='ru'){
                               ?>
                        Скачать
                        <?
                           }
                           if($_SESSION['lang']=='uz'){
                               ?>
                        Yuklash
                        <?
                           }
                           ?>
                        </button>
                        <p>
                           <?
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           Программа для ребёнка
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           Farzand uchun ilova
                           <?
                              }
                              ?>
                        </p>
                        <img src="img/qrch.jpg" style="width: 100%;" alt="">
                     </div>
                  </div>
               </div>
               <div class="header__video">
                  <img src="img/a6.png" style="width: 100%;">
                  <!-- <video src="videos/intro.webm" width="350px" controls>
                     <source src="videos/intro.webm" type="video/webm">
                     </video> -->
               </div>
            </div>
            <div class="header__bannerIcon2">
               <img src="img/banner-icon2.png" alt="">
            </div>
         </div>
         <div class="section">
            <div class="section__main">
               <div class="section__one">
                  <h1>
                     <?
                        if($_SESSION['lang']=='ru'){
                            ?>
                     Узнайте где находится ваш ребёнок! 
                     <?
                        }
                        if($_SESSION['lang']=='uz'){
                            ?>
                     Farzandingiz qayerda ekanligini bilib oling
                     <?
                        }
                        ?>
                  </h1>
                  <div class="sec__main">
                     <img src="img/phone.png" alt="">
                     <div class="section__menu">
                        <?
                           if($_SESSION['lang']=='ru'){
                               ?>
                        <h2>Через телефон</h2>
                        <p>Скачайте и установите по прямой ссылке нашу программу и получите 100% доступ к устройству вашего ребёнка!</p>
                        <?
                           }
                           if($_SESSION['lang']=='uz'){
                               ?>
                        <h2>Telefon orqali</h2>
                        <p>Ilovamizni bir marta bosish bilan o'rnating va farzandingizning telefoniga 100% kirish huquqiga ega bo'ling</p>
                        <?
                           }
                           ?>                            
                     </div>
                  </div>
               </div>
               <div class="section__two">
                  <img src="img/mob.png" alt="">
               </div>
            </div>
         </div>
         <div class="section__slayd">
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
               <div class="carousel-indicators color-dark">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="flex-center">
                        <img src="img/image_1.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption  d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Мониторинг времени использования телефона</p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Farzandingiz ilovalarga qancha vaqt sarflashini bilib oling</p>
                           <?
                              }
                              ?>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="flex-center">
                        <img src="img/image_two.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Узнайте о благополучии ребёнка через видео-связь</p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Telefoningiz kamerasi yordamida farzandingizning harakatlarini kuzatib boring</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_3.1.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Узнайте где ваш ребенок через локацию GPS. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>GPS yordamida bolalarning joylashuvini kuzatib boring</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_4.7.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Узнайте про маршрут и действия ребëнка в течении всего дня</p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Farzandingiz kun davomida qayerda edi!?</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_comp.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Доступ ко всем звонкам, смс и других социальных сетей. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Qo'ng'iroqlar, SMS va ijtimoiy tarmoqlar tarixini ko'ring. Farzandingiz kim bilan gaplashayotganini bilib oling</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_speak.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Доступ к микрофону устройства ребëнка, услыште что происходит вокруг. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Farzandingiz atrofida nima sodir bo'layotganini tinglang</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_hi.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Получите уведомление в случае если ваш ребëнок покинет отмеченное место. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Elektron panjara bola tanlangan hududni tark etganda sizni xabardor qiladi</p>
                           <?
                              }
                              ?>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_3.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Узнайте сколько процентов батареи у устройства вашего ребёнка и уведомите его зарядить телефон!</p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Batareya darajasini ko'ring va telefoningizni zaryad qilishni eslating</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_9.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Возможность ограничивать или блокировки доступа к телефону ребëнка.</p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Farzandingizning telefoniga kirishni cheklashingiz yoki bloklashingiz mumkin</p>
                           <?
                              }
                              ?>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_10.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Ребëнок не сможет избавится от программы. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Bola dasturni o'chira olmaydi</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_11.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Блокировка неизвестных номеров для ребёнка. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Noma'lum raqamlarga kirishni cheklash</p>
                           <?
                              }
                              ?>                          
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="flex-center">
                        <img src="img/image_20.svg"  width="350px" height="300px" class="d-block w-10" alt="...">
                        <div class="carousel-caption d-md-block">
                           <?php
                              if($_SESSION['lang']=='ru'){
                                  ?>
                           <p>Создавайте и поощряйте полезные задания для ребенка. </p>
                           <?
                              }
                              if($_SESSION['lang']=='uz'){
                                  ?>
                           <p>Bola uchun foydali vazifalar yarating va rag'batlantiring</p>
                           <?
                              }
                              ?>
                        </div>
                     </div>
                  </div>
               </div>
               <button class="carousel-control-prev del_but" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next del_but" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
         <div class="section__foot">
            <div class="sec__footCard">
               <?php
                  if($_SESSION['lang']=='uz'){
                  ?>
               <h1>Tarif rejalari</h1>
               <div class="sec__card">
                  <div class="card">
                     <h2>Bepul</h2>
                     <p>1 funktsiya</p>
                     <h3>GPS surveillance</h3>
                  </div>
                  <div class="card">
                     <h2>Sinov</h2>
                     <p>barcha funktsiyalar</p>
                     <h3>2 kunlar bepul</h3>
                  </div>
                  <div class="card">
                     <h2>Pullik</h2>
                     <p>barcha funktsiyalar</p>
                     <h3>23 000 oyiga</h3>
                  </div>
                  <div class="card__active">
                     <h2>Tejamkor</h2>
                     <h1>50%</h1>
                     <p>barcha funktsiyalar</p>
                     <h3>135 000 yiliga</h3>
                  </div>
               </div>
               <div class="section__footText">
                  <h1>Aloqa:</h1>
                  <h2>+998(97) 390-40-00</h2>
                  <h3>info@bosstracker.uz</h3>
               </div>
               <?}?>
               <?php
                  if($_SESSION['lang']=='ru'){
                  ?>
               <h1>Тарифные планы</h1>
               <div class="sec__card">
                  <div class="card">
                     <h2>Бесплатный</h2>
                     <p>1 функция </p>
                     <h3>GPS-наблюдение</h3>
                  </div>
                  <div class="card">
                     <h2>Тестовый </h2>
                     <p>Все функции</p>
                     <h3>2 дня бесплатно</h3>
                  </div>
                  <div class="card">
                     <h2>Платный</h2>
                     <p>Все функции</p>
                     <h3>23 000 в месяц</h3>
                  </div>
                  <div class="card__active">
                     <h2>Эконом</h2>
                     <h1>50%</h1>
                     <p>Все функции</p>
                     <h3>135 000 в год</h3>
                  </div>
               </div>
               <div class="section__footText">
                  <h1>Обратная связь:</h1>
                  <h2>+998(97) 390-40-00</h2>
                  <h3>info@bosstracker.uz</h3>
               </div>
               <?}?>
            </div>
         </div>
         <div class="footer">
            <div class="foot__text">
               <p>&copy; 2023</p>
            </div>
            <div class="link">
               <a href="#">Privacy Policy</a>
               <a href="https://instagram.com/bosstracker.uz?igshid=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram"></i></a>
               <a href="https://t.me/Bosstrackeradmin"><i class="fa-brands fa-telegram"></i></a>
            </div>
         </div>
      </div>

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="ion-ios-close"></span>
                      </button>
                  </div>
                  <div class="modal-body p-4 p-md-5">
                      <div class="icon text-danger d-flex align-items-center justify-content-center">
                          <span class="ion-ios-person"></span>
                      </div>
                      <h3 class="text-center mb-4">Sign In</h3>
                      <form id="login-form" class="login-form">
                          <div class="form-group">
                              <input type="text" name="name" class="form-control rounded-left"
                                     placeholder="<? if($_SESSION['lang']=='uz')  echo 'FIO'; else  echo'фио';?>">
                          </div>
                          <div class="form-group d-flex">
                              <input type="text" name="number" class="form-control rounded-left" placeholder="+998 9- --- -- --" id="number">
                          </div>
                          <div class="form-group">
                              <button type="submit" class="form-control btn btn-success rounded submit px-3" id="login-send">Yuborish</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="js/main.js"></script>
      <script src="js/imask.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>

      <script>
         window.replainSettings = { id: '06e5f6d6-8e05-47a3-a09a-0d0db5375703' };
         (function(u){var s=document.createElement('script');s.async=true;s.src=u;
         var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
         })('https://widget.replain.cc/dist/client.js');
      </script>

      <script type="text/javascript">

         function linkch() {
             window.location.href = 'https://bosstracker.uz/bosstracker-child.apk';
         }        
      </script>
      <script type="text/javascript">
         function changelang(lang) {
             console.log(lang);
             $.ajax({
                 url : "change-lang.php",
                 type : "POST",
                 data:{
                     lang:lang,
                 },
                 success:function(data,status) {
                     // console.log(data,status);
                     if(status==="success"){
                         location.reload();
                     }
                     else{
                         alert("Internet yo'q");
                     }
                 },
                 error:function(xhr) {
                     alert("Internet yo'q");
                 }
             })
         }
      </script>
      <script type="text/javascript">
          const element = document.getElementById('number');
          const maskOptions = {
            mask: '+{998}(00)000-00-00'
          };
         const mask = IMask(element, maskOptions);
      </script>
      <script src="styles/js/popper.js"></script>
      <script src="styles/js/bootstrap.min.js"></script>
      <script src="styles/js/main.js"></script>
   </body>
</html>