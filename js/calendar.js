//Calendar Structure

//variáveis
let currentMonth = new Date()
let currentYear  = new Date()
let weekday      = new Date()
let mes          = new Date().getMonth()
let countDaysMonth = getDaysInMonth(currentMonth.getMonth() + mes, currentYear.getFullYear())

//insere a data atual na div agendar
const today = new Date()
defaultDate = document.querySelector('.popupAddEvent h2')
defaultDate.innerHTML = today.getDate()


//preenche o nome da semana
valueWeekday = weekday.getDay()
textWeekday = document.querySelector('.popupAddEvent p')
switch (valueWeekday) {
  case 0:
    textWeekday.innerHTML = 'Domingo'
    break;
  case 1:
    textWeekday.innerHTML = 'Segunda'
    break;
  case 2:
    textWeekday.innerHTML = 'Terça'
    break;   
  case 3:
    textWeekday.innerHTML = 'Quarta'
    break;
  case 4:
    textWeekday.innerHTML = 'Quinta'
    break;
  case 5:
    textWeekday.innerHTML = 'Sexta'
    break;
  case 6:
    textWeekday.innerHTML = 'Sábado'
    break;

  default:
    break;
}

//preenche o nome do mes
textMonth = document.querySelector('.currentMonth')
switch (mes) {
  case 0:
    textMonth.innerHTML = 'Janeiro'
    break;
  case 1:
    textMonth.innerHTML = 'Fevereiro'
    break;
  case 2:
    textMonth.innerHTML = 'Março'
    break;   
  case 3:
    textMonth.innerHTML = 'Abril'
    break;
  case 4:
    textMonth.innerHTML = 'Maio'
    break;
  case 5:
    textMonth.innerHTML = 'Junho'
    break;
  case 6:
    textMonth.innerHTML = 'Julho'
    break;
  case 7:
    textMonth.innerHTML = 'Agosto'
    break;
  case 8:
    textMonth.innerHTML = 'Setembro'
    break;
  case 9:
    textMonth.innerHTML = 'Outubro'
    break;
  case 10:
    textMonth.innerHTML = 'Novembro'
    break;
  case 11:
    textMonth.innerHTML = 'Dezembro'
    break;

  default:
    break;
}

textYear = document.querySelector('.currentYaer')
textYear.innerHTML = currentYear.getFullYear()

/*Manipula os elementos do calendário*/
const DOM = {

   calendarDays(){
    const ul = document.querySelector('.date ul')
    const li = document.createElement('li')
    ul.append(li)  
    
  },

  //posiciona o primeiro dia do mes de acordo com a semana que se inicia
  positionFirstDay(){
    const date = new Date(); // Cria uma nova instância do objeto Date
    date.setDate(1); // Define o dia para o primeiro dia do mês atual
    const diasDaSemana = [1, 2, 3, 4, 5, 6, 7];
    const diaDaSemana = diasDaSemana[date.getDay()]; // Obtém o nome do dia da semana
    const liDaysFirstChild = document.querySelector('.date ul li:first-child')
    liDaysFirstChild.style.gridColumnStart = diaDaSemana
  }

}

/*Verifica a quantidade de dias que o mês tem*/
function getDaysInMonth(mes, ano) {
  let data = new Date(ano, mes, 0);
  return data.getDate();
}

/*insere as datas*/
for(let i = 1 ; i <= countDaysMonth ; i++){
  DOM.calendarDays()
  // console.log(i);
  function insertDates(){
    const li = document.querySelectorAll('.date ul li')
    //li.forEach(element => {console.log(element);})
    for (i = 1 ; i <= countDaysMonth ; i++){
      li[i-1].innerHTML = i;
    }
  }
}




insertDates()
DOM.positionFirstDay()