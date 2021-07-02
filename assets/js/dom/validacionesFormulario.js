const d = document;

export default function contactFormValidations(){
  const $form = d.querySelector(".contact__form"),
    //Captura unicamente los campos que tengan el atributo required
    $inputs = d.querySelectorAll(".contact__form [required]");

    //Creamos los span al final de cada uno de los campos del formaulario
    $inputs.forEach(input => {
    const $span = d.createElement("span");
    $span.id = input.name;
    $span.textContent = input.title;
    $span.classList.add('contact__form-error', 'none');
    input.insertAdjacentElement("afterend", $span);
  });
}

d.addEventListener('keyup', (e) =>{
  if(e.target.matches(".contact__form [required]")){
    let $input = e.target,
      pattern = $input.pattern || $input.dataset.pattern;
    
    //Hacemos las validaciones mientras el usuario escribe con las validaciones personalizadas
    if(pattern && $input.value !== ""){
      let regex = new RegExp(pattern);
      return !regex.exec($input.value)
        ?d.getElementById($input.name).classList.add("is-active")
        :d.getElementById($input.name).classList.remove("is-active");
    }

    if(!pattern){
      return $input.value === ""
        ?d.getElementById($input.name).classList.add("is-active")
        :d.getElementById($input.name).classList.remove("is-active");
    }
  }
});

//Aqui hacemos el envio del formulario para que llegue a tu correo personal
d.addEventListener("submit", (e) => {
  e.preventDefault();
  alert("Enviando formulario...");

  const $loader = d.querySelector(".contact-form-loader"),
    $response = d.querySelector(".contact-form-response");
    $loader.classList.remove("none");
     var form = d.querySelector('#form');

    setTimeout(() => {
      $loader.classList.add("none");
      $response.classList.remove("none");
      form.reset();

      setTimeout(() => $response.classList.add("none"), 3000);
    }, 3000);
});


