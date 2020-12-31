gsap.registerPlugin(ScrollTrigger);
header = gsap.timeline();
header
  .fromTo(".header__logo", { opacity: 0 }, { opacity: 1, duration: 1 })
  .fromTo(".Nav__li", { opacity: 0 }, { opacity: 1, duration: 1 })
  .fromTo(".Nav__slash", { opacity: 0 }, { opacity: 1, duration: 1 });

pageOne = gsap.timeline();

pageOne.to(".get-updates__iframe", {
  opacity: 1,
  scrollTrigger: { markers: true, start: "top+=130 top" },
});

// function init() {
//   const header = gsap.timeline();
//   header
//     .from("header__logo", { opacity: 0 })
//     .from("nav__container", { opacity: 0 });
// }
// window.addEventListener("load", function () {
//   init();
// });
