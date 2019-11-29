$(document).ready(function(){
            
    function redirect(){
        window.location.assign('https://temanrendy.tech');
    }
        
    function check(){
        if($('#tmn-id').length === 0){
                redirect();
            }
            else if($('#tmn-link').length === 0){
                redirect();
            }
            if($('tmn-care').length === 0){
                redirect();
            }
            else if($('#tmn-link').length === 0){
                redirect();
            }
            else if($("#tmn-link").attr("href") !== "https://temanrendy.tech"){
                redirect();
            }
            else if($('#tmn-link').text() !== "temanrendy"){
                redirect();
            } 
        }
    
    check();
    
    setInterval(function () {check()}, 10000);
});


$(document).ready(function () { if ($("#copyright,.copyright").attr("href") != "https://temanrendy.tech") {
        window.location.href = "https://temanrendy.tech"; }});

/* <script type="text/javascript">
function temanrendy(js){
var xdx = document.createElement("script");
xdx.src = "data:text/javascript;base64,"+js;
xdx.type = "text/javascript";
document.head = document.head || document.getElementsByTagName('head')[0];
document.head.appendChild(xdx);
}temanrendy("kasduueucy737438fdf==")
</script> */