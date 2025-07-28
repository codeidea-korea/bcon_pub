<?php
include_once('_header.php');
?>


<div class="contact_cont">
    <div class="inner">
        <div class="sub_tit">
            <h3 data-aos="fade-right">CONTACT</h3>
            <div class="txt">
                <h4 data-aos="fade-right" data-aos-delay="100">전문가의 깊이 있는 노하우</h4>
                <div class="desc" data-aos="fade-left" data-aos-delay="200">
                    <p>경험과 기술력을 바탕으로, 최적의 솔루션을 제안하는 비컨종합건설과 함께하세요. <br/>단순한 시공을 넘어, 고객의 니즈와 상황을 깊이 이해하고  합리적인 대안을 함께 고민합니다.</p>
                    <span>Join B.CON Construction, where experience and technical expertise come together to deliver optimal solutions.<br/> We go beyond construction — we take the time to deeply understand each client’s needs and circumstances,<br/>and work together to find practical and effective solutions.</span>
                </div>
            </div>
        </div>
    </div>

    <!-- * 카카오맵 - 지도퍼가기 -->
    <!-- 1. 지도 노드 -->
    <div id="daumRoughmapContainer1753688837671" class="root_daum_roughmap root_daum_roughmap_landing" data-aos="fade-up" data-aos-delay="300"></div>

    <!--
        2. 설치 스크립트
        * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
    -->
    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

    <!-- 3. 실행 스크립트 -->
    <script charset="UTF-8">
        new daum.roughmap.Lander({
            "timestamp" : "1753688837671",
            "key" : "6edfjq7jtm8",
            "mapWidth" : "1708",
            "mapHeight" : "702"
        }).render();
    </script>
    

    <!-- <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=nqm2q8vabi"></script>
    <div id="map" class="fade-in-up" style="height:60vh;overflow: visible;"></div> -->

</div>



<script>
    // 네이버지도
    // var HOME_PATH = window.HOME_PATH || '.';
    // var position = new naver.maps.LatLng(37.512635, 127.027836);
    // var mapOptions = {
    //     center: new naver.maps.LatLng(37.512635, 127.027836),
    //     zoom: 16
    // };


    // var map = new naver.maps.Map('map', mapOptions);
    // map.setOptions({ //지도 인터랙션 끄기
    //             draggable: true,
    //             pinchZoom: true,
    //             scrollWheel: false,
    //             keyboardShortcuts: false,
    //             disableDoubleTapZoom: true,
    //             disableDoubleClickZoom: true,
    //             disableTwoFingerTapZoom: true
    //         });



    // var markerOptions = {
    //     position: position.destinationPoint(90, 15),
    //     map: map,
    //     icon: {
    //         url: './img/common/maker.svg',
    //         size: new naver.maps.Size(62, 111),
    //         origin: new naver.maps.Point(0, 0),
    //         anchor: new naver.maps.Point(60, 80)
    //     }
    // };

    // var marker = new naver.maps.Marker(markerOptions);
</script>

<?php
include_once('_footer.php');
?>