document.addEventListener('DOMContentLoaded', function() {
  // your code here
  const form = document.querySelector('#signUp');
  const inscrptionSub = document.getElementById("inscrptionSub");
  
  form.addEventListener('submit', async  (event) => {
    event.preventDefault(); // prevent the form from being submitted
  const payload = new FormData(form);
    console.log(form.value);

    await fetch("./php/inscription.php", {
        method: 'POST',
        body: payload,
      }).then(response => response.text()).then(data => console.log(data));
    
    // const repass = form.elements['repass'].value;
    // const result =  submitForm();
    // console.log(result);
  });
})
  
//   async function submitForm() {
//     const response = await fetch("./php/inscription.php", {
//       method: 'POST',
//       body: payload,
//     }).then(response => console.log(response));
    
//     return response.json();
//   }
// });

