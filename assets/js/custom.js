const select = document.getElementById('ciudad_residencia');
const url = "https://www.datos.gov.co/resource/xdk5-pm3f.json";

fetch(url)
  .then((resp) => resp.json())
  .then((data) => {
    data.map( data =>{
        let newOption = document.createElement('option')
        newOption.value = data.municipio
        newOption.text = data.municipio
        select.appendChild(newOption)
    })
  })
  .catch((err) => {
    console.log(err);
  });
