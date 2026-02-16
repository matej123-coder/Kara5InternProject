
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
      gsap.registerPlugin(ScrollTrigger);
      
     const elements = [
       {title: ".hero-top-text", trigger: ".hero-top-text-wrap"},
       {title: ".hero-gsap", trigger: ".hero-gsap-wrapper"},
       { title: ".hero-title-text", trigger: ".hero-title"},
       { title: ".hero-banner", trigger: ".hero-banner-wrapper"},   
       { title: ".hero-text", trigger: ".hero-text-wrap"},
       { title: ".hero-buttons", trigger: ".hero-buttons-wrapper"},
       { title: ".gsap-arrow-link" , trigger: ".gsap-arrow-wrapper"}
     ]
     elements.forEach((el)=>{
        gsap.fromTo(el.title, {y: 300, opacity: 0}, 
            {duration: 1, opacity:1,y:0, ease: "power1.out",scrollTrigger : {
                trigger: el.trigger,
                start: "top bottom",
                // toggleActions: "play pause resume reset"
            }}
        )
     })
    // gsap.fromTo(".hero-top-text-wrap",
    //     { y: 100, opacity: 0 },
    //     { duration: 0.8, y: 0, opacity: 1,  scrollTrigger: {
    //         trigger: ".hero-top-text-wrap",
    //         start: "top bottom",
    //         toggleActions: "play pause resume reset",
    //     }}
    // );
    // gsap.fromTo(".hero-gsap",
    //     { y: 100, opacity: 0 },
    //     { duration: 0.8, y: 0, opacity: 1,  scrollTrigger: {
    //         trigger: ".hero-gsap",
    //         start: "top bottom",
    //         toggleActions: "play pause resume reset",
    //     }}
    // );

    //  gsap.fromTo(".hero-title-text",
    //     { y: 100, opacity: 0 },
    //     { duration: 1, y: 0, opacity: 1, ease: "power2.out" , scrollTrigger: {
    //         trigger: ".hero-title",
    //         start: "top 75%",
    //         toggleActions: "play pause resume reverse",
    //     }}
    // );
    // gsap.fromTo(".hero-banner",
    //     { y: 300, opacity: 0 },
    //     { duration: 1, y: 0, opacity: 1, ease: "power2.out" , scrollTrigger: {
    //         trigger: ".hero-banner-wrapper",
    //         start: "top 75%",
    //         toggleActions: "play pause resume reverse",
    //     }}
    // );
});

