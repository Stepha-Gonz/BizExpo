(function () {
  document.addEventListener("DOMContentLoaded", function () {
    document.body.addEventListener("click", function (event) {
      if (event.target.classList.contains("table__accion--eliminar-ponente")) {
        event.preventDefault();
        confirmarEliminarPonente(event);
      }
      if (event.target.classList.contains("table__accion--eliminar-evento")) {
        event.preventDefault();
        confirmarEliminarEvento(event);
      }
    });
  });

  function confirmarEliminarPonente(event) {
    Swal.fire({
      title: "¿Estás seguro de eliminar el ponente?",
      text: "¡No se podrá revertir esta acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, ¡Eliminarlo!",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        eliminarPonente(event.target.closest("form"));
      }
    });
  }

  function eliminarPonente(form) {
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          Swal.fire({
            title: "Ponente eliminado!",
            icon: "success",
          }).then(() => {
            window.location.reload();
          });
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al eliminar el ponente",
          icon: "error",
        });
      });
  }

  function confirmarEliminarEvento(event) {
    Swal.fire({
      title: "¿Estás seguro de eliminar el evento?",
      text: "¡No se podrá revertir esta acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sí, ¡Eliminarlo!",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        eliminarEvento(event.target.closest("form"));
      }
    });
  }
  function eliminarEvento(form) {
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          Swal.fire({
            title: "Evento eliminado!",
            icon: "success",
          }).then(() => {
            window.location.reload();
          });
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al eliminar el evento",
          icon: "error",
        });
      });
  }

  function editarPonente(event) {
    const form = event.target.closest("form");
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          Swal.fire({
            title: "Actualizado Correctamente",
            icon: "success",
          }).then(() => {
            window.location.href = "/admin/ponentes";
          });
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al actualizar el ponente",
          icon: "error",
        });
      });
  }

  function crearPonente(event) {
    const form = event.target.closest("form");
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          Swal.fire({
            title: "Creado Correctamente",
            icon: "success",
          }).then(() => {
            window.location.href = "/admin/ponentes";
          });
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al crear el ponente",
          icon: "error",
        });
      });
  }
  function crearEvento(event) {
    const form = event.target.closest("form");
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          Swal.fire({
            title: "Creado Correctamente",
            icon: "success",
          }).then(() => {
            window.location.href = "/admin/eventos";
          });
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al crear el evento",
          icon: "error",
        });
      });
  }
  function editarEvento(event) {
    const form = event.target.closest("form");
    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          Swal.fire({
            title: "Actualizado Correctamente",
            icon: "success",
          }).then(() => {
            window.location.href = "/admin/eventos";
          });
        } else {
          Swal.fire({
            title: "Error",
            text: data.message,
            icon: "error",
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          title: "Error",
          text: "Hubo un problema al editar el evento",
          icon: "error",
        });
      });
  }
})();
