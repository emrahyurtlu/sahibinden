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