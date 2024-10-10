window.addEventListener("wheel", function(e) {
    if(e.deltaY > 0) {
        gsap.to(".marque", {
            transform: "translateX(-200%)",
            duration: 3,
            repeat: -1,
            ease: "none"
        })
        gsap.to(".marque img", {
            rotate: 180
        })
    } else {
        gsap.to(".marque", {
            transform: "translateX(0%)",
            duration: 3,
            repeat: -1,
            ease: "none"
        })
        gsap.to(".marque img", {
            rotate: 0
        })
    }
})


const lenis = new Lenis()

lenis.on('scroll', (e) => {
    console.log(e)
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)