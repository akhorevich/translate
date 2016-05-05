
        <!DOCTYPE html>
    <html>
        <head>
           <title>Испытание: строим сетку</title>
           <meta charset="utf-8">
        </head>
        <body>
            <div class="container1">
                <div class="layout-positioner">
                     <div class="header">Рената Хамидуллина<p>+7 (912) 491-16-09</p></div>
                     <div class="menu">Menu</div>
                     <div class="promo1">Promo 1</div>
                     <div class="promo2">Promo 2</div>
                </div>
            </div>
            <div class="container2">
                <div class="layout-positioner">
                     <div class="column-left">Left</div>
                     <div class="column-main">Main</div>
                     <div class="column-right">Right</div>
                </div>
            </div>
            <div class="container3">
                <div class="layout-positioner">
                     <div class="footer">Footer</div>
                </div>
            </div>    
        </body>
    </html>

    <style type="text/css">
html, body{
    margin:0;
    padding:0;
}
body{
    width:100%;
    height:335px;
    font-family:'Arial', sans-serif;
    font-size:10px;
    color:white;
}
.layout-positioner{
    width:450px;
    margin: 0 auto;
}
.layout-positioner:after{
    content:'';
    clear:both;
    display:table;
}
.container1 {
    width:100%;    
    background:#34495e;
    padding-top:10px;   
}
.header {
   padding:5px;
   width:80%;
   height:25px;
   margin-left:50px;
   background: #c0392b;
}
.menu {
    padding-top:5px;
    padding-left:55px;
    margin-top:10px;
    min-height:30px;
    background:#3498DB;
}
.promo1 {
    float:left;
    padding:5px;
    background:#c0392b;
    width:160px;
    min-height:50px;
    margin:10px 10px 10px 50px
}
.promo2 {
    float:left;
    padding:5px;
    background:#c0392b;
    width:160px;
    min-height:50px;
    margin-top:10px;   
}
.container2 {
    width:450px;
}
.column-left {
    float:left;
    background:#3498DB;
    padding:5px;
    width:60px;
    min-height:100px;
    margin:10px 0px 10px 50px;
}
.column-main {
    float:left;
    background:#3498DB;
    padding:5px;
    width:180px;
    min-height:100px;
    margin:10px;
}
.column-right {
    float:left;
    background:#3498DB;
    padding:5px;
    width:60px;
    min-height:100px;
    margin:10px 0;
}
.footer {
    background:#34495e; 
    padding-top:5px;
    padding-left:55px;
    min-height:30px;
}
    </style>