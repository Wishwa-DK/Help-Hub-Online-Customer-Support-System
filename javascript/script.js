// JavaScript for handling package purchases
document.addEventListener("DOMContentLoaded", function () {
    const platinumBtn = document.getElementById("platinumBtn");
    const goldBtn = document.getElementById("goldBtn");
    const silverBtn = document.getElementById("silverBtn");

    platinumBtn.addEventListener("click", function () {
        purchasePackage("Platinum");
    });

    goldBtn.addEventListener("click", function () {
        purchasePackage("Gold");
    });

    silverBtn.addEventListener("click", function () {
        purchasePackage("Silver");
    });

    
});
