window.onload = function() {
    // const plus = document.querySelectorAll('.plus')
    // const minus = document.querySelectorAll('.minus')
    const clear = document.querySelector('.clear')

    clear.onclick = function(e) {
        e.preventDefault()
        const inputs = document.querySelectorAll('input[type="text"]');
        inputs.forEach(input => input.value = '')
    }

    // plus.forEach(btn => {
    //     btn.onclick = function() {
    //         let parent = this.parentElement;
    //         console.log(parent);
    //     }
    // })

    // minus.forEach(btn => {
    //     btn.onclick = function() {
    //         let parent = this.parentElement;
    //         console.log(parent);
    //     }
    // })


}

