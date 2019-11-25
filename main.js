// пользователь щелкает по крестику нашей панели, 
// потом панель пропадает
let cookie = document.querySelector('.cookie')
let cross = document.querySelectorAll('.cookie__exit')
let cookie__button = document.querySelector('.cookie__button')
let promo_form = document.querySelector('.form_wrapper')
let action__btn = document.querySelector('.action__btm')
let def_animation = 'fadeOut'
let card__lines = document.querySelectorAll('.card__line')

/*
Часть, посвященная работе с FAQ панелями
*/
let faq_quest = document.querySelectorAll('.faq_panel__quest')
let faq_answer = document.querySelectorAll('.faq_panel__answer')
let faq_arrow = document.querySelectorAll('.faq_arrow')

/*
Часть, посвященная карточкам
*/

let arr_labels = ['name', 'surname', 'telephone', 'message']
let err = document.querySelector(".error_message")
let nameVal = $('form').find("[name = 'name']").val()
let fioVal = $('form').find("[name = 'surname']").val()
let telVal = $('form').find("[name = 'telephone']").val()
let textVal = $('form').find("[name = 'message']").val()

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
document.addEventListener('keydown', function(e) {
    if (event.code == 'Enter'){
        action__btn.click();
    }
});

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

setTimeout(() => {
    let answer = prompt("Введите страну, в которую хотите отправиться")
    // let answer2 = prompt("Введите еще страну")
    let promo = document.querySelector(".promo")
    let footer = document.querySelector("footer")
    let arr_country = ["финляндия", "эстония", "норвегия", "швеция", "дания", "болгария"]
    let arr_hi = ["Hei", "Tere", "Hei", "Hej", "Hej", "Здрасти"]
    GetInfo(answer, arr_country, arr_hi, promo, footer)
    // GetInfo(answer2, arr_country, footer)
}, 600);
    
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
// Валидизация формы
// с расчетом только 1 форма на данной странице
document.addEventListener('keydown', function(event) {
    if (event.code == 'Enter'){

$('form').submit(function(e){ // submit - событие, e = events

    e.preventDefault()
    // let nameVal = $(this).find("[name = 'name']").val()
    // let fioVal = $(this).find("[name = 'surname']").val()
    // let telVal = $(this).find("[name = 'telephone']").val()
    // let textVal = $(this).find("[name = 'message']").val()
    // let arr_labels = ['name', 'surname', 'telephone', 'message']
    if(nameVal == '' || fioVal == '' || telVal == '' || textVal == ''){
        // let err = document.querySelector(".error_message")
        let error_message = "какое-то из полей пустует"
        drawError(error_message, err)
        CheckEmpty(nameVal, arr_labels[0])
        CheckEmpty(fioVal, arr_labels[1])
        CheckEmpty(telVal, arr_labels[2])
        CheckEmpty(textVal, arr_labels[3])
    }
    else{
        CheckEmpty(nameVal, arr_labels[0])
        CheckEmpty(fioVal, arr_labels[1])
        CheckEmpty(telVal, arr_labels[2])
        CheckEmpty(textVal, arr_labels[3])
        let err = document.querySelector(".error_message")
        err.remove()
        setInterval(() => {
            e.stopPropogation()
        }, 300);
    }
})
    }
})

function CheckEmpty(el, label_name){
    if(el == ''){
        $('form').find(`[for = '${label_name}']`).css('color', 'red')
    }
    else{
        $('form').find(`[for = '${label_name}']`).css('color', 'lightblue')
    }
}