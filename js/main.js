(() => {
    
    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.burger_menu');
    const hamburger_image = document.querySelector("#hamburger-image");
    
    
    menu_btn.addEventListener('click', function () {
      menu_btn.classList.toggle('is-active');
      mobile_menu.classList.toggle('is-active');
      if (menu_btn.classList.contains("is-active")){
        hamburger_image.src = "images/close.png";
      } else{
        hamburger_image.src = "images/burger.png";
      }
    });
    
    
    mobile_menu.addEventListener('click', function () {
      menu_btn.classList.toggle('is-active');
      mobile_menu.classList.toggle('is-active');
      if (menu_btn.classList.contains("is-active")){
        hamburger_image.src = "images/close.png";
      } else{
        hamburger_image.src = "images/burger.png";
      }
    });
    
    
    })();