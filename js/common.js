
// 모바일메뉴 토글
const menuToggle = ()=>{
    $('header .right_menu').toggleClass('show')
}

$(window).on('load',function(){
    AOS.init({
        duration:600,
        disable: false,
        once: true,
    });
})