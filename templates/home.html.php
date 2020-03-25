<section class="slideshow-container">

    <div class="mySlides fade">
        <div class="text">MARONIYE</div>
        <img src="img/JamHero.png" alt="">
            <div class="coment">온 가족이 즐기는 건강한 유기농 잼</div>
        </div>

        <div class="mySlides fade">
            <div class="text">MARONIYE</div>
            <img src="img/JamHero2.png" alt="">
                <div class="coment">온 가족이 즐기는 건강한 유기농 잼</div>
            </div>

            <div class="mySlides fade">
                <div class="text">MARONIYE</div>
                <img src="img/JamHero4.png" alt="">
                    <div class="coment">온 가족이 즐기는 건강한 유기농 잼</div>
                </div>
            </section>
            <br>

                <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <br>

                    <section class="conB" id="conB">
                        <div class="container">
                            <div class="text">
                                <span class="fa fa-paw icon"></span>
                                <h2>마로니에 잼이란?</h2>
                                <p>온 가족이 즐길 수 있는 건강하고 맛있는 잼입니다.</p>
                                <a href="about.html">MORE..
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>
                            <div class="text">
                                <span class="fa fa-heart icon"></span>
                                <h2>잼의 제작 과정</h2>
                                <p>엄선된 국내산 유기농 재료만을 사용하여 만들었습니다.</p>
                                <a href="about.html">MORE..
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>
                            <div class="text">
                                <span class="fa fa-paste icon"></span>
                                <h2>Why?</h2>
                                <p>소중한 가족이 먹어야 할 음식이니 조금이라도 더 건강하게 맛을 즐길 수 있으면 하는 마음으로 만듭니다.</p>
                                <a href="#introduce">MORE..
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>
                            <div class="text">
                                <span class="fa fa-paste icon"></span>
                                <h2>How?</h2>
                                <p>건강한 마로니에 잼을 이용하여 다양한 형태의 음식을 즐겨봅시다.</p>
                                <a href="Recipe.html">MORE..
                                    <span class="fa fa-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </section>

                    <section class="conC">
                        <div class="container">
                            <div class="photo"></div>
                            <div class="text">
                                <h2>우리 가족이 먹는다는 생각으로<br>
                                        만들었습니다.</h2>
                                    <p>뚜껑을 열어보면 과육이 생생하게 살아 있어 진함이 그대로 느껴집니다.<br>
                                            합성 첨가물 없이 오직 유기농 과일과 유기농 재료들만을 사용하여 맛을 내었습니다.</p>
                                        <a name="introduce" href="about.html">마로니에 잼 소개
                                            <span class="fa fa-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </section>
                            <br>
                                <selection class="conD">
                                    <div class="container">
                                        <div class="photo"></div>
                                        <div class="text">
                                            <h2>마로니에 잼과 함께하는 특별한 요리</h2>
                                            <p>마로니에 잼을 이용하여 건강하고 맛있는 음식을 만들 수 있는 레시피로
                                                <br>가족들과 행복한 한때를 보내봅시다.</p>
                                                <a href="recipe.html">레시피 살펴보기
                                                    <span class="fa fa-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </selection>
                                    <br>

                                        <script>
                                            var slideIndex = 0;
                                            showSlides();

                                            function showSlides() {
                                                var i;
                                                var slides = document.getElementsByClassName("mySlides");
                                                var dots = document.getElementsByClassName("dot");
                                                for (i = 0; i < slides.length; i++) {
                                                    slides[i].style.display = "none";
                                                }
                                                slideIndex++;
                                                if (slideIndex > slides.length) {
                                                    slideIndex = 1
                                                }
                                                for (i = 0; i < dots.length; i++) {
                                                    dots[i].className = dots[i]
                                                        .className
                                                        .replace(" active", "");
                                                }
                                                slides[slideIndex - 1].style.display = "block";
                                                dots[slideIndex - 1].className += " active";
                                                setTimeout(showSlides, 2000);
                                            }
                                        </script>