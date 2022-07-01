

  const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  window.addEventListener("load",function(){
 
   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        
          loginPopup.classList.add("show");
         
  }


  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })

