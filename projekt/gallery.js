const GIMGS = document.querySelectorAll(".gallery img");
const POPUP = document.querySelector(".popup");
const POPUP_CLOSE = document.querySelector(".popup_close");
const POPUP_IMG = document.querySelector(".popup_img");
const CAPTION = document.querySelector(".caption");

GIMGS.forEach(gimg => {
    gimg.addEventListener("click", (e) => {
        POPUP.classList.remove("hidden");
        POPUP_IMG.src = e.target.src;
        const altText=e.target.alt;
        CAPTION.textContent=altText;
    });
    
});

POPUP_CLOSE.addEventListener("click",() =>{
    POPUP.classList.add("hidden");
} );

// const myFunction = () => {}