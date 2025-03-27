function Multiplication(quantity, price){
    return (quantity*price).toFixed(1);
    //toFixed(1) - 1 chislo posle zapjatoi
    //mathfloar - rovnie chisla
}
const RE_Exchange_rate=0.011;
const UE_Exchange_rate=0.96;
const ER_Exchange_rate=92.73;
const EU_Exchange_rate=1.04;
function  Chose_Image() {
    const Images=[
        '../images/Euro.png',
        '../images/rubles.jpg',
        '../images/dollars.png'
    ]
    let RE = document.getElementById("RE");
    let UE = document.getElementById("UE");
    let ER = document.getElementById("ER");
    let EU = document.getElementById("EU");
    if (RE.checked) {
        const Chose_Image=document.getElementById("Chose_Image");
        Chose_Image.src='../images/Euro.png'
    } else if (UE.checked) {
        const Chose_Image=document.getElementById("Chose_Image");
        Chose_Image.src='../images/Euro.png'
    } else if (ER.checked) {
        const Chose_Image=document.getElementById("Chose_Image");
        Chose_Image.src='../images/rubles.jpg'
    } else if (EU.checked) {
        const Chose_Image=document.getElementById("Chose_Image");
        Chose_Image.src='../images/dollars.jpg'
    }
}
function Current_Exchange(){
    let Answer=document.getElementById("Answer");
    let RE=document.getElementById("RE");
    let UE=document.getElementById("UE");
    let ER=document.getElementById("ER");
    let EU=document.getElementById("EU");
    let quantity=document.getElementById("quantity")
    if(RE.checked){
        Answer.innerHTML=Multiplication(quantity.value, RE_Exchange_rate)+" Euro"
    }else if(UE.checked){
        Answer.innerHTML=Multiplication(quantity.value, UE_Exchange_rate)+" Euro"
    }else if (ER.checked){
        Answer.innerHTML = Multiplication(quantity.value, ER_Exchange_rate) + " Rubles"
    }else if (EU.checked){
        Answer.innerHTML = Multiplication(quantity.value, EU_Exchange_rate) + " Dollars"
    }else {
        Answer.innerHTML="You have to choose some of radio buttons"
    }
    Chose_Image()
}