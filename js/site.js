function search() {
    console.log("Focused on search bar!");
}

function changeImg(thumb, num) {
    console.log(num);
    console.log(thumb);

    if (num !== "") {
        //Set showcase image
        let element = document.getElementById("product-img-showcase");
        element.src = 'images/thumbs/big/1/' + num + '.jpg';

        //Remove active borders fromm all thumbs
        let thumbs = document.getElementsByClassName('product-thumb');
        for(let i = 0; i<thumbs.length; i++) {
            let item = thumbs.item(i);
            item.style.border = '1px solid #dee2e6';
        }

        thumb.style.border = '1px solid #039';
    }
}