document.addEventListener('DOMContentLoaded', function() {
  // your code here
  const form = document.getElementById('signUp');
  const inscrptionSub = document.getElementById("inscrptionSub");
  
  form.addEventListener('submit',  (event) => {
    event.preventDefault(); // prevent the form from being submitted
    const username = form.elements['username'].value;
    const password = form.elements['password'].value;
    // console.log(username);
    console.log(username);

  
    
    // const repass = form.elements['repass'].value;
    const result =  submitForm(username, password);
    console.log(result);
  });
  
  async function submitForm(username, password) {
    const response = await fetch('php/inscription.php', {
      method: 'POST',
      body: JSON.stringify({ username, password }),
      headers: {
        'Content-Type': 'application/json'
      }
    });
    return response.json();
  }
});

