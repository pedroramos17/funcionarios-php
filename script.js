
$(document).ready(function(){
  $(function() {
      $( "#calendario" ).datepicker({
          dateFormat: 'dd/mm/yy',
          closeText:"Fechar",
          prevText:"&#x3C;Anterior",
          nextText:"Próximo&#x3E;",
          currentText:"Hoje",
          monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
          monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
          dayNames:["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"],
          dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
          dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],
          weekHeader:"Sm",
          firstDay:1,
          changeMonth: true,
          changeYear: true,
          yearRange: "1930:2010"
      })
  })
})