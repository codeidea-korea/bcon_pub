<?php
include_once('_header.php');
?>

<div class="work_detail">
    <div class="inner">
         <div class="sub_tit">
            <h3 data-aos="fade-right">WORKS</h3>
        </div>
        <div class="work_box">
            <div class="info_box" data-aos="fade-right">
                <div class="tit">
                    <h5>역삼동 근린생활시설 신축공사</h5>
                </div>
                <div class="info">
                    <dl>
                        <dt>위치</dt>
                        <dd>서울특별시 강남구 역삼동</dd>
                    </dl>
                    <dl>
                        <dt>건축개요</dt>
                        <dd>
                            <p><span>대지면적  | </span>152.98 <b>㎡</b></p>
                            <p><span>건축면적 | </span>178.20 <b>㎡</b></p>
                            <p><span>연면적 | </span>541.98 <b>㎡</b></p>
                            <p><span>규모 | </span>지하2층, 지상5층</p>
                            <p><span>구조 | </span>철근콘크리트</p>
                            <p><span>용도 | </span>근린생활시설</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>공사기간</dt>
                        <dd>2023.06~2024.08</dd>
                    </dl>
                    <dl>
                        <dt>현장소장</dt>
                        <dd>부유범</dd>
                    </dl>
                    <dl>
                        <dt>설계</dt>
                        <dd><a href="javascript:;">실건축사무소</a> <i>*(구)에이엘엘종합건설에서 건설된 것</i></dd>
                    </dl>
                    <dl>
                        <dt>사진</dt>
                        <dd>권보준</dd>
                    </dl>
                </div>
            </div>
            <div class="slide_box" data-aos="fade-left">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide"><img src="./img/sub/work_detail_1.png" alt=""></li>
                    <li class="swiper-slide"><img src="./img/sub/work_detail_2.png" alt=""></li>
                    <li class="swiper-slide"><img src="./img/sub/work_detail_3.png" alt=""></li>
                    <li class="swiper-slide"><img src="./img/sub/work_detail_4.png" alt=""></li>
                    <li class="swiper-slide"><img src="./img/sub/work_detail_5.png" alt=""></li>
                </ul>
                <button class="arrow prev"><img src="./img/common/slide_arrow.svg" alt=""></button>
                <button class="arrow next"><img src="./img/common/slide_arrow.svg" alt=""></button>
            </div>
        </div>
        <div class="link_box" data-aos="fade-up">
            <a href="javascript:;"><img src="./img/common/insta.svg" alt=""></a>
            <a href="javascript:;">BAND</a>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper(".work_detail .slide_box", {
        slidesPerView: 'auto',
        spaceBetween:10,
        navigation: {
            nextEl: ".work_detail .slide_box .arrow.next",
            prevEl: ".work_detail .slide_box .arrow.prev",
        },
    });

    $(window).on('load resize',function(){
        let slideH = $('.slide_box li:nth-of-type(2) img').height(); 
        $('.slide_box .swiper-slide .info_box').height(slideH)
    })
</script>

<?php
include_once('_footer.php');
?>