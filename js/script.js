
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();


$(document).ready(function(){
$('.navbar-toggler').click(function(){
    $('.navbar-collapse').slideToggle(300);
});

smallScreenMenu();
let temp;
function resizeEnd(){
    smallScreenMenu();
}

$(window).resize(function(){
    clearTimeout(temp);
    temp = setTimeout(resizeEnd, 100);
    resetMenu();
});
});


const subMenus = $('.sub-menu');
const menuLinks = $('.menu-link');

function smallScreenMenu(){
if($(window).innerWidth() <= 992){
    menuLinks.each(function(item){
        $(this).click(function(){
            $(this).next().slideToggle();
        });
    });
} else {
    menuLinks.each(function(item){
        $(this).off('click');
    });
}
}

function resetMenu(){
if($(window).innerWidth() > 992){
    subMenus.each(function(item){
        $(this).css('display', 'none');
    });
}
}

function handlePaymentMethodChange() {
    var paymentMethod = document.getElementById("payment-method").value;
    var cardFields = document.getElementById("card-fields");
    var boletoFields = document.getElementById("boleto-fields");
    var pixFields = document.getElementById("pix-fields");
    var boletoCode = generateRandomBoletoCode();
    var pixCode = generateRandomPixCode();

    cardFields.classList.add("hidden");
    boletoFields.classList.add("hidden");
    pixFields.classList.add("hidden");

    if (paymentMethod === "cartao") {
        cardFields.classList.remove("hidden");
    } else if (paymentMethod === "boleto") {
        boletoFields.classList.remove("hidden");
        document.getElementById("boleto-code").value = boletoCode;
    } else if (paymentMethod === "pix") {
        pixFields.classList.remove("hidden");
        document.getElementById("pix-code").value = pixCode;
    }
}

function generateRandomBoletoCode() {
    // Gere um número aleatório para o código do boleto
    return Math.floor(Math.random() * 100000000000000);
}

function generateRandomPixCode() {
var characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var codeLength = 10;
var pixCode = "";
for (var i = 0; i < codeLength; i++) {
var randomIndex = Math.floor(Math.random() * characters.length);
pixCode += characters.charAt(randomIndex);
}
return pixCode;
}

const searchInput = document.getElementById('search-input');
const productGrid = document.getElementById('product-grid');
const productItems = Array.from(productGrid.getElementsByClassName('product-item'));

searchInput.addEventListener('input', function() {
    const searchText = searchInput.value.toLowerCase();

    productItems.forEach(function(item) {
        const title = item.querySelector('.product-title').innerText.toLowerCase();

        if (title.includes(searchText)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});