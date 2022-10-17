/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */

$(document).ready(function(){
  $("#pro").click(function(){
 
 var url = "programme.jsp";

$.ajax({
    url : url,
    type: "GET",
    data : value,
    success: function() {
        window.location = url; 
    }
});
  
 
});
});