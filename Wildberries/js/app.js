
const dots = document.getElementsByClassName('dot');


$(document).ready( function (){
    /* ____________________________________________________________AJAX_______________ !!!!
    $('#searcher').keydown(function(e) {
        if(e.keyCode === 13) {
            let finalString = ('#searcher').valueOf();
            $.ajax({
                url : "#",
                type: "POST" ,
                data : ({final_query_string : finalString})
            }).done(function(html){
                $(".goodsHolder").html(html);
            });
        }
    });*/
    for (let i = 0; i < dots.length; i++){
        w = Math.round(Math.random()*300+100);
        dots[i].style.width = String(w)+'px';
        dots[i].style.height = dots[i].style.width;

        let color = Math.round(Math.random()*2 + 1);

        if (color == 1) {dots[i].style.backgroundColor = '#721e66';} else
        if (color == 2) {dots[i].style.backgroundColor = '#ec1480';} else
        if (color == 3) {dots[i].style.backgroundColor = '#842076';}

        x = Math.random()- 0.5;
        let left;
        if (x > 0){
            left = Math.round(window.screen.width/2 + window.screen.width*0.30 - x*(window.screen.width*0.20) - w/2);
        } else {
            left = Math.round(window.screen.width/2 - window.screen.width*0.30 + x*(window.screen.width*0.20) - w/2);
        }

        dots[i].style.left = String(left)+'px';

        dots[i].style.top = String(Math.round(Math.random()*window.innerHeight- w + 100))+'px';

    }


});


const balls = document.getElementsByClassName('ball');
const searcher = document.getElementById('searcher');
const blank = document.getElementById('predict');




/* _________________________!!!____________________________________AJAX_____________ !!!!
searcher.addEventListener('input', function (){

    let string = ('#searcher').valueOf();
    $.ajax({
        url : "#",
        type: "POST" ,
        data : ({query_string : string})
    }).done(function(html){
        $(".ballsHolder").html(html);
    });

});*/






searcher.addEventListener('click', function (){

    if (!$('#predict').hasClass('active')){
        searcher.style.backgroundImage = 'none';
    } else searcher.style.backgroundImage = "url('../img/searcher.svg')";


    const blank = document.getElementById('predict');
    blank.classList.toggle("active");
});

for (let i = 0; i < balls.length; i++){

    balls[i].addEventListener('click', function (){
        for (let i = 0; i < balls.length; i++){
            balls[i].style.transitionDuration = '0.1s';
            blank.style.transitionDuration = '0.1s';
        }
        setTimeout( function () {
            for (let i = 0; i < balls.length; i++){
                balls[i].style.transitionDuration = '0.5s';
                blank.style.transitionDuration = '0.5s';
            }
        } ,100, );

        blank.classList.toggle("active");
    });
}


const animItems = document.querySelectorAll('.anim');


if (animItems.length > 0){
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(params){
        for (let i = 0; i < animItems.length; i++) {
            const animItem = animItems[i];
            const animItemsHeight = animItem.offsetHeight;
            const animItemsOffset = offset(animItem).top;
            const animStart = 4;

            let animItemsPoint = window.innerHeight - animItemsHeight / animStart;
            if (animItemsHeight > window.innerHeight) {
                animItemsPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if ((pageYOffset > animItemsOffset - animItemsPoint) && pageYOffset < (animItemsOffset + animItemsHeight)) {
                animItem.classList.add('active');
            }
        }
    }
    function offset(el){
        const rect = el.getBoundingClientRect();
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
    }
    setTimeout(() => {
        animOnScroll();
    }, 300);
}
function DotsAnimation() {

    requestAnimationFrame(DotsAnimation);
    draw();
}
requestAnimationFrame(DotsAnimation);

function draw(){
    let time = new Date().getTime() * 0.002;
    let x = Math.sin( time ) / 2;
    let y = Math.cos( time * 0.9 )/ 2;

    for (let i = 0; i < dots.length; i++){
        let str = dots[i].style.left;
        let left = Number(str.substr(0,str.length - 2));
        str = dots[i].style.top;
        let top = Number(str.substr(0,str.length - 2));

        dots[i].style.left = String(left+ x)+'px';
        dots[i].style.top = String(top + y)+'px';


    }
}

