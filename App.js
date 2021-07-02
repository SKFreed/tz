let operation = document.querySelector('.operations');
let opIn = document.querySelector('.options-income')
let opEx = document.querySelector('.options-expenses')

operation.onchange = function () //Обработчик событий, выполняет действия при изменении значения раскрывающего списка
{


    if (operation.value === "income") {
        opIn.classList.remove('hide') //classList - метод, через который происходит взаимодействия с классами, в зависимости от значений(add,remove,toggle(переключает),contains)
    } else {
        opIn.classList.add('hide')
    }
    if (operation.value === "expenses") {
        opEx.classList.remove('hide')
    } else {
        opEx.classList.add('hide')
    }
}
