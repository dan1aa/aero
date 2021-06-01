window.onload = function() {
    const rightArrow = document.querySelector('.right_arrow')
    const leftArrow = document.querySelector('.left_arrow')
    const sliderImage = document.querySelector('.slider')
    const images = ['https://wallpapercave.com/wp/wp3011478.jpg', 'https://cdn.britannica.com/77/196577-050-1101EEBD/Michelangelos-David-Goliath-one-statues-world.jpg', 'https://urbanmatter.com/wp-content/uploads/2020/11/ChristRedeemerPinterest.png']

    function slideStep(arrow) {
    }

    rightArrow.onclick = function() {slideStep(rightArrow);}
    leftArrow.onclick = function() {slideStep(leftArrow);}
}

//slider begin