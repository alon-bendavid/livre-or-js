// document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById("signUp");
    console.log(form);
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const payLoad = new FormData(form);
      
      for (item of payLoad) {
        console.log(item[0], item[1]);    
      }  
      postData(payLoad); 
    })
    // });
    async function postData(payLoad){
      /**
       * If we want to 'POST' something we need to change the `method` to 'POST'
       * 'POST' also expectes the request to send along values inside of `body`
       * so we must specify that property too. We use the earlier created 
       * FormData()-object and just pass it along.
       */
      const response = await fetch('./php/inscription.php',{
          method: 'POST',
          body: payLoad
      });
      /*
       * Because we are using `echo` inside of `handle_form.php` the response
       * will be a string and not JSON-data. Because of this we need to use
       * `response.text()` instead of `response.json()` to convert it to someting
       * that JavaScript understands
       */
      const data = await response.text();
      //This should now print out the values that we sent to the backend-side
      console.log(data);
  }
    