// @ts-nocheck
window.onload = function () {
    const decBtn = document.getElementById("decr")
    const incBtn = document.getElementById("incr")
    const input = document.getElementById("quantity")

    const Decrement = () => {
        if (input.value != 1) {
            input.value--
        }
    }

    const Increment = () => {
        if (input.value < 10) {
            input.value++
        }
    }

    decBtn.addEventListener('click', Decrement)
    incBtn.addEventListener('click', Increment)
}