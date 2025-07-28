<?php
include_once('_header.php');
?>

<div class="work_detail">
    <div class="inner">
         <div class="sub_tit">
            <h3 data-aos="fade-right">WORKS</h3>
        </div>
        <div class="slide_box"  data-aos="fade-left">
            <!-- mo -->
            <div class="info_box mo">
                <div class="tit">
                    <h5>역삼동 근린생활시설 신축공사</h5>
                    <div class="link">
                        <a href="javascript:;"><img src="./img/common/work_insta.svg" alt=""></a>
                        <a href="javascript:;"><img src="./img/common/work_band.svg" alt=""></a>
                    </div>
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
                        <dd><a href="javascript:;">실건축사무소</a></dd>
                    </dl>
                    <dl>
                        <dt>사진</dt>
                        <dd>권보준</dd>
                    </dl>
                </div>
            </div>

            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <!-- pc -->
                    <div class="info_box">
                        <div class="tit">
                            <h5>역삼동 근린생활시설 신축공사</h5>
                            <div class="link">
                                <a href="javascript:;"><img src="./img/common/work_insta.svg" alt=""></a>
                                <a href="javascript:;"><img src="./img/common/work_band.svg" alt=""></a>
                            </div>
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
                                <dd><a href="javascript:;">실건축사무소</a></dd>
                            </dl>
                            <dl>
                                <dt>사진</dt>
                                <dd>권보준</dd>
                            </dl>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide"><img src="./img/sub/work_detail_1.png" alt=""></li>
                <li class="swiper-slide"><img src="./img/sub/work_detail_2.png" alt=""></li>
                <li class="swiper-slide"><img src="./img/sub/work_detail_3.png" alt=""></li>
                <li class="swiper-slide"><img src="./img/sub/work_detail_4.png" alt=""></li>
                <li class="swiper-slide"><img src="./img/sub/work_detail_5.png" alt=""></li>
            </ul>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper(".work_detail .slide_box", {
        slidesPerView: 'auto',
        spaceBetween:10,
        
    });

    $(window).on('load resize',function(){
        let slideH = $('.slide_box li:nth-of-type(2) img').height(); 
        $('.slide_box .swiper-slide .info_box').height(slideH)
    })
</script>

<?php
include_once('_footer.php');
?>