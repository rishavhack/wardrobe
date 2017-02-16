/**
 * Created by Hack on 17-01-2017.
 */
$(document).ready(function(){
    $("#bt").click(function(){
        $(".categories").toggle();
    });
    $(".hack").click(function(){
        $(".categories").hide();
    });
});


var myApp=angular.module("myapp",['ngRoute'])
    .controller("wardobe",wardobe)
  

function wardobe(){
    var my =this;
}
