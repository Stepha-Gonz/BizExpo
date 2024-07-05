(function () {
  let eventos = [];
  const resumen = document.querySelector("#registro-resumen");
  if (resumen) {
    const eventosBoton = document.querySelectorAll(".evento__agregar");
    eventosBoton.forEach((boton) => boton.addEventListener("click", seleccionarEvento));

    const formularioRegistro = document.querySelector("#registro");
    formularioRegistro.addEventListener("submit", submitFormulario);
    mostrarEventos();
    function seleccionarEvento(e) {
      e.target.disabled = true;
      eventos = [
        ...eventos,
        {
          id: e.target.dataset.id,
          titulo: e.target.parentElement.querySelector(".evento__nombre").textContent.trim(),
        },
      ];

      mostrarEventos();
    }

    function mostrarEventos() {
      limpiarEventos();
      if (eventos.length > 0) {
        eventos.forEach((evento) => {
          const eventoDOM = document.createElement("DIV");
          eventoDOM.classList.add("registro__evento");
          const titulo = document.createElement("H3");
          titulo.classList.add("registro__nombre");
          titulo.textContent = evento.titulo;
          const botonEliminar = document.createElement("BUTTON");
          botonEliminar.classList.add("registro__eliminar");
          botonEliminar.innerHTML = `<i class="fa-solid fa-trash"></i>`;
          botonEliminar.onclick = function () {
            eliminarEvento(evento.id);
          };
          eventoDOM.appendChild(titulo);
          eventoDOM.appendChild(botonEliminar);
          resumen.appendChild(eventoDOM);
        });
      } else {
        const noRegistro = document.createElement("P");
        noRegistro.textContent = "No hay eventos, añade los eventos a los que asistirás";
        noRegistro.classList.add("registro__texto");
        resumen.appendChild(noRegistro);
      }
    }

    function limpiarEventos() {
      while (resumen.firstChild) {
        resumen.removeChild(resumen.firstChild);
      }
    }
    function eliminarEvento(id) {
      Swal.fire({
        title: "Estas seguro de eliminar este evento?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "sí, eliminarlo!",
      }).then((result) => {
        if (result.isConfirmed) {
          eventos = eventos.filter((evento) => evento.id !== id);
          const botonAgregar = document.querySelector(`[data-id="${id}"]`);
          botonAgregar.disabled = false;
          mostrarEventos();
        }
      });
    }

    async function submitFormulario(e) {
      e.preventDefault();
      const regaloId = document.querySelector("#regalo").value;
      const eventosId = eventos.map((evento) => evento.id);
      console.log(regaloId);
      console.log(eventosId);
      if (eventosId.length === 0 || regaloId === "") {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Elige un regalo y mínimo 1 evento",
        });
        return;
      }
      const datos = new FormData();
      datos.append("eventos", eventosId);
      datos.append("regalo_id", regaloId);
      const url = "/finalizar-registro/conferencias";
      const respuesta = await fetch(url, {
        method: "POST",
        body: datos,
      });
      const resultado = await respuesta.json();
      if (resultado.resultado) {
        Swal.fire({
          title: "Registro Exitoso!",
          text: "¡Ya estas registrado,Te esperamos en BizExpo!",
          icon: "success",
        }).then(() => (location.href = `/boleto?id=${resultado.token}`));
      } else {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "No se ha podido completar el registro, Revisa nuevamente cupos y vuelve a intentar",
        }).then(() => location.reload());
        return;
      }
    }
  }
})();
