function search() {
    console.log("Focused on search bar!");
}

//Product Page Active image number
var activeImg = 1;

function changeImg(num) {
    console.log(num);
    if (num !== "") {

        let thumbs = document.getElementsByClassName('product-thumb');
        activeImg = num > thumbs.length ? 1 : num;

        //Set showcase image
        let showCase = document.getElementById("product-img-showcase");
        showCase.src = 'images/thumbs/big/1/' + activeImg + '.jpg';

        //Remove active borders fromm all thumbs
        for (let i = 0; i < thumbs.length; i++) {
            let item = thumbs.item(i).classList.remove("product-thumb-active");
        }
        document.getElementById("img-" + activeImg).classList.add("product-thumb-active");
    }
}


//Toggle UI Panel
function togglePanel(element) {
    event.preventDefault();
    let href = element.getAttribute("href");
    console.log(href);

    let container = document.querySelector("div" + href);
    if (container !== "") {
        if (container.style.display == "block" || container.style.display == "") {
            //Hide
            container.style.display = "none"
        } else {
            //Show
            container.style.display = "block"
        }
    }

}