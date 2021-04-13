
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Mail Send in Laravel Example</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>    
body {
    color: #000;
    background-image: url("background.jpg");
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #e2c705;
}
.contact-form .form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Get in Touch</h1>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('send.email') }}" method="post">
                @csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Name">
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter Email">
                                @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputSubject">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                        @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
                        <textarea name="content" rows="5" class="form-control" placeholder="Enter Your Message"></textarea>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>










<div class="parallax img-05">
  
  <div class="frame-02">
    <div class="contact-form">
   


<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('send.email') }}" method="post">
                @csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Name</label>
                <input name="name" type="text" class="feedback-input" placeholder="Name" /> 
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Email</label>
							  <input name="email" type="text" class="feedback-input" placeholder="Email" />
                                @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputSubject">Subject</label>
            <input name="subject" type="text" class="feedback-input" placeholder="Subject" /> 
                        @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
            <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
    </div>
    <div id="maps">
      <div id="map_info">
        <div id="map" style="width:400px;height:500px;">
        </div>
      </div>
    </div> 
</div>
</div>








<main class="py-4">
        @yield('content')
    </main>
</div>  
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="parallax img-05">
  
  <div class="frame-02">
    <div class="contact-form">
    <form action="/multiuploads" method="post" enctype="multipart/form-data">
{{ csrf_field() }}    


  <input name="name" type="text" class="feedback-input" placeholder="Name" />  
  <input name="surname" type="text" class="feedback-input" placeholder="Surname" />  
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
  <label for="Product Name">Photos (can attach more than one):</label>
<br />
<input type="file" class="feedback-input" name="photos[]" multiple />
<br /><br />
  <input type="submit" value="SUBMIT"/>
</form>
    </div>
    <div id="maps">
      <div id="map_info">
        <div id="map" style="width:400px;height:500px;">
        </div>
      </div>
    </div> 
</div>
</div>














































<html>
<head>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Uploading</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./style.css">
  <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=d429f85a-039c-4dc3-8a24-4bfd38a8efef" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'><link rel="stylesheet" href="./style.css">
 
</head>

<body>





<section class="page"><section>
  <nav id="nav-bar">
      <input type="checkbox" name ="" id ="toggle">
      <div class="header">
          <div class="navar">
              <label for="toggle">&#9776</label>
              
          </div>
          
          <div id="menu" onclick="redirect1(this)"  onmouseout="small(this)" >Menu</a></div>
          <div id="about_me" onclick="redirect2(this)" onmouseout="small(this)">About me</div>
          <div id="contact_me" onclick="redirect(this)"  onmouseout="small(this)" >Contact me</div>
         
         
          <div class="logo">
  
              <img id="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQFA_Md3QUvvuw49Zk4-VHkkwkAXtrUvrPwHg&usqp=CAU" alt="" width="75" height="57">
          </div>
      </div>
  </nav>
  <div id="app">

            <div class="collapse-navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img width="20"  src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Flag_of_the_United_States_%28Pantone%29.svg/250px-Flag_of_the_United_States_%28Pantone%29.svg.png')}}"> English
                                @break
                                @case('kz')
                                <img width="20" src="{{asset('https://www.akorda.kz/assets/media/flag.jpg')}}"> Kazakh
                                @break
                                @case('ru')
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Russian
                                @break
                                @default
                                <img width="20" > Kaz
                                <img width="20" >  Rus
                                <img width="20" > En
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Flag_of_the_United_States_%28Pantone%29.svg/250px-Flag_of_the_United_States_%28Pantone%29.svg.png')}}"> English</a>
                            <a class="dropdown-item" href="kz"><img width="20" src="{{asset('https://www.akorda.kz/assets/media/flag.jpg')}}">Kazakh </a>
                            <a class="dropdown-item" href="ru"><img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Russian</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
       
    </div>
   

<main class="py-4">
        @yield('content')
    </main>
</div>  
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
			
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ route('send.email') }}" method="post">
                @csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" name="name" class="feedback-input" placeholder="Enter Name">
                                @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
            
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" name="email" class="feedback-input" placeholder="Enter Email">
                                @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
							</div>
						</div>
           
					</div>            
					<div class="form-group">
						<label for="inputSubject">Subject</label>
                        <input type="text" name="subject" class="feedback-input" placeholder="Enter subject">
                        @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="form-group">
						<label for="inputMessage">Message</label>
                        <textarea name="content" rows="5" class="feedback-input"  placeholder="Enter Your Message"></textarea>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>

<div class="parallax img-05">
  
  <div class="frame-02">
    <div class="contact-form">
    <form action="/multiuploads" method="post" enctype="multipart/form-data">
{{ csrf_field() }}    


  <input name="name" type="text" class="feedback-input" placeholder="Name" />  
  <input name="surname" type="text" class="feedback-input" placeholder="Surname" />  
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
  <label for="Product Name">Photos (can attach more than one):</label>
<br />
<input type="file" class="feedback-input" name="photos[]" multiple />
<br /><br />
  <input type="submit" value="SUBMIT"/>
</form>
    </div>
   
    </div> 
</div>
</div>
<div id="maps">
      <div id="map_info">
        <div id="map" style="width:400px;height:500px;">
        </div>
      </div>
    </div> 



<style>
  *{
  margin: 0 auto;
  padding: 0;
  
}

body{
  margin: 0 auto;
  padding: 0;
  font-family: 'Comfortaa', sans-serif;
  outline: none;
   box-sizing: border-box;
  cursor: default;
   min-width:650px;
 max-width:1600px;
  font-smooth:antialiased;
        background:rgba(18,18,26,1);
        background-image:url('http://artlantis-media.ru/static/img/0000/0002/7260/27260842.qvpm616fga.png');
        background-blend-mode:overlay;
        background-size:15%;
        
}
html{
  font-size: 62.5%;
scroll-behavior: smooth;


}
.header{
display: flex;
justify-content: space-around;
color: black;
font-size: 34px;
margin-top: -1px;
font-family: 'Comfortaa', sans-serif;
 

  padding: 1em;
   font-size: 2.5em;
   text-align: center;
    background-image: linear-gradient(rgb(177, 169, 169), rgba(129, 80, 209, 0.5));
   opacity: 0.8;
   padding: 1px;
 
  
   left: 0;
   top: 0;
   width: 100%;

 
}
.parallax-img-05{
  margin-left: -500px;
    margin-top: -50px;

}
.container-lg {
  margin-left: -150px;
    margin-top: 20px;
   
}

#top_nav{
 z-index: 9999;
  position: fixed;
   left: 0;
    top: 0;
    width: 100%;

}

.logo{
position: absolute;
   top: -15px;
   right: 1430px;
}
.logo{
  position: absolute;
  top: -5px;
 
  
  cursor: pointer;
}
.pic{
  width: 100%;
  height: 700px;
  background-size: cover;
  text-align: center;
  color: white;
}
.collapse-navbar-collapse{
    position: absolute;
  top: 5px;
  left: 100;
}

#home {
margin-top: 13em;
}

.badge-default {
color: white;
font-size: 1em;
}

.banner-effect {
bottom: 0;
height: 100%;
left: 0;
position: absolute;
right: 0;
top: 0;
}


h1{
  padding-top: 150px;
  font-size: 50px;
  letter-spacing: 8px;
  font-family: 'Comfortaa', sans-serif;
}






.main{
width:100%;
position: relative;
top: 350px;
left: 0px;
}




.flex{
width: 100%;
  display: flex;
  justify-content: space-evenly;
  padding: 1rem;
  
  
}

.product-container{
width: 23rem;
height: 30rem;
padding: 0.5rem;
border: none;
background-color: rgb(82, 73, 85);
box-shadow: 0 12px 18px 0 #ccc;
}

.img-container{
background-color: #fff;
width: 100%;
height: 12rem;
}

.img-container a img{
width: 100%;
height: 100%;
object-fit: contain; 
}

.product-details{
margin-top: 4rem;
font-size: 1.5rem;
font-family: 'Comfortaa', sans-serif;
}

.product-details div{
margin: 1rem 0;
}

.product-btn{
margin: -1rem 0;
border: none;
background: transparent;
}

.product-btn a{
display: block;
text-decoration: none;
font-weight: bold;
background-color: #fff;
color: #999;
padding: 0.5rem 2rem;
border: .2rem solid #ccc;
border-radius: 2rem;
cursor: pointer;
transition: all .6s ease;
}

.product-btn a:hover{
color: #fff;
background-color: #444;
}









@media(max-width:1000px){
body{
background-color:rgb(27, 21, 32);
}}

.navar{
float:left;
}
label{
margin:5px 0 20px;
font-size:30px;
display:none;
}
.main{
width:100%;
}
.popup{
display:block;
text-align:center;

left:0px;
top:450px;

}
.pages{
display:block;
text-align:center;
padding-top:30px;
padding-bottom:3%;
}
#toggle{
display:none;
}

@media(max-width:700px){

h1{
padding-top:60px;
}
.main{

display:block;
text-align:center;

left:0px;
top:250px;

}
.facility-cod
{
display:block;
top:-130px;
left: -210px;
}
.facility-shipping{ display:block;
top:-450px;
left: -1px;
}
.facility-returns{
display:block;
top:-550px;
right:100px;
}
.popup{
display:block;
text-align:center;

left:50px;
padding-top:40px;

font-size:10px;
}
label{
display:block;
cursor:pointer;
}


.popup{
position: fixed;
 margin-top:-500px;
  display:block;
  text-align:center;
  position: fixed;

  background-color: rgb(0, 0, 0, 0.6);
  z-index: 2;
  opacity: 0;
}
.popup-content{
position: fixed;
 margin-top:-500px;
  display:block;
  text-align:center;
  height: -9000px;  

}
.form-top {
display:block;
position: fixed;
left:450px;
}


.closed{
position: fixed;
top: 80px;
right: 410px;

border-radius: 50%;
cursor: pointer;
}
.header{
display:block;
text-align:center;
padding-top:40px;
font-size:30px;

}


.header div{
border-top:1px solid grey;
padding:10px 0;
}

#toggle:checked + .header{
display:none;

} 
}


.invisible {
	visibility: hidden;
}



.parallax {
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
}
 .img-05{
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
 
}

@media screen and (max-width: 959px) {

  .parallax-bg >  {
  height: 50%;
  padding-left: 0;
}

}
@media screen and (max-width: 480px) {

  .parallax  {
    flex-direction: column;
  }
}

.frame-02{
  box-sizing: border-box;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

@media screen and (max-width: 959px) {

  .frame-02{
  box-sizing: border-box;
  flex-direction: column;
}

}
@media screen and (max-width: 480px) {

  .frame-02{
  box-sizing: border-box;
  flex-direction: column;
}
.section-img-02{
    height: 300px;
  }
}



form{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 40px;
}
.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #541b6b;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { 
  border:2px solid #fffcfc; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Roboto', sans-serif;
  width: 100%;
  background:#3c3c3c;
  border-radius:5px;
  border:0;
  cursor:pointer;
  outline: none;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover 
{ background: #1c2122; }

#map{

  height: 300px; 
  width: 100%; 
  margin-left: 800px;
  margin-top:-600px;
   float: left;
   display: flex; 
 }
 
 #logo,#menu,#about_me,#contact_me{
  cursor: pointer;
  }


  </style>
  <script>
    
ymaps.ready(init);
		
    function init() {
      
      var myMap = new ymaps.Map("map", {
        center: [51.15891389152932, 71.45476532865392],
        zoom: 10
        
      }, { geolocationControlFloat: 'left',
      
    }
    ,{
        searchControlProvider: 'yandex#search'
      });
      
    
      var myPlacemark = new ymaps.Placemark([51.15891389152932, 71.45476532865392], null, {
        preset: 'islands#blueDotIcon'
      });
      myMap.geoObjects.add(myPlacemark);
 
    
       myMap.geoObjects.add(myPlacemark);
    
       myGeoObject = new ymaps.GeoObject({
          
            geometry: {
                
                type: 'Rectangle',
               
                coordinates: [
                    [51.169409506050805, 71.49234567890],
                    [51.129944374882164, 71.42197800565589]
                ]
            },
          
           
        }, {
            
            draggable: true,
            
            fillColor: '#ffff0022',
            
            strokeColor: '#3caa3c88',
           
            strokeWidth: 7
        });
    
      
        myRectangle = new ymaps.Rectangle([
            
            [55.66, 37.60],
            [55.71, 37.69]
        ],  {
           
            fillColor: '#7df9ff33',
          
            fillOpacity: 0.5,
           
            strokeColor: '#0000FF',
          
            strokeOpacity: 0.5,
           
            strokeWidth: 2,
           
            borderRadius: 6
        });
    
        myMap.geoObjects
            .add(myRectangle)
            .add(myGeoObject);
    }
    
    
    
    $(window).keydown(function(e) {
      key = (e.keyCode) ? e.keyCode : e.which;
      $('.key.k' + key).addClass('active');
      console.log(key);
      });
    $(window).keyup(function(e) {
      key = (e.keyCode) ? e.keyCode : e.which;
      $('.key.k' + key).removeClass('active');
    });
    
    var $menu, $body, $pages;
    
    $(document).ready(function() {
      
      $menu = $(".menu a");
      $body = $("body,html");
      $pages = $(".pages > div");
      
      $menu.click(function(){
        
        var index = $menu.index(this);
        var offset = $pages.eq(index).offset().top;
        
        $body.animate({ scrollTop : offset }, 500);  
        
        return false; 
      
      });
      
      $(document).trigger("scroll");
    
    }); 
    
    $(document).scroll(function() {
      
      var index = Math.round($(this).scrollTop()/$(window).height());
    
      $menu.removeClass("active");
      $menu.eq(index).addClass("active");
    
    });
    
    $(".carousel").swipe({
    
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      
      },
      allowPageScroll:"vertical"
      
      });
 
      function redirect(){
        location.href="http://127.0.0.1:5500/Page3/index.html"
      }
      function redirect1(){
        location.href="http://127.0.0.1:5500/Page1/index.html"
      }
    
      function redirect2(){
        location.href="http://127.0.0.1:5500/Page2/index.html"
      }
   
    </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script><script  src="./script.js"></script>

  <a href = "{{route('welcome')}}">WELCOME </a>

 
</body>
</html>
