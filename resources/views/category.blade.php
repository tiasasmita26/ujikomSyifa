@extends('layoutss.main')
@section('content')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ ('assets/img/adem.png') }}">
        <h1 style="color: #fbda9e; font-size: 60px; font-style:oblique; text-decoration: underline; ">"TERASA LEBIH BAIK KETIKA BERSAMA"</h1>
    </div>
    
    <div style="background-color: #d2bd96;">
        <div style="display: flex; margin-left: 50px; padding: 50px;"> 
  
         <div class="card" style="width: 18rem; text-align: center; border-radius: 15px;">
          <i class="fa-solid fa-plane-departure" style="font-size: 5rem; margin-top: 50px;"></i>
           <div class="card-body">
             <h5 class="card-title">BOBA & TEA</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
           </div>
         </div>
     
         <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 18rem; margin-left: 50px; text-align: center; border-radius: 15px;">
            <i class='bx bxs-coffee-bean' style="font-size: 5rem; margin-top: 50px;"></i>
           <div class="card-body">
             <h5 class="card-title">COFFE</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             
           </div>
         </div>
     
         <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 18rem; margin-left: 50px; text-align: center; border-radius: 15px;">
          <i class="fa-solid fa-arrow-up-right-dots" style="font-size: 5rem; margin-top: 50px;"></i>
           <div class="card-body">
             <h5 class="card-title">OUR SIGNATURE</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
         </div>
     
         <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 18rem; margin-left: 50px; text-align: center; border-radius: 15px; height: 350px;">
          <i class="fa-solid fa-network-wired"  style="font-size: 5rem; margin-top: 50px;" ></i>
           <div class="card-body">
             <h5 class="card-title">Card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
           </div>
         </div>
        </div>
      </div>
  
</body>
</html> --}} 

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="{{ ('assets/img/adem.png') }}">
    <h1 style="color: #fbda9e; font-size: 60px; font-style:oblique; text-decoration: underline; ">"TERASA LEBIH BAIK KETIKA BERSAMA"</h1>
</div>

<div style="background-color: #d2bd96;">
    <div style="display: flex; margin-left: 50px; padding: 50px;"> 

     <div class="card" style="width: 20rem; text-align: center; border-radius: 15px;"> 
      <i class="fa-solid fa-martini-glass-citrus" style="font-size: 5rem; margin-top: 50px;"></i>
       <div class="card-body">
         <h5 class="card-title">BOBA & TEA</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
       </div>
     </div>
 
     <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 20rem; margin-left: 60px; text-align: center; border-radius: 15px;">
        <i class='bx bxs-coffee-bean' style="font-size: 5rem; margin-top: 50px;"></i>
       <div class="card-body">
         <h5 class="card-title">COFFE</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         
       </div>
     </div>
 
     <div data-aos="fade-up" data-aos-duration="3000" class="card" style="width: 20rem; margin-left: 65px; text-align: center; border-radius: 15px;"> 
      <i class="fa-solid fa-mug-saucer" style="font-size: 5rem; margin-top: 50px;"></i>
       <div class="card-body">
         <h5 class="card-title">OUR SIGNATURE</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       </div>
     </div>
        
       </div>
     </div>
    </div>
  </div>
@endsection