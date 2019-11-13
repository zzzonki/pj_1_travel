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
let card__line = document.querySelector('.card__line')

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

card__line.onmouseover = () => {
    card__line.style.width = "150px"
    // alert("по мне кликнули")
}
card__line.onmouseout = () => {
    card__line.style.width = "90px"
}