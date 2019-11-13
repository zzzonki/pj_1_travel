// let age = prompt("Введите ваш возраст:")
// if (age>=18){
//     alert("проходите")
// }
// else{
//     alert("возвращайтесь с родителями")
// }

// пользователь щелкает по крестику нашей панели, 
// потом панель пропадает
let cookie = document.querySelector('.cookie')
let cross = document.querySelectorAll('.cookie__exit')
let promo_form = document.querySelector('.form_wrapper')
let action__btn = document.querySelector('.action__btm')
let def_animation = 'fadeOut'
let card__lines = document.querySelectorAll('.card__line')
let faq_quest = document.querySelectorAll('.faq_panel__quest')
let faq_answer = document.querySelectorAll('.faq_panel__answer')

for (let i = 0; i < card__lines.length; i++) {
    card__lines[i].onclick = function(){
        this.classList.toggle('card__line__helper')
    }
    // alert(i*i)
}

// let cat = {
//     color: "grey"
//     style: "vintage"
// }
// console.log(cat.color)

cross[1].onclick = () => {
    cookie.style.display = "none"
    // ck_warning.remove()
}

// у нас есть форма, которая изначально не видна
// при клике на кнопку она появится
// при нажатии на крестик пропадет
// через 5 секунд на сайте она появляется автоматически

action__btn.onclick = () => {
    if (promo_form.classList.contains(def_animation)) {
        promo_form.classList.remove(def_animation)
    }
    promo_form.style.display = "flex"
    // alert("по мне кликнули")
}

cross[0].onclick = () => {
    promo_form.classList.add(def_animation)
    setTimeout(() => {
        promo_form.style.display = "none"
    }, 600)
    // ck_warning.remove()
}
// Есть красные линии на карточках
// При наведении они становятся шире

// card__lines.onmouseover = () => {
//     card__line.style.width = "150px"
//     // alert("по мне кликнули")
// }
// card__lines.onmouseout = () => {
//     card__line.style.width = "90px"
// }

// При клике на вопросы открываются ответы

var flag
flag = true

for (let i = 0; i < faq_quest.length; i++) {
    faq_quest[i].onclick = function(){
        faq_answer[i].classList.add('animated')
        if(flag){
            faq_answer[i].classList.remove('zoomOut')
            faq_answer[i].classList.add('zoomIn')
            faq_answer[i].classList.toggle('faq__helper')
            flag = false
        }
        else{
            faq_answer[i].classList.remove('zoomIn')
            faq_answer[i].classList.add('zoomOut')
            flag = true
            setTimeout(() => {
                faq_answer[i].classList.remove('faq__helper')
            }, 400)
        }

        // if(faq_answer[i].classList.contains('zoomOut')){
        //     faq_answer[i].classList.remove('zoomOut'))
        //     faq_answer[i].classList.add('zoomIn')
        // }
        // if(faq_answer[i].classList.contains('zoomIn')){
        //     faq_answer[i].classList.remove('zoomIn')
        //     faq_answer[i].classList.add('zoomOut')
        // }
    }
}