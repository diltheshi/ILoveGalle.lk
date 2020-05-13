function myFunction2(imgs2) {
    var expandImg_cul2 = document.getElementById("expandedImg_cul2");
    var imgText_cul2 = document.getElementById("imgtext_cul2");
    expandImg_cul2.src = imgs2.src;
    imgText_cul2.innerHTML = imgs2.alt;
    expandImg_cul2.parentElement.style.display ="block";
}
