import "./bootstrap";
import "flyonui/flyonui";
import { Observer } from "tailwindcss-intersect";
Observer.start();

window.addEventListener("load", function () {
    const animationButtons = document.querySelectorAll(".animation-button");
    const box = document.getElementById("animated-box");

    animationButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const animationClass = button.value;

            // Remove all existing motion- classes
            const currentClasses = Array.from(box.classList);
            const motionClasses = currentClasses.filter((className) =>
                className.startsWith("motion-"),
            );
            motionClasses.forEach((className) =>
                box.classList.remove(className),
            );

            // Temporarily remove the animation class to re-trigger it
            void box.offsetWidth; // Trigger reflow to allow re-adding the class
            box.classList.add(animationClass, "motion-duration-1000");
        });
    });
});
