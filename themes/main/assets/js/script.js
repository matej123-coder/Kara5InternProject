document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.custom-item-icon').forEach(iconWrapper => {
        iconWrapper.addEventListener("click", () => {
            const icon = iconWrapper.querySelector("i");

            // find the correct parent
            const item =
                iconWrapper.closest(".question-item") ||
                iconWrapper.closest(".custom-item");

            if (!item) return;

            // find the correct content
            const content =
                item.querySelector(".question-item-content") ||
                item.querySelector(".custom-item-content");

            if (!content) return;

            content.classList.toggle("is-collapsed");

            icon.classList.toggle("ri-eye-line");
            icon.classList.toggle("ri-eye-off-line");
        });
    });
    const swiper = new Swiper('.swiper', {
        autoHeight:true,
        pagination: {
          el: '.swiper-pagination',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      effect: 'cube',
      cubeEffect: {
        slideShadows: false,
        shadow:false,
      },
      });
    // document.querySelectorAll('.category-item').forEach(element =>{
    //     element.addEventListener("click",(e)=>{
    //         e.preventDefault()

    //         document.querySelector(".category-menu a.active").classList.remove("active")
    //         element.classList.add("active")

    //     })
    // })
});

