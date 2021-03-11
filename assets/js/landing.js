const textrev = gsap.timeline();

textrev.from(".line span", 2, {
    y : 200,
    ease : "power4.out",
    delay: 1,
    skewY : 10,
    stagger: {
        amount: 0.4,
    }, 
});

gsap.from(".startBtn", 1.2 , {
    opacity: 0, 
    y: 20, 
    delay: 2,
    ease : "power4.out",
    duration: 1
});
