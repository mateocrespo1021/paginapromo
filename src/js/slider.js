import Swiper,{Navigation} from "swiper";
import "swiper/css"
import "swiper/css/navigation"

document.addEventListener("DOMContentLoaded",()=>{
    if (document.querySelector(".slider")) {
        const opciones={
           slidesPerView:1,
           spaceBetween:15,
           freeMode:true,
           navigation:{
               nextEl:".swiper-button-next",
               prevEl:".swiper-button-prev"
           },
           breakpoints:{
           
           }
        }
        Swiper.use([Navigation])
        new Swiper(".slider",opciones)
    }
})
