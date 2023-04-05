$(document).ready(function(){
    //jquery for expand and collapse the sub items
 $('.sub-menu-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
 })  
})
function toggleTable(tableId) {
   var table = document.getElementById(tableId);
   if (table.style.display === "none") {
     table.style.display = "table";
   } else {
     table.style.display = "none";
   }
 }