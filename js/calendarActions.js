// Interações com o calendário
class Action {
  constructor(pDataAgendamento) {
    this.hora = null; // Será definido dinamicamente ao clicar no horário
    this.dataAgendamento = pDataAgendamento;
  }

  addEventClick() {
    const dates = document.querySelectorAll('.date ul li');
    const textWeekday = document.querySelector('.popupAddEvent p');
    const weekdays = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    const valueWeekday = new Date();

    for (let i = 0; i < dates.length; i++) {
      dates[i].addEventListener('click', () => {
        const dateSelected = document.querySelector('.popupAddEvent h2');
        dateSelected.innerHTML = dates[i].textContent;

        let date = Number(dates[i].innerHTML);
        valueWeekday.setDate(date);
        let diaDaSemana = weekdays[valueWeekday.getDay()];

        textWeekday.innerHTML = diaDaSemana;

        const month = new Date();
        const year = new Date();
        let currentMonth = month.getMonth() + 1;
        let currentYear = year.getFullYear();
        if (currentMonth < 10) {
          currentMonth = `0${currentMonth}`;
        }

        this.dataAgendamento = `${currentYear}-${currentMonth}-${dates[i].textContent}`;
      });
    }
  }

  getTeste() {
    let servicos = [];

    const checkHair = document.querySelector("#btncheck1");
    const checkBeard = document.querySelector("#btncheck2");

    checkHair.addEventListener("change", function () {
      const labelCabelo = document.querySelector(".btn-hair");
      const valorDoLabel = labelCabelo.innerText;

      if (this.checked) {
        servicos.push(valorDoLabel);
      } else {
        const index = servicos.indexOf(valorDoLabel);
        if (index > -1) {
          servicos.splice(index, 1);
        }
      }
      console.log(servicos);
    });

    checkBeard.addEventListener("change", function () {
      const labelbarba = document.querySelector(".btn-beard");
      const valorDoLabel = labelbarba.innerText;

      if (this.checked) {
        servicos.push(valorDoLabel);
      } else {
        const index = servicos.indexOf(valorDoLabel);
        if (index > -1) {
          servicos.splice(index, 1);
        }
      }
      console.log(servicos);
    });
  }

  scheduling() {
    const schedulingBtn = document.querySelector('.schedulingButton');
    schedulingBtn.addEventListener('click', () => {
      const selectedTime = document.querySelector("#selectedTime");
      this.hora = selectedTime.options[selectedTime.selectedIndex].text;

      const data = {
        data: this.dataAgendamento,
        service: 'services',
        hora: this.hora
      };

      fetch('./php/agendando.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
        .then(response => response.json())
        .then(data => {
          console.log('Sucesso:', data);
          // Faça algo com os dados recebidos da API
        })
        .catch((error) => {
          console.error('Erro ao fazer fetch:', error);
        });
    });
  }
}

// Inicialização após a seleção da data
document.addEventListener('DOMContentLoaded', () => {
  //const selectedDate = '2024-06-03'; // Substitua com a data selecionada

  const action = new Action();
  action.scheduling();
  action.getTeste();
  action.addEventClick();
});
