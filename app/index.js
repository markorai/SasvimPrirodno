// show more
let cardsDiv = document.getElementsByClassName("col-lg-4");
let currentItem = 3;

function loadMore(){
   
    for(let i = currentItem ; i < currentItem + 3; i++ ){
        if(!cardsDiv[i])
            break;
       cardsDiv[i].style.display = "inline-block";
    }
   currentItem += 3;
    
   if(currentItem >= cardsDiv.length)
        document.getElementById("loadMore").style.display = "none";

}

// WEB SHOP

let products = {
    data:[{
        productName:"Čaj od nane",
        category:"Čajevi",
        gazdinstvo:"Martinović",
        price:"1€/100g",
        img:"https://cdn.pixabay.com/photo/2017/07/12/09/59/peppermint-2496363_960_720.jpg"
    },
    {
        productName:"Kravlje mlijeko",
        category:"Mliječni proizvodi",
        gazdinstvo:"Popović",
        price:"1.2€/l ",
        img:"https://cdn.pixabay.com/photo/2017/07/05/15/41/milk-2474993_960_720.jpg"
    },
    {
        productName:"Pileći file",
        category:"Mesni proizvodi",
        gazdinstvo:"Kovačević",
        price:"7€/kg ",
        img:"https://cdn.pixabay.com/photo/2018/03/09/17/41/chicken-3212144_960_720.jpg"
    },
    {
        productName:"Domaći sok od breskve",
        category:"Sokovi",
        gazdinstvo:"Martinović",
        price:"2€/l ",
        img:"https://images.pexels.com/photos/5947103/pexels-photo-5947103.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
    {
        productName:"Krompir Agrija",
        category:"Voće i povrće",
        gazdinstvo:"Popović",
        price:"0.8/kg ",
        img:"https://media.istockphoto.com/id/530514284/photo/potatoes-in-the-farm.jpg?s=612x612&w=is&k=20&c=Sv4NY1IYWX5y5irDrKo2SGH5IK8TvO9LEGLsPkA5p3g="
    },
    {
        productName:"Paradajz",
        category:"Voće i povrće",
        gazdinstvo:"Kovačević",
        price:"1/kg ",
        img:"https://images.pexels.com/photos/6316521/pexels-photo-6316521.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    },
   // 
   // 
]
}   

for(let i of products.data){
    let category = i.category;
    if(category.indexOf(" ") >= 0){
      category =   category.substring(0,category.indexOf(' '))
    }
    console.log(category)
    let card = document.createElement("div");
    // card should have category and should stay hidden initially
    card.classList.add("card2",category,"hide-c"); // name of class and value
    // div for image
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //img tag
    let image = document.createElement("img");
    image.setAttribute("src",i.img);
    imgContainer.appendChild(image);
    //append imgContainer to card
    card.appendChild(imgContainer);
   
    //container
    let container = document.createElement("div");
    container.classList.add("container-c");
    // product name
    let name = document.createElement("h5");
    name.classList.add("product-name"); 
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);
    //let price
    let price = document.createElement("h6");
   // price.classList.add("product-price");
    price.innerText = i.price;
    container.appendChild(price);

    card.appendChild(container);
    document.getElementById("products").appendChild(card);
}

// Parameter passes from button (same as category)
function filterProducts(value){
    // check if value has whitespace 
    if(value.indexOf(" ") >= 0)
        value = value.substring(0,value.indexOf(" "));

    let buttons = document.querySelectorAll(".btn-value");
   
    buttons.forEach(button => {
        // check if button has white space and create variable for button text
        let buttonText = button.innerText;
        if(buttonText.indexOf(" ") >= 0)
            buttonText = buttonText.substring(0,buttonText.indexOf(" ")); 

        // check which category is selected
        if(value == buttonText){
            button.classList.add("active-c");
        }else{
         button.classList.remove("active-c");
        }
    });
    //select all cards
   let elements = document.querySelectorAll(".card2");
   // loop through cards
   elements.forEach(element => {
        if(value == "Svi")
            element.classList.remove("hide-c");
        else{
            //check if element contains category class
            if(element.classList.contains(value)){
                    //display element based on category
                    element.classList.remove("hide-c");
            }else{
                // hide other elements
                element.classList.add("hide-c");
            }
        }
   }); 
  
}

//search button click
document.getElementById("search-btn").addEventListener("click",()=>{
    // initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card2");
    elements.forEach((element,index) => {
        if(element.innerText.includes(searchInput.toUpperCase()))
            cards[index].classList.remove("hide-c");
        else
        cards[index].classList.add("hide-c");

    });
})

// Initially display all products
window.onload = () =>{
    filterProducts("Svi");
}