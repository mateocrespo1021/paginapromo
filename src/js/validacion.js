import Swal from "sweetalert2";

(function (window, document) {
  let errores = [];
  const regex = /^([a-zA-Z0-9._%+-]+)@([a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;
  const form = document.querySelector("#form");
  const inputNombre = document.querySelector("#nombre");
  const inputEmail = document.querySelector("#email");
  const inputWhatsapp = document.querySelector("#whatsapp");
  const inputSelect = document.querySelector("#app");
  const divErrores = document.querySelector("#errores");
  const spinner = document.querySelector("#spinner");

  if (form) {
    form.addEventListener("submit", validarForm);
    function validarForm(e) {
      e.preventDefault();
      errores = [];
      //Validacion
      if (inputNombre.value == "") {
        errores = [...errores, "El nombre es obligatorio"];
      }

      if (!regex.test(inputEmail.value)) {
        errores = [...errores, "El email no es valido"];
      }

      if (inputWhatsapp.value == "") {
        errores = [...errores, "El WhatsApp es obligatorio"];
      }

      if (inputSelect.value == "") {
        errores = [...errores, "La Categoria es Obligatorio"];
      }

      //Mandar la info por FormDate

      if (!errores.length) {
        eliminarErrores();
        enviarInfo();
      }
      //Mostrar errores
      mostrarErrores();
    }

    function mostrarErrores() {
      eliminarErrores();
      errores.forEach((error) => {
        const pa = document.createElement("p");
        pa.classList.add("contacto__error");
        pa.textContent = error;
        divErrores.appendChild(pa);
      });
    }

    function eliminarErrores() {
      while (divErrores.firstChild) {
        divErrores.removeChild(divErrores.firstChild);
      }
    }

    async function enviarInfo() {
      agregarSpinner();
      //Pasa la validación
      //Objeto de formdata
      const datos = new FormData();
      datos.append("nombre", inputNombre.value);
      datos.append("email", inputEmail.value);
      datos.append("whatsapp", inputWhatsapp.value);
      datos.append("categoria", inputSelect.value);
      //Paso la informacion a la api
      try {
        const url = "/";
        const respuesta = await fetch(url, {
          method: "POST",
          body: datos,
        });
        const resultado = await respuesta.json();
        if (resultado.mensaje) {
          Swal.fire({
            title: "Mensaje Enviado Exitosamente",
            text: "Te contactaremos lo más rapido posible",
            icon: "success",
            confirmButtonText: "OK",
          }).then(() => location.reload());
        } else {
          Swal.fire({
            title: "Error",
            text: "Hubo un error , intenta otra vez",
            icon: "error",
            confirmButtonText: "OK",
          }).then(() => location.reload());
        }
      } catch (error) {
        console.log(error);
      }
    }

    function agregarSpinner() {
      spinner.classList.add("activo");
      form.classList.add("ocultar");
    }
  }
})(window, document);
