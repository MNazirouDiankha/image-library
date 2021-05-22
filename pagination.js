let image = document.querySelectorAll('figure');
let images = document.querySelectorAll('.IMG');
let deleteButton = document.querySelectorAll('.deleteButton');
let Popup = document.querySelector('.Popup');
let Popup_Image = document.querySelector('.Popup_Image');
let Popup_description = document.querySelector('.Popup_description');
let arrows = document.querySelectorAll('.cen');
let figcaption = document.querySelectorAll('.figcaption');

Popup.addEventListener("click", (e) => {
    if(e.target.classList.value == 'Popup') {
        console.log(images[0]);
        Popup.style.display = 'none';
    }
});

image.forEach((element, index) => {
    element.addEventListener("mouseover", () => {
        deleteButton[index].style.display = 'block';        
    })
    element.addEventListener("mouseout", () => {
        deleteButton[index].style.display = 'none';
    })
});
image.forEach((element, index) => {
    element.addEventListener("click", () => {
        Popup.style.display = 'flex';
        let numero = index;
        Popup_Image.childNodes[0].src = images[numero].src;
        Popup_description.innerHTML = element.childNodes[5].innerHTML;

        arrows[0].addEventListener("click", () => {
            if(numero > 0) {
                numero--;
                Popup_Image.childNodes[0].src = images[numero].src;
                Popup_description.innerHTML = figcaption[numero].innerHTML;
                console.log("dans le if : numero = "+numero);
            } else {
                numero = images.length-1;
                Popup_Image.childNodes[0].src = images[numero].src;
                Popup_description.innerHTML = figcaption[numero].innerHTML;
                console.log("dans le esle : numero = "+numero);
            }
        });

        arrows[1].addEventListener("click", () => {
            if(numero < image.length-1) {
                numero++;
                Popup_Image.childNodes[0].src = images[numero].src;
                Popup_description.innerHTML = figcaption[numero].innerHTML;
                console.log("dans le if : numero = "+numero);
            } else {
                numero = 0;
                Popup_Image.childNodes[0].src = images[numero].src;
                Popup_description.innerHTML = figcaption[numero].innerHTML;
                console.log("dans le esle : numero = "+numero);
            }
        });
    })
});