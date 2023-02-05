 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Poppins',sans-serif;
      }
      .body2{
         
      }
      .body1{
         background-color: #fff;
      }
      body{
        background-color: white;
      }
      .container2{
         width: 750px;
         height: 500px;
         margin-left: 400px;
         border: 1px solid black;
         background-color: white;
         display: flex;
         flex-direction: column;
         padding:40px ;
         justify-content: center;
      }
      .container2 h1{
         text-align: center;
         
      }
      .first-row{
         display: flex;
      }
      .cards img{
         width:100px;
      }
      .cards{

      }
      .owner{
         width: 100%;
         margin-right: 40px;
      }
      .input-field{
border: 1px solid #999;
      }
      .input-field input{
         width: 100%;
         border:none;
         outline: none;
         padding: 10px;
      }
     .body1{
        background-color: white;
        font-family:'Change',sans-serif;
        padding: 3rem 1rem;
     }
     ul{
        list-style-type: none;
     }
     .container{
        max-width: 71rem;
        margin: 0 auto;
      
     }
     .section{
      display: flex;
      justify-content: space-between;
      align-items: center;
     }
     .section select{
      padding: 10px 20px;
     } 
     .pricelist{
        color: black;
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(16em,1fr));
        grid-gap: 2em;
        margin: 0 auto;
        padding: 0;
        height: 500px;
     }
    .confirm a {
      background-color: blueviolet;
      color: white;
      text-align: center;
      text-transform: uppercase;
      text-decoration: none;
      padding: 10px;
      font-size: 15px;
      transition: 0.5s;
      padding: 10px;
      margin-top:10px;
      
     }
     .aaa a:hover{
      background-color: dodgerblue;
     }
     .item{
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color:rgb(225, 225, 225);
        padding: 2em;
        border-radius: 1.sem;
        box-shadow: 0 20px 20px rgb(0,0,0,0.08);
        transition: box-shadow 100ms,transform 100ms;
        transition-timing-function: ease-in-out cubic-bezier(0.1,0.7,1.0,0.1);
        cursor: grab;
     }
     .item:hover{
        box-shadow: 0,40px,40px rgb(0,0,0,0.16);
        transform: translate(0,-20px);
     }
     .popular{
        position: relative;
     }
     .popular::before{
        content: الأكثر مبيعا;
        position: absolute;
        top: 0.5em;
        right: 37%;
        text-align: center;
        font-size: 0.9em;
        padding: 5 5em;
        background-color: #ffd900;
        width:6em;
        border-radius: 0.5em;
        color: #282824;
     }
     img{
        margin: auto;
        width: 50%;
     }
     .packagetitle{
        margin: 0;
        font-size: 1.7em;
     }
     .description{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0 auto;
     }
     .subtitle{
        color: #a5c9ff;
     }
     .price{
        color: darkblue;
        font-size: 2em;

     }
     .services{
        margin: 1.87em 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;

     }
     .singleservices{
        display: flex;
        align-items: center;
        font-weight: bold;
        margin-bottom: 0.5em;
     }
     .singleservices a:hover{
        color: darkblue;
     }
     .singleservices::before{
        content: "";
        width: 0.5em;
        height: 0.5em;
        -webkit-margin-end:1em;
        margin-inline-end: 1em;
        border-radius: 50%;
        background-color: darkblue;
     }
     .selectbutton{
        background-color: rgb(0,67,154);
        color: #fff;
        margin-top: auto;
        margin-bottom:10px ;
        padding: 1em 0.3em;
        text-decoration: none;
        width: 50%;
        border-radius: 1.87em;
        text-align: center;
     }
     button{
      background-color: rgb(0,67,154);
        color: #fff;
        margin-top: auto;
        margin-bottom:10px ;
        padding: 1em 0.3em;
        text-decoration: none;
        width: 30%;
        border-radius: 1.87em;
        text-align: center;
        margin-left: 550px;
      }
     button:hover{
      background-color: #4cae4f;
     }
     .singleservicesexl{
        display: flex;
        align-items: center;
        font-weight: bold;
        margin-bottom: 0.5em;
     }
     .singleservicesexl a:hover{
        color: darkblue;
     }
     .singleservicesexl::before{
        content: "";
        width: 0.5em;
        height: 0.5em;
        -webkit-margin-end:1em;
        margin-inline-end: 1em;
        border-radius: 50%;
        background-color: darkblue;
     }
     .selectbutton:hover{
        background-color: #4cae4f;
     }
     a{
        font-weight: bold;
     }
     .rocketbackage{
        background-color: rgb(240, 92, 66);
     }
     .specialpakage{
        background-color: rgb(0, 164, 201);
     }
   button a{
      text-decoration: none;
      color: white;
   }
    </style>
     
</head>
<body>
   <br>
   <br>
   <div class="hh" style="text-align:center ; font-size:40px; ;"   ><span style="color:red">S</span><span style="color:green">U</span><span style="color:blue">R</span><span style="color:yellow">V</span><span style="color:purple">I</span><span style="color:red">C</span><span style="color:green">E</span><span style="color:blue">S</span></div>
   <div class="body1"> 
     <div class="container">
        <ul class="pricelist">
            <li class="item">
                <img src="solar_charger/images/lap.jpg" alt="">
                <h3 class="packagetitle">باقة مميزة</h3>
                <p class="description">
                    <span chass="subtitle" style="color: red;">مناسبة للخوادم العامة</span>
                    <span class="price">50 EGP</span>
                </p>
                <ul class="survices">
                    <li class="singleservices">اسعار الشحن</li>
                    <li class="singleservices">AC-1.89EGP\كيلووات-ساعة</li>
                    <li class="singleservicesexl">DC-3.89EGP\كيلووات-ساعة</li>
                    <li class="singleservicesexl">شحن غير محدود</li>
                </ul>
                <a href="" class="selectbutton">اختيار الباقة</a>
            </li>
            <li class="item popular">
                <img src="solar_charger/images/phone.png" alt="">
                <h3 class="packagetitle">باقة سونيك</h3>
                <p class="description">
                    <span chass="subtitle" style="color: red;">الأكثر مبيعا</span>
                    <span class="price">25 EGP</span>
                </p>
                <ul class="survices">
                    <li class="singleservices">اسعار الشحن</li>
                    <li class="singleservices">AC-1.89EGP\كيلووات-ساعة</li>
                    <li class="singleservicesexl">DC-3.89EGP\كيلووات-ساعة</li>
                    <li class="singleservicesexl">شحن غير محدود</li>
                </ul>
                <a href="" class="selectbutton"  >اختيار الباقة</a>
            </li>
            <li class="item popular">
                <img src="solar_charger/images/car.jpg" alt="">
                <h3 class="packagetitle">الباقة الصاروخية</h3>
                <p class="description">
                    <span chass="subtitle" style="color: red;">مناسبة للخوادم</span>
                    <span class="price">100 EGP</span>
                </p>
                <ul class="survices">
                  <li class="singleservices">اسعار الشحن</li>
                  <li class="singleservices">AC-1.89EGP\كيلووات-ساعة</li>
                  <li class="singleservicesexl">DC-3.89EGP\كيلووات-ساعة</li>
                  <li class="singleservicesexl">شحن غير محدود</li>
                </ul>
                <a href="" class="selectbutton">اختيار الباقة</a>
            </li>
        </ul>
     </div>
   </div>
   <br>
   <br>
     <div class="body2"> 
     <div class="container2">
      <h1>confirm your payment</h1>
      <br>
      <div class="first-row">
         <div class="owner">
            <h3>owner</h3>
            <div class="input-field">
               <input type="text" id="txtname">
            </div>
         </div>
         <div class="cvv">
            <h3>CVV</h3>
            <div class="input-field">
               <input type="password" id="txtpass">
            </div>
         </div>
      </div>
      <div class="second-row">
         <div class="card-number">
            <br>
         <h3>Card Number</h3>
         <div class="input-field" id="txtpass2">
            <input type="password">
         </div>
      </div>
      </div>
      <div class="third-row">
         <br>
         <h3>Expration Date</h3>
         <div class="section">
            <div class="date">
               <select name="monthes" id="monthes"> 
               <option value="JAN">JAN</option>
               <option value="Feb">Feb</option>
               <option value="Mar">Mar</option>
               <option value="Abr">Abr</option>
               <option value="May">May</option>
               <option value="Jun">Jun</option>
               <option value="Jul">Jul</option>
               <option value="Agu">Agu</option>
               <option value="Sep">Sep</option>
               <option value="Oct">Oct</option>
               <option value="Nov">Nov</option>
               <option value="Dec">Dec</option>
            </select>
            <select name="years" id="years">
               <option value="2020">2020</option>
               <option value="2019">2019</option>
               <option value="2018">2018</option>
               <option value="2017">2017</option>
               <option value="2016">2016</option>
               <option value="2015">2015</option>
            </select>
            </div>
            <div class="cards">
               <img src="./solar_charger/images/vv.png" alt="">
               <img src="./solar_charger/images/img2.png" alt="">
               <img src="./solar_charger/images/mc.png" alt="">
            </div>
         </div>
      </div>
       
         <a href="" chass ="aaa" style="background-color: blueviolet;
         color: white;
         text-align: center;
         text-transform: uppercase;
         text-decoration: none;
         padding: 10px;
         font-size: 15px;
         transition: 0.5s;
         padding: 10px;
         margin-top:10px;">confirm</a>
     </div>
   </div>
   <br>
   <br>
   <button ><a href=".//solar_charger/index.html">back</a></button>
   <?php
   if(isset($error)){
    echo "
    <script>
    var x= document.getElementById('model')
    new bootstrap.Model(x).show()'
    </script>
    ";
   }
   ?> 
</body>
</html>