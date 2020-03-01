// пользователь щелкает по крестику нашей панели, 
// потом панель пропадает
let cookie = document.querySelector('.cookie')
let cross = document.querySelectorAll('.cookie__exit')
let cookie__button = document.querySelector('.cookie__button')
let promo_form = document.querySelector('.form_wrapper')
let action__btn = document.querySelector('.action__btm')
let def_animation = 'fadeOut'
let card__lines = document.querySelectorAll('.card__line')
let form_exit = document.querySelector('.form__exit')

/*
Часть, посвященная работе с FAQ панелями
*/
let faq_quest = document.querySelectorAll('.faq_panel__quest')
let faq_answer = document.querySelectorAll('.faq_panel__answer')
let faq_arrow = document.querySelectorAll('.faq_arrow')

/*
Часть, посвященная карточкам
*/

let arr_labels = ['name', 'surname', 'telephone', 'message'] // массив лейблов
let err = document.querySelector(".error_message")
let form = document.querySelector("form")
let nameVal = form.querySelector("[name = 'name']").value;
let fioVal = form.querySelector("[name = 'surname']").value;
let telVal = form.querySelector("[name = 'telephone']").value;
let textVal = form.querySelector("[name = 'message']").value;    
let elem_form = [nameVal, fioVal, telVal, textVal] // массив инпутов

/*
Переменные, перенесенные из функций в начало, 
для того, чтобы применить их ко всему документу
и использовать в при отключении формы
*/

for (let i = 0; i < card__lines.length; i++) {
    card__lines[i].onclick = function(){
        this.classList.toggle('card__line__helper')
    }
}

/*
Работа с кнопкой закрытия кукис
*/

cookie__button.onclick = () => {
    cookie.style.display = "none"
}

// у нас есть форма, которая изначально не видна
// при клике на кнопку она появится
// при нажатии на крестик пропадет
// через 5 секунд на сайте она появляется автоматически

// Открытие формы по кнопке Enter

// document.addEventListener('keydown', function(e) {
//     if (event.code == 'Enter'){
//         action__btn.click();
//     }
// });

action__btn.onclick = () => {
    if (promo_form.classList.contains(def_animation)) {
        promo_form.classList.remove(def_animation)
    }
    promo_form.style.display = "flex"
    // alert("по мне кликнули")
}

// var err = document.querySelector(".error_message")
// На эту переменную ссылается также функция drawError

cross[0].onclick = () => {
    err.innerHTML = ""
    for (let i = 0; i < arr_labels.length; i++) {
        $('form').find(`[for = '${arr_labels[i]}']`).css('color', 'white')        
    }
    promo_form.classList.add(def_animation)
    setTimeout(() => {
        promo_form.style.display = "none"
    }, 600)
    // form_exit.style.top = "19%"
    // error_message.remove()
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

var flags = []  
// У нас массив, в котором есть значения true

            for (let i = 0; i < faq_quest.length; i++) {
                flags.push(true)
                console.log(flags)
                faq_quest[i].onclick = function(){
                    faq_answer[i].classList.add('animated')
                    if(flags[i]){
                        faq_arrow[i].classList.remove('rotateArrowBack')
                        faq_arrow[i].classList.add('rotateArrow')
                        faq_answer[i].classList.remove('flipOutX')
                        faq_answer[i].classList.add('flipInX')
                        faq_answer[i].classList.toggle('faq__helper')
                        flags[i] = false
                        console.log(flags[i]);
                    }
                    else{
                        faq_answer[i].classList.remove('flipInX')
                        faq_answer[i].classList.add('flipOutX')
                        faq_arrow[i].classList.add('rotateArrowBack')
                        flags[i] = true
                        setTimeout(() => {
                            faq_answer[i].classList.remove('faq__helper')
                        }, 400)
                        console.log(flags[i]);
                    }
                }
            }
// Печенька на куки-панели меняется на обведенную печеньку и обратно, при нажатии. Пати хард.

let cookie_logo = document.querySelector('.cookie__logo')

cookie_logo.onclick = function(){
    this.classList.toggle('cookie__logo_helper')
}

// При нажатии на крест на куки-панели появляется несогласный куки-монстр посреди экрана
// Чтобы убрать панель теперь нужно нажать кнопку "Я понял"
// Чтобы убрать монстра, нужно кликнуть на него

let screamer = document.querySelector('.cookie__screamer')

cross[1].onclick = () => {
    screamer.classList.remove('zoomOutDown')
    screamer.style.display = 'block'
    screamer.classList.add('animated')
    screamer.classList.add('zoomInUp')
}

screamer.onclick = function() {
    this.classList.add('zoomOutDown')
    setTimeout(() => {
        screamer.style.display = 'none'
    }, 600) 
}

// При входе пользователя окно спрашивает, в какую страну он хочет отправиться.
// В зависимости от ответа он перерисовывает промо бэкграунд
// Страница должна полностью загрузиться
// Данные должны приводиться к нижнему регистру для универсальности

// setTimeout(() => {
//     let answer = prompt("Введите страну, в которую хотите отправиться")
//     // let answer2 = prompt("Введите еще страну")
//     let promo = document.querySelector(".promo")
//     let footer = document.querySelector("footer")
//     let arr_country = ["финляндия", "эстония", "норвегия", "швеция", "дания", "болгария"]
//     let arr_hi = ["Hei", "Tere", "Hei", "Hej", "Hej", "Здрасти"]
//     GetInfo(answer, arr_country, arr_hi, promo, footer)
//     // GetInfo(answer2, arr_country, footer)
// }, 600);
    
function GetInfo(info, arr, hi, el, el2){   
    info = info.toLowerCase()
    for (let i = 0; i < arr.length; i++) {
        if (info == arr[i]) {
            //  происходит смена бэкграунда промо и футера
            el.style.backgroundImage = `url(img/${arr[i]}.jpg)`
            el2.style.backgroundImage = `url(img/${arr[i]}.jpg)`
            alert(hi[i])
        }
    }
}

function drawError(text, el){
    el.innerHTML = text
}

document.addEventListener("keypress", (event) => {
    let nvg =  document.querySelectorAll(".nav a")
    for (let i = 0; i < nvg.length; i++) {
        if(event.code == "Digit1"){
            nvg[i].style.color = "var(--dark-blue)"
        }
        else if(event.code == "Digit2"){
            nvg[i].style.color = "white"
        }
    }
})

// Валидизация формы
// с расчетом только 1 форма на данной странице
    // document.addEventListener('keypress', function(event) {
    //     if (event.code == 'Enter'){

// form.document.addEventListener("keypress", (e)=> {
//     if(e.key == "Enter" && promo_form.style.display === 'flex'){
//         validate() // дать ему контекст и все заработает
//         // методы bind и call
//     }
// })

document.querySelector('form').addEventListener("submit", validate)

function validate(e){ // onsubmit - событие, e = events

    e.preventDefault() // останавливает отправку формы
    // let nameVal = $(this).find("[name = 'name']").val()
    // let fioVal = $(this).find("[name = 'surname']").val()
    // let telVal = $(this).find("[name = 'telephone']").val()
    // let textVal = $(this).find("[name = 'message']").val()
    // let arr_labels = ['name', 'surname', 'telephone', 'message']
    if(nameVal == '' || fioVal == '' || telVal == '' || textVal == ''){
        // let err = document.querySelector(".error_message")
        let error_message = "какое-то из полей пустует"
        drawError(error_message, err)
        for (let i = 0; i < elem_form.length; i++) {
            CheckEmpty(elem_form[i], arr_labels[i])
        }
        // form_exit.style.top = "23%"
    }
    else{
        for (let i = 0; i < elem_form.length; i++) {
            CheckEmpty(elem_form[i], arr_labels[i])
        }
        let err = document.querySelector(".error_message")
        err.remove()
        setInterval(() => {
            e.stopPropogation() // отмена всплывающего события
        }, 300);
    }
}
//     }
// }

// document.onclick = () =>{
//     alert("по мне нажали")
// }

// let listen = function (event) {
//     alert(this)
// }

// Универсальная функция, которая по клику на объект, 
// красит весь его текст в синий цвет

function draw(){
    console.log(this)
    this.style.color = "blue"
    this.innerHTML = "*****"
}
let header = document.querySelector("header")
let a_arr = header.querySelectorAll("a")
// for (let i = 0; i < a_arr.length; i++) {
//     a_arr[i].addEventListener("mouseover", draw, false)
// }
// a_arr.forEach(el => {
//     el.addEventListener("mouseover", draw, true)
// })


// document.onclick = listen
// document.addEventListener("click", draw, false)
// document.querySelector("header").addEventListener("click", draw, false)

// setTimeout(() => {
//     document.removeEventListener("click", listen, false)
// }, 3000)

// document.addEventListener("keypress", (e)=> {
//     if(e.key == "j" || e.key == "о"){
//         alert("jello")
//     }
//     else{
//         alert(e.key)
//     }
// }, false)


function CheckEmpty(el, label_name){
    if(el == ''){
        $('form').find(`[for = '${label_name}']`).css('color', 'red')
    }
    else{
        $('form').find(`[for = '${label_name}']`).css('color', 'lightblue')
    }
}

// $(document).ready(function(){
//     $('.slider').slick({
//         autoplay: true,
//         autoplaySpeed: 4000,
//         dots: true,
//         infinite: true,
//         speed: 900,
//         slidesToShow: 1,
//         // adaptiveHeight: true
//         // adaptiveWidth: true
//       });
//   });

// $(document).ready(function(){  
//     $('.slider').slick({
//         dots: true,
//         infinite: true,
//         speed: 500,
//         fade: true,
//         cssEase: 'linear',
//         arrows: true,
//         autoplay: true,
//         centerMode: true
//     });
// });

// Реализация AJAX

let btn__sort = document.querySelector(".btn__sort")
btn__sort.addEventListener("change", function(){
    console.log(btn__sort.value)
    this.disabled = true
    let xhr = new XMLHttpRequest()
    xhr.open('GET', `http://localhost/pj_1_travel/handler.php`)
    xhr.send()

    let that = this

    xhr.addEventListener("load", function(){
        let data = xhr.responseText
        console.log(data)
        let cards = document.querySelector(".cards")
        cards.innerHTML=''
        cards.insertAdjacentHTML('afterbegin', data)
        that.disabled = false
    })
})
